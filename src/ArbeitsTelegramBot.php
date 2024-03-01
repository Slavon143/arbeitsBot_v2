<?php

namespace src;

use Symfony\Component\Dotenv\Dotenv;
use SergiX44\Nutgram\Nutgram;

class ArbeitsTelegramBot
{
    protected $token;
    protected $update;
    protected $telegram;
    protected $chat_id;
    protected $menu;
    protected $logger;
    protected $settingArray;
    protected $db;
    protected $language;

    public function __construct()
    {
        $env = new Dotenv();
        $env->load(__DIR__ . '/../.env');

        $this->telegram = new Nutgram($_ENV['TELEGRAM_BOT_TOKEN']);
        $this->db = new ActionHandler(__DIR__ . '/../db/database.db');
        $this->menu = new ArbeitsBotMenu($this->telegram, $this->db);
        $this->settingArray = new SettingsClass();
        $this->logger = new Logger(__DIR__ . '/../logs/logfile.txt');
    }

    public function listen()
    {
        $this->telegram->onMessage(function (Nutgram $bot) {
            try {
                $language = $this->db->getLanguageChoices($this->telegram->chatId());
                if (!$language){
                    $this->menu->sendLanguageMenu();
                }else{
                    $messageText = $bot->message()->text;
                    switch ($messageText){
                        case '/start':
                            $this->menu->prewMessage();
                            break;
                        case '🏠 ' . $this->settingArray->btnNawTranslate[$language]['startTitle']:
                            $this->db->removeHistoryFile($bot->chatId());
                            $this->menu->startMenu(['lang'=>$language]);
                            break;
                        case $this->settingArray->arrSettingStartMenuRegion[$language]['title']:
                            $this->menu->showRegion([]);
                            break;
                        case $this->settingArray->arrSettingStartMenuOccupation[$language]['title']:
                            $this->menu->platsbankenShowOccupation([]);
                            break;
                        case '🔙 ' . $this->settingArray->btnNawTranslate[$language]['startBack']:
                            $previousAction = $this->db->getPreviousAction($bot->chatId());
                            if (isset($previousAction['f'])){
                                $previousAction['message_id'] = $bot->message()->message_id;
                                call_user_func([$this->menu, $previousAction['f']], $previousAction);
                                $this->db->removeLastAction($bot->chatId());
                            }
                            break;
                        case '🌐 ' . $this->settingArray->btnNawTranslate[$language]['startLanguage']:
                            $this->menu->sendLanguageMenu();
                            break;
                        case '/help':
                            $this->menu->menuHelp();
                            break;
                        default:
                            $this->menu->showResult(['se_t' => $messageText]);
                            break;
                    }
                }
            }catch (\Exception $e){
                $errorMessage = 'Произошла другая ошибка: ' . $e->getMessage();
                echo $errorMessage . PHP_EOL;
                $this->logger->log($errorMessage);
                $this->menu->sendMeMessage($errorMessage);
            }
        });
        $this->telegram->onCallbackQuery(function (Nutgram $bot) {

            try {
                $data = Helper::stringToArray($bot->callbackQuery()->data);
                $this->db->addToHistory($bot->chatId(), $data);
                if (isset($data['lang'])){
                    $this->db->recordLanguageChoice($bot->chatId(),$data['lang']);
                    $this->menu->nawMenu($data['lang']);
                }
                $methodName = $data['f'];
                $data['message_id'] = $this->telegram->message()->message_id;
                call_user_func([$this->menu, $methodName], $data);
            }catch (\Exception $e){
                $errorMessage = 'Произошла другая ошибка: ' . $e->getMessage();
                echo $errorMessage . PHP_EOL;
                $this->logger->log($errorMessage);
                $this->menu->sendMeMessage($errorMessage);
            }
        });
    }

    public function start()
    {
        $this->telegram->deleteWebhook();
        $this->listen();
        while (true) {
            try {
                $this->telegram->run();
            } catch (\Exception $e) {
                $errorMessage = 'Произошла другая ошибка: ' . $e->getMessage();
                echo $errorMessage . PHP_EOL;
                $this->logger->log($errorMessage);
                $this->menu->sendMeMessage($errorMessage);
                sleep(10);
            }
        }
    }
}
