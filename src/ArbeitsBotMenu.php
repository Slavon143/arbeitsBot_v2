<?php

namespace src;

use SergiX44\Nutgram\Nutgram;

class ArbeitsBotMenu
{
    public $apiArbeits;
    public $apiTranslate;
    public $language;
    public $telegram;
    public $db;
    public $chat_id;
    public $settingArray;

    public function __construct(Nutgram $telegram, ActionHandler $db)
    {
        $this->apiArbeits = new ApiArbetsformedlingen();
        $this->apiTranslate = new TranslateApi();
        $this->settingArray = new SettingsClass();
        $this->db = $db;
        $this->telegram = $telegram;
        $this->language = $this->db->getLanguageChoices($this->telegram->chatId());
    }

    public function startMenu($lang)
    {
        if ($lang['lang']) {
            $tramslateText = $this->settingArray->arrSettingStartMenu[$lang['lang']];
        } else {
            $tramslateText = $this->settingArray->arrSettingStartMenu[$this->language];
        }

        $this->telegram->sendMessage('<b>' . $tramslateText['title'] . '</b>', [

            'reply_markup' => json_encode([
                'inline_keyboard' => [
                    [
                        ['text' => $tramslateText['platsbankenButton'] . ' ➡️', 'callback_data' => Helper::arrayToString(['f' => 'showRegion', 'resource' => 'pb'])],
                        ['text' => $tramslateText['webbplatserButton'] . ' ➡️', 'callback_data' => Helper::arrayToString(['f' => 'showRegion', 'resource' => 'joblinks'])],
                    ]
                ],
                'resize_keyboard' => true,
                'one_time_keyboard' => true
            ]),
            'parse_mode' => 'HTML'
        ]);
    }

    public function showRegion($param)
    {
        if (isset($param['resource'])) {
            $this->db->recordResourceChoice($this->telegram->chatId(), $param['resource']);
        }
        $language = $this->db->getLanguageChoices($this->telegram->chatId());
        $tramslateText = $this->settingArray->arrSettingStartMenuRegion[$language];
        $getLocation = $this->apiArbeits->getLocation();

        $buttons = [];

        $columns = 2;
        $current_column = 0;
        $current_row = [];

        foreach ($getLocation as $item) {
            $id = $item['id'];
            $name = $item['name'];
            $current_row[] = ['text' => $name, 'callback_data' => Helper::arrayToString(['f' => 'showCity', 'r_id' => $id])];
            $current_column++;
            if ($current_column >= $columns) {
                $buttons[] = $current_row;
                $current_row = [];
                $current_column = 0;
            }
        }
        if (!empty($current_row)) {
            $buttons[] = $current_row;
        }
        $this->telegram->sendMessage('<b>' . $tramslateText['title'] . '</b>', [
            'reply_markup' => json_encode([
                'inline_keyboard' => $buttons
            ]),
            'parse_mode' => 'HTML'
        ]);
    }

    public function showCity($param)
    {
        $language = $this->db->getLanguageChoices($this->telegram->chatId());
        $region_id = $param['r_id'];
        $tramslateText = $this->settingArray->arrSettingStartMenuCity[$language];
        $getLocation = $this->apiArbeits->getLocation();
        $buttons = [];
        // Разбиваем кнопки на два ряда
        $columns = 3;
        $current_column = 0;
        $current_row = [];
        foreach ($getLocation as $item) {
            if ($item['id'] == $region_id) {
                foreach ($item['items'] as $city) {
                    $id = $city['id'];
                    $name = $city['name'];
                    // Добавляем кнопку в текущий ряд
                    $current_row[] = ['text' => $name, 'callback_data' => Helper::arrayToString(['f' => 'platsbankenShowOccupation', 'c_id' => $id])];
                    $current_column++;
                    if ($current_column >= $columns) {
                        $buttons[] = $current_row;
                        $current_row = [];
                        $current_column = 0;
                    }
                }
            }
        }
        if (!empty($current_row)) {
            $buttons[] = $current_row;
        }
        $buttons[] = [['text' => $this->settingArray->arrSettingStartMenuCity[$language]['btnShowAll'], 'callback_data' => Helper::arrayToString(['f' => 'platsbankenShowOccupation', 'r_id' => $region_id])]];
        $this->telegram->sendMessage('<b>' . $tramslateText['title'] . '</b>', [
            'reply_markup' => json_encode([
                'inline_keyboard' => $buttons
            ]),
            'parse_mode' => 'HTML'
        ]);
    }

