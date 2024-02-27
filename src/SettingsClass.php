<?php

namespace src;

class SettingsClass
{
    public $arrSettingLanguage = [
        'sv'=>[
            'title' => 'Titel',
            'sourceLinks_0_label'=>'Webbplatsnamn',
            'sourceLinks_0_url'=>'Läs hela annonsen här',
            'btnTranslate'=>'Översätt',
            'description' => 'Beskrivning',
            'publishedDate' => 'Publiceringsdatum',
            'occupation' => 'Yrke',
            'company_name' => 'Företagsnamn',
            'company_streetAddress' => 'Företagets gatuadress',
            'company_postCode' => 'Företagets postnummer',
            'company_city' => 'Företagets stad',
            'company_phoneNumber' => 'Företagets telefonnummer',
            'company_webAddress' => 'Företagets webbadress',
            'company_email' => 'Företagets e-post',
            'company_organisationNumber' => 'Företagets organisationsnummer',
            'conditions' => 'Villkor',
            'salaryDescription' => 'Lönebeskrivning',
            'salaryType' => 'Lönetyp',
            'employmentType' => 'Anställningstyp',
            'duration' => 'Varaktighet',
            'lastApplicationDate' => 'Sista ansökningsdatum',
            'expirationDate' => 'Utgångsdatum',
            'positions' => 'Positioner',
            'ownCar' => 'Egen bil',
            'requiresExperience' => 'Kräver erfarenhet',
            'education_name' => 'Utbildningsnamn',
            'education_required' => 'Utbildning krävs',
            'application_email' => 'Ansöknings-e-post',
            'application_webAddress' => 'Ansökningswebbadress',
            'application_other' => 'Annat för ansökan',
            'application_reference' => 'Ansökningsreferens',
            'application_information' => 'Ansökningsinformation',
            'workplace_name' => 'Arbetsplatsens namn',
            'workplace_street' => 'Arbetsplatsens gata',
            'workplace_postCode' => 'Arbetsplatsens postnummer',
            'workplace_city' => 'Arbetsplatsens stad',
            'workplace_unspecifiedWorkplace' => 'Ej specificerad arbetsplats',
            'workplace_region' => 'Arbetsplatsens region',
            'workplace_municipality' => 'Arbetsplatsens kommun',
            'workplace_showMap' => 'Visa karta',
            'languages_0_name' => 'Språkets namn',
            'languages_0_required' => 'Språk krävs',
            'workExperiences_0_name' => 'Arbetserfarenhetens namn',
            'workExperiences_0_required' => 'Arbetserfarenhet krävs',
            'contacts_0_name' => 'Kontaktpersonens namn',
            'contacts_0_surname' => 'Kontaktpersonens efternamn',
            'contacts_0_position' => 'Kontaktpersonens befattning',
            'contacts_0_mobileNumber' => 'Kontaktpersonens mobilnummer',
            'contacts_0_phoneNumber' => 'Kontaktpersonens telefonnummer',
            'contacts_0_email' => 'Kontaktpersonens e-post',
            'contacts_0_union' => 'Kontaktpersonens fackförening',
            'contacts_0_description' => 'Kontaktpersonens beskrivning',
            'contacts_1_name' => 'Kontaktpersonens namn',
            'contacts_1_surname' => 'Kontaktpersonens efternamn',
            'contacts_1_position' => 'Kontaktpersonens befattning',
            'contacts_1_mobileNumber' => 'Kontaktpersonens mobilnummer',
            'contacts_1_phoneNumber' => 'Kontaktpersonens telefonnummer',
            'contacts_1_email' => 'Kontaktpersonens e-post',
            'contacts_1_union' => 'Kontaktpersonens fackförening',
            'contacts_1_description' => 'Kontaktpersonens beskrivning',
            'skills_0_name' => 'Färdighetens namn',
            'skills_0_required' => 'Färdighet krävs',
            'skills_1_name' => 'Färdighetens namn',
            'skills_1_required' => 'Färdighet krävs',
            'skills_2_name' => 'Färdighetens namn',
            'skills_2_required' => 'Färdighet krävs',
        ],

    ];
    public $arrSettingStartMenuRegion = [
        'uk' => [
            'title' => 'Виберіть регіон:'
        ],
        'ru'=>[
            'title'=>'Выберите регион:'
        ],
        'en'=>[
            'title'=>'Select a region:'
        ]
    ];
    public $arrSettingStartMenuSpecialist = [
        'uk' => [
            'title' => 'Виберіть спеціальність:',
            'buttonTranslate'=>'Перекласти:'
        ],
        'ru'=>[
            'title'=>'Выберите специальность:',
            'buttonTranslate'=>'Перевести:'
        ],
        'en'=>[
            'title'=>'Select specialty:',
            'buttonTranslate'=>'Translate:'
        ]
    ];

