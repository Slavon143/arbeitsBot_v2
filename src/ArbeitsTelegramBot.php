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
    protected $settingArray;
    protected $db;
    protected $language;

    public function __construct()
    {
        $env = new Dotenv();
        $env->load(__DIR__ . '/../.env');

        $this->telegram = new Nutgram($_ENV['TELEGRAM_BOT_TOKEN']);
        $this->db = new ActionHandler(__DIR__ . '/../db/database.db');
        $this->menu = new ArbeitsBotMenu($this->telegram,$this->db);
        $this->settingArray = new SettingsClass();

    }

    public function listen()
    {

        $this->telegram->onMessage(function (Nutgram $bot) {

            $language = $this->db->getLanguageChoices($bot->chatId());
            if (!$language){
                $this->menu->sendLanguageMenu();
            }else{
                $messageText = $bot->message()->text;

                switch ($messageText){
                    case '🏠 ' . $this->settingArray->btnNawTranslate[$language]['startTitle']:
                        $this->db->removeHistoryFile($bot->chatId());
                        $this->menu->startMenu($language);
                        break;
                    case $this->settingArray->arrSettingStartMenuRegion[$language]['title']:
                        $this->menu->showRegion([]);
                        break;
                    case $this->settingArray->arrSettingStartMenuOccupation[$language]['title']:
                        $this->menu->platsbankenShowOccupation([]);
                        break;
                    case '🔙 ' . $this->settingArray->btnNawTranslate[$language]['startBack']:
                        $previousAction = $this->db->getPreviousAction($bot->chatId());
                        $previousAction['message_id'] = $bot->message()->message_id;
                        call_user_func([$this->menu, $previousAction['f']], $previousAction);
                        $this->db->removeLastAction($bot->chatId());
                        break;
                    case '🌐 ' . $this->settingArray->btnNawTranslate[$language]['startLanguage']:
                        $this->menu->sendLanguageMenu();
                        break;
                    default:
                        $this->menu->showResult(['se_t' => $messageText]);
                        break;
                }
            }
        });

        $this->telegram->onCallbackQuery(function (Nutgram $bot){
            $data = $bot->callbackQuery()->data;

            if (isset(Helper::stringToArray($data)['lang'])) {
                $data = Helper::stringToArray($data);
                $this->db->recordLanguageChoice($bot->chatId(),$data['lang']);
                $this->menu->startMenu($data['lang']);
            }

            if (Helper::stringToArray($data)){
                $data = Helper::stringToArray($data);

                $methodName = $data['f'];

                $this->db->addToHistory($bot->chatId(), $data);
                $data['message_id'] = $this->telegram->message()->message_id;
                call_user_func([$this->menu, $methodName], $data);
            }

        });

        while (true) {
            try {
                $this->telegram->run();
            } catch (\GuzzleHttp\Exception\ConnectException $e) {
                // Обработка ошибки соединения
                echo 'Произошла ошибка соединения: ' . $e->getMessage() . PHP_EOL;
                // Можно добавить задержку перед следующей попыткой
                sleep(10); // Например, ждем 10 секунд перед следующей попыткой
            } catch (\Exception $e) {
                // Обработка других исключений, если необходимо
                echo 'Произошла другая ошибка: ' . $e->getMessage() . PHP_EOL;
            }
        }


    }

}