    public function platsbankenShowOccupation($param)
    {
        $language = $this->db->getLanguageChoices($this->telegram->chatId());
        $location = [];
        if (isset($param['r_id'])) {
            $location['r_id'] = $param['r_id'];
        } elseif (isset($param['c_id'])) {
            $location['c_id'] = $param['c_id'];
        }
        if (isset($param['trans'])) {
            $translate = $param['trans'];
        } else {
            $translate = false;
        }

        $tramslateText = $this->settingArray->arrSettingStartMenuOccupation[$language];

        $occupation = $this->apiArbeits->getOccupation();
        if (isset($param['trans'])) {
            $translateApi = new TranslateApi();
            $occupation = Helper::translateData($occupation, $translateApi, $param['trans'], false);
        }
        $buttons = [];

        // Разбиваем кнопки на два ряда
        $columns = 2;
        $current_column = 0;
        $current_row = [];

        foreach ($occupation as $item) {
            $id = $item['id'];
            $name = $item['name'];

            // Добавляем кнопку в текущий ряд
            $current_row[] = ['text' => $name, 'callback_data' => Helper::arrayToString(['f' => 'showSpecialist', 'ok_id' => $id] + $location)];

            $current_column++;
            if ($current_column >= $columns) {
                $buttons[] = $current_row;
                $current_row = [];
                $current_column = 0;
            }
        }

        // Если остался неполный ряд, добавляем его в массив кнопок
        if (!empty($current_row)) {
            $buttons[] = $current_row;
        }
        if (!$translate) {
            $flag_unicode = Helper::getFlag($language);
            $buttons[] = [[
                'text' => $flag_unicode . ' ' . $tramslateText['buttonTranslate'],
                'callback_data' => Helper::arrayToString(['f' => 'platsbankenShowOccupation', 'trans' => $language] + $location)

            ]];
        }
        // Отправляем сообщение с кнопками
        $this->telegram->sendMessage('<b>' . $tramslateText['title'] . '</b>', [

            'reply_markup' => json_encode([
                'inline_keyboard' => $buttons
            ]),
            'parse_mode' => 'HTML'
        ]);
    }