    public $btnTranslate = [
        'uk' =>[
            'trans' => 'Перекласти'
        ],
        'ru' =>[
            'trans' => 'Перевести'
        ],
        'en' =>[
            'trans' => 'Translate'
        ],
    ];

    public $btnHide = [
        'uk' =>[
            'Hide' => 'Приховати'
        ],
        'ru' =>[
            'Hide' => 'Скрыть'
        ],
        'en' =>[
            'Hide' => 'Hide'
        ],
    ];
    public $arrSettingbuildMenuFromAds = [
        'uk' => [
            'publishedDate' => 'Дата публікації:',
            'occupation' => 'Професія:',
            'workplace' => 'Місце роботи:',
            'workplaceName' => 'Назва місця роботи:',
            'positions' => 'Кількість позицій:',
            'details' => 'Детальніше',
            'Hide' => 'Приховати',
        ],
        'ru'=>[
            'publishedDate' => 'Дата публикации:',
            'occupation' => 'Профессия:',
            'workplace' => 'Место работы:',
            'workplaceName' => 'Название места работы:',
            'positions' => 'Количество позиций:',
            'details' => 'Подробнее',
            'Hide' => 'Скрыть',
        ],
        'en'=>[
            'publishedDate' => 'Publication date:',
            'occupation' => 'Profession:',
            'workplace' => 'Place of work:',
            'workplaceName' => 'Job name:',
            'positions' => 'Number of positions:',
            'details' => 'More details',
            'Hide' => 'Hide',
        ],
        'sv'=>[
            'publishedDate' => 'Publiceringsdatum:',
            'occupation' => 'Yrke:',
            'workplace' => 'Arbetsplats:',
            'workplaceName' => 'Jobbnamn:',
            'positions' => 'Antal positioner:',
            'details' => 'Mer detaljer',
            'Hide' => 'Dölj',
        ]
    ];
    public $arrSettingStartMenuResult = [
        'uk' => [
            'notFount' => 'На жаль, оголошень не знайдено.',
            'btnNavigate' => 'Виберіть дію:',
        ],
        'ru'=>[
            'notFount'=>'К сожалению, объявлений не найдено.',
            'btnNavigate' =>'Выберите действие:'
        ],
        'en'=>[
            'notFount'=>'Sorry, no advertisements found.',
            'btnNavigate'=>'Choose an action:',
        ]
    ];

