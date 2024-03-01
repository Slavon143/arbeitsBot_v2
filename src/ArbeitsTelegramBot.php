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

    public function __construct()
    {
        $env = new Dotenv();
        $env->load(__DIR__ . '/../.env');

        $this->telegram = new Nutgram($_ENV['TELEGRAM_BOT_TOKEN']);
        $this->db = new ActionHandler(__DIR__ . '/../db/database.db');
        $this->menu = new ArbeitsBotMenu($this->telegram,$this->db);
        $this->settingArray = new SettingsClass();
        $this->logger = new Logger(__DIR__ . '/../logs/logfile.txt');
        $this->telegram->deleteWebhook();
    }

    public function listen()
    {
        $this->telegram->onMessage(function (Nutgram $bot) {
            try {
                $language = $this->db->getLanguageChoices($bot->chatId());
                if (!$language){
                    $this->menu->sendLanguageMenu();
                }else{
                    $messageText = $bot->message()->text;
                    if (strpos($messageText, '/suggest') === 0) {
                        $this->menu->sendMeMessage($messageText);
                    }else{
                        switch ($messageText){
                            case '/start':
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
                }
            }catch (\Exception $e){
                $this->logger->log('Error in onMessage: ' . $e->getMessage());
            }
        });
        $this->telegram->onCallbackQuery(function (Nutgram $bot){
            try {
                $data = $bot->callbackQuery()->data;
                if (isset(Helper::stringToArray($data)['lang'])) {
                    $data = Helper::stringToArray($data);
                    $this->db->addToHistory($bot->chatId(), $data);
                    $this->db->recordLanguageChoice($bot->chatId(),$data['lang']);
                    $this->menu->startMenu(['lang'=>$data['lang']]);
                }
                if (Helper::stringToArray($data)){
                    $data = Helper::stringToArray($data);
                    $methodName = $data['f'];
                    $this->db->addToHistory($bot->chatId(), $data);
                    $data['message_id'] = $this->telegram->message()->message_id;
                    call_user_func([$this->menu, $methodName], $data);
                }
            }catch (\Exception $e){
                $this->logger->log('Error in onMessage: ' . $e->getMessage());
            }
        });
    }

    public function start(){
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
                $this->menu->startMenu(['lang' => 'ru']);
                sleep(10);
            }
        }
    }
}