    public function showSpecialist($param)
    {
        $language = $this->db->getLanguageChoices($this->telegram->chatId());
        $occupation_id = $param['ok_id'];

        $location = [];
        if (isset($param['r_id'])) {
            $location['r_id'] = $param['r_id'];
        } elseif (isset($param['c_id'])) {
            $location['c_id'] = $param['c_id'];
        }

        $tramslateText = $this->settingArray->arrSettingStartMenuSpecialist[$language];

        $occupation = $this->apiArbeits->getOccupation();

        $buttons = [];
        $columns = 2;
        $current_column = 0;
        $current_row = [];

        if (isset($param['trans'])) {
            $occupation = Helper::translateData($occupation, $this->apiTranslate, $param['trans'], $occupation_id);
            foreach ($occupation as $item) {
                $id = $item['id'];
                $name = $item['name'];

                // Добавляем кнопку в текущий ряд
                $row[] = ['text' => $name, 'callback_data' => Helper::arrayToString(['f' => 'showResult', 'spec_id' => $id] + $location)];

                // Если текущий ряд заполнен, добавляем его в массив кнопок и создаем новый ряд
                if (count($row) >= $columns) {
                    $buttons[] = $row;
                    $row = [];
                }
            }
            $buttons[] = [['text' => $this->settingArray->arrSettingStartMenuCity[$language]['btnShowAll'], 'callback_data' => Helper::arrayToString(['f' => 'showResult', 'spec_all' => $occupation_id] + $location)]];
        } else {
            foreach ($occupation as $item) {
                if ($item['id'] == $occupation_id) {
                    foreach ($item['items'] as $profession) {
                        $id = $profession['id'];
                        $name = $profession['name'];

                        // Добавляем кнопку в текущую строку
                        $current_row[] = ['text' => $name, 'callback_data' => Helper::arrayToString(['f' => 'showResult', 'spec_id' => $id] + $location)];

                        // Увеличиваем счетчик текущей колонки
                        $current_column++;

                        // Если текущая колонка достигла максимальной ширины, добавляем текущую строку в массив кнопок и создаем новую строку
                        if ($current_column >= $columns) {
                            $buttons[] = $current_row;
                            $current_row = [];
                            $current_column = 0;
                        }
                    }
                    $buttons[] = [['text' => $this->settingArray->arrSettingStartMenuCity[$language]['btnShowAll'], 'callback_data' => Helper::arrayToString(['f' => 'showResult', 'spec_all' => $occupation_id] + $location)]];
                }
            }
            $flag_unicode = Helper::getFlag($language);
            $buttons[] = [[
                'text' => $flag_unicode . ' ' . $tramslateText['buttonTranslate'],
                'callback_data' => Helper::arrayToString(['f' => 'showSpecialist', 'ok_id' => $occupation_id, 'trans' => $language] + $location)
            ]];
        }
        if (!empty($current_row)) {
            $buttons[] = $current_row;
        }
        $this->telegram->sendMessage('<b>' . $tramslateText['title'] . '</b>', [

            'reply_markup' => json_encode([
                'inline_keyboard' => $buttons
            ]),
            'parse_mode' => 'HTML'
        ]);
    }


    public function showResult($param)
    {
        $language = $this->db->getLanguageChoices($this->telegram->chatId());
        $location = [];
        if (isset($param['r_id'])) {
            $location['r_id'] = $param['r_id'];
        }
        if (isset($param['c_id'])) {
            $location['c_id'] = $param['c_id'];
        }
        if (isset($param['spec_id'])) {
            $location['spec_id'] = $param['spec_id'];
        }
        if (isset($param['spec_all'])) {
            $location['spec_all'] = $param['spec_all'];
        }
        if (isset($param['se_t'])) {
            $param['se_t'] = $this->apiTranslate->translate($param['se_t'], '', true);
            $param['se_t'] = strip_tags($param['se_t']);
            $location['se_t'] = $param['se_t'];
        }

        $resource = $this->db->getResourceChoices($this->telegram->chatId());

        if (!$resource) {
            $resource = 'pb';
        }

        $tramslateText = $this->settingArray->arrSettingStartMenuResult[$language];

        if (isset($param['st_index'])) {
            $startIndex = $param['st_index'];
        } else {
            $startIndex = 0;
        }

        $getAll = $this->apiArbeits->showAll($startIndex, $resource, $param);

        $numberOfAds = $getAll['numberOfAds'];

        if ($numberOfAds == 0) {
            $this->telegram->sendMessage($tramslateText['notFount'], [
            ]);
            return; // Не выводим клавиатуру, так как нет результатов
        }

        $this->buildMenuFromAds($getAll);

        $totalPages = ceil($numberOfAds / 5);

        if ($totalPages > 1) {
            // Создаем кнопки
            $inlineKeyboard = [];

            $left_button = ['text' => '←', 'callback_data' => Helper::arrayToString(['f' => 'showResult', 'st_index' => $startIndex - 5] + $location)];
            $right_button = ['text' => '→', 'callback_data' => Helper::arrayToString(['f' => 'showResult', 'st_index' => $startIndex + 5] + $location)];

            // Проверяем, нужно ли показывать кнопку "Назад"
            if ($startIndex > 0) {
                $inlineKeyboard[] = $left_button;
            }

            // Добавляем кнопку со страницами
            $currentPage = $startIndex / 5 + 1; // Рассчитываем номер текущей страницы
            $page_button = ['text' => $currentPage . '/' . $totalPages, 'callback_data' => 'None'];
            $inlineKeyboard[] = $page_button;

            // Проверяем, нужно ли показывать кнопку "Вперед"
            if ($startIndex + 5 < $numberOfAds) {
                $inlineKeyboard[] = $right_button;
            }

            $this->telegram->sendMessage($this->settingArray->arrSettingStartMenu[$language]['btnNavigatePage'], [

                'reply_markup' => json_encode(['inline_keyboard' => [$inlineKeyboard]])
            ]);
        }
    }