    public $arrSuggestSetting = [
        'uk' => [
            'suggestMessage' => '
<b>Ласкаво просимо до допомоги бота з пошуку роботи!</b>

Цей бот інтегрований з API сайту Arbetsförmedlingen (https://arbetsformedlingen.se/) та надає зручний 
спосіб пошуку вакансій на трьох мовах: російській, українській та англійській.

1. <b>Вибір мови:</b>
   - Розпочніть з вибору мови, на якій ви хочете використовувати бота.
   - Використовуйте кнопку "Вибрати мову" у меню.

2. <b>Пошук вакансій:</b>
   - Ви можете шукати вакансії за регіонами, містами, спеціальностями або просто відправивши повідомлення з вашим запитом.
   - Використовуйте кнопки для вибору регіону, міста та спеціальності.

3. <b>Автоматичне розпізнавання мови:</b>
   - Бот автоматично визначить мову введеного вами запиту і виведе результати на екран.

4. <b>Розробник:</b>
   - Якщо у вас є питання, пропозиції чи проблеми, звертайтеся до розробника бота.
   - Ім"я розробника: Vyacheslav Stovpyaga
   - Контакт: vaceslavstovpaga@gmail.com

5. <b>Відправлення пропозицій:</b>
   - Ми цінуємо вашу думку! Якщо у вас є пропозиції з поліпшення бота, відправте їх розробнику.
   - Використовуйте команду /suggest [ваша пропозиція] для відправки пропозиції.

6. <b>Довідкова інформація:</b>
   - Для отримання додаткової інформації щодо команд використовуйте /help у будь-який момент.

Дякуємо за використання нашого бота пошуку роботи! Бажаємо успіху у пошуку вашої ідеальної вакансії!
'
        ],
        'ru' => [
            'suggestMessage' => '
<b>Добро пожаловать в помощника по поиску работы!</b>

Этот бот интегрирован с API сайта Arbetsförmedlingen (https://arbetsformedlingen.se/) и предоставляет удобный
способ поиска вакансий на трех языках: русском, украинском и английском.

1. <b>Выбор языка:</b>
   - Начните с выбора языка, на котором вы хотите использовать бота.
   - Используйте кнопку "Выбрать язык" в меню.

2. <b>Поиск вакансий:</b>
   - Вы можете искать вакансии по регионам, городам, специальностям или просто отправив сообщение с вашим запросом.
   - Используйте кнопки для выбора региона, города и специальности.

3. <b>Автоматическое распознавание языка:</b>
   - Бот автоматически определит язык вашего запроса и выведет результаты на экран.

4. <b>Разработчик:</b>
   - Если у вас есть вопросы, предложения или проблемы, обращайтесь к разработчику бота.
   - Имя разработчика: Vyacheslav Stovpyaga
   - Контакт: vaceslavstovpaga@gmail.com

5. <b>Отправка предложений:</b>
   - Мы ценим ваше мнение! Если у вас есть предложения по улучшению бота, отправьте их разработчику.
   - Используйте команду /suggest [ваше предложение] для отправки предложения.

6. <b>Дополнительная информация:</b>
   - Для получения дополнительной информации о командах используйте /help в любой момент.

Благодарим за использование нашего бота поиска работы! Желаем удачи в поиске вашей идеальной вакансии!
'

        ],
        'en' => [
            'suggestMessage' => '
<b>Welcome to the job search bot!</b>

This bot is integrated with the Arbetsförmedlingen website API (https://arbetsformedlingen.se/) and provides a convenient
way to search for vacancies in three languages: Russian, Ukrainian, and English.

1. <b>Language selection:</b>
   - Start with choosing the language you want to use the bot in.
   - Use the "Select language" button in the menu.

2. <b>Job search:</b>
   - You can search for vacancies by regions, cities, specialties, or simply by sending a message with your query.
   - Use buttons to select the region, city, and specialty.

3. <b>Automatic language recognition:</b>
   - The bot will automatically detect the language of your query and display the results on the screen.

4. <b>Developer:</b>
   - If you have any questions, suggestions, or issues, contact the bot developer.
   - Developer\'s name: Vyacheslav Stovpyaga
   - Contact: vaceslavstovpaga@gmail.com

5. <b>Sending suggestions:</b>
   - We value your feedback! If you have suggestions for improving the bot, send them to the developer.
   - Use the command /suggest [your suggestion] to submit a suggestion.

6. <b>Additional information:</b>
   - For additional information about commands, use /help at any time.

Thank you for using our job search bot! We wish you success in finding your perfect job!
'

        ],
    ];
    public $arrSettingStartMenu = [
        'uk'=>[
            'title'=>'Зробіть вибір ресурсів:',
            'platsbankenButton' => 'Банк локацій:',
            'webbplatserButton'=>'Зовнішні сайти:',
            'btnNavigatePage'=>'Сторінка',
        ],
        'ru'=>[
            'title'=>'Сделайте выбор ресурсов:',
            'platsbankenButton' => 'Банк локаций:',
            'webbplatserButton'=>'Внешние сайты:',
            'btnNavigatePage'=>'Страница',
        ],
        'en' =>[
            'title'=>'Make a selection of resources:',
            'platsbankenButton' => 'Location bank',
            'webbplatserButton'=>'External sites:',
            'btnNavigatePage'=>'Page',
        ]
    ];
    public $arrSettingStartMenuOccupation = [
        'uk' => [
            'title' => 'Виберіть напрямок:',
            'buttonTranslate'=>'Перекласти:'
        ],
        'ru'=>[
            'title'=>'Выберите направление:',
            'buttonTranslate'=>'Перевести:'
        ],
        'en'=>[
            'title'=>'Select direction:',
            'buttonTranslate'=>'Translate:'
        ]
    ];
    public $arrSettingStartMenuCity = [
        'uk' => [
            'title' => 'Виберіть місто:',
            'btnShowAll' => 'Обрати все'
        ],
        'ru'=>[
            'title'=>'Выберите город:',
            'btnShowAll' => 'Выбрать все'
        ],
        'en'=>[
            'title'=>'Select city:',
            'btnShowAll' => 'Choose all'
        ]
    ];
    public $btnSendLanguageMenu = [
        'uk'=>[
            'chooseLanguage'=>'Виберіть мову'
        ],
        'ru'=>[
            'chooseLanguage' => 'Выберите язык'
        ],
        'en'=>[
            'chooseLanguage'=>'Choose language'
        ],
    ];

    public $btnNawTranslate = [
        'uk'=>[
            'startTitle'=>'Головна',
            'startBack'=>'Назад',
            'startLanguage'=>'Мова',
        ],
        'ru'=>[
            'startTitle' => 'Главная',
            'startBack' => 'Назад',
            'startLanguage' => 'Язык',

        ],
        'en'=>[
            'startTitle'=>'Home',
            'startBack'=>'Back',
            'startLanguage'=>'Language',
        ],
    ];
}