    public function buildMenuFromAds($ads)
    {
        $tramslateText = $this->settingArray->arrSettingbuildMenuFromAds['sv'];
        $language = $this->db->getLanguageChoices($this->telegram->chatId());
        foreach ($ads['ads'] as $ad) {

            $title = $ad['title'];
            $publishedDate = $ad['publishedDate'];
            $occupation = $ad['occupation'];
            $workplace = $ad['workplace'];
            $workplaceName = $ad['workplaceName'];
            $positions = $ad['positions'];

            $additionalInfo =
                "<b>" . $tramslateText['publishedDate'] . "</b> " . $publishedDate . "\n" .
                "<b>" . $tramslateText['occupation'] . "</b> " . $occupation . "\n" .
                "<b>" . $tramslateText['workplace'] . "</b> " . $workplace . "\n" .
                "<b>" . $tramslateText['workplaceName'] . "</b> " . $workplaceName . "\n" .
                "<b>" . $tramslateText['positions'] . "</b> " . $positions;

            // Создаем текст сообщения
            $messageText = "<b>$title</b>\n$additionalInfo";

            $flag_unicode = Helper::getFlag($language);

            $menu = [
                [
                    'text' => '⏬ ' . $this->settingArray->arrSettingbuildMenuFromAds[$language]['details'],
                    'callback_data' => Helper::arrayToString(['f' => 'showOne', 'detail_id' => $ad['id']]),
                ],
                [
                    'text' => $this->settingArray->arrSettingbuildMenuFromAds[$language]['Hide'],
                    'callback_data' => Helper::arrayToString(['f' => 'delMessage']),
                ],
                ['text' => $flag_unicode . $this->settingArray->btnTranslate[$language]['trans'], 'callback_data' => Helper::arrayToString(['f' => 'showOne', 'detail_id' => $ad['id'], 'trans' => $language])]
            ];

            // Отправляем сообщение с полной информацией об объявлении и кнопкой "Подробнее" и "Скрыть"
            $this->telegram->sendMessage($messageText, [
                'reply_markup' => json_encode(['inline_keyboard' => [$menu]]),
                'parse_mode' => 'HTML',
            ]);
        }
    }

    public function delMessage()
    {
        $this->telegram->message()->delete();
    }

    public function showOne($param)
    {
        $resource = $this->db->getResourceChoices($this->telegram->chatId());
        $language = $this->db->getLanguageChoices($this->telegram->chatId());
        $key_board = $param['detail_id'];
        $tramslateText = $this->settingArray->arrSettingLanguage['sv'];

        $ad = $this->apiArbeits->getOne($key_board, $resource);

        $str = Helper::processJobData($ad, $tramslateText);

        if (isset($param['trans'])) {
            $translate = $param['trans'];
        } else {
            $translate = false;
        }

        if ($translate) {
            $str = $this->apiTranslate->translate($str, $language, false);
            $str = strip_tags($str);
        }

        $flag_unicode = Helper::getFlag($language);
        $menu = [];
        if (!$translate) {
            $menu[] = [
                ['text' => $flag_unicode . $this->settingArray->btnTranslate[$language]['trans'], 'callback_data' => Helper::arrayToString(['f' => 'showOne', 'detail_id' => $key_board, 'trans' => $language])],
                ['text' => $this->settingArray->btnHide[$language]['Hide'], 'callback_data' => Helper::arrayToString(['f' => 'delMessage'])]
            ];
        } else {
            $menu[] = [
                ['text' => $this->settingArray->btnHide[$language]['Hide'], 'callback_data' => Helper::arrayToString(['f' => 'delMessage'])]
            ];
        }
        $this->telegram->sendMessage($str, [

            'reply_markup' => json_encode(['inline_keyboard' => $menu]),
            'parse_mode' => 'HTML'

        ]);
    }

    function sendLanguageMenu()
    {
        $language = $this->db->getLanguageChoices($this->telegram->chatId());

        $ukrainianFlagUnicode = "🇺🇦";
        $russianFlagUnicode = "🇷🇺";
        $englishFlagUnicode = "🇬🇧";

        if ($language) {
            $chooseLanguage = $this->settingArray->btnSendLanguageMenu[$language]['chooseLanguage'];
        } else {
            $chooseLanguage = $this->settingArray->btnSendLanguageMenu['ru']['chooseLanguage'];
        }

        $this->telegram->sendMessage('<b>' . $chooseLanguage . '</b>:', [
            'reply_markup' => json_encode([
                'inline_keyboard' => [
                    [
                        ['text' => $ukrainianFlagUnicode . ' Українська', 'callback_data' => Helper::arrayToString(['f' => 'startMenu', 'lang' => 'uk'])],
                        ['text' => $russianFlagUnicode . ' Русский', 'callback_data' => Helper::arrayToString(['f' => 'startMenu', 'lang' => 'ru'])],
                        ['text' => $englishFlagUnicode . ' English', 'callback_data' => Helper::arrayToString(['f' => 'startMenu', 'lang' => 'en'])]
                    ]
                ]
            ]),
            'parse_mode' => 'HTML'
        ]);
    }

    public function prewMessage(){
        $language = $this->db->getLanguageChoices($this->telegram->chatId());
        $this->telegram->sendMessage($this->settingArray->arrStartPrewiev[$language]['prew'],['parse_mode' => 'HTML']);
    }

    public function nawMenu($lang)
    {
        if ($lang) {
            $language = $lang;
        } else {
            $language = $this->db->getLanguageChoices($this->telegram->chatId());
        }

        $this->telegram->sendMessage('...', [
            'reply_markup' => json_encode([
                'keyboard' => [
                    [
                        ['text' => $this->settingArray->arrSettingStartMenuRegion[$language]['title']],
                        ['text' => '🏠 ' . $this->settingArray->btnNawTranslate[$language]['startTitle']],
                        ['text' => $this->settingArray->arrSettingStartMenuOccupation[$language]['title']],
                    ],
                    [
                        ['text' => '🔙 ' . $this->settingArray->btnNawTranslate[$language]['startBack']],
                        ['text' => '🌐 ' . $this->settingArray->btnNawTranslate[$language]['startLanguage']],

                    ],
                ],
                'resize_keyboard' => true,
                'one_time_keyboard' => false
            ]),
            'parse_mode' => 'HTML'
        ]);
    }

    public function menuHelp()
    {
        $language = $this->db->getLanguageChoices($this->telegram->chatId());
        $this->telegram->sendMessage('',[
            'text' => $this->settingArray->arrSuggestSetting[$language]['suggestMessage'],
            'parse_mode' => 'HTML',
        ]);
    }

    public function sendMeMessage($messageText)
    {
        $this->telegram->sendMessage($messageText,['chat_id' => $_ENV['MY_CHAT_ID']]);
    }
}