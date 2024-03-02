<?php

namespace src;

class SettingsClass
{
    public $arrSettingLanguage = [
        'sv' => array (
            'title' => 'Titel',
            'source links 0 label' => 'Webbplatsnamn',
            'source links 0 url' => 'Läs hela annonsen här',
            'btn translate' => 'Översätt',
            'description' => 'Beskrivning',
            'published date' => 'Publiceringsdatum',
            'occupation' => 'Yrke',
            'company name' => 'Företagsnamn',
            'company street address' => 'Företagets gatuadress',
            'company post code' => 'Företagets postnummer',
            'company city' => 'Företagets stad',
            'company phone number' => 'Företagets telefonnummer',
            'company web address' => 'Företagets webbadress',
            'company email' => 'Företagets e-post',
            'company organisation number' => 'Företagets organisationsnummer',
            'conditions' => 'Villkor',
            'salary description' => 'Lönebeskrivning',
            'salary type' => 'Lönetyp',
            'employment type' => 'Anställningstyp',
            'duration' => 'Varaktighet',
            'last application date' => 'Sista ansökningsdatum',
            'expiration date' => 'Utgångsdatum',
            'positions' => 'Positioner',
            'own car' => 'Egen bil',
            'requires experience' => 'Kräver erfarenhet',
            'education name' => 'Utbildningsnamn',
            'education required' => 'Utbildning krävs',
            'application email' => 'Ansöknings-e-post',
            'application web address' => 'Ansökningswebbadress',
            'application other' => 'Annat för ansökan',
            'application reference' => 'Ansökningsreferens',
            'application information' => 'Ansökningsinformation',
            'workplace name' => 'Arbetsplatsens namn',
            'workplace street' => 'Arbetsplatsens gata',
            'workplace post code' => 'Arbetsplatsens postnummer',
            'workplace city' => 'Arbetsplatsens stad',
            'workplace unspecified workplace' => 'Ej specificerad arbetsplats',
            'workplace region' => 'Arbetsplatsens region',
            'workplace municipality' => 'Arbetsplatsens kommun',
            'workplace show map' => 'Visa karta',
            'languages 0 name' => 'Språkets namn',
            'languages 0 required' => 'Språk krävs',
            'work experiences 0 name' => 'Arbetserfarenhetens namn',
            'work experiences 0 required' => 'Arbetserfarenhet krävs',
            'contacts 0 name' => 'Kontaktpersonens namn',
            'contacts 0 surname' => 'Kontaktpersonens efternamn',
            'contacts 0 position' => 'Kontaktpersonens befattning',
            'contacts 0 mobile number' => 'Kontaktpersonens mobilnummer',
            'contacts 0 phone number' => 'Kontaktpersonens telefonnummer',
            'contacts 0 email' => 'Kontaktpersonens e-post',
            'contacts 0 union' => 'Kontaktpersonens fackförening',
            'contacts 0 description' => 'Kontaktpersonens beskrivning',
            'contacts 1 name' => 'Kontaktpersonens namn',
            'contacts 1 surname' => 'Kontaktpersonens efternamn',
            'contacts 1 position' => 'Kontaktpersonens befattning',
            'contacts 1 mobile number' => 'Kontaktpersonens mobilnummer',
            'contacts 1 phone number' => 'Kontaktpersonens telefonnummer',
            'contacts 1 email' => 'Kontaktpersonens e-post',
            'contacts 1 union' => 'Kontaktpersonens fackförening',
            'contacts 1 description' => 'Kontaktpersonens beskrivning',
            'skills 0 name' => 'Färdighetens namn',
            'skills 0 required' => 'Färdighet krävs',
            'skills 1 name' => 'Färdighetens namn',
            'skills 1 required' => 'Färdighet krävs',
            'skills 2 name' => 'Färdighetens namn',
            'skills 2 required' => 'Färdighet krävs',
        ),
        'ru' => array (
            'title' => 'Заголовок',
            'source links 0 label' => 'Название веб-сайта',
            'source links 0 url' => 'Читать полное объявление здесь',
            'btn translate' => 'Перевести',
            'description' => 'Описание',
            'published date' => 'Дата публикации',
            'occupation' => 'Профессия',
            'company name' => 'Название компании',
            'company street address' => 'Улица компании',
            'company post code' => 'Почтовый индекс компании',
            'company city' => 'Город компании',
            'company phone number' => 'Телефон компании',
            'company web address' => 'Веб-адрес компании',
            'company email' => 'Электронная почта компании',
            'company organisation number' => 'Организационный номер компании',
            'conditions' => 'Условия',
            'salary description' => 'Описание зарплаты',
            'salary type' => 'Тип зарплаты',
            'employment type' => 'Тип занятости',
            'duration' => 'Длительность',
            'last application date' => 'Последняя дата подачи заявки',
            'expiration date' => 'Дата истечения срока действия',
            'positions' => 'Позиции',
            'own car' => 'Собственный автомобиль',
            'requires experience' => 'Требуется опыт',
            'education name' => 'Название образования',
            'education required' => 'Требуемое образование',
            'application email' => 'Электронная почта для заявок',
            'application web address' => 'Веб-адрес для заявок',
            'application other' => 'Другое для заявки',
            'application reference' => 'Ссылка для заявки',
            'application information' => 'Информация для заявки',
            'workplace name' => 'Название места работы',
            'workplace street' => 'Улица места работы',
            'workplace post code' => 'Почтовый индекс места работы',
            'workplace city' => 'Город места работы',
            'workplace unspecified workplace' => 'Неуказанное место работы',
            'workplace region' => 'Регион места работы',
            'workplace municipality' => 'Муниципалитет места работы',
            'workplace show map' => 'Показать карту',
            'languages 0 name' => 'Название языка',
            'languages 0 required' => 'Требуется язык',
            'work experiences 0 name' => 'Название опыта работы',
            'work experiences 0 required' => 'Требуется опыт работы',
            'contacts 0 name' => 'Имя контактного лица',
            'contacts 0 surname' => 'Фамилия контактного лица',
            'contacts 0 position' => 'Должность контактного лица',
            'contacts 0 mobile number' => 'Мобильный номер контактного лица',
            'contacts 0 phone number' => 'Телефонный номер контактного лица',
            'contacts 0 email' => 'Электронная почта контактного лица',
            'contacts 0 union' => 'Профсоюз контактного лица',
            'contacts 0 description' => 'Описание контактного лица',
            'contacts 1 name' => 'Имя контактного лица',
            'contacts 1 surname' => 'Фамилия контактного лица',
            'contacts 1 position' => 'Должность контактного лица',
            'contacts 1 mobile number' => 'Мобильный номер контактного лица',
            'contacts 1 phone number' => 'Телефонный номер контактного лица',
            'contacts 1 email' => 'Электронная почта контактного лица',
            'contacts 1 union' => 'Профсоюз контактного лица',
            'contacts 1 description' => 'Описание контактного лица',
            'skills 0 name' => 'Название навыка',
            'skills 0 required' => 'Требуется навык',
            'skills 1 name' => 'Название навыка',
            'skills 1 required' => 'Требуется навык',
            'skills 2 name' => 'Название навыка',
            'skills 2 required' => 'Требуется навык',
        ),
        'uk' => array (
            'title' => 'Заголовок',
            'source links 0 label' => 'Назва веб-сайту',
            'source links 0 url' => 'Читати повний оголошення тут',
            'btn translate' => 'Перекласти',
            'description' => 'Опис',
            'published date' => 'Дата публікації',
            'occupation' => 'Професія',
            'company name' => 'Назва компанії',
            'company street address' => 'Вулиця компанії',
            'company post code' => 'Поштовий індекс компанії',
            'company city' => 'Місто компанії',
            'company phone number' => 'Телефон компанії',
            'company web address' => 'Веб-адреса компанії',
            'company email' => 'Електронна пошта компанії',
            'company organisation number' => 'Організаційний номер компанії',
            'conditions' => 'Умови',
            'salary description' => 'Опис зарплати',
            'salary type' => 'Тип зарплати',
            'employment type' => 'Тип зайнятості',
            'duration' => 'Тривалість',
            'last application date' => 'Остання дата подачі заявки',
            'expiration date' => 'Дата закінчення',
            'positions' => 'Позиції',
            'own car' => 'Власний автомобіль',
            'requires experience' => 'Вимагає досвіду',
            'education name' => 'Назва освіти',
            'education required' => 'Потрібна освіта',
            'application email' => 'Електронна пошта для заявок',
            'application web address' => 'Веб-адреса для заявок',
            'application other' => 'Інше для заявки',
            'application reference' => 'Посилання для заявки',
            'application information' => 'Інформація для заявки',
            'workplace name' => 'Назва місця роботи',
            'workplace street' => 'Вулиця місця роботи',
            'workplace post code' => 'Поштовий індекс місця роботи',
            'workplace city' => 'Місто місця роботи',
            'workplace unspecified workplace' => 'Невизначене місце роботи',
            'workplace region' => 'Регіон місця роботи',
            'workplace municipality' => 'Муніципалітет місця роботи',
            'workplace show map' => 'Показати карту',
            'languages 0 name' => 'Назва мови',
            'languages 0 required' => 'Вимагається мова',
            'work experiences 0 name' => 'Назва робочого досвіду',
            'work experiences 0 required' => 'Потрібен робочий досвід',
            'contacts 0 name' => 'Ім\'я контактної особи',
            'contacts 0 surname' => 'Прізвище контактної особи',
            'contacts 0 position' => 'Посада контактної особи',
            'contacts 0 mobile number' => 'Мобільний номер контактної особи',
            'contacts 0 phone number' => 'Телефонний номер контактної особи',
            'contacts 0 email' => 'Електронна пошта контактної особи',
            'contacts 0 union' => 'Профспілка контактної особи',
            'contacts 0 description' => 'Опис контактної особи',
            'contacts 1 name' => 'Ім\'я контактної особи',
            'contacts 1 surname' => 'Прізвище контактної особи',
            'contacts 1 position' => 'Посада контактної особи',
            'contacts 1 mobile number' => 'Мобільний номер контактної особи',
            'contacts 1 phone number' => 'Телефонний номер контактної особи',
            'contacts 1 email' => 'Електронна пошта контактної особи',
            'contacts 1 union' => 'Профспілка контактної особи',
            'contacts 1 description' => 'Опис контактної особи',
            'skills 0 name' => 'Назва навички',
            'skills 0 required' => 'Потрібна навичка',
            'skills 1 name' => 'Назва навички',
            'skills 1 required' => 'Потрібна навичка',
            'skills 2 name' => 'Назва навички',
            'skills 2 required' => 'Потрібна навичка',
        ),
        'en' => array (
            'title' => 'Title',
            'source links 0 label' => 'Website Name',
            'source links 0 url' => 'Read the full ad here',
            'btn translate' => 'Translate',
            'description' => 'Description',
            'published date' => 'Published Date',
            'occupation' => 'Occupation',
            'company name' => 'Company Name',
            'company street address' => 'Company Street Address',
            'company post code' => 'Company Post Code',
            'company city' => 'Company City',
            'company phone number' => 'Company Phone Number',
            'company web address' => 'Company Web Address',
            'company email' => 'Company Email',
            'company organisation number' => 'Company Organisation Number',
            'conditions' => 'Conditions',
            'salary description' => 'Salary Description',
            'salary type' => 'Salary Type',
            'employment type' => 'Employment Type',
            'duration' => 'Duration',
            'last application date' => 'Last Application Date',
            'expiration date' => 'Expiration Date',
            'positions' => 'Positions',
            'own car' => 'Own Car',
            'requires experience' => 'Requires Experience',
            'education name' => 'Education Name',
            'education required' => 'Education Required',
            'application email' => 'Application Email',
            'application web address' => 'Application Web Address',
            'application other' => 'Other for Application',
            'application reference' => 'Application Reference',
            'application information' => 'Application Information',
            'workplace name' => 'Workplace Name',
            'workplace street' => 'Workplace Street',
            'workplace post code' => 'Workplace Post Code',
            'workplace city' => 'Workplace City',
            'workplace unspecified workplace' => 'Unspecified Workplace',
            'workplace region' => 'Workplace Region',
            'workplace municipality' => 'Workplace Municipality',
            'workplace show map' => 'Show Map',
            'languages 0 name' => 'Language Name',
            'languages 0 required' => 'Language Required',
            'work experiences 0 name' => 'Work Experience Name',
            'work experiences 0 required' => 'Work Experience Required',
            'contacts 0 name' => 'Contact Person Name',
            'contacts 0 surname' => 'Contact Person Surname',
            'contacts 0 position' => 'Contact Person Position',
            'contacts 0 mobile number' => 'Contact Person Mobile Number',
            'contacts 0 phone number' => 'Contact Person Phone Number',
            'contacts 0 email' => 'Contact Person Email',
            'contacts 0 union' => 'Contact Person Union',
            'contacts 0 description' => 'Contact Person Description',
            'contacts 1 name' => 'Contact Person Name',
            'contacts 1 surname' => 'Contact Person Surname',
            'contacts 1 position' => 'Contact Person Position',
            'contacts 1 mobile number' => 'Contact Person Mobile Number',
            'contacts 1 phone number' => 'Contact Person Phone Number',
            'contacts 1 email' => 'Contact Person Email',
            'contacts 1 union' => 'Contact Person Union',
            'contacts 1 description' => 'Contact Person Description',
            'skills 0 name' => 'Skill Name',
            'skills 0 required' => 'Skill Required',
            'skills 1 name' => 'Skill Name',
            'skills 1 required' => 'Skill Required',
            'skills 2 name' => 'Skill Name',
            'skills 2 required' => 'Skill Required',
        ),


    ];
    public $arrSettingStartMenuRegion = [
        'uk' => [
            'title' => 'Виберіть регіон:'
        ],
        'ru' => [
            'title' => 'Выберите регион:'
        ],
        'en' => [
            'title' => 'Select a region:'
        ]
    ];
    public $arrSettingStartMenuSpecialist = [
        'uk' => [
            'title' => 'Виберіть спеціальність:',
            'buttonTranslate' => 'Перекласти:'
        ],
        'ru' => [
            'title' => 'Выберите специальность:',
            'buttonTranslate' => 'Перевести:'
        ],
        'en' => [
            'title' => 'Select specialty:',
            'buttonTranslate' => 'Translate:'
        ]
    ];

    public $btnTranslate = [
        'uk' => [
            'trans' => 'Перекласти'
        ],
        'ru' => [
            'trans' => 'Перевести'
        ],
        'en' => [
            'trans' => 'Translate'
        ],
    ];

    public $btnHide = [
        'uk' => [
            'Hide' => 'Приховати'
        ],
        'ru' => [
            'Hide' => 'Скрыть'
        ],
        'en' => [
            'Hide' => 'Hide'
        ],
    ];
    public $arrSettingbuildMenuFromAds = [
        'uk' => [
            'title' => 'Назва:',
            'publishedDate' => 'Дата публікації:',
            'occupation' => 'Професія:',
            'workplace' => 'Місце роботи:',
            'workplaceName' => 'Назва місця роботи:',
            'positions' => 'Кількість позицій:',
            'details' => 'Детальніше',
            'Hide' => 'Приховати',
        ],
        'ru' => [
            'title' => 'Заголовок:',
            'publishedDate' => 'Дата публикации:',
            'occupation' => 'Профессия:',
            'workplace' => 'Место работы:',
            'workplaceName' => 'Название места работы:',
            'positions' => 'Количество позиций:',
            'details' => 'Подробнее',
            'Hide' => 'Скрыть',
        ],
        'en' => [
            'title' => 'Title:',
            'publishedDate' => 'Publication date:',
            'occupation' => 'Profession:',
            'workplace' => 'Place of work:',
            'workplaceName' => 'Job name:',
            'positions' => 'Number of positions:',
            'details' => 'More details',
            'Hide' => 'Hide',
        ],
        'sv' => [
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
        'ru' => [
            'notFount' => 'К сожалению, объявлений не найдено.',
            'btnNavigate' => 'Выберите действие:'
        ],
        'en' => [
            'notFount' => 'Sorry, no advertisements found.',
            'btnNavigate' => 'Choose an action:',
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

    public $arrStartPrewiev = [
        'uk' => [
            'prew' => '
    <b>Привіт, шукачу нових можливостей!</b> 🌟

Ласкаво просимо до світу arbetsformedlingenBot - твого надійного провідника в пошуку роботи! Тут тебе чекають лише найсвіжіші та перспективні вакансії.

Просто слідуй меню навігації, щоб розпочати захопливу подорож світом кар\'єрних можливостей. Я підкажу, куди спрямувати свій погляд, щоб ти не пропустив жодного шансу.

За допомогою мене ти отримаєш не лише оголошення про вакансії, але й підтримку у виготовленні резюме, сповіщення про ключові події та навіть поради щодо успішних співбесід.

Не гай часу даремно - довір пошук мені, і давай разом створимо твою яскраву кар\'єру! 💼✨        
            '
        ],
        'ru' => [
            'prew' => '
    <b>Привет, искатель новых возможностей!</b> 🌟

Добро пожаловать в мир arbetsformedlingenBot - твоего надежного гида в поиске работы! Здесь тебя ждут только самые свежие и перспективные вакансии.

Просто следуй меню навигации, чтобы начать увлекательное путешествие по миру карьерных возможностей. Я подскажу, куда направить взор, чтобы ты не упустил ни одного шанса.

С моей помощью ты получишь не только объявления о вакансиях, но и поддержку в оформлении резюме, уведомления о ключевых событиях и даже советы по успешным собеседованиям.

Не теряй времени зря - доверь поиск мне, и давай вместе создадим твою яркую карьеру! 💼✨
            '
        ],
        'en' => [
            'prew' => '
    <b>Hello, seeker of new opportunities!</b> 🌟

Welcome to the world of arbetsformedlingenBot - your reliable guide in job hunting! Here, only the freshest and most promising vacancies await you.

Simply follow the navigation menu to embark on an exciting journey through the world of career opportunities. I\'ll guide you on where to focus your gaze, ensuring you don\'t miss a single chance.

With my assistance, you\'ll not only receive job announcements but also support in crafting your resume, notifications about key events, and even tips for successful interviews.

Don\'t waste time in vain - entrust your job search to me, and let\'s together create your vibrant career! 💼✨           
            '
        ],
    ];
    public $arrSettingStartMenu = [
        'uk' => [
            'title' => 'Зробіть вибір ресурсів:',
            'platsbankenButton' => 'Банк локацій:',
            'webbplatserButton' => 'Зовнішні сайти:',
            'btnNavigatePage' => 'Сторінка',
        ],
        'ru' => [
            'title' => 'Сделайте выбор ресурсов:',
            'platsbankenButton' => 'Банк локаций:',
            'webbplatserButton' => 'Внешние сайты:',
            'btnNavigatePage' => 'Страница',
        ],
        'en' => [
            'title' => 'Make a selection of resources:',
            'platsbankenButton' => 'Location bank',
            'webbplatserButton' => 'External sites:',
            'btnNavigatePage' => 'Page',
        ]
    ];
    public $arrSettingStartMenuOccupation = [
        'uk' => [
            'title' => 'Виберіть напрямок:',
            'buttonTranslate' => 'Перекласти:'
        ],
        'ru' => [
            'title' => 'Выберите направление:',
            'buttonTranslate' => 'Перевести:'
        ],
        'en' => [
            'title' => 'Select direction:',
            'buttonTranslate' => 'Translate:'
        ]
    ];
    public $arrSettingStartMenuCity = [
        'uk' => [
            'title' => 'Виберіть місто:',
            'btnShowAll' => 'Обрати все'
        ],
        'ru' => [
            'title' => 'Выберите город:',
            'btnShowAll' => 'Выбрать все'
        ],
        'en' => [
            'title' => 'Select city:',
            'btnShowAll' => 'Choose all'
        ]
    ];
    public $btnSendLanguageMenu = [
        'uk' => [
            'chooseLanguage' => 'Виберіть мову'
        ],
        'ru' => [
            'chooseLanguage' => 'Выберите язык'
        ],
        'en' => [
            'chooseLanguage' => 'Choose language'
        ],
    ];

    public $btnNawTranslate = [
        'uk' => [
            'startTitle' => 'Головна',
            'startBack' => 'Назад',
            'startLanguage' => 'Мова',
        ],
        'ru' => [
            'startTitle' => 'Главная',
            'startBack' => 'Назад',
            'startLanguage' => 'Язык',

        ],
        'en' => [
            'startTitle' => 'Home',
            'startBack' => 'Back',
            'startLanguage' => 'Language',
        ],
    ];

    public $location = array(
        0 =>
            array(
                'id' => 'DQZd_uYs_oKb',
                'name' => 'Blekinge län',
                'type' => 'region',
                'legacyAmsTaxonomyId' => '10',
                'items' =>
                    array(
                        0 =>
                            array(
                                'id' => 'HtGW_WgR_dpE',
                                'name' => 'Karlshamn',
                                'type' => 'municipality',
                                'legacyAmsTaxonomyId' => '1082',
                                'parentId' => 'DQZd_uYs_oKb',
                            ),
                        1 =>
                            array(
                                'id' => 'YSt4_bAa_ccs',
                                'name' => 'Karlskrona',
                                'type' => 'municipality',
                                'legacyAmsTaxonomyId' => '1080',
                                'parentId' => 'DQZd_uYs_oKb',
                            ),
                        2 =>
                            array(
                                'id' => '1gEC_kvM_TXK',
                                'name' => 'Olofström',
                                'type' => 'municipality',
                                'legacyAmsTaxonomyId' => '1060',
                                'parentId' => 'DQZd_uYs_oKb',
                            ),
                        3 =>
                            array(
                                'id' => 'vH8x_gVz_z7R',
                                'name' => 'Ronneby',
                                'type' => 'municipality',
                                'legacyAmsTaxonomyId' => '1081',
                                'parentId' => 'DQZd_uYs_oKb',
                            ),
                        4 =>
                            array(
                                'id' => 'EVPy_phD_8Vf',
                                'name' => 'Sölvesborg',
                                'type' => 'municipality',
                                'legacyAmsTaxonomyId' => '1083',
                                'parentId' => 'DQZd_uYs_oKb',
                            ),
                    ),
            ),
        1 =>
            array(
                'id' => 'oDpK_oZ2_WYt',
                'name' => 'Dalarnas län',
                'type' => 'region',
                'legacyAmsTaxonomyId' => '20',
                'items' =>
                    array(
                        0 =>
                            array(
                                'id' => 'Szbq_2fg_ydQ',
                                'name' => 'Avesta',
                                'type' => 'municipality',
                                'legacyAmsTaxonomyId' => '2084',
                                'parentId' => 'oDpK_oZ2_WYt',
                            ),
                        1 =>
                            array(
                                'id' => 'cpya_jJg_pGp',
                                'name' => 'Borlänge',
                                'type' => 'municipality',
                                'legacyAmsTaxonomyId' => '2081',
                                'parentId' => 'oDpK_oZ2_WYt',
                            ),
                        2 =>
                            array(
                                'id' => 'N1wJ_Cuu_7Cs',
                                'name' => 'Falun',
                                'type' => 'municipality',
                                'legacyAmsTaxonomyId' => '2080',
                                'parentId' => 'oDpK_oZ2_WYt',
                            ),
                        3 =>
                            array(
                                'id' => 'Nn7p_W3Z_y68',
                                'name' => 'Gagnef',
                                'type' => 'municipality',
                                'legacyAmsTaxonomyId' => '2026',
                                'parentId' => 'oDpK_oZ2_WYt',
                            ),
                        4 =>
                            array(
                                'id' => 'DE9u_V4K_Z1S',
                                'name' => 'Hedemora',
                                'type' => 'municipality',
                                'legacyAmsTaxonomyId' => '2083',
                                'parentId' => 'oDpK_oZ2_WYt',
                            ),
                        5 =>
                            array(
                                'id' => '7Zsu_ant_gcn',
                                'name' => 'Leksand',
                                'type' => 'municipality',
                                'legacyAmsTaxonomyId' => '2029',
                                'parentId' => 'oDpK_oZ2_WYt',
                            ),
                        6 =>
                            array(
                                'id' => 'Ny2b_2bo_7EL',
                                'name' => 'Ludvika',
                                'type' => 'municipality',
                                'legacyAmsTaxonomyId' => '2085',
                                'parentId' => 'oDpK_oZ2_WYt',
                            ),
                        7 =>
                            array(
                                'id' => 'FPCd_poj_3tq',
                                'name' => 'Malung-Sälen',
                                'type' => 'municipality',
                                'legacyAmsTaxonomyId' => '2023',
                                'parentId' => 'oDpK_oZ2_WYt',
                            ),
                        8 =>
                            array(
                                'id' => 'UGcC_kYx_fTs',
                                'name' => 'Mora',
                                'type' => 'municipality',
                                'legacyAmsTaxonomyId' => '2062',
                                'parentId' => 'oDpK_oZ2_WYt',
                            ),
                        9 =>
                            array(
                                'id' => 'CRyF_5Jg_4ht',
                                'name' => 'Orsa',
                                'type' => 'municipality',
                                'legacyAmsTaxonomyId' => '2034',
                                'parentId' => 'oDpK_oZ2_WYt',
                            ),
                        10 =>
                            array(
                                'id' => 'Jy3D_2ux_dg8',
                                'name' => 'Rättvik',
                                'type' => 'municipality',
                                'legacyAmsTaxonomyId' => '2031',
                                'parentId' => 'oDpK_oZ2_WYt',
                            ),
                        11 =>
                            array(
                                'id' => '5zZX_8FH_Sbq',
                                'name' => 'Smedjebacken',
                                'type' => 'municipality',
                                'legacyAmsTaxonomyId' => '2061',
                                'parentId' => 'oDpK_oZ2_WYt',
                            ),
                        12 =>
                            array(
                                'id' => 'c3Zx_jBf_CqF',
                                'name' => 'Säter',
                                'type' => 'municipality',
                                'legacyAmsTaxonomyId' => '2082',
                                'parentId' => 'oDpK_oZ2_WYt',
                            ),
                        13 =>
                            array(
                                'id' => '4eS9_HX1_M7V',
                                'name' => 'Vansbro',
                                'type' => 'municipality',
                                'legacyAmsTaxonomyId' => '2021',
                                'parentId' => 'oDpK_oZ2_WYt',
                            ),
                        14 =>
                            array(
                                'id' => 'cZtt_qGo_oBr',
                                'name' => 'Älvdalen',
                                'type' => 'municipality',
                                'legacyAmsTaxonomyId' => '2039',
                                'parentId' => 'oDpK_oZ2_WYt',
                            ),
                    ),
            ),
        2 =>
            array(
                'id' => 'K8iD_VQv_2BA',
                'name' => 'Gotlands län',
                'type' => 'region',
                'legacyAmsTaxonomyId' => '09',
                'items' =>
                    array(
                        0 =>
                            array(
                                'id' => 'Ft9P_E8F_VLJ',
                                'name' => 'Gotland',
                                'type' => 'municipality',
                                'legacyAmsTaxonomyId' => '0980',
                                'parentId' => 'K8iD_VQv_2BA',
                            ),
                    ),
            ),
        3 =>
            array(
                'id' => 'zupA_8Nt_xcD',
                'name' => 'Gävleborgs län',
                'type' => 'region',
                'legacyAmsTaxonomyId' => '21',
                'items' =>
                    array(
                        0 =>
                            array(
                                'id' => 'KxjG_ig5_exF',
                                'name' => 'Bollnäs',
                                'type' => 'municipality',
                                'legacyAmsTaxonomyId' => '2183',
                                'parentId' => 'zupA_8Nt_xcD',
                            ),
                        1 =>
                            array(
                                'id' => 'qk8Y_2b6_82D',
                                'name' => 'Gävle',
                                'type' => 'municipality',
                                'legacyAmsTaxonomyId' => '2180',
                                'parentId' => 'zupA_8Nt_xcD',
                            ),
                        2 =>
                            array(
                                'id' => 'yuNd_3bg_ttc',
                                'name' => 'Hofors',
                                'type' => 'municipality',
                                'legacyAmsTaxonomyId' => '2104',
                                'parentId' => 'zupA_8Nt_xcD',
                            ),
                        3 =>
                            array(
                                'id' => 'Utks_mwF_axY',
                                'name' => 'Hudiksvall',
                                'type' => 'municipality',
                                'legacyAmsTaxonomyId' => '2184',
                                'parentId' => 'zupA_8Nt_xcD',
                            ),
                        4 =>
                            array(
                                'id' => '63iQ_V6F_REB',
                                'name' => 'Ljusdal',
                                'type' => 'municipality',
                                'legacyAmsTaxonomyId' => '2161',
                                'parentId' => 'zupA_8Nt_xcD',
                            ),
                        5 =>
                            array(
                                'id' => 'fFeF_RCz_Tm5',
                                'name' => 'Nordanstig',
                                'type' => 'municipality',
                                'legacyAmsTaxonomyId' => '2132',
                                'parentId' => 'zupA_8Nt_xcD',
                            ),
                        6 =>
                            array(
                                'id' => 'GEvW_wKy_A9H',
                                'name' => 'Ockelbo',
                                'type' => 'municipality',
                                'legacyAmsTaxonomyId' => '2101',
                                'parentId' => 'zupA_8Nt_xcD',
                            ),
                        7 =>
                            array(
                                'id' => 'JPSe_mUQ_NDs',
                                'name' => 'Ovanåker',
                                'type' => 'municipality',
                                'legacyAmsTaxonomyId' => '2121',
                                'parentId' => 'zupA_8Nt_xcD',
                            ),
                        8 =>
                            array(
                                'id' => 'BbdN_xLB_k6s',
                                'name' => 'Sandviken',
                                'type' => 'municipality',
                                'legacyAmsTaxonomyId' => '2181',
                                'parentId' => 'zupA_8Nt_xcD',
                            ),
                        9 =>
                            array(
                                'id' => 'JauG_nz5_7mu',
                                'name' => 'Söderhamn',
                                'type' => 'municipality',
                                'legacyAmsTaxonomyId' => '2182',
                                'parentId' => 'zupA_8Nt_xcD',
                            ),
                    ),
            ),
        4 =>
            array(
                'id' => 'wjee_qH2_yb6',
                'name' => 'Hallands län',
                'type' => 'region',
                'legacyAmsTaxonomyId' => '13',
                'items' =>
                    array(
                        0 =>
                            array(
                                'id' => 'qaJg_wMR_C8T',
                                'name' => 'Falkenberg',
                                'type' => 'municipality',
                                'legacyAmsTaxonomyId' => '1382',
                                'parentId' => 'wjee_qH2_yb6',
                            ),
                        1 =>
                            array(
                                'id' => 'kUQB_KdK_kAh',
                                'name' => 'Halmstad',
                                'type' => 'municipality',
                                'legacyAmsTaxonomyId' => '1380',
                                'parentId' => 'wjee_qH2_yb6',
                            ),
                        2 =>
                            array(
                                'id' => '3XMe_nGt_RcU',
                                'name' => 'Hylte',
                                'type' => 'municipality',
                                'legacyAmsTaxonomyId' => '1315',
                                'parentId' => 'wjee_qH2_yb6',
                            ),
                        3 =>
                            array(
                                'id' => '3JKV_KSK_x6z',
                                'name' => 'Kungsbacka',
                                'type' => 'municipality',
                                'legacyAmsTaxonomyId' => '1384',
                                'parentId' => 'wjee_qH2_yb6',
                            ),
                        4 =>
                            array(
                                'id' => 'c1iL_rqh_Zja',
                                'name' => 'Laholm',
                                'type' => 'municipality',
                                'legacyAmsTaxonomyId' => '1381',
                                'parentId' => 'wjee_qH2_yb6',
                            ),
                        5 =>
                            array(
                                'id' => 'AkUx_yAq_kGr',
                                'name' => 'Varberg',
                                'type' => 'municipality',
                                'legacyAmsTaxonomyId' => '1383',
                                'parentId' => 'wjee_qH2_yb6',
                            ),
                    ),
            ),
        5 =>
            array(
                'id' => '65Ms_7r1_RTG',
                'name' => 'Jämtlands län',
                'type' => 'region',
                'legacyAmsTaxonomyId' => '23',
                'items' =>
                    array(
                        0 =>
                            array(
                                'id' => 'gRNJ_hVW_Gpg',
                                'name' => 'Berg',
                                'type' => 'municipality',
                                'legacyAmsTaxonomyId' => '2326',
                                'parentId' => '65Ms_7r1_RTG',
                            ),
                        1 =>
                            array(
                                'id' => 'eNSc_Nj1_CDP',
                                'name' => 'Bräcke',
                                'type' => 'municipality',
                                'legacyAmsTaxonomyId' => '2305',
                                'parentId' => '65Ms_7r1_RTG',
                            ),
                        2 =>
                            array(
                                'id' => 'j35Q_VKL_NiM',
                                'name' => 'Härjedalen',
                                'type' => 'municipality',
                                'legacyAmsTaxonomyId' => '2361',
                                'parentId' => '65Ms_7r1_RTG',
                            ),
                        3 =>
                            array(
                                'id' => 'yurW_aLE_4ga',
                                'name' => 'Krokom',
                                'type' => 'municipality',
                                'legacyAmsTaxonomyId' => '2309',
                                'parentId' => '65Ms_7r1_RTG',
                            ),
                        4 =>
                            array(
                                'id' => 'Voto_egJ_FZP',
                                'name' => 'Ragunda',
                                'type' => 'municipality',
                                'legacyAmsTaxonomyId' => '2303',
                                'parentId' => '65Ms_7r1_RTG',
                            ),
                        5 =>
                            array(
                                'id' => 'ppjq_Eci_Wz9',
                                'name' => 'Strömsund',
                                'type' => 'municipality',
                                'legacyAmsTaxonomyId' => '2313',
                                'parentId' => '65Ms_7r1_RTG',
                            ),
                        6 =>
                            array(
                                'id' => 'D7ax_CXP_6r1',
                                'name' => 'Åre',
                                'type' => 'municipality',
                                'legacyAmsTaxonomyId' => '2321',
                                'parentId' => '65Ms_7r1_RTG',
                            ),
                        7 =>
                            array(
                                'id' => 'Vt7P_856_WZS',
                                'name' => 'Östersund',
                                'type' => 'municipality',
                                'legacyAmsTaxonomyId' => '2380',
                                'parentId' => '65Ms_7r1_RTG',
                            ),
                    ),
            ),
        6 =>
            array(
                'id' => 'MtbE_xWT_eMi',
                'name' => 'Jönköpings län',
                'type' => 'region',
                'legacyAmsTaxonomyId' => '06',
                'items' =>
                    array(
                        0 =>
                            array(
                                'id' => 'y9HE_XD7_WaD',
                                'name' => 'Aneby',
                                'type' => 'municipality',
                                'legacyAmsTaxonomyId' => '0604',
                                'parentId' => 'MtbE_xWT_eMi',
                            ),
                        1 =>
                            array(
                                'id' => 'VacK_WF6_XVg',
                                'name' => 'Eksjö',
                                'type' => 'municipality',
                                'legacyAmsTaxonomyId' => '0686',
                                'parentId' => 'MtbE_xWT_eMi',
                            ),
                        2 =>
                            array(
                                'id' => 'cNQx_Yqi_83Q',
                                'name' => 'Gislaved',
                                'type' => 'municipality',
                                'legacyAmsTaxonomyId' => '0662',
                                'parentId' => 'MtbE_xWT_eMi',
                            ),
                        3 =>
                            array(
                                'id' => '91VR_Hxi_GN4',
                                'name' => 'Gnosjö',
                                'type' => 'municipality',
                                'legacyAmsTaxonomyId' => '0617',
                                'parentId' => 'MtbE_xWT_eMi',
                            ),
                        4 =>
                            array(
                                'id' => '9zQB_3vU_BQA',
                                'name' => 'Habo',
                                'type' => 'municipality',
                                'legacyAmsTaxonomyId' => '0643',
                                'parentId' => 'MtbE_xWT_eMi',
                            ),
                        5 =>
                            array(
                                'id' => 'KURg_KJF_Lwc',
                                'name' => 'Jönköping',
                                'type' => 'municipality',
                                'legacyAmsTaxonomyId' => '0680',
                                'parentId' => 'MtbE_xWT_eMi',
                            ),
                        6 =>
                            array(
                                'id' => 'smXg_BXp_jTW',
                                'name' => 'Mullsjö',
                                'type' => 'municipality',
                                'legacyAmsTaxonomyId' => '0642',
                                'parentId' => 'MtbE_xWT_eMi',
                            ),
                        7 =>
                            array(
                                'id' => 'KfXT_ySA_do2',
                                'name' => 'Nässjö',
                                'type' => 'municipality',
                                'legacyAmsTaxonomyId' => '0682',
                                'parentId' => 'MtbE_xWT_eMi',
                            ),
                        8 =>
                            array(
                                'id' => 'L1cX_MjM_y8W',
                                'name' => 'Sävsjö',
                                'type' => 'municipality',
                                'legacyAmsTaxonomyId' => '0684',
                                'parentId' => 'MtbE_xWT_eMi',
                            ),
                        9 =>
                            array(
                                'id' => 'Namm_SpC_RPG',
                                'name' => 'Tranås',
                                'type' => 'municipality',
                                'legacyAmsTaxonomyId' => '0687',
                                'parentId' => 'MtbE_xWT_eMi',
                            ),
                        10 =>
                            array(
                                'id' => 'zFup_umX_LVv',
                                'name' => 'Vaggeryd',
                                'type' => 'municipality',
                                'legacyAmsTaxonomyId' => '0665',
                                'parentId' => 'MtbE_xWT_eMi',
                            ),
                        11 =>
                            array(
                                'id' => 'xJqx_SLC_415',
                                'name' => 'Vetlanda',
                                'type' => 'municipality',
                                'legacyAmsTaxonomyId' => '0685',
                                'parentId' => 'MtbE_xWT_eMi',
                            ),
                        12 =>
                            array(
                                'id' => '6bS8_fzf_xpW',
                                'name' => 'Värnamo',
                                'type' => 'municipality',
                                'legacyAmsTaxonomyId' => '0683',
                                'parentId' => 'MtbE_xWT_eMi',
                            ),
                    ),
            ),
        7 =>
            array(
                'id' => '9QUH_2bb_6Np',
                'name' => 'Kalmar län',
                'type' => 'region',
                'legacyAmsTaxonomyId' => '08',
                'items' =>
                    array(
                        0 =>
                            array(
                                'id' => 'LY9i_qNL_kXf',
                                'name' => 'Borgholm',
                                'type' => 'municipality',
                                'legacyAmsTaxonomyId' => '0885',
                                'parentId' => '9QUH_2bb_6Np',
                            ),
                        1 =>
                            array(
                                'id' => '1koj_6Bg_8K6',
                                'name' => 'Emmaboda',
                                'type' => 'municipality',
                                'legacyAmsTaxonomyId' => '0862',
                                'parentId' => '9QUH_2bb_6Np',
                            ),
                        2 =>
                            array(
                                'id' => 'AEQD_1RT_vM9',
                                'name' => 'Hultsfred',
                                'type' => 'municipality',
                                'legacyAmsTaxonomyId' => '0860',
                                'parentId' => '9QUH_2bb_6Np',
                            ),
                        3 =>
                            array(
                                'id' => 'WPDh_pMr_RLZ',
                                'name' => 'Högsby',
                                'type' => 'municipality',
                                'legacyAmsTaxonomyId' => '0821',
                                'parentId' => '9QUH_2bb_6Np',
                            ),
                        4 =>
                            array(
                                'id' => 'Pnmg_SgP_uHQ',
                                'name' => 'Kalmar',
                                'type' => 'municipality',
                                'legacyAmsTaxonomyId' => '0880',
                                'parentId' => '9QUH_2bb_6Np',
                            ),
                        5 =>
                            array(
                                'id' => '8eEp_iz4_cNN',
                                'name' => 'Mönsterås',
                                'type' => 'municipality',
                                'legacyAmsTaxonomyId' => '0861',
                                'parentId' => '9QUH_2bb_6Np',
                            ),
                        6 =>
                            array(
                                'id' => 'Muim_EAi_EFp',
                                'name' => 'Mörbylånga',
                                'type' => 'municipality',
                                'legacyAmsTaxonomyId' => '0840',
                                'parentId' => '9QUH_2bb_6Np',
                            ),
                        7 =>
                            array(
                                'id' => 'xk68_bJa_6Fh',
                                'name' => 'Nybro',
                                'type' => 'municipality',
                                'legacyAmsTaxonomyId' => '0881',
                                'parentId' => '9QUH_2bb_6Np',
                            ),
                        8 =>
                            array(
                                'id' => 'tUP8_hRE_NcF',
                                'name' => 'Oskarshamn',
                                'type' => 'municipality',
                                'legacyAmsTaxonomyId' => '0882',
                                'parentId' => '9QUH_2bb_6Np',
                            ),
                        9 =>
                            array(
                                'id' => 'wYFb_q7w_Nnh',
                                'name' => 'Torsås',
                                'type' => 'municipality',
                                'legacyAmsTaxonomyId' => '0834',
                                'parentId' => '9QUH_2bb_6Np',
                            ),
                        10 =>
                            array(
                                'id' => 'a7hJ_zwv_2FR',
                                'name' => 'Vimmerby',
                                'type' => 'municipality',
                                'legacyAmsTaxonomyId' => '0884',
                                'parentId' => '9QUH_2bb_6Np',
                            ),
                        11 =>
                            array(
                                'id' => 't7H4_S2P_3Fw',
                                'name' => 'Västervik',
                                'type' => 'municipality',
                                'legacyAmsTaxonomyId' => '0883',
                                'parentId' => '9QUH_2bb_6Np',
                            ),
                    ),
            ),
        8 =>
            array(
                'id' => 'tF3y_MF9_h5G',
                'name' => 'Kronobergs län',
                'type' => 'region',
                'legacyAmsTaxonomyId' => '07',
                'items' =>
                    array(
                        0 =>
                            array(
                                'id' => 'MMph_wmN_esc',
                                'name' => 'Alvesta',
                                'type' => 'municipality',
                                'legacyAmsTaxonomyId' => '0764',
                                'parentId' => 'tF3y_MF9_h5G',
                            ),
                        1 =>
                            array(
                                'id' => 'nXZy_1Jd_D8X',
                                'name' => 'Lessebo',
                                'type' => 'municipality',
                                'legacyAmsTaxonomyId' => '0761',
                                'parentId' => 'tF3y_MF9_h5G',
                            ),
                        2 =>
                            array(
                                'id' => 'GzKo_S48_QCm',
                                'name' => 'Ljungby',
                                'type' => 'municipality',
                                'legacyAmsTaxonomyId' => '0781',
                                'parentId' => 'tF3y_MF9_h5G',
                            ),
                        3 =>
                            array(
                                'id' => 'ZhVf_yL5_Q5g',
                                'name' => 'Markaryd',
                                'type' => 'municipality',
                                'legacyAmsTaxonomyId' => '0767',
                                'parentId' => 'tF3y_MF9_h5G',
                            ),
                        4 =>
                            array(
                                'id' => 'qz8Q_kDz_N2Y',
                                'name' => 'Tingsryd',
                                'type' => 'municipality',
                                'legacyAmsTaxonomyId' => '0763',
                                'parentId' => 'tF3y_MF9_h5G',
                            ),
                        5 =>
                            array(
                                'id' => '78cu_S5T_Pgp',
                                'name' => 'Uppvidinge',
                                'type' => 'municipality',
                                'legacyAmsTaxonomyId' => '0760',
                                'parentId' => 'tF3y_MF9_h5G',
                            ),
                        6 =>
                            array(
                                'id' => 'mmot_H3A_auW',
                                'name' => 'Växjö',
                                'type' => 'municipality',
                                'legacyAmsTaxonomyId' => '0780',
                                'parentId' => 'tF3y_MF9_h5G',
                            ),
                        7 =>
                            array(
                                'id' => 'EK6X_wZq_CQ8',
                                'name' => 'Älmhult',
                                'type' => 'municipality',
                                'legacyAmsTaxonomyId' => '0765',
                                'parentId' => 'tF3y_MF9_h5G',
                            ),
                    ),
            ),
        9 =>
            array(
                'id' => '9hXe_F4g_eTG',
                'name' => 'Norrbottens län',
                'type' => 'region',
                'legacyAmsTaxonomyId' => '25',
                'items' =>
                    array(
                        0 =>
                            array(
                                'id' => 'vkQW_GB6_MNk',
                                'name' => 'Arjeplog',
                                'type' => 'municipality',
                                'legacyAmsTaxonomyId' => '2506',
                                'parentId' => '9hXe_F4g_eTG',
                            ),
                        1 =>
                            array(
                                'id' => 'A5WX_XVo_Zt6',
                                'name' => 'Arvidsjaur',
                                'type' => 'municipality',
                                'legacyAmsTaxonomyId' => '2505',
                                'parentId' => '9hXe_F4g_eTG',
                            ),
                        2 =>
                            array(
                                'id' => 'y4NQ_tnB_eVd',
                                'name' => 'Boden',
                                'type' => 'municipality',
                                'legacyAmsTaxonomyId' => '2582',
                                'parentId' => '9hXe_F4g_eTG',
                            ),
                        3 =>
                            array(
                                'id' => '6R2u_zkb_uoS',
                                'name' => 'Gällivare',
                                'type' => 'municipality',
                                'legacyAmsTaxonomyId' => '2523',
                                'parentId' => '9hXe_F4g_eTG',
                            ),
                        4 =>
                            array(
                                'id' => 'tfRE_hXa_eq7',
                                'name' => 'Haparanda',
                                'type' => 'municipality',
                                'legacyAmsTaxonomyId' => '2583',
                                'parentId' => '9hXe_F4g_eTG',
                            ),
                        5 =>
                            array(
                                'id' => 'mp6j_2b6_1bz',
                                'name' => 'Jokkmokk',
                                'type' => 'municipality',
                                'legacyAmsTaxonomyId' => '2510',
                                'parentId' => '9hXe_F4g_eTG',
                            ),
                        6 =>
                            array(
                                'id' => 'cUyN_C9V_HLU',
                                'name' => 'Kalix',
                                'type' => 'municipality',
                                'legacyAmsTaxonomyId' => '2514',
                                'parentId' => '9hXe_F4g_eTG',
                            ),
                        7 =>
                            array(
                                'id' => 'biN6_UiL_Qob',
                                'name' => 'Kiruna',
                                'type' => 'municipality',
                                'legacyAmsTaxonomyId' => '2584',
                                'parentId' => '9hXe_F4g_eTG',
                            ),
                        8 =>
                            array(
                                'id' => 'CXbY_gui_14v',
                                'name' => 'Luleå',
                                'type' => 'municipality',
                                'legacyAmsTaxonomyId' => '2580',
                                'parentId' => '9hXe_F4g_eTG',
                            ),
                        9 =>
                            array(
                                'id' => 'dHMF_72G_4NM',
                                'name' => 'Pajala',
                                'type' => 'municipality',
                                'legacyAmsTaxonomyId' => '2521',
                                'parentId' => '9hXe_F4g_eTG',
                            ),
                        10 =>
                            array(
                                'id' => 'umej_bP2_PpK',
                                'name' => 'Piteå',
                                'type' => 'municipality',
                                'legacyAmsTaxonomyId' => '2581',
                                'parentId' => '9hXe_F4g_eTG',
                            ),
                        11 =>
                            array(
                                'id' => '14WF_zh1_W3y',
                                'name' => 'Älvsbyn',
                                'type' => 'municipality',
                                'legacyAmsTaxonomyId' => '2560',
                                'parentId' => '9hXe_F4g_eTG',
                            ),
                        12 =>
                            array(
                                'id' => 'n5Sq_xxo_QWL',
                                'name' => 'Överkalix',
                                'type' => 'municipality',
                                'legacyAmsTaxonomyId' => '2513',
                                'parentId' => '9hXe_F4g_eTG',
                            ),
                        13 =>
                            array(
                                'id' => 'ehMP_onv_Chk',
                                'name' => 'Övertorneå',
                                'type' => 'municipality',
                                'legacyAmsTaxonomyId' => '2518',
                                'parentId' => '9hXe_F4g_eTG',
                            ),
                    ),
            ),
        10 =>
            array(
                'id' => 'CaRE_1nn_cSU',
                'name' => 'Skåne län',
                'type' => 'region',
                'legacyAmsTaxonomyId' => '12',
                'items' =>
                    array(
                        0 =>
                            array(
                                'id' => 'waQp_FjW_qhF',
                                'name' => 'Bjuv',
                                'type' => 'municipality',
                                'legacyAmsTaxonomyId' => '1260',
                                'parentId' => 'CaRE_1nn_cSU',
                            ),
                        1 =>
                            array(
                                'id' => 'WMNK_PXa_Khm',
                                'name' => 'Bromölla',
                                'type' => 'municipality',
                                'legacyAmsTaxonomyId' => '1272',
                                'parentId' => 'CaRE_1nn_cSU',
                            ),
                        2 =>
                            array(
                                'id' => '64g5_Lio_aMU',
                                'name' => 'Burlöv',
                                'type' => 'municipality',
                                'legacyAmsTaxonomyId' => '1231',
                                'parentId' => 'CaRE_1nn_cSU',
                            ),
                        3 =>
                            array(
                                'id' => 'i8vK_odq_6ar',
                                'name' => 'Båstad',
                                'type' => 'municipality',
                                'legacyAmsTaxonomyId' => '1278',
                                'parentId' => 'CaRE_1nn_cSU',
                            ),
                        4 =>
                            array(
                                'id' => 'gfCw_egj_1M4',
                                'name' => 'Eslöv',
                                'type' => 'municipality',
                                'legacyAmsTaxonomyId' => '1285',
                                'parentId' => 'CaRE_1nn_cSU',
                            ),
                        5 =>
                            array(
                                'id' => 'qj3q_oXH_MGR',
                                'name' => 'Helsingborg',
                                'type' => 'municipality',
                                'legacyAmsTaxonomyId' => '1283',
                                'parentId' => 'CaRE_1nn_cSU',
                            ),
                        6 =>
                            array(
                                'id' => 'bP5q_53x_aqJ',
                                'name' => 'Hässleholm',
                                'type' => 'municipality',
                                'legacyAmsTaxonomyId' => '1293',
                                'parentId' => 'CaRE_1nn_cSU',
                            ),
                        7 =>
                            array(
                                'id' => '8QQ6_e95_a1d',
                                'name' => 'Höganäs',
                                'type' => 'municipality',
                                'legacyAmsTaxonomyId' => '1284',
                                'parentId' => 'CaRE_1nn_cSU',
                            ),
                        8 =>
                            array(
                                'id' => 'autr_KMa_cfp',
                                'name' => 'Hörby',
                                'type' => 'municipality',
                                'legacyAmsTaxonomyId' => '1266',
                                'parentId' => 'CaRE_1nn_cSU',
                            ),
                        9 =>
                            array(
                                'id' => 'N29z_AqQ_Ppc',
                                'name' => 'Höör',
                                'type' => 'municipality',
                                'legacyAmsTaxonomyId' => '1267',
                                'parentId' => 'CaRE_1nn_cSU',
                            ),
                        10 =>
                            array(
                                'id' => 'JARU_FAY_hTS',
                                'name' => 'Klippan',
                                'type' => 'municipality',
                                'legacyAmsTaxonomyId' => '1276',
                                'parentId' => 'CaRE_1nn_cSU',
                            ),
                        11 =>
                            array(
                                'id' => 'vrvW_sr8_1en',
                                'name' => 'Kristianstad',
                                'type' => 'municipality',
                                'legacyAmsTaxonomyId' => '1290',
                                'parentId' => 'CaRE_1nn_cSU',
                            ),
                        12 =>
                            array(
                                'id' => '5ohg_WJU_Ktn',
                                'name' => 'Kävlinge',
                                'type' => 'municipality',
                                'legacyAmsTaxonomyId' => '1261',
                                'parentId' => 'CaRE_1nn_cSU',
                            ),
                        13 =>
                            array(
                                'id' => 'Yt5s_Vf9_rds',
                                'name' => 'Landskrona',
                                'type' => 'municipality',
                                'legacyAmsTaxonomyId' => '1282',
                                'parentId' => 'CaRE_1nn_cSU',
                            ),
                        14 =>
                            array(
                                'id' => 'naG4_AUS_z2v',
                                'name' => 'Lomma',
                                'type' => 'municipality',
                                'legacyAmsTaxonomyId' => '1262',
                                'parentId' => 'CaRE_1nn_cSU',
                            ),
                        15 =>
                            array(
                                'id' => 'muSY_tsR_vDZ',
                                'name' => 'Lund',
                                'type' => 'municipality',
                                'legacyAmsTaxonomyId' => '1281',
                                'parentId' => 'CaRE_1nn_cSU',
                            ),
                        16 =>
                            array(
                                'id' => 'oYPt_yRA_Smm',
                                'name' => 'Malmö',
                                'type' => 'municipality',
                                'legacyAmsTaxonomyId' => '1280',
                                'parentId' => 'CaRE_1nn_cSU',
                            ),
                        17 =>
                            array(
                                'id' => 'najS_Lvy_mDD',
                                'name' => 'Osby',
                                'type' => 'municipality',
                                'legacyAmsTaxonomyId' => '1273',
                                'parentId' => 'CaRE_1nn_cSU',
                            ),
                        18 =>
                            array(
                                'id' => 'BN7r_iPV_F9p',
                                'name' => 'Perstorp',
                                'type' => 'municipality',
                                'legacyAmsTaxonomyId' => '1275',
                                'parentId' => 'CaRE_1nn_cSU',
                            ),
                        19 =>
                            array(
                                'id' => 'dLxo_EpC_oPe',
                                'name' => 'Simrishamn',
                                'type' => 'municipality',
                                'legacyAmsTaxonomyId' => '1291',
                                'parentId' => 'CaRE_1nn_cSU',
                            ),
                        20 =>
                            array(
                                'id' => 'P3Cs_1ZP_9XB',
                                'name' => 'Sjöbo',
                                'type' => 'municipality',
                                'legacyAmsTaxonomyId' => '1265',
                                'parentId' => 'CaRE_1nn_cSU',
                            ),
                        21 =>
                            array(
                                'id' => 'oezL_78x_r89',
                                'name' => 'Skurup',
                                'type' => 'municipality',
                                'legacyAmsTaxonomyId' => '1264',
                                'parentId' => 'CaRE_1nn_cSU',
                            ),
                        22 =>
                            array(
                                'id' => 'vBrj_bov_KEX',
                                'name' => 'Staffanstorp',
                                'type' => 'municipality',
                                'legacyAmsTaxonomyId' => '1230',
                                'parentId' => 'CaRE_1nn_cSU',
                            ),
                        23 =>
                            array(
                                'id' => '2r6J_g2w_qp5',
                                'name' => 'Svalöv',
                                'type' => 'municipality',
                                'legacyAmsTaxonomyId' => '1214',
                                'parentId' => 'CaRE_1nn_cSU',
                            ),
                        24 =>
                            array(
                                'id' => 'n6r4_fjK_kRr',
                                'name' => 'Svedala',
                                'type' => 'municipality',
                                'legacyAmsTaxonomyId' => '1263',
                                'parentId' => 'CaRE_1nn_cSU',
                            ),
                        25 =>
                            array(
                                'id' => 'UMev_wGs_9bg',
                                'name' => 'Tomelilla',
                                'type' => 'municipality',
                                'legacyAmsTaxonomyId' => '1270',
                                'parentId' => 'CaRE_1nn_cSU',
                            ),
                        26 =>
                            array(
                                'id' => 'STvk_dra_M1X',
                                'name' => 'Trelleborg',
                                'type' => 'municipality',
                                'legacyAmsTaxonomyId' => '1287',
                                'parentId' => 'CaRE_1nn_cSU',
                            ),
                        27 =>
                            array(
                                'id' => 'Tcog_5sH_b46',
                                'name' => 'Vellinge',
                                'type' => 'municipality',
                                'legacyAmsTaxonomyId' => '1233',
                                'parentId' => 'CaRE_1nn_cSU',
                            ),
                        28 =>
                            array(
                                'id' => 'hdYk_hnP_uju',
                                'name' => 'Ystad',
                                'type' => 'municipality',
                                'legacyAmsTaxonomyId' => '1286',
                                'parentId' => 'CaRE_1nn_cSU',
                            ),
                        29 =>
                            array(
                                'id' => 'pCuv_P5A_9oh',
                                'name' => 'Ängelholm',
                                'type' => 'municipality',
                                'legacyAmsTaxonomyId' => '1292',
                                'parentId' => 'CaRE_1nn_cSU',
                            ),
                        30 =>
                            array(
                                'id' => 'tEv6_ktG_QQb',
                                'name' => 'Åstorp',
                                'type' => 'municipality',
                                'legacyAmsTaxonomyId' => '1277',
                                'parentId' => 'CaRE_1nn_cSU',
                            ),
                        31 =>
                            array(
                                'id' => 'nBTS_Nge_dVH',
                                'name' => 'Örkelljunga',
                                'type' => 'municipality',
                                'legacyAmsTaxonomyId' => '1257',
                                'parentId' => 'CaRE_1nn_cSU',
                            ),
                        32 =>
                            array(
                                'id' => 'LTt7_CGG_RUf',
                                'name' => 'Östra Göinge',
                                'type' => 'municipality',
                                'legacyAmsTaxonomyId' => '1256',
                                'parentId' => 'CaRE_1nn_cSU',
                            ),
                    ),
            ),
        11 =>
            array(
                'id' => 'CifL_Rzy_Mku',
                'name' => 'Stockholms län',
                'type' => 'region',
                'legacyAmsTaxonomyId' => '01',
                'items' =>
                    array(
                        0 =>
                            array(
                                'id' => 'CCVZ_JA7_d3y',
                                'name' => 'Botkyrka',
                                'type' => 'municipality',
                                'legacyAmsTaxonomyId' => '0127',
                                'parentId' => 'CifL_Rzy_Mku',
                            ),
                        1 =>
                            array(
                                'id' => 'E4CV_a5E_ucX',
                                'name' => 'Danderyd',
                                'type' => 'municipality',
                                'legacyAmsTaxonomyId' => '0162',
                                'parentId' => 'CifL_Rzy_Mku',
                            ),
                        2 =>
                            array(
                                'id' => 'magF_Gon_YL2',
                                'name' => 'Ekerö',
                                'type' => 'municipality',
                                'legacyAmsTaxonomyId' => '0125',
                                'parentId' => 'CifL_Rzy_Mku',
                            ),
                        3 =>
                            array(
                                'id' => 'Q7gp_9dT_k2F',
                                'name' => 'Haninge',
                                'type' => 'municipality',
                                'legacyAmsTaxonomyId' => '0136',
                                'parentId' => 'CifL_Rzy_Mku',
                            ),
                        4 =>
                            array(
                                'id' => 'g1Gc_aXK_EKu',
                                'name' => 'Huddinge',
                                'type' => 'municipality',
                                'legacyAmsTaxonomyId' => '0126',
                                'parentId' => 'CifL_Rzy_Mku',
                            ),
                        5 =>
                            array(
                                'id' => 'qm5H_jsD_fUF',
                                'name' => 'Järfälla',
                                'type' => 'municipality',
                                'legacyAmsTaxonomyId' => '0123',
                                'parentId' => 'CifL_Rzy_Mku',
                            ),
                        6 =>
                            array(
                                'id' => 'FBbF_mda_TYD',
                                'name' => 'Lidingö',
                                'type' => 'municipality',
                                'legacyAmsTaxonomyId' => '0186',
                                'parentId' => 'CifL_Rzy_Mku',
                            ),
                        7 =>
                            array(
                                'id' => 'aYA7_PpG_BqP',
                                'name' => 'Nacka',
                                'type' => 'municipality',
                                'legacyAmsTaxonomyId' => '0182',
                                'parentId' => 'CifL_Rzy_Mku',
                            ),
                        8 =>
                            array(
                                'id' => 'btgf_fS7_sKG',
                                'name' => 'Norrtälje',
                                'type' => 'municipality',
                                'legacyAmsTaxonomyId' => '0188',
                                'parentId' => 'CifL_Rzy_Mku',
                            ),
                        9 =>
                            array(
                                'id' => 'mBKv_q3B_SK8',
                                'name' => 'Nykvarn',
                                'type' => 'municipality',
                                'legacyAmsTaxonomyId' => '0140',
                                'parentId' => 'CifL_Rzy_Mku',
                            ),
                        10 =>
                            array(
                                'id' => '37UU_T7x_oxG',
                                'name' => 'Nynäshamn',
                                'type' => 'municipality',
                                'legacyAmsTaxonomyId' => '0192',
                                'parentId' => 'CifL_Rzy_Mku',
                            ),
                        11 =>
                            array(
                                'id' => '4KBw_CPU_VQv',
                                'name' => 'Salem',
                                'type' => 'municipality',
                                'legacyAmsTaxonomyId' => '0128',
                                'parentId' => 'CifL_Rzy_Mku',
                            ),
                        12 =>
                            array(
                                'id' => '8ryy_X54_xJj',
                                'name' => 'Sigtuna',
                                'type' => 'municipality',
                                'legacyAmsTaxonomyId' => '0191',
                                'parentId' => 'CifL_Rzy_Mku',
                            ),
                        13 =>
                            array(
                                'id' => 'Z5Cq_SgB_dsB',
                                'name' => 'Sollentuna',
                                'type' => 'municipality',
                                'legacyAmsTaxonomyId' => '0163',
                                'parentId' => 'CifL_Rzy_Mku',
                            ),
                        14 =>
                            array(
                                'id' => 'zHxw_uJZ_NJ8',
                                'name' => 'Solna',
                                'type' => 'municipality',
                                'legacyAmsTaxonomyId' => '0184',
                                'parentId' => 'CifL_Rzy_Mku',
                            ),
                        15 =>
                            array(
                                'id' => 'AvNB_uwa_6n6',
                                'name' => 'Stockholm',
                                'type' => 'municipality',
                                'legacyAmsTaxonomyId' => '0180',
                                'parentId' => 'CifL_Rzy_Mku',
                            ),
                        16 =>
                            array(
                                'id' => 'UTJZ_zHH_mJm',
                                'name' => 'Sundbyberg',
                                'type' => 'municipality',
                                'legacyAmsTaxonomyId' => '0183',
                                'parentId' => 'CifL_Rzy_Mku',
                            ),
                        17 =>
                            array(
                                'id' => 'g6hK_M1o_hiU',
                                'name' => 'Södertälje',
                                'type' => 'municipality',
                                'legacyAmsTaxonomyId' => '0181',
                                'parentId' => 'CifL_Rzy_Mku',
                            ),
                        18 =>
                            array(
                                'id' => 'sTPc_k2B_SqV',
                                'name' => 'Tyresö',
                                'type' => 'municipality',
                                'legacyAmsTaxonomyId' => '0138',
                                'parentId' => 'CifL_Rzy_Mku',
                            ),
                        19 =>
                            array(
                                'id' => 'onpA_B5a_zfv',
                                'name' => 'Täby',
                                'type' => 'municipality',
                                'legacyAmsTaxonomyId' => '0160',
                                'parentId' => 'CifL_Rzy_Mku',
                            ),
                        20 =>
                            array(
                                'id' => 'XWKY_c49_5nv',
                                'name' => 'Upplands Väsby',
                                'type' => 'municipality',
                                'legacyAmsTaxonomyId' => '0114',
                                'parentId' => 'CifL_Rzy_Mku',
                            ),
                        21 =>
                            array(
                                'id' => 'w6yq_CGR_Fiv',
                                'name' => 'Upplands-Bro',
                                'type' => 'municipality',
                                'legacyAmsTaxonomyId' => '0139',
                                'parentId' => 'CifL_Rzy_Mku',
                            ),
                        22 =>
                            array(
                                'id' => 'K4az_Bm6_hRV',
                                'name' => 'Vallentuna',
                                'type' => 'municipality',
                                'legacyAmsTaxonomyId' => '0115',
                                'parentId' => 'CifL_Rzy_Mku',
                            ),
                        23 =>
                            array(
                                'id' => '9aAJ_j6L_DST',
                                'name' => 'Vaxholm',
                                'type' => 'municipality',
                                'legacyAmsTaxonomyId' => '0187',
                                'parentId' => 'CifL_Rzy_Mku',
                            ),
                        24 =>
                            array(
                                'id' => '15nx_Vut_GrH',
                                'name' => 'Värmdö',
                                'type' => 'municipality',
                                'legacyAmsTaxonomyId' => '0120',
                                'parentId' => 'CifL_Rzy_Mku',
                            ),
                        25 =>
                            array(
                                'id' => '8gKt_ZsV_PGj',
                                'name' => 'Österåker',
                                'type' => 'municipality',
                                'legacyAmsTaxonomyId' => '0117',
                                'parentId' => 'CifL_Rzy_Mku',
                            ),
                    ),
            ),
        12 =>
            array(
                'id' => 's93u_BEb_sx2',
                'name' => 'Södermanlands län',
                'type' => 'region',
                'legacyAmsTaxonomyId' => '04',
                'items' =>
                    array(
                        0 =>
                            array(
                                'id' => 'kMxr_NiX_YrU',
                                'name' => 'Eskilstuna',
                                'type' => 'municipality',
                                'legacyAmsTaxonomyId' => '0484',
                                'parentId' => 's93u_BEb_sx2',
                            ),
                        1 =>
                            array(
                                'id' => 'P8yp_WT9_Bks',
                                'name' => 'Flen',
                                'type' => 'municipality',
                                'legacyAmsTaxonomyId' => '0482',
                                'parentId' => 's93u_BEb_sx2',
                            ),
                        2 =>
                            array(
                                'id' => 'os8Y_RUo_U3u',
                                'name' => 'Gnesta',
                                'type' => 'municipality',
                                'legacyAmsTaxonomyId' => '0461',
                                'parentId' => 's93u_BEb_sx2',
                            ),
                        3 =>
                            array(
                                'id' => 'snx9_qVD_Dr1',
                                'name' => 'Katrineholm',
                                'type' => 'municipality',
                                'legacyAmsTaxonomyId' => '0483',
                                'parentId' => 's93u_BEb_sx2',
                            ),
                        4 =>
                            array(
                                'id' => 'KzvD_ePV_DKQ',
                                'name' => 'Nyköping',
                                'type' => 'municipality',
                                'legacyAmsTaxonomyId' => '0480',
                                'parentId' => 's93u_BEb_sx2',
                            ),
                        5 =>
                            array(
                                'id' => '72XK_mUU_CAH',
                                'name' => 'Oxelösund',
                                'type' => 'municipality',
                                'legacyAmsTaxonomyId' => '0481',
                                'parentId' => 's93u_BEb_sx2',
                            ),
                        6 =>
                            array(
                                'id' => 'shnD_RiE_RKL',
                                'name' => 'Strängnäs',
                                'type' => 'municipality',
                                'legacyAmsTaxonomyId' => '0486',
                                'parentId' => 's93u_BEb_sx2',
                            ),
                        7 =>
                            array(
                                'id' => 'rjzu_nQn_mCK',
                                'name' => 'Trosa',
                                'type' => 'municipality',
                                'legacyAmsTaxonomyId' => '0488',
                                'parentId' => 's93u_BEb_sx2',
                            ),
                        8 =>
                            array(
                                'id' => 'rut9_f5W_kTX',
                                'name' => 'Vingåker',
                                'type' => 'municipality',
                                'legacyAmsTaxonomyId' => '0428',
                                'parentId' => 's93u_BEb_sx2',
                            ),
                    ),
            ),
        13 =>
            array(
                'id' => 'zBon_eET_fFU',
                'name' => 'Uppsala län',
                'type' => 'region',
                'legacyAmsTaxonomyId' => '03',
                'items' =>
                    array(
                        0 =>
                            array(
                                'id' => 'HGwg_unG_TsG',
                                'name' => 'Enköping',
                                'type' => 'municipality',
                                'legacyAmsTaxonomyId' => '0381',
                                'parentId' => 'zBon_eET_fFU',
                            ),
                        1 =>
                            array(
                                'id' => 'sD2e_1Tr_4WZ',
                                'name' => 'Heby',
                                'type' => 'municipality',
                                'legacyAmsTaxonomyId' => '0331',
                                'parentId' => 'zBon_eET_fFU',
                            ),
                        2 =>
                            array(
                                'id' => 'Bbs5_JUs_Qh5',
                                'name' => 'Håbo',
                                'type' => 'municipality',
                                'legacyAmsTaxonomyId' => '0305',
                                'parentId' => 'zBon_eET_fFU',
                            ),
                        3 =>
                            array(
                                'id' => 'KALq_sG6_VrW',
                                'name' => 'Knivsta',
                                'type' => 'municipality',
                                'legacyAmsTaxonomyId' => '0330',
                                'parentId' => 'zBon_eET_fFU',
                            ),
                        4 =>
                            array(
                                'id' => 'K8A2_JBa_e6e',
                                'name' => 'Tierp',
                                'type' => 'municipality',
                                'legacyAmsTaxonomyId' => '0360',
                                'parentId' => 'zBon_eET_fFU',
                            ),
                        5 =>
                            array(
                                'id' => 'otaF_bQY_4ZD',
                                'name' => 'Uppsala',
                                'type' => 'municipality',
                                'legacyAmsTaxonomyId' => '0380',
                                'parentId' => 'zBon_eET_fFU',
                            ),
                        6 =>
                            array(
                                'id' => 'cbyw_9aK_Cni',
                                'name' => 'Älvkarleby',
                                'type' => 'municipality',
                                'legacyAmsTaxonomyId' => '0319',
                                'parentId' => 'zBon_eET_fFU',
                            ),
                        7 =>
                            array(
                                'id' => 'VE3L_3Ei_XbG',
                                'name' => 'Östhammar',
                                'type' => 'municipality',
                                'legacyAmsTaxonomyId' => '0382',
                                'parentId' => 'zBon_eET_fFU',
                            ),
                    ),
            ),
        14 =>
            array(
                'id' => 'EVVp_h6U_GSZ',
                'name' => 'Värmlands län',
                'type' => 'region',
                'legacyAmsTaxonomyId' => '17',
                'items' =>
                    array(
                        0 =>
                            array(
                                'id' => 'yGue_F32_wev',
                                'name' => 'Arvika',
                                'type' => 'municipality',
                                'legacyAmsTaxonomyId' => '1784',
                                'parentId' => 'EVVp_h6U_GSZ',
                            ),
                        1 =>
                            array(
                                'id' => 'N5HQ_hfp_7Rm',
                                'name' => 'Eda',
                                'type' => 'municipality',
                                'legacyAmsTaxonomyId' => '1730',
                                'parentId' => 'EVVp_h6U_GSZ',
                            ),
                        2 =>
                            array(
                                'id' => 'UXir_vKD_FuW',
                                'name' => 'Filipstad',
                                'type' => 'municipality',
                                'legacyAmsTaxonomyId' => '1782',
                                'parentId' => 'EVVp_h6U_GSZ',
                            ),
                        3 =>
                            array(
                                'id' => 'xnEt_JN3_GkA',
                                'name' => 'Forshaga',
                                'type' => 'municipality',
                                'legacyAmsTaxonomyId' => '1763',
                                'parentId' => 'EVVp_h6U_GSZ',
                            ),
                        4 =>
                            array(
                                'id' => 'PSNt_P95_x6q',
                                'name' => 'Grums',
                                'type' => 'municipality',
                                'legacyAmsTaxonomyId' => '1764',
                                'parentId' => 'EVVp_h6U_GSZ',
                            ),
                        5 =>
                            array(
                                'id' => 'qk9a_g5U_sAH',
                                'name' => 'Hagfors',
                                'type' => 'municipality',
                                'legacyAmsTaxonomyId' => '1783',
                                'parentId' => 'EVVp_h6U_GSZ',
                            ),
                        6 =>
                            array(
                                'id' => 'x5qW_BXr_aut',
                                'name' => 'Hammarö',
                                'type' => 'municipality',
                                'legacyAmsTaxonomyId' => '1761',
                                'parentId' => 'EVVp_h6U_GSZ',
                            ),
                        7 =>
                            array(
                                'id' => 'hRDj_PoV_sFU',
                                'name' => 'Karlstad',
                                'type' => 'municipality',
                                'legacyAmsTaxonomyId' => '1780',
                                'parentId' => 'EVVp_h6U_GSZ',
                            ),
                        8 =>
                            array(
                                'id' => 'ocMw_Rz5_B1L',
                                'name' => 'Kil',
                                'type' => 'municipality',
                                'legacyAmsTaxonomyId' => '1715',
                                'parentId' => 'EVVp_h6U_GSZ',
                            ),
                        9 =>
                            array(
                                'id' => 'SVQS_uwJ_m2B',
                                'name' => 'Kristinehamn',
                                'type' => 'municipality',
                                'legacyAmsTaxonomyId' => '1781',
                                'parentId' => 'EVVp_h6U_GSZ',
                            ),
                        10 =>
                            array(
                                'id' => 'x73h_7rW_mXN',
                                'name' => 'Munkfors',
                                'type' => 'municipality',
                                'legacyAmsTaxonomyId' => '1762',
                                'parentId' => 'EVVp_h6U_GSZ',
                            ),
                        11 =>
                            array(
                                'id' => 'mPt5_3QD_LTM',
                                'name' => 'Storfors',
                                'type' => 'municipality',
                                'legacyAmsTaxonomyId' => '1760',
                                'parentId' => 'EVVp_h6U_GSZ',
                            ),
                        12 =>
                            array(
                                'id' => 'oqNH_cnJ_Tdi',
                                'name' => 'Sunne',
                                'type' => 'municipality',
                                'legacyAmsTaxonomyId' => '1766',
                                'parentId' => 'EVVp_h6U_GSZ',
                            ),
                        13 =>
                            array(
                                'id' => 'wmxQ_Guc_dsy',
                                'name' => 'Säffle',
                                'type' => 'municipality',
                                'legacyAmsTaxonomyId' => '1785',
                                'parentId' => 'EVVp_h6U_GSZ',
                            ),
                        14 =>
                            array(
                                'id' => 'hQdb_zn9_Sok',
                                'name' => 'Torsby',
                                'type' => 'municipality',
                                'legacyAmsTaxonomyId' => '1737',
                                'parentId' => 'EVVp_h6U_GSZ',
                            ),
                        15 =>
                            array(
                                'id' => 'ymBu_aFc_QJA',
                                'name' => 'Årjäng',
                                'type' => 'municipality',
                                'legacyAmsTaxonomyId' => '1765',
                                'parentId' => 'EVVp_h6U_GSZ',
                            ),
                    ),
            ),
        15 =>
            array(
                'id' => 'g5Tt_CAV_zBd',
                'name' => 'Västerbottens län',
                'type' => 'region',
                'legacyAmsTaxonomyId' => '24',
                'items' =>
                    array(
                        0 =>
                            array(
                                'id' => 'vQkf_tw2_CmR',
                                'name' => 'Bjurholm',
                                'type' => 'municipality',
                                'legacyAmsTaxonomyId' => '2403',
                                'parentId' => 'g5Tt_CAV_zBd',
                            ),
                        1 =>
                            array(
                                'id' => 'tSkf_Tbn_rHk',
                                'name' => 'Dorotea',
                                'type' => 'municipality',
                                'legacyAmsTaxonomyId' => '2425',
                                'parentId' => 'g5Tt_CAV_zBd',
                            ),
                        2 =>
                            array(
                                'id' => '7rpN_naz_3Uz',
                                'name' => 'Lycksele',
                                'type' => 'municipality',
                                'legacyAmsTaxonomyId' => '2481',
                                'parentId' => 'g5Tt_CAV_zBd',
                            ),
                        3 =>
                            array(
                                'id' => '7sHJ_YCE_5Zv',
                                'name' => 'Malå',
                                'type' => 'municipality',
                                'legacyAmsTaxonomyId' => '2418',
                                'parentId' => 'g5Tt_CAV_zBd',
                            ),
                        4 =>
                            array(
                                'id' => 'wMab_4Zs_wpM',
                                'name' => 'Nordmaling',
                                'type' => 'municipality',
                                'legacyAmsTaxonomyId' => '2401',
                                'parentId' => 'g5Tt_CAV_zBd',
                            ),
                        5 =>
                            array(
                                'id' => 'XmpG_vPQ_K7T',
                                'name' => 'Norsjö',
                                'type' => 'municipality',
                                'legacyAmsTaxonomyId' => '2417',
                                'parentId' => 'g5Tt_CAV_zBd',
                            ),
                        6 =>
                            array(
                                'id' => 'p8Mv_377_bxp',
                                'name' => 'Robertsfors',
                                'type' => 'municipality',
                                'legacyAmsTaxonomyId' => '2409',
                                'parentId' => 'g5Tt_CAV_zBd',
                            ),
                        7 =>
                            array(
                                'id' => 'kicB_LgH_2Dk',
                                'name' => 'Skellefteå',
                                'type' => 'municipality',
                                'legacyAmsTaxonomyId' => '2482',
                                'parentId' => 'g5Tt_CAV_zBd',
                            ),
                        8 =>
                            array(
                                'id' => 'VM7L_yJK_Doo',
                                'name' => 'Sorsele',
                                'type' => 'municipality',
                                'legacyAmsTaxonomyId' => '2422',
                                'parentId' => 'g5Tt_CAV_zBd',
                            ),
                        9 =>
                            array(
                                'id' => 'gQgT_BAk_fMu',
                                'name' => 'Storuman',
                                'type' => 'municipality',
                                'legacyAmsTaxonomyId' => '2421',
                                'parentId' => 'g5Tt_CAV_zBd',
                            ),
                        10 =>
                            array(
                                'id' => 'QiGt_BLu_amP',
                                'name' => 'Umeå',
                                'type' => 'municipality',
                                'legacyAmsTaxonomyId' => '2480',
                                'parentId' => 'g5Tt_CAV_zBd',
                            ),
                        11 =>
                            array(
                                'id' => 'tUnW_mFo_Hvi',
                                'name' => 'Vilhelmina',
                                'type' => 'municipality',
                                'legacyAmsTaxonomyId' => '2462',
                                'parentId' => 'g5Tt_CAV_zBd',
                            ),
                        12 =>
                            array(
                                'id' => 'izT6_zWu_tta',
                                'name' => 'Vindeln',
                                'type' => 'municipality',
                                'legacyAmsTaxonomyId' => '2404',
                                'parentId' => 'g5Tt_CAV_zBd',
                            ),
                        13 =>
                            array(
                                'id' => 'utQc_6xq_Dfm',
                                'name' => 'Vännäs',
                                'type' => 'municipality',
                                'legacyAmsTaxonomyId' => '2460',
                                'parentId' => 'g5Tt_CAV_zBd',
                            ),
                        14 =>
                            array(
                                'id' => 'xLdL_tMA_JJv',
                                'name' => 'Åsele',
                                'type' => 'municipality',
                                'legacyAmsTaxonomyId' => '2463',
                                'parentId' => 'g5Tt_CAV_zBd',
                            ),
                    ),
            ),
        16 =>
            array(
                'id' => 'NvUF_SP1_1zo',
                'name' => 'Västernorrlands län',
                'type' => 'region',
                'legacyAmsTaxonomyId' => '22',
                'items' =>
                    array(
                        0 =>
                            array(
                                'id' => 'uYRx_AdM_r4A',
                                'name' => 'Härnösand',
                                'type' => 'municipality',
                                'legacyAmsTaxonomyId' => '2280',
                                'parentId' => 'NvUF_SP1_1zo',
                            ),
                        1 =>
                            array(
                                'id' => 'yR8g_7Jz_HBZ',
                                'name' => 'Kramfors',
                                'type' => 'municipality',
                                'legacyAmsTaxonomyId' => '2282',
                                'parentId' => 'NvUF_SP1_1zo',
                            ),
                        2 =>
                            array(
                                'id' => 'v5y4_YPe_TMZ',
                                'name' => 'Sollefteå',
                                'type' => 'municipality',
                                'legacyAmsTaxonomyId' => '2283',
                                'parentId' => 'NvUF_SP1_1zo',
                            ),
                        3 =>
                            array(
                                'id' => 'dJbx_FWY_tK6',
                                'name' => 'Sundsvall',
                                'type' => 'municipality',
                                'legacyAmsTaxonomyId' => '2281',
                                'parentId' => 'NvUF_SP1_1zo',
                            ),
                        4 =>
                            array(
                                'id' => 'oJ8D_rq6_kjt',
                                'name' => 'Timrå',
                                'type' => 'municipality',
                                'legacyAmsTaxonomyId' => '2262',
                                'parentId' => 'NvUF_SP1_1zo',
                            ),
                        5 =>
                            array(
                                'id' => 'swVa_cyS_EMN',
                                'name' => 'Ånge',
                                'type' => 'municipality',
                                'legacyAmsTaxonomyId' => '2260',
                                'parentId' => 'NvUF_SP1_1zo',
                            ),
                        6 =>
                            array(
                                'id' => 'zBmE_n6s_MnQ',
                                'name' => 'Örnsköldsvik',
                                'type' => 'municipality',
                                'legacyAmsTaxonomyId' => '2284',
                                'parentId' => 'NvUF_SP1_1zo',
                            ),
                    ),
            ),
        17 =>
            array(
                'id' => 'G6DV_fKE_Viz',
                'name' => 'Västmanlands län',
                'type' => 'region',
                'legacyAmsTaxonomyId' => '19',
                'items' =>
                    array(
                        0 =>
                            array(
                                'id' => 'Jkyb_5MQ_7pB',
                                'name' => 'Arboga',
                                'type' => 'municipality',
                                'legacyAmsTaxonomyId' => '1984',
                                'parentId' => 'G6DV_fKE_Viz',
                            ),
                        1 =>
                            array(
                                'id' => '7D9G_yrX_AGJ',
                                'name' => 'Fagersta',
                                'type' => 'municipality',
                                'legacyAmsTaxonomyId' => '1982',
                                'parentId' => 'G6DV_fKE_Viz',
                            ),
                        2 =>
                            array(
                                'id' => 'oXYf_HmD_ddE',
                                'name' => 'Hallstahammar',
                                'type' => 'municipality',
                                'legacyAmsTaxonomyId' => '1961',
                                'parentId' => 'G6DV_fKE_Viz',
                            ),
                        3 =>
                            array(
                                'id' => 'Fac5_h7a_UoM',
                                'name' => 'Kungsör',
                                'type' => 'municipality',
                                'legacyAmsTaxonomyId' => '1960',
                                'parentId' => 'G6DV_fKE_Viz',
                            ),
                        4 =>
                            array(
                                'id' => '4Taz_AuG_tSm',
                                'name' => 'Köping',
                                'type' => 'municipality',
                                'legacyAmsTaxonomyId' => '1983',
                                'parentId' => 'G6DV_fKE_Viz',
                            ),
                        5 =>
                            array(
                                'id' => 'jbVe_Cps_vtd',
                                'name' => 'Norberg',
                                'type' => 'municipality',
                                'legacyAmsTaxonomyId' => '1962',
                                'parentId' => 'G6DV_fKE_Viz',
                            ),
                        6 =>
                            array(
                                'id' => 'dAen_yTK_tqz',
                                'name' => 'Sala',
                                'type' => 'municipality',
                                'legacyAmsTaxonomyId' => '1981',
                                'parentId' => 'G6DV_fKE_Viz',
                            ),
                        7 =>
                            array(
                                'id' => 'Nufj_vmt_VrH',
                                'name' => 'Skinnskatteberg',
                                'type' => 'municipality',
                                'legacyAmsTaxonomyId' => '1904',
                                'parentId' => 'G6DV_fKE_Viz',
                            ),
                        8 =>
                            array(
                                'id' => 'jfD3_Hdg_UhT',
                                'name' => 'Surahammar',
                                'type' => 'municipality',
                                'legacyAmsTaxonomyId' => '1907',
                                'parentId' => 'G6DV_fKE_Viz',
                            ),
                        9 =>
                            array(
                                'id' => '8deT_FRF_2SP',
                                'name' => 'Västerås',
                                'type' => 'municipality',
                                'legacyAmsTaxonomyId' => '1980',
                                'parentId' => 'G6DV_fKE_Viz',
                            ),
                    ),
            ),
        18 =>
            array(
                'id' => 'zdoY_6u5_Krt',
                'name' => 'Västra Götalands län',
                'type' => 'region',
                'legacyAmsTaxonomyId' => '14',
                'items' =>
                    array(
                        0 =>
                            array(
                                'id' => '17Ug_Btv_mBr',
                                'name' => 'Ale',
                                'type' => 'municipality',
                                'legacyAmsTaxonomyId' => '1440',
                                'parentId' => 'zdoY_6u5_Krt',
                            ),
                        1 =>
                            array(
                                'id' => 'UQ75_1eU_jaC',
                                'name' => 'Alingsås',
                                'type' => 'municipality',
                                'legacyAmsTaxonomyId' => '1489',
                                'parentId' => 'zdoY_6u5_Krt',
                            ),
                        2 =>
                            array(
                                'id' => 'hejM_Jct_XJk',
                                'name' => 'Bengtsfors',
                                'type' => 'municipality',
                                'legacyAmsTaxonomyId' => '1460',
                                'parentId' => 'zdoY_6u5_Krt',
                            ),
                        3 =>
                            array(
                                'id' => 'ypAQ_vTD_KLU',
                                'name' => 'Bollebygd',
                                'type' => 'municipality',
                                'legacyAmsTaxonomyId' => '1443',
                                'parentId' => 'zdoY_6u5_Krt',
                            ),
                        4 =>
                            array(
                                'id' => 'TpRZ_bFL_jhL',
                                'name' => 'Borås',
                                'type' => 'municipality',
                                'legacyAmsTaxonomyId' => '1490',
                                'parentId' => 'zdoY_6u5_Krt',
                            ),
                        5 =>
                            array(
                                'id' => 'NMc9_oEm_yxy',
                                'name' => 'Dals-Ed',
                                'type' => 'municipality',
                                'legacyAmsTaxonomyId' => '1438',
                                'parentId' => 'zdoY_6u5_Krt',
                            ),
                        6 =>
                            array(
                                'id' => 'ZzEA_2Fg_Pt2',
                                'name' => 'Essunga',
                                'type' => 'municipality',
                                'legacyAmsTaxonomyId' => '1445',
                                'parentId' => 'zdoY_6u5_Krt',
                            ),
                        7 =>
                            array(
                                'id' => 'ZySF_gif_zE4',
                                'name' => 'Falköping',
                                'type' => 'municipality',
                                'legacyAmsTaxonomyId' => '1499',
                                'parentId' => 'zdoY_6u5_Krt',
                            ),
                        8 =>
                            array(
                                'id' => 'kCHb_icw_W5E',
                                'name' => 'Färgelanda',
                                'type' => 'municipality',
                                'legacyAmsTaxonomyId' => '1439',
                                'parentId' => 'zdoY_6u5_Krt',
                            ),
                        9 =>
                            array(
                                'id' => 'ZNZy_Hh5_gSW',
                                'name' => 'Grästorp',
                                'type' => 'municipality',
                                'legacyAmsTaxonomyId' => '1444',
                                'parentId' => 'zdoY_6u5_Krt',
                            ),
                        10 =>
                            array(
                                'id' => 'roiB_uVV_4Cj',
                                'name' => 'Gullspång',
                                'type' => 'municipality',
                                'legacyAmsTaxonomyId' => '1447',
                                'parentId' => 'zdoY_6u5_Krt',
                            ),
                        11 =>
                            array(
                                'id' => 'PVZL_BQT_XtL',
                                'name' => 'Göteborg',
                                'type' => 'municipality',
                                'legacyAmsTaxonomyId' => '1480',
                                'parentId' => 'zdoY_6u5_Krt',
                            ),
                        12 =>
                            array(
                                'id' => 'txzq_PQY_FGi',
                                'name' => 'Götene',
                                'type' => 'municipality',
                                'legacyAmsTaxonomyId' => '1471',
                                'parentId' => 'zdoY_6u5_Krt',
                            ),
                        13 =>
                            array(
                                'id' => 'J116_VFs_cg6',
                                'name' => 'Herrljunga',
                                'type' => 'municipality',
                                'legacyAmsTaxonomyId' => '1466',
                                'parentId' => 'zdoY_6u5_Krt',
                            ),
                        14 =>
                            array(
                                'id' => 'YbFS_34r_K2v',
                                'name' => 'Hjo',
                                'type' => 'municipality',
                                'legacyAmsTaxonomyId' => '1497',
                                'parentId' => 'zdoY_6u5_Krt',
                            ),
                        15 =>
                            array(
                                'id' => 'dzWW_R3G_6Eh',
                                'name' => 'Härryda',
                                'type' => 'municipality',
                                'legacyAmsTaxonomyId' => '1401',
                                'parentId' => 'zdoY_6u5_Krt',
                            ),
                        16 =>
                            array(
                                'id' => 'e413_94L_hdh',
                                'name' => 'Karlsborg',
                                'type' => 'municipality',
                                'legacyAmsTaxonomyId' => '1446',
                                'parentId' => 'zdoY_6u5_Krt',
                            ),
                        17 =>
                            array(
                                'id' => 'ZkZf_HbK_Mcr',
                                'name' => 'Kungälv',
                                'type' => 'municipality',
                                'legacyAmsTaxonomyId' => '1482',
                                'parentId' => 'zdoY_6u5_Krt',
                            ),
                        18 =>
                            array(
                                'id' => 'yHV7_2Y6_zQx',
                                'name' => 'Lerum',
                                'type' => 'municipality',
                                'legacyAmsTaxonomyId' => '1441',
                                'parentId' => 'zdoY_6u5_Krt',
                            ),
                        19 =>
                            array(
                                'id' => 'FN1Y_asc_D8y',
                                'name' => 'Lidköping',
                                'type' => 'municipality',
                                'legacyAmsTaxonomyId' => '1494',
                                'parentId' => 'zdoY_6u5_Krt',
                            ),
                        20 =>
                            array(
                                'id' => 'YQcE_SNB_Tv3',
                                'name' => 'Lilla Edet',
                                'type' => 'municipality',
                                'legacyAmsTaxonomyId' => '1462',
                                'parentId' => 'zdoY_6u5_Krt',
                            ),
                        21 =>
                            array(
                                'id' => 'z2cX_rjC_zFo',
                                'name' => 'Lysekil',
                                'type' => 'municipality',
                                'legacyAmsTaxonomyId' => '1484',
                                'parentId' => 'zdoY_6u5_Krt',
                            ),
                        22 =>
                            array(
                                'id' => 'Lzpu_thX_Wpa',
                                'name' => 'Mariestad',
                                'type' => 'municipality',
                                'legacyAmsTaxonomyId' => '1493',
                                'parentId' => 'zdoY_6u5_Krt',
                            ),
                        23 =>
                            array(
                                'id' => '7HAb_9or_eFM',
                                'name' => 'Mark',
                                'type' => 'municipality',
                                'legacyAmsTaxonomyId' => '1463',
                                'parentId' => 'zdoY_6u5_Krt',
                            ),
                        24 =>
                            array(
                                'id' => 'tt1B_7rH_vhG',
                                'name' => 'Mellerud',
                                'type' => 'municipality',
                                'legacyAmsTaxonomyId' => '1461',
                                'parentId' => 'zdoY_6u5_Krt',
                            ),
                        25 =>
                            array(
                                'id' => '96Dh_3sQ_RFb',
                                'name' => 'Munkedal',
                                'type' => 'municipality',
                                'legacyAmsTaxonomyId' => '1430',
                                'parentId' => 'zdoY_6u5_Krt',
                            ),
                        26 =>
                            array(
                                'id' => 'mc45_ki9_Bv3',
                                'name' => 'Mölndal',
                                'type' => 'municipality',
                                'legacyAmsTaxonomyId' => '1481',
                                'parentId' => 'zdoY_6u5_Krt',
                            ),
                        27 =>
                            array(
                                'id' => 'tmAp_ykH_N6k',
                                'name' => 'Orust',
                                'type' => 'municipality',
                                'legacyAmsTaxonomyId' => '1421',
                                'parentId' => 'zdoY_6u5_Krt',
                            ),
                        28 =>
                            array(
                                'id' => 'CCiR_sXa_BVW',
                                'name' => 'Partille',
                                'type' => 'municipality',
                                'legacyAmsTaxonomyId' => '1402',
                                'parentId' => 'zdoY_6u5_Krt',
                            ),
                        29 =>
                            array(
                                'id' => 'k1SK_gxg_dW4',
                                'name' => 'Skara',
                                'type' => 'municipality',
                                'legacyAmsTaxonomyId' => '1495',
                                'parentId' => 'zdoY_6u5_Krt',
                            ),
                        30 =>
                            array(
                                'id' => 'fqAy_4ji_Lz2',
                                'name' => 'Skövde',
                                'type' => 'municipality',
                                'legacyAmsTaxonomyId' => '1496',
                                'parentId' => 'zdoY_6u5_Krt',
                            ),
                        31 =>
                            array(
                                'id' => 'aKkp_sEX_cVM',
                                'name' => 'Sotenäs',
                                'type' => 'municipality',
                                'legacyAmsTaxonomyId' => '1427',
                                'parentId' => 'zdoY_6u5_Krt',
                            ),
                        32 =>
                            array(
                                'id' => 'wHrG_FBH_hoD',
                                'name' => 'Stenungsund',
                                'type' => 'municipality',
                                'legacyAmsTaxonomyId' => '1415',
                                'parentId' => 'zdoY_6u5_Krt',
                            ),
                        33 =>
                            array(
                                'id' => 'PAxT_FLT_3Kq',
                                'name' => 'Strömstad',
                                'type' => 'municipality',
                                'legacyAmsTaxonomyId' => '1486',
                                'parentId' => 'zdoY_6u5_Krt',
                            ),
                        34 =>
                            array(
                                'id' => 'rZWC_pXf_ySZ',
                                'name' => 'Svenljunga',
                                'type' => 'municipality',
                                'legacyAmsTaxonomyId' => '1465',
                                'parentId' => 'zdoY_6u5_Krt',
                            ),
                        35 =>
                            array(
                                'id' => 'qffn_qY4_DLk',
                                'name' => 'Tanum',
                                'type' => 'municipality',
                                'legacyAmsTaxonomyId' => '1435',
                                'parentId' => 'zdoY_6u5_Krt',
                            ),
                        36 =>
                            array(
                                'id' => 'aLFZ_NHw_atB',
                                'name' => 'Tibro',
                                'type' => 'municipality',
                                'legacyAmsTaxonomyId' => '1472',
                                'parentId' => 'zdoY_6u5_Krt',
                            ),
                        37 =>
                            array(
                                'id' => 'Zsf5_vpP_Bs4',
                                'name' => 'Tidaholm',
                                'type' => 'municipality',
                                'legacyAmsTaxonomyId' => '1498',
                                'parentId' => 'zdoY_6u5_Krt',
                            ),
                        38 =>
                            array(
                                'id' => 'TbL3_HmF_gnx',
                                'name' => 'Tjörn',
                                'type' => 'municipality',
                                'legacyAmsTaxonomyId' => '1419',
                                'parentId' => 'zdoY_6u5_Krt',
                            ),
                        39 =>
                            array(
                                'id' => 'SEje_LdC_9qN',
                                'name' => 'Tranemo',
                                'type' => 'municipality',
                                'legacyAmsTaxonomyId' => '1452',
                                'parentId' => 'zdoY_6u5_Krt',
                            ),
                        40 =>
                            array(
                                'id' => 'CSy8_41F_YvX',
                                'name' => 'Trollhättan',
                                'type' => 'municipality',
                                'legacyAmsTaxonomyId' => '1488',
                                'parentId' => 'zdoY_6u5_Krt',
                            ),
                        41 =>
                            array(
                                'id' => 'a15F_gAH_pn6',
                                'name' => 'Töreboda',
                                'type' => 'municipality',
                                'legacyAmsTaxonomyId' => '1473',
                                'parentId' => 'zdoY_6u5_Krt',
                            ),
                        42 =>
                            array(
                                'id' => 'xQc2_SzA_rHK',
                                'name' => 'Uddevalla',
                                'type' => 'municipality',
                                'legacyAmsTaxonomyId' => '1485',
                                'parentId' => 'zdoY_6u5_Krt',
                            ),
                        43 =>
                            array(
                                'id' => 'an4a_8t2_Zpd',
                                'name' => 'Ulricehamn',
                                'type' => 'municipality',
                                'legacyAmsTaxonomyId' => '1491',
                                'parentId' => 'zdoY_6u5_Krt',
                            ),
                        44 =>
                            array(
                                'id' => 'fbHM_yhA_BqS',
                                'name' => 'Vara',
                                'type' => 'municipality',
                                'legacyAmsTaxonomyId' => '1470',
                                'parentId' => 'zdoY_6u5_Krt',
                            ),
                        45 =>
                            array(
                                'id' => 'THif_q6H_MjG',
                                'name' => 'Vänersborg',
                                'type' => 'municipality',
                                'legacyAmsTaxonomyId' => '1487',
                                'parentId' => 'zdoY_6u5_Krt',
                            ),
                        46 =>
                            array(
                                'id' => 'NfFx_5jj_ogg',
                                'name' => 'Vårgårda',
                                'type' => 'municipality',
                                'legacyAmsTaxonomyId' => '1442',
                                'parentId' => 'zdoY_6u5_Krt',
                            ),
                        47 =>
                            array(
                                'id' => 'M1UC_Cnf_r7g',
                                'name' => 'Åmål',
                                'type' => 'municipality',
                                'legacyAmsTaxonomyId' => '1492',
                                'parentId' => 'zdoY_6u5_Krt',
                            ),
                        48 =>
                            array(
                                'id' => 'Zjiv_rhk_oJK',
                                'name' => 'Öckerö',
                                'type' => 'municipality',
                                'legacyAmsTaxonomyId' => '1407',
                                'parentId' => 'zdoY_6u5_Krt',
                            ),
                    ),
            ),
        19 =>
            array(
                'id' => 'xTCk_nT5_Zjm',
                'name' => 'Örebro län',
                'type' => 'region',
                'legacyAmsTaxonomyId' => '18',
                'items' =>
                    array(
                        0 =>
                            array(
                                'id' => 'dbF7_Ecz_CWF',
                                'name' => 'Askersund',
                                'type' => 'municipality',
                                'legacyAmsTaxonomyId' => '1882',
                                'parentId' => 'xTCk_nT5_Zjm',
                            ),
                        1 =>
                            array(
                                'id' => 'pvzC_muj_rcq',
                                'name' => 'Degerfors',
                                'type' => 'municipality',
                                'legacyAmsTaxonomyId' => '1862',
                                'parentId' => 'xTCk_nT5_Zjm',
                            ),
                        2 =>
                            array(
                                'id' => 'Ak9V_rby_yYS',
                                'name' => 'Hallsberg',
                                'type' => 'municipality',
                                'legacyAmsTaxonomyId' => '1861',
                                'parentId' => 'xTCk_nT5_Zjm',
                            ),
                        3 =>
                            array(
                                'id' => 'sCbY_r36_xhs',
                                'name' => 'Hällefors',
                                'type' => 'municipality',
                                'legacyAmsTaxonomyId' => '1863',
                                'parentId' => 'xTCk_nT5_Zjm',
                            ),
                        4 =>
                            array(
                                'id' => 'wgJm_upX_z5W',
                                'name' => 'Karlskoga',
                                'type' => 'municipality',
                                'legacyAmsTaxonomyId' => '1883',
                                'parentId' => 'xTCk_nT5_Zjm',
                            ),
                        5 =>
                            array(
                                'id' => 'viCA_36P_pQp',
                                'name' => 'Kumla',
                                'type' => 'municipality',
                                'legacyAmsTaxonomyId' => '1881',
                                'parentId' => 'xTCk_nT5_Zjm',
                            ),
                        6 =>
                            array(
                                'id' => 'oYEQ_m8Q_unY',
                                'name' => 'Laxå',
                                'type' => 'municipality',
                                'legacyAmsTaxonomyId' => '1860',
                                'parentId' => 'xTCk_nT5_Zjm',
                            ),
                        7 =>
                            array(
                                'id' => 'yaHU_E7z_YnE',
                                'name' => 'Lekeberg',
                                'type' => 'municipality',
                                'legacyAmsTaxonomyId' => '1814',
                                'parentId' => 'xTCk_nT5_Zjm',
                            ),
                        8 =>
                            array(
                                'id' => 'JQE9_189_Ska',
                                'name' => 'Lindesberg',
                                'type' => 'municipality',
                                'legacyAmsTaxonomyId' => '1885',
                                'parentId' => 'xTCk_nT5_Zjm',
                            ),
                        9 =>
                            array(
                                'id' => 'eF2n_714_hSU',
                                'name' => 'Ljusnarsberg',
                                'type' => 'municipality',
                                'legacyAmsTaxonomyId' => '1864',
                                'parentId' => 'xTCk_nT5_Zjm',
                            ),
                        10 =>
                            array(
                                'id' => 'WFXN_hsU_gmx',
                                'name' => 'Nora',
                                'type' => 'municipality',
                                'legacyAmsTaxonomyId' => '1884',
                                'parentId' => 'xTCk_nT5_Zjm',
                            ),
                        11 =>
                            array(
                                'id' => 'kuMn_feU_hXx',
                                'name' => 'Örebro',
                                'type' => 'municipality',
                                'legacyAmsTaxonomyId' => '1880',
                                'parentId' => 'xTCk_nT5_Zjm',
                            ),
                    ),
            ),
        20 =>
            array(
                'id' => 'oLT3_Q9p_3nn',
                'name' => 'Östergötlands län',
                'type' => 'region',
                'legacyAmsTaxonomyId' => '05',
                'items' =>
                    array(
                        0 =>
                            array(
                                'id' => 'e5LB_m9V_TnT',
                                'name' => 'Boxholm',
                                'type' => 'municipality',
                                'legacyAmsTaxonomyId' => '0560',
                                'parentId' => 'oLT3_Q9p_3nn',
                            ),
                        1 =>
                            array(
                                'id' => 'dMFe_J6W_iJv',
                                'name' => 'Finspång',
                                'type' => 'municipality',
                                'legacyAmsTaxonomyId' => '0562',
                                'parentId' => 'oLT3_Q9p_3nn',
                            ),
                        2 =>
                            array(
                                'id' => 'U4XJ_hYF_FBA',
                                'name' => 'Kinda',
                                'type' => 'municipality',
                                'legacyAmsTaxonomyId' => '0513',
                                'parentId' => 'oLT3_Q9p_3nn',
                            ),
                        3 =>
                            array(
                                'id' => 'bm2x_1mr_Qhx',
                                'name' => 'Linköping',
                                'type' => 'municipality',
                                'legacyAmsTaxonomyId' => '0580',
                                'parentId' => 'oLT3_Q9p_3nn',
                            ),
                        4 =>
                            array(
                                'id' => 'stqv_JGB_x8A',
                                'name' => 'Mjölby',
                                'type' => 'municipality',
                                'legacyAmsTaxonomyId' => '0586',
                                'parentId' => 'oLT3_Q9p_3nn',
                            ),
                        5 =>
                            array(
                                'id' => 'E1MC_1uG_phm',
                                'name' => 'Motala',
                                'type' => 'municipality',
                                'legacyAmsTaxonomyId' => '0583',
                                'parentId' => 'oLT3_Q9p_3nn',
                            ),
                        6 =>
                            array(
                                'id' => 'SYty_Yho_JAF',
                                'name' => 'Norrköping',
                                'type' => 'municipality',
                                'legacyAmsTaxonomyId' => '0581',
                                'parentId' => 'oLT3_Q9p_3nn',
                            ),
                        7 =>
                            array(
                                'id' => 'Pcv9_yYh_Uw8',
                                'name' => 'Söderköping',
                                'type' => 'municipality',
                                'legacyAmsTaxonomyId' => '0582',
                                'parentId' => 'oLT3_Q9p_3nn',
                            ),
                        8 =>
                            array(
                                'id' => 'VcCU_Y86_eKU',
                                'name' => 'Vadstena',
                                'type' => 'municipality',
                                'legacyAmsTaxonomyId' => '0584',
                                'parentId' => 'oLT3_Q9p_3nn',
                            ),
                        9 =>
                            array(
                                'id' => 'Sb3D_iGB_aXu',
                                'name' => 'Valdemarsvik',
                                'type' => 'municipality',
                                'legacyAmsTaxonomyId' => '0563',
                                'parentId' => 'oLT3_Q9p_3nn',
                            ),
                        10 =>
                            array(
                                'id' => 'vRRz_nLT_vYv',
                                'name' => 'Ydre',
                                'type' => 'municipality',
                                'legacyAmsTaxonomyId' => '0512',
                                'parentId' => 'oLT3_Q9p_3nn',
                            ),
                        11 =>
                            array(
                                'id' => 'bFWo_FRJ_x2T',
                                'name' => 'Åtvidaberg',
                                'type' => 'municipality',
                                'legacyAmsTaxonomyId' => '0561',
                                'parentId' => 'oLT3_Q9p_3nn',
                            ),
                        12 =>
                            array(
                                'id' => 'Fu8g_29u_3xF',
                                'name' => 'Ödeshög',
                                'type' => 'municipality',
                                'legacyAmsTaxonomyId' => '0509',
                                'parentId' => 'oLT3_Q9p_3nn',
                            ),
                    ),
            ),
    );

    public $occupation = array(
        0 =>
            array(
                'id' => 'X82t_awd_Qyc',
                'name' => 'Administration, ekonomi, juridik',
                'type' => 'occupation-field',
                'legacyAmsTaxonomyId' => '1',
                'items' =>
                    array(
                        0 =>
                            array(
                                'id' => 'q8wL_kdi_WaW',
                                'name' => 'Advokater',
                                'type' => 'ssyk-level-4',
                                'legacyAmsTaxonomyId' => '2611',
                                'parentId' => 'X82t_awd_Qyc',
                            ),
                        1 =>
                            array(
                                'id' => 'DZVN_v5g_Fco',
                                'name' => 'Affärs- och företagsjurister',
                                'type' => 'ssyk-level-4',
                                'legacyAmsTaxonomyId' => '2614',
                                'parentId' => 'X82t_awd_Qyc',
                            ),
                        2 =>
                            array(
                                'id' => 'fsnw_ZCu_v2U',
                                'name' => 'Arbetsförmedlare',
                                'type' => 'ssyk-level-4',
                                'legacyAmsTaxonomyId' => '3333',
                                'parentId' => 'X82t_awd_Qyc',
                            ),
                        3 =>
                            array(
                                'id' => 'sXgV_QFg_vpb',
                                'name' => 'Arkeologer och specialister inom humaniora m.m.',
                                'type' => 'ssyk-level-4',
                                'legacyAmsTaxonomyId' => '2623',
                                'parentId' => 'X82t_awd_Qyc',
                            ),
                        4 =>
                            array(
                                'id' => 'TQkt_eeK_eNp',
                                'name' => 'Arkiv- och biblioteksassistenter m.fl.',
                                'type' => 'ssyk-level-4',
                                'legacyAmsTaxonomyId' => '4410',
                                'parentId' => 'X82t_awd_Qyc',
                            ),
                        5 =>
                            array(
                                'id' => 'MGk3_LvL_AU2',
                                'name' => 'Backofficepersonal m.fl.',
                                'type' => 'ssyk-level-4',
                                'legacyAmsTaxonomyId' => '4113',
                                'parentId' => 'X82t_awd_Qyc',
                            ),
                        6 =>
                            array(
                                'id' => 'vCAb_uuo_ek5',
                                'name' => 'Chefssekreterare och VD-assistenter m.fl.',
                                'type' => 'ssyk-level-4',
                                'legacyAmsTaxonomyId' => '3343',
                                'parentId' => 'X82t_awd_Qyc',
                            ),
                        7 =>
                            array(
                                'id' => 'Uw4n_UB2_RCW',
                                'name' => 'Controller',
                                'type' => 'ssyk-level-4',
                                'legacyAmsTaxonomyId' => '2412',
                                'parentId' => 'X82t_awd_Qyc',
                            ),
                        8 =>
                            array(
                                'id' => 'qsJJ_EYo_fzA',
                                'name' => 'Domare',
                                'type' => 'ssyk-level-4',
                                'legacyAmsTaxonomyId' => '2612',
                                'parentId' => 'X82t_awd_Qyc',
                            ),
                        9 =>
                            array(
                                'id' => 'zKvJ_GnC_Szx',
                                'name' => 'Domstols- och juristsekreterare m.fl.',
                                'type' => 'ssyk-level-4',
                                'legacyAmsTaxonomyId' => '3342',
                                'parentId' => 'X82t_awd_Qyc',
                            ),
                        10 =>
                            array(
                                'id' => 'ij8k_EwC_zyB',
                                'name' => 'Ekonomiassistenter m.fl.',
                                'type' => 'ssyk-level-4',
                                'legacyAmsTaxonomyId' => '4111',
                                'parentId' => 'X82t_awd_Qyc',
                            ),
                        11 =>
                            array(
                                'id' => 'pTr9_RBT_9ur',
                                'name' => 'Finansanalytiker och investeringsrådgivare m.fl.',
                                'type' => 'ssyk-level-4',
                                'legacyAmsTaxonomyId' => '2413',
                                'parentId' => 'X82t_awd_Qyc',
                            ),
                        12 =>
                            array(
                                'id' => '9dLz_BCK_oDA',
                                'name' => 'Försäkringssäljare och försäkringsrådgivare',
                                'type' => 'ssyk-level-4',
                                'legacyAmsTaxonomyId' => '3321',
                                'parentId' => 'X82t_awd_Qyc',
                            ),
                        13 =>
                            array(
                                'id' => 'JfYV_ZGg_6rm',
                                'name' => 'Förvaltnings- och organisationsjurister',
                                'type' => 'ssyk-level-4',
                                'legacyAmsTaxonomyId' => '2615',
                                'parentId' => 'X82t_awd_Qyc',
                            ),
                        14 =>
                            array(
                                'id' => 'H2Zj_eL9_x28',
                                'name' => 'Gruppledare för kontorspersonal',
                                'type' => 'ssyk-level-4',
                                'legacyAmsTaxonomyId' => '3341',
                                'parentId' => 'X82t_awd_Qyc',
                            ),
                        15 =>
                            array(
                                'id' => 'k1Nx_auG_sNh',
                                'name' => 'Informatörer, kommunikatörer och PR-specialister',
                                'type' => 'ssyk-level-4',
                                'legacyAmsTaxonomyId' => '2432',
                                'parentId' => 'X82t_awd_Qyc',
                            ),
                        16 =>
                            array(
                                'id' => 'JAFv_ZaP_tDG',
                                'name' => 'Inkasserare och pantlånare m.fl.',
                                'type' => 'ssyk-level-4',
                                'legacyAmsTaxonomyId' => '4212',
                                'parentId' => 'X82t_awd_Qyc',
                            ),
                        17 =>
                            array(
                                'id' => 'ByrL_ANp_UwV',
                                'name' => 'Kontorsreceptionister',
                                'type' => 'ssyk-level-4',
                                'legacyAmsTaxonomyId' => '4225',
                                'parentId' => 'X82t_awd_Qyc',
                            ),
                        18 =>
                            array(
                                'id' => 'Qo7p_wjf_gtv',
                                'name' => 'Lednings- och organisationsutvecklare',
                                'type' => 'ssyk-level-4',
                                'legacyAmsTaxonomyId' => '2421',
                                'parentId' => 'X82t_awd_Qyc',
                            ),
                        19 =>
                            array(
                                'id' => 'L7eh_ihX_vM5',
                                'name' => 'Löne- och personaladministratörer',
                                'type' => 'ssyk-level-4',
                                'legacyAmsTaxonomyId' => '4112',
                                'parentId' => 'X82t_awd_Qyc',
                            ),
                        20 =>
                            array(
                                'id' => '2kLc_pto_DpV',
                                'name' => 'Medicinska sekreterare, vårdadministratörer m.fl.',
                                'type' => 'ssyk-level-4',
                                'legacyAmsTaxonomyId' => '4117',
                                'parentId' => 'X82t_awd_Qyc',
                            ),
                        21 =>
                            array(
                                'id' => 'aQpg_E2T_cWq',
                                'name' => 'Mäklare inom finans',
                                'type' => 'ssyk-level-4',
                                'legacyAmsTaxonomyId' => '3311',
                                'parentId' => 'X82t_awd_Qyc',
                            ),
                        22 =>
                            array(
                                'id' => 'WZCM_nfS_eAk',
                                'name' => 'Nationalekonomer och makroanalytiker m.fl.',
                                'type' => 'ssyk-level-4',
                                'legacyAmsTaxonomyId' => '2415',
                                'parentId' => 'X82t_awd_Qyc',
                            ),
                        23 =>
                            array(
                                'id' => 'bjqk_F3A_5Hk',
                                'name' => 'Personal- och HR-specialister',
                                'type' => 'ssyk-level-4',
                                'legacyAmsTaxonomyId' => '2423',
                                'parentId' => 'X82t_awd_Qyc',
                            ),
                        24 =>
                            array(
                                'id' => 'vPP6_rsw_dck',
                                'name' => 'Planerare och utredare m.fl.',
                                'type' => 'ssyk-level-4',
                                'legacyAmsTaxonomyId' => '2422',
                                'parentId' => 'X82t_awd_Qyc',
                            ),
                        25 =>
                            array(
                                'id' => 'q81z_3oD_1qu',
                                'name' => 'Redovisningsekonomer',
                                'type' => 'ssyk-level-4',
                                'legacyAmsTaxonomyId' => '3313',
                                'parentId' => 'X82t_awd_Qyc',
                            ),
                        26 =>
                            array(
                                'id' => 'cRmd_536_pT1',
                                'name' => 'Revisorer m.fl.',
                                'type' => 'ssyk-level-4',
                                'legacyAmsTaxonomyId' => '2411',
                                'parentId' => 'X82t_awd_Qyc',
                            ),
                        27 =>
                            array(
                                'id' => 'Ru4W_zn2_LEz',
                                'name' => 'Skadereglerare och värderare',
                                'type' => 'ssyk-level-4',
                                'legacyAmsTaxonomyId' => '3314',
                                'parentId' => 'X82t_awd_Qyc',
                            ),
                        28 =>
                            array(
                                'id' => '4W6S_1kA_nrv',
                                'name' => 'Skattehandläggare',
                                'type' => 'ssyk-level-4',
                                'legacyAmsTaxonomyId' => '3352',
                                'parentId' => 'X82t_awd_Qyc',
                            ),
                        29 =>
                            array(
                                'id' => 'ZQTR_hVC_QhJ',
                                'name' => 'Skolassistenter m.fl.',
                                'type' => 'ssyk-level-4',
                                'legacyAmsTaxonomyId' => '4116',
                                'parentId' => 'X82t_awd_Qyc',
                            ),
                        30 =>
                            array(
                                'id' => 'ZQiZ_6Kd_D3a',
                                'name' => 'Socialförsäkringshandläggare',
                                'type' => 'ssyk-level-4',
                                'legacyAmsTaxonomyId' => '3353',
                                'parentId' => 'X82t_awd_Qyc',
                            ),
                        31 =>
                            array(
                                'id' => 'jv1x_tpK_32p',
                                'name' => 'Statistiker',
                                'type' => 'ssyk-level-4',
                                'legacyAmsTaxonomyId' => '2122',
                                'parentId' => 'X82t_awd_Qyc',
                            ),
                        32 =>
                            array(
                                'id' => '4aPu_2nd_8X6',
                                'name' => 'Telefonister',
                                'type' => 'ssyk-level-4',
                                'legacyAmsTaxonomyId' => '4223',
                                'parentId' => 'X82t_awd_Qyc',
                            ),
                        33 =>
                            array(
                                'id' => 'Bbkh_nrm_2J8',
                                'name' => 'Traders och fondförvaltare',
                                'type' => 'ssyk-level-4',
                                'legacyAmsTaxonomyId' => '2414',
                                'parentId' => 'X82t_awd_Qyc',
                            ),
                        34 =>
                            array(
                                'id' => '6aak_8eh_iwT',
                                'name' => 'Åklagare',
                                'type' => 'ssyk-level-4',
                                'legacyAmsTaxonomyId' => '2613',
                                'parentId' => 'X82t_awd_Qyc',
                            ),
                        35 =>
                            array(
                                'id' => 'Y6yY_SuR_hVh',
                                'name' => 'Övriga ekonomer',
                                'type' => 'ssyk-level-4',
                                'legacyAmsTaxonomyId' => '2419',
                                'parentId' => 'X82t_awd_Qyc',
                            ),
                        36 =>
                            array(
                                'id' => 'oEmP_NC1_sXE',
                                'name' => 'Övriga handläggare',
                                'type' => 'ssyk-level-4',
                                'legacyAmsTaxonomyId' => '3359',
                                'parentId' => 'X82t_awd_Qyc',
                            ),
                        37 =>
                            array(
                                'id' => 'br6a_VVS_V3y',
                                'name' => 'Övriga jurister',
                                'type' => 'ssyk-level-4',
                                'legacyAmsTaxonomyId' => '2619',
                                'parentId' => 'X82t_awd_Qyc',
                            ),
                        38 =>
                            array(
                                'id' => 'eQ4M_CNm_ozj',
                                'name' => 'Övriga kontorsassistenter och sekreterare',
                                'type' => 'ssyk-level-4',
                                'legacyAmsTaxonomyId' => '4119',
                                'parentId' => 'X82t_awd_Qyc',
                            ),
                    ),
            ),
        1 =>
            array(
                'id' => 'j7Cq_ZJe_GkT',
                'name' => 'Bygg och anläggning',
                'type' => 'occupation-field',
                'legacyAmsTaxonomyId' => '2',
                'items' =>
                    array(
                        0 =>
                            array(
                                'id' => 'bZ4J_riZ_zK6',
                                'name' => 'Anläggningsarbetare',
                                'type' => 'ssyk-level-4',
                                'legacyAmsTaxonomyId' => '7114',
                                'parentId' => 'j7Cq_ZJe_GkT',
                            ),
                        1 =>
                            array(
                                'id' => 'DPPw_4wa_AsH',
                                'name' => 'Anläggningsdykare',
                                'type' => 'ssyk-level-4',
                                'legacyAmsTaxonomyId' => '7115',
                                'parentId' => 'j7Cq_ZJe_GkT',
                            ),
                        2 =>
                            array(
                                'id' => '3ZtN_hhA_SM7',
                                'name' => 'Anläggningsmaskinförare m.fl.',
                                'type' => 'ssyk-level-4',
                                'legacyAmsTaxonomyId' => '8342',
                                'parentId' => 'j7Cq_ZJe_GkT',
                            ),
                        3 =>
                            array(
                                'id' => 'w6ud_quG_dgh',
                                'name' => 'Arbetsledare inom bygg, anläggning och gruva',
                                'type' => 'ssyk-level-4',
                                'legacyAmsTaxonomyId' => '3121',
                                'parentId' => 'j7Cq_ZJe_GkT',
                            ),
                        4 =>
                            array(
                                'id' => 'q2Ge_zrQ_zJb',
                                'name' => 'Betongarbetare',
                                'type' => 'ssyk-level-4',
                                'legacyAmsTaxonomyId' => '7113',
                                'parentId' => 'j7Cq_ZJe_GkT',
                            ),
                        5 =>
                            array(
                                'id' => '7zKm_4NW_eey',
                                'name' => 'Brunnsborrare m.fl.',
                                'type' => 'ssyk-level-4',
                                'legacyAmsTaxonomyId' => '8113',
                                'parentId' => 'j7Cq_ZJe_GkT',
                            ),
                        6 =>
                            array(
                                'id' => 'bXfo_4hb_SXx',
                                'name' => 'Byggnads- och ventilationsplåtslagare',
                                'type' => 'ssyk-level-4',
                                'legacyAmsTaxonomyId' => '7213',
                                'parentId' => 'j7Cq_ZJe_GkT',
                            ),
                        7 =>
                            array(
                                'id' => 'XeBP_nMe_pXx',
                                'name' => 'Civilingenjörsyrken inom bygg och anläggning',
                                'type' => 'ssyk-level-4',
                                'legacyAmsTaxonomyId' => '2142',
                                'parentId' => 'j7Cq_ZJe_GkT',
                            ),
                        8 =>
                            array(
                                'id' => 'V79C_DD2_3Gj',
                                'name' => 'Golvläggare',
                                'type' => 'ssyk-level-4',
                                'legacyAmsTaxonomyId' => '7122',
                                'parentId' => 'j7Cq_ZJe_GkT',
                            ),
                        9 =>
                            array(
                                'id' => 'iHrC_aRv_fVm',
                                'name' => 'Grovarbetare inom bygg och anläggning',
                                'type' => 'ssyk-level-4',
                                'legacyAmsTaxonomyId' => '9310',
                                'parentId' => 'j7Cq_ZJe_GkT',
                            ),
                        10 =>
                            array(
                                'id' => 'f71c_gjL_RDq',
                                'name' => 'Gruv- och stenbrottsarbetare',
                                'type' => 'ssyk-level-4',
                                'legacyAmsTaxonomyId' => '8111',
                                'parentId' => 'j7Cq_ZJe_GkT',
                            ),
                        11 =>
                            array(
                                'id' => 'thZP_oR7_WrY',
                                'name' => 'Ingenjörer och tekniker inom bygg och anläggning',
                                'type' => 'ssyk-level-4',
                                'legacyAmsTaxonomyId' => '3112',
                                'parentId' => 'j7Cq_ZJe_GkT',
                            ),
                        12 =>
                            array(
                                'id' => 'cGxX_R9c_kW1',
                                'name' => 'Isoleringsmontörer',
                                'type' => 'ssyk-level-4',
                                'legacyAmsTaxonomyId' => '7123',
                                'parentId' => 'j7Cq_ZJe_GkT',
                            ),
                        13 =>
                            array(
                                'id' => 'XYzP_5Tn_7Ep',
                                'name' => 'Kranförare m.fl.',
                                'type' => 'ssyk-level-4',
                                'legacyAmsTaxonomyId' => '8343',
                                'parentId' => 'j7Cq_ZJe_GkT',
                            ),
                        14 =>
                            array(
                                'id' => '3UzE_P8A_9sS',
                                'name' => 'Kyl- och värmepumpstekniker m.fl.',
                                'type' => 'ssyk-level-4',
                                'legacyAmsTaxonomyId' => '7126',
                                'parentId' => 'j7Cq_ZJe_GkT',
                            ),
                        15 =>
                            array(
                                'id' => 'NnB3_eWH_auo',
                                'name' => 'Murare m.fl.',
                                'type' => 'ssyk-level-4',
                                'legacyAmsTaxonomyId' => '7112',
                                'parentId' => 'j7Cq_ZJe_GkT',
                            ),
                        16 =>
                            array(
                                'id' => 'QKvX_v7r_PNL',
                                'name' => 'Målare',
                                'type' => 'ssyk-level-4',
                                'legacyAmsTaxonomyId' => '7131',
                                'parentId' => 'j7Cq_ZJe_GkT',
                            ),
                        17 =>
                            array(
                                'id' => 'Y4j1_P17_wVA',
                                'name' => 'Ställningsbyggare',
                                'type' => 'ssyk-level-4',
                                'legacyAmsTaxonomyId' => '7116',
                                'parentId' => 'j7Cq_ZJe_GkT',
                            ),
                        18 =>
                            array(
                                'id' => '3g5x_Tm7_8QH',
                                'name' => 'Takmontörer',
                                'type' => 'ssyk-level-4',
                                'legacyAmsTaxonomyId' => '7121',
                                'parentId' => 'j7Cq_ZJe_GkT',
                            ),
                        19 =>
                            array(
                                'id' => '9mJN_VwW_Xjg',
                                'name' => 'Träarbetare, snickare m.fl.',
                                'type' => 'ssyk-level-4',
                                'legacyAmsTaxonomyId' => '7111',
                                'parentId' => 'j7Cq_ZJe_GkT',
                            ),
                        20 =>
                            array(
                                'id' => 'fLKb_bJ3_69p',
                                'name' => 'VVS-montörer m.fl.',
                                'type' => 'ssyk-level-4',
                                'legacyAmsTaxonomyId' => '7125',
                                'parentId' => 'j7Cq_ZJe_GkT',
                            ),
                        21 =>
                            array(
                                'id' => 'AD3U_cFH_rbe',
                                'name' => 'Övriga byggnads- och anläggningsarbetare',
                                'type' => 'ssyk-level-4',
                                'legacyAmsTaxonomyId' => '7119',
                                'parentId' => 'j7Cq_ZJe_GkT',
                            ),
                    ),
            ),
        2 =>
            array(
                'id' => 'bh3H_Y3h_5eD',
                'name' => 'Chefer och verksamhetsledare',
                'type' => 'occupation-field',
                'legacyAmsTaxonomyId' => '20',
                'items' =>
                    array(
                        0 =>
                            array(
                                'id' => '8SPu_K1k_5qR',
                                'name' => 'Chefer inom arkitekt- och ingenjörsverksamhet',
                                'type' => 'ssyk-level-4',
                                'legacyAmsTaxonomyId' => '1340',
                                'parentId' => 'bh3H_Y3h_5eD',
                            ),
                        1 =>
                            array(
                                'id' => '9Mn4_PNA_7Yz',
                                'name' => 'Chefer inom bank, finans och försäkring',
                                'type' => 'ssyk-level-4',
                                'legacyAmsTaxonomyId' => '1610',
                                'parentId' => 'bh3H_Y3h_5eD',
                            ),
                        2 =>
                            array(
                                'id' => 'wby2_mwq_fWV',
                                'name' => 'Chefer inom friskvård, sport och fritid',
                                'type' => 'ssyk-level-4',
                                'legacyAmsTaxonomyId' => '1740',
                                'parentId' => 'bh3H_Y3h_5eD',
                            ),
                        3 =>
                            array(
                                'id' => '1uau_t1u_rDL',
                                'name' => 'Chefer inom förskoleverksamhet',
                                'type' => 'ssyk-level-4',
                                'legacyAmsTaxonomyId' => '1420',
                                'parentId' => 'bh3H_Y3h_5eD',
                            ),
                        4 =>
                            array(
                                'id' => 'z8di_AqX_GBr',
                                'name' => 'Chefer inom grund- och gymnasieskola samt vuxenutbildning',
                                'type' => 'ssyk-level-4',
                                'legacyAmsTaxonomyId' => '1410',
                                'parentId' => 'bh3H_Y3h_5eD',
                            ),
                        5 =>
                            array(
                                'id' => 'Fu4x_7KG_YgC',
                                'name' => 'Chefer inom handel',
                                'type' => 'ssyk-level-4',
                                'legacyAmsTaxonomyId' => '1730',
                                'parentId' => 'bh3H_Y3h_5eD',
                            ),
                        6 =>
                            array(
                                'id' => 'womV_SEj_CAH',
                                'name' => 'Chefer inom hälso- och sjukvård',
                                'type' => 'ssyk-level-4',
                                'legacyAmsTaxonomyId' => '1510',
                                'parentId' => 'bh3H_Y3h_5eD',
                            ),
                        7 =>
                            array(
                                'id' => 'NxXz_fBh_w7j',
                                'name' => 'Chefer inom socialt och kurativt arbete',
                                'type' => 'ssyk-level-4',
                                'legacyAmsTaxonomyId' => '1520',
                                'parentId' => 'bh3H_Y3h_5eD',
                            ),
                        8 =>
                            array(
                                'id' => 'coyZ_Cyv_Srw',
                                'name' => 'Chefer inom äldreomsorg',
                                'type' => 'ssyk-level-4',
                                'legacyAmsTaxonomyId' => '1530',
                                'parentId' => 'bh3H_Y3h_5eD',
                            ),
                        9 =>
                            array(
                                'id' => 'x9mo_1VH_Rps',
                                'name' => 'Chefer och ledare inom trossamfund',
                                'type' => 'ssyk-level-4',
                                'legacyAmsTaxonomyId' => '1540',
                                'parentId' => 'bh3H_Y3h_5eD',
                            ),
                        10 =>
                            array(
                                'id' => 'ajwx_FvL_YuY',
                                'name' => 'Chefstjänstemän i intresseorganisationer',
                                'type' => 'ssyk-level-4',
                                'legacyAmsTaxonomyId' => '1113',
                                'parentId' => 'bh3H_Y3h_5eD',
                            ),
                        11 =>
                            array(
                                'id' => '7mn2_kA9_ftp',
                                'name' => 'Driftchefer inom bygg, anläggning och gruva',
                                'type' => 'ssyk-level-4',
                                'legacyAmsTaxonomyId' => '1360',
                                'parentId' => 'bh3H_Y3h_5eD',
                            ),
                        12 =>
                            array(
                                'id' => 'mZsb_A1K_Gec',
                                'name' => 'Ekonomi- och finanschefer',
                                'type' => 'ssyk-level-4',
                                'legacyAmsTaxonomyId' => '1210',
                                'parentId' => 'bh3H_Y3h_5eD',
                            ),
                        13 =>
                            array(
                                'id' => '4GAs_rKs_2Ne',
                                'name' => 'Fastighets- och förvaltningschefer',
                                'type' => 'ssyk-level-4',
                                'legacyAmsTaxonomyId' => '1350',
                                'parentId' => 'bh3H_Y3h_5eD',
                            ),
                        14 =>
                            array(
                                'id' => 'QG4f_MCh_vND',
                                'name' => 'Forsknings- och utvecklingschefer',
                                'type' => 'ssyk-level-4',
                                'legacyAmsTaxonomyId' => '1330',
                                'parentId' => 'bh3H_Y3h_5eD',
                            ),
                        15 =>
                            array(
                                'id' => 'Pz9M_srJ_Lc9',
                                'name' => 'Försäljnings- och marknadschefer',
                                'type' => 'ssyk-level-4',
                                'legacyAmsTaxonomyId' => '1250',
                                'parentId' => 'bh3H_Y3h_5eD',
                            ),
                        16 =>
                            array(
                                'id' => '9QMD_sZ3_ZjX',
                                'name' => 'Förvaltare inom skogsbruk och lantbruk m.fl.',
                                'type' => 'ssyk-level-4',
                                'legacyAmsTaxonomyId' => '1380',
                                'parentId' => 'bh3H_Y3h_5eD',
                            ),
                        17 =>
                            array(
                                'id' => 'X1Ac_Y9P_PJo',
                                'name' => 'Förvaltnings- och planeringschefer',
                                'type' => 'ssyk-level-4',
                                'legacyAmsTaxonomyId' => '1230',
                                'parentId' => 'bh3H_Y3h_5eD',
                            ),
                        18 =>
                            array(
                                'id' => 'ddGt_fEH_432',
                                'name' => 'General-, landstings- och kommundirektörer m.fl.',
                                'type' => 'ssyk-level-4',
                                'legacyAmsTaxonomyId' => '1112',
                                'parentId' => 'bh3H_Y3h_5eD',
                            ),
                        19 =>
                            array(
                                'id' => 'eX3C_MtJ_nPA',
                                'name' => 'Hotell- och konferenschefer',
                                'type' => 'ssyk-level-4',
                                'legacyAmsTaxonomyId' => '1710',
                                'parentId' => 'bh3H_Y3h_5eD',
                            ),
                        20 =>
                            array(
                                'id' => 'eWiB_mGP_MjE',
                                'name' => 'IT-chefer',
                                'type' => 'ssyk-level-4',
                                'legacyAmsTaxonomyId' => '1310',
                                'parentId' => 'bh3H_Y3h_5eD',
                            ),
                        21 =>
                            array(
                                'id' => 'mpuA_s56_Hsy',
                                'name' => 'Informations-, kommunikations- och PR-chefer',
                                'type' => 'ssyk-level-4',
                                'legacyAmsTaxonomyId' => '1240',
                                'parentId' => 'bh3H_Y3h_5eD',
                            ),
                        22 =>
                            array(
                                'id' => 'nNxJ_YWy_vR2',
                                'name' => 'Inköps-, logistik- och transportchefer',
                                'type' => 'ssyk-level-4',
                                'legacyAmsTaxonomyId' => '1320',
                                'parentId' => 'bh3H_Y3h_5eD',
                            ),
                        23 =>
                            array(
                                'id' => 'mNoS_AN5_drn',
                                'name' => 'Personal- och HR-chefer',
                                'type' => 'ssyk-level-4',
                                'legacyAmsTaxonomyId' => '1220',
                                'parentId' => 'bh3H_Y3h_5eD',
                            ),
                        24 =>
                            array(
                                'id' => 'qVHD_Hj5_PXh',
                                'name' => 'Politiker',
                                'type' => 'ssyk-level-4',
                                'legacyAmsTaxonomyId' => '1111',
                                'parentId' => 'bh3H_Y3h_5eD',
                            ),
                        25 =>
                            array(
                                'id' => 'pf1K_PTz_frm',
                                'name' => 'Produktionschefer inom tillverkning',
                                'type' => 'ssyk-level-4',
                                'legacyAmsTaxonomyId' => '1370',
                                'parentId' => 'bh3H_Y3h_5eD',
                            ),
                        26 =>
                            array(
                                'id' => 'hZLv_S5f_jo2',
                                'name' => 'Restaurang- och kökschefer',
                                'type' => 'ssyk-level-4',
                                'legacyAmsTaxonomyId' => '1720',
                                'parentId' => 'bh3H_Y3h_5eD',
                            ),
                        27 =>
                            array(
                                'id' => '3i4a_Ufc_qpp',
                                'name' => 'Verkställande direktörer m.fl.',
                                'type' => 'ssyk-level-4',
                                'legacyAmsTaxonomyId' => '1120',
                                'parentId' => 'bh3H_Y3h_5eD',
                            ),
                        28 =>
                            array(
                                'id' => 'uxst_tkg_zDh',
                                'name' => 'Övriga administrations- och servicechefer',
                                'type' => 'ssyk-level-4',
                                'legacyAmsTaxonomyId' => '1290',
                                'parentId' => 'bh3H_Y3h_5eD',
                            ),
                        29 =>
                            array(
                                'id' => 'sWzF_6pd_Y6L',
                                'name' => 'Övriga chefer inom samhällsservice',
                                'type' => 'ssyk-level-4',
                                'legacyAmsTaxonomyId' => '1590',
                                'parentId' => 'bh3H_Y3h_5eD',
                            ),
                        30 =>
                            array(
                                'id' => 'g6eC_Fwu_B3J',
                                'name' => 'Övriga chefer inom utbildning',
                                'type' => 'ssyk-level-4',
                                'legacyAmsTaxonomyId' => '1490',
                                'parentId' => 'bh3H_Y3h_5eD',
                            ),
                        31 =>
                            array(
                                'id' => 'NQTS_fou_E6u',
                                'name' => 'Övriga chefer inom övrig servicenäring',
                                'type' => 'ssyk-level-4',
                                'legacyAmsTaxonomyId' => '1790',
                                'parentId' => 'bh3H_Y3h_5eD',
                            ),
                    ),
            ),
        3 =>
            array(
                'id' => 'apaJ_2ja_LuF',
                'name' => 'Data/IT',
                'type' => 'occupation-field',
                'legacyAmsTaxonomyId' => '3',
                'items' =>
                    array(
                        0 =>
                            array(
                                'id' => '13md_uyV_BNG',
                                'name' => 'Drifttekniker, IT',
                                'type' => 'ssyk-level-4',
                                'legacyAmsTaxonomyId' => '3511',
                                'parentId' => 'apaJ_2ja_LuF',
                            ),
                        1 =>
                            array(
                                'id' => 'BAeH_eg8_T2d',
                                'name' => 'IT-säkerhetsspecialister',
                                'type' => 'ssyk-level-4',
                                'legacyAmsTaxonomyId' => '2516',
                                'parentId' => 'apaJ_2ja_LuF',
                            ),
                        2 =>
                            array(
                                'id' => 'DJh5_yyF_hEM',
                                'name' => 'Mjukvaru- och systemutvecklare m.fl.',
                                'type' => 'ssyk-level-4',
                                'legacyAmsTaxonomyId' => '2512',
                                'parentId' => 'apaJ_2ja_LuF',
                            ),
                        3 =>
                            array(
                                'id' => 'VCpu_5EN_bBt',
                                'name' => 'Nätverks- och systemtekniker m.fl.',
                                'type' => 'ssyk-level-4',
                                'legacyAmsTaxonomyId' => '3514',
                                'parentId' => 'apaJ_2ja_LuF',
                            ),
                        4 =>
                            array(
                                'id' => 'hmaC_cfi_UKg',
                                'name' => 'Supporttekniker, IT',
                                'type' => 'ssyk-level-4',
                                'legacyAmsTaxonomyId' => '3512',
                                'parentId' => 'apaJ_2ja_LuF',
                            ),
                        5 =>
                            array(
                                'id' => 'MYAz_x9m_2LJ',
                                'name' => 'Systemadministratörer',
                                'type' => 'ssyk-level-4',
                                'legacyAmsTaxonomyId' => '3513',
                                'parentId' => 'apaJ_2ja_LuF',
                            ),
                        6 =>
                            array(
                                'id' => 'UXKZ_3zZ_ipB',
                                'name' => 'Systemanalytiker och IT-arkitekter m.fl.',
                                'type' => 'ssyk-level-4',
                                'legacyAmsTaxonomyId' => '2511',
                                'parentId' => 'apaJ_2ja_LuF',
                            ),
                        7 =>
                            array(
                                'id' => 'cBBa_ngH_fCx',
                                'name' => 'Systemförvaltare m.fl.',
                                'type' => 'ssyk-level-4',
                                'legacyAmsTaxonomyId' => '2515',
                                'parentId' => 'apaJ_2ja_LuF',
                            ),
                        8 =>
                            array(
                                'id' => 'D9SL_mtn_vGM',
                                'name' => 'Systemtestare och testledare',
                                'type' => 'ssyk-level-4',
                                'legacyAmsTaxonomyId' => '2514',
                                'parentId' => 'apaJ_2ja_LuF',
                            ),
                        9 =>
                            array(
                                'id' => 'Q5DF_juj_8do',
                                'name' => 'Utvecklare inom spel och digitala media',
                                'type' => 'ssyk-level-4',
                                'legacyAmsTaxonomyId' => '2513',
                                'parentId' => 'apaJ_2ja_LuF',
                            ),
                        10 =>
                            array(
                                'id' => 'Fv7d_YhP_YmS',
                                'name' => 'Webbmaster och webbadministratörer',
                                'type' => 'ssyk-level-4',
                                'legacyAmsTaxonomyId' => '3515',
                                'parentId' => 'apaJ_2ja_LuF',
                            ),
                        11 =>
                            array(
                                'id' => 'UxT1_tPF_Kbg',
                                'name' => 'Övriga IT-specialister',
                                'type' => 'ssyk-level-4',
                                'legacyAmsTaxonomyId' => '2519',
                                'parentId' => 'apaJ_2ja_LuF',
                            ),
                    ),
            ),
        4 =>
            array(
                'id' => 'RPTn_bxG_ExZ',
                'name' => 'Försäljning, inköp, marknadsföring',
                'type' => 'occupation-field',
                'legacyAmsTaxonomyId' => '5',
                'items' =>
                    array(
                        0 =>
                            array(
                                'id' => '41Az_ioZ_rmH',
                                'name' => 'Apotekstekniker',
                                'type' => 'ssyk-level-4',
                                'legacyAmsTaxonomyId' => '5227',
                                'parentId' => 'RPTn_bxG_ExZ',
                            ),
                        1 =>
                            array(
                                'id' => 'FfMN_Bw1_qYR',
                                'name' => 'Banktjänstemän',
                                'type' => 'ssyk-level-4',
                                'legacyAmsTaxonomyId' => '3312',
                                'parentId' => 'RPTn_bxG_ExZ',
                            ),
                        2 =>
                            array(
                                'id' => 'JnTF_wXr_6Eh',
                                'name' => 'Bensinstationspersonal',
                                'type' => 'ssyk-level-4',
                                'legacyAmsTaxonomyId' => '5225',
                                'parentId' => 'RPTn_bxG_ExZ',
                            ),
                        3 =>
                            array(
                                'id' => 's1Qk_o98_2o1',
                                'name' => 'Butikssäljare, dagligvaror',
                                'type' => 'ssyk-level-4',
                                'legacyAmsTaxonomyId' => '5222',
                                'parentId' => 'RPTn_bxG_ExZ',
                            ),
                        4 =>
                            array(
                                'id' => 'YKL2_FCB_1yr',
                                'name' => 'Butikssäljare, fackhandel',
                                'type' => 'ssyk-level-4',
                                'legacyAmsTaxonomyId' => '5223',
                                'parentId' => 'RPTn_bxG_ExZ',
                            ),
                        5 =>
                            array(
                                'id' => '48KE_fDE_ryL',
                                'name' => 'Evenemangs- och reseproducenter m.fl.',
                                'type' => 'ssyk-level-4',
                                'legacyAmsTaxonomyId' => '3332',
                                'parentId' => 'RPTn_bxG_ExZ',
                            ),
                        6 =>
                            array(
                                'id' => 'NCeZ_rSk_B4D',
                                'name' => 'Eventsäljare och butiksdemonstratörer m.fl.',
                                'type' => 'ssyk-level-4',
                                'legacyAmsTaxonomyId' => '5241',
                                'parentId' => 'RPTn_bxG_ExZ',
                            ),
                        7 =>
                            array(
                                'id' => 'Fghp_zje_WA8',
                                'name' => 'Fastighetsmäklare',
                                'type' => 'ssyk-level-4',
                                'legacyAmsTaxonomyId' => '3334',
                                'parentId' => 'RPTn_bxG_ExZ',
                            ),
                        8 =>
                            array(
                                'id' => 'oXSW_fbY_XrY',
                                'name' => 'Företagssäljare',
                                'type' => 'ssyk-level-4',
                                'legacyAmsTaxonomyId' => '3322',
                                'parentId' => 'RPTn_bxG_ExZ',
                            ),
                        9 =>
                            array(
                                'id' => 'A6X3_efC_VNy',
                                'name' => 'Guider och reseledare',
                                'type' => 'ssyk-level-4',
                                'legacyAmsTaxonomyId' => '5113',
                                'parentId' => 'RPTn_bxG_ExZ',
                            ),
                        10 =>
                            array(
                                'id' => '85cq_6uK_4cK',
                                'name' => 'Inköpare och upphandlare',
                                'type' => 'ssyk-level-4',
                                'legacyAmsTaxonomyId' => '3323',
                                'parentId' => 'RPTn_bxG_ExZ',
                            ),
                        11 =>
                            array(
                                'id' => 'iWcY_mko_rq2',
                                'name' => 'Inköps- och orderassistenter',
                                'type' => 'ssyk-level-4',
                                'legacyAmsTaxonomyId' => '4115',
                                'parentId' => 'RPTn_bxG_ExZ',
                            ),
                        12 =>
                            array(
                                'id' => 'WNVp_RYe_zLX',
                                'name' => 'Kassapersonal m.fl.',
                                'type' => 'ssyk-level-4',
                                'legacyAmsTaxonomyId' => '5230',
                                'parentId' => 'RPTn_bxG_ExZ',
                            ),
                        13 =>
                            array(
                                'id' => 'pwRH_MT1_8nR',
                                'name' => 'Kundtjänstpersonal',
                                'type' => 'ssyk-level-4',
                                'legacyAmsTaxonomyId' => '4222',
                                'parentId' => 'RPTn_bxG_ExZ',
                            ),
                        14 =>
                            array(
                                'id' => 'p16X_44f_rwZ',
                                'name' => 'Marknads- och försäljningsassistenter',
                                'type' => 'ssyk-level-4',
                                'legacyAmsTaxonomyId' => '4114',
                                'parentId' => 'RPTn_bxG_ExZ',
                            ),
                        15 =>
                            array(
                                'id' => 'WX67_Pfb_WMN',
                                'name' => 'Marknadsanalytiker och marknadsförare m.fl.',
                                'type' => 'ssyk-level-4',
                                'legacyAmsTaxonomyId' => '2431',
                                'parentId' => 'RPTn_bxG_ExZ',
                            ),
                        16 =>
                            array(
                                'id' => '83wV_GJa_vMd',
                                'name' => 'Marknadsundersökare och intervjuare',
                                'type' => 'ssyk-level-4',
                                'legacyAmsTaxonomyId' => '4226',
                                'parentId' => 'RPTn_bxG_ExZ',
                            ),
                        17 =>
                            array(
                                'id' => 'AQrL_tTu_Wbg',
                                'name' => 'Optikerassistenter',
                                'type' => 'ssyk-level-4',
                                'legacyAmsTaxonomyId' => '5224',
                                'parentId' => 'RPTn_bxG_ExZ',
                            ),
                        18 =>
                            array(
                                'id' => '8A1f_sxQ_adT',
                                'name' => 'Ordersamordnare m.fl.',
                                'type' => 'ssyk-level-4',
                                'legacyAmsTaxonomyId' => '3324',
                                'parentId' => 'RPTn_bxG_ExZ',
                            ),
                        19 =>
                            array(
                                'id' => 'fdLf_oPp_wVw',
                                'name' => 'Resesäljare och trafikassistenter m.fl.',
                                'type' => 'ssyk-level-4',
                                'legacyAmsTaxonomyId' => '4221',
                                'parentId' => 'RPTn_bxG_ExZ',
                            ),
                        20 =>
                            array(
                                'id' => 'AuTi_FEo_j3R',
                                'name' => 'Speditörer och transportmäklare',
                                'type' => 'ssyk-level-4',
                                'legacyAmsTaxonomyId' => '3331',
                                'parentId' => 'RPTn_bxG_ExZ',
                            ),
                        21 =>
                            array(
                                'id' => 'Fp7x_Yqt_bx9',
                                'name' => 'Säljande butikschefer och avdelningschefer i butik',
                                'type' => 'ssyk-level-4',
                                'legacyAmsTaxonomyId' => '5221',
                                'parentId' => 'RPTn_bxG_ExZ',
                            ),
                        22 =>
                            array(
                                'id' => 'PxXc_16t_oZo',
                                'name' => 'Telefonförsäljare m.fl.',
                                'type' => 'ssyk-level-4',
                                'legacyAmsTaxonomyId' => '5242',
                                'parentId' => 'RPTn_bxG_ExZ',
                            ),
                        23 =>
                            array(
                                'id' => 'xyW2_toA_Skh',
                                'name' => 'Torg- och marknadsförsäljare m.fl.',
                                'type' => 'ssyk-level-4',
                                'legacyAmsTaxonomyId' => '9520',
                                'parentId' => 'RPTn_bxG_ExZ',
                            ),
                        24 =>
                            array(
                                'id' => 'M47D_MU2_dhS',
                                'name' => 'Uthyrare',
                                'type' => 'ssyk-level-4',
                                'legacyAmsTaxonomyId' => '5226',
                                'parentId' => 'RPTn_bxG_ExZ',
                            ),
                        25 =>
                            array(
                                'id' => 'dUuh_wwa_FGj',
                                'name' => 'Övriga förmedlare',
                                'type' => 'ssyk-level-4',
                                'legacyAmsTaxonomyId' => '3339',
                                'parentId' => 'RPTn_bxG_ExZ',
                            ),
                    ),
            ),
        5 =>
            array(
                'id' => 'PaxQ_o1G_wWH',
                'name' => 'Hantverksyrken',
                'type' => 'occupation-field',
                'legacyAmsTaxonomyId' => '6',
                'items' =>
                    array(
                        0 =>
                            array(
                                'id' => '5qT8_z9d_8rw',
                                'name' => 'Bagare och konditorer',
                                'type' => 'ssyk-level-4',
                                'legacyAmsTaxonomyId' => '7612',
                                'parentId' => 'PaxQ_o1G_wWH',
                            ),
                        1 =>
                            array(
                                'id' => '1Nwn_GYH_wkH',
                                'name' => 'Fin-, inrednings- och möbelsnickare',
                                'type' => 'ssyk-level-4',
                                'legacyAmsTaxonomyId' => '7522',
                                'parentId' => 'PaxQ_o1G_wWH',
                            ),
                        2 =>
                            array(
                                'id' => 'e6nk_AGp_y28',
                                'name' => 'Finmekaniker',
                                'type' => 'ssyk-level-4',
                                'legacyAmsTaxonomyId' => '7311',
                                'parentId' => 'PaxQ_o1G_wWH',
                            ),
                        3 =>
                            array(
                                'id' => 'J17g_Q2a_2u1',
                                'name' => 'Glastekniker',
                                'type' => 'ssyk-level-4',
                                'legacyAmsTaxonomyId' => '7124',
                                'parentId' => 'PaxQ_o1G_wWH',
                            ),
                        4 =>
                            array(
                                'id' => 'nwSm_phw_sPo',
                                'name' => 'Guld- och silversmeder',
                                'type' => 'ssyk-level-4',
                                'legacyAmsTaxonomyId' => '7312',
                                'parentId' => 'PaxQ_o1G_wWH',
                            ),
                        5 =>
                            array(
                                'id' => 'vJQk_YvC_XB7',
                                'name' => 'Läderhantverkare och skomakare',
                                'type' => 'ssyk-level-4',
                                'legacyAmsTaxonomyId' => '7534',
                                'parentId' => 'PaxQ_o1G_wWH',
                            ),
                        6 =>
                            array(
                                'id' => 'v7W3_cLQ_q2S',
                                'name' => 'Manuella ytbehandlare, trä',
                                'type' => 'ssyk-level-4',
                                'legacyAmsTaxonomyId' => '7521',
                                'parentId' => 'PaxQ_o1G_wWH',
                            ),
                        7 =>
                            array(
                                'id' => 'aKdV_u7V_R5j',
                                'name' => 'Musikinstrumentmakare och övriga konsthantverkare',
                                'type' => 'ssyk-level-4',
                                'legacyAmsTaxonomyId' => '7319',
                                'parentId' => 'PaxQ_o1G_wWH',
                            ),
                        8 =>
                            array(
                                'id' => 'mwVN_oEH_g9k',
                                'name' => 'Skräddare och ateljésömmerskor m.fl.',
                                'type' => 'ssyk-level-4',
                                'legacyAmsTaxonomyId' => '7531',
                                'parentId' => 'PaxQ_o1G_wWH',
                            ),
                        9 =>
                            array(
                                'id' => 'q8Ho_3Xw_sHq',
                                'name' => 'Smeder',
                                'type' => 'ssyk-level-4',
                                'legacyAmsTaxonomyId' => '7221',
                                'parentId' => 'PaxQ_o1G_wWH',
                            ),
                        10 =>
                            array(
                                'id' => 'UZBj_yDX_Ctp',
                                'name' => 'Sömmare',
                                'type' => 'ssyk-level-4',
                                'legacyAmsTaxonomyId' => '7532',
                                'parentId' => 'PaxQ_o1G_wWH',
                            ),
                        11 =>
                            array(
                                'id' => 'vhUJ_LyD_XWc',
                                'name' => 'Tapetserare',
                                'type' => 'ssyk-level-4',
                                'legacyAmsTaxonomyId' => '7533',
                                'parentId' => 'PaxQ_o1G_wWH',
                            ),
                    ),
            ),
        6 =>
            array(
                'id' => 'ScKy_FHB_7wT',
                'name' => 'Hotell, restaurang, storhushåll',
                'type' => 'occupation-field',
                'legacyAmsTaxonomyId' => '7',
                'items' =>
                    array(
                        0 =>
                            array(
                                'id' => 'XFXX_Jq9_Y2a',
                                'name' => 'Bartendrar',
                                'type' => 'ssyk-level-4',
                                'legacyAmsTaxonomyId' => '5132',
                                'parentId' => 'ScKy_FHB_7wT',
                            ),
                        1 =>
                            array(
                                'id' => 'YHwG_fk2_MDL',
                                'name' => 'Croupierer och oddssättare m.fl.',
                                'type' => 'ssyk-level-4',
                                'legacyAmsTaxonomyId' => '4211',
                                'parentId' => 'ScKy_FHB_7wT',
                            ),
                        2 =>
                            array(
                                'id' => 'bYde_Frc_xcB',
                                'name' => 'Hotellreceptionister m.fl.',
                                'type' => 'ssyk-level-4',
                                'legacyAmsTaxonomyId' => '4224',
                                'parentId' => 'ScKy_FHB_7wT',
                            ),
                        3 =>
                            array(
                                'id' => 'UjoW_meY_Zwt',
                                'name' => 'Hovmästare och servitörer',
                                'type' => 'ssyk-level-4',
                                'legacyAmsTaxonomyId' => '5131',
                                'parentId' => 'ScKy_FHB_7wT',
                            ),
                        4 =>
                            array(
                                'id' => '1wqU_Jhj_amb',
                                'name' => 'Kafé- och konditoribiträden',
                                'type' => 'ssyk-level-4',
                                'legacyAmsTaxonomyId' => '9413',
                                'parentId' => 'ScKy_FHB_7wT',
                            ),
                        5 =>
                            array(
                                'id' => 'BStc_SJh_DKG',
                                'name' => 'Kockar och kallskänkor',
                                'type' => 'ssyk-level-4',
                                'legacyAmsTaxonomyId' => '5120',
                                'parentId' => 'ScKy_FHB_7wT',
                            ),
                        6 =>
                            array(
                                'id' => 'XGyi_i4B_ME7',
                                'name' => 'Köksmästare och souschefer',
                                'type' => 'ssyk-level-4',
                                'legacyAmsTaxonomyId' => '3451',
                                'parentId' => 'ScKy_FHB_7wT',
                            ),
                        7 =>
                            array(
                                'id' => 'a8gg_ktU_w8V',
                                'name' => 'Pizzabagare m.fl.',
                                'type' => 'ssyk-level-4',
                                'legacyAmsTaxonomyId' => '9411',
                                'parentId' => 'ScKy_FHB_7wT',
                            ),
                        8 =>
                            array(
                                'id' => 'tPox_ie4_X9X',
                                'name' => 'Restaurang- och köksbiträden m.fl.',
                                'type' => 'ssyk-level-4',
                                'legacyAmsTaxonomyId' => '9412',
                                'parentId' => 'ScKy_FHB_7wT',
                            ),
                        9 =>
                            array(
                                'id' => 'h324_DPT_7Tw',
                                'name' => 'Storhushållsföreståndare',
                                'type' => 'ssyk-level-4',
                                'legacyAmsTaxonomyId' => '3452',
                                'parentId' => 'ScKy_FHB_7wT',
                            ),
                    ),
            ),
        7 =>
            array(
                'id' => 'NYW6_mP6_vwf',
                'name' => 'Hälso- och sjukvård',
                'type' => 'occupation-field',
                'legacyAmsTaxonomyId' => '8',
                'items' =>
                    array(
                        0 =>
                            array(
                                'id' => 'ek9W_qqp_XpF',
                                'name' => 'AT-läkare',
                                'type' => 'ssyk-level-4',
                                'legacyAmsTaxonomyId' => '2213',
                                'parentId' => 'NYW6_mP6_vwf',
                            ),
                        1 =>
                            array(
                                'id' => 'PHJN_fva_yxs',
                                'name' => 'Ambulanssjuksköterskor m.fl.',
                                'type' => 'ssyk-level-4',
                                'legacyAmsTaxonomyId' => '2226',
                                'parentId' => 'NYW6_mP6_vwf',
                            ),
                        2 =>
                            array(
                                'id' => '3H17_ZZr_BEc',
                                'name' => 'Ambulanssjukvårdare',
                                'type' => 'ssyk-level-4',
                                'legacyAmsTaxonomyId' => '5326',
                                'parentId' => 'NYW6_mP6_vwf',
                            ),
                        3 =>
                            array(
                                'id' => 'nrVt_xUL_KdQ',
                                'name' => 'Anestesisjuksköterskor',
                                'type' => 'ssyk-level-4',
                                'legacyAmsTaxonomyId' => '2223',
                                'parentId' => 'NYW6_mP6_vwf',
                            ),
                        4 =>
                            array(
                                'id' => 'TMsM_oNw_j6z',
                                'name' => 'Apotekare',
                                'type' => 'ssyk-level-4',
                                'legacyAmsTaxonomyId' => '2281',
                                'parentId' => 'NYW6_mP6_vwf',
                            ),
                        5 =>
                            array(
                                'id' => 'TPH4_2AM_isT',
                                'name' => 'Arbetsterapeuter',
                                'type' => 'ssyk-level-4',
                                'legacyAmsTaxonomyId' => '2273',
                                'parentId' => 'NYW6_mP6_vwf',
                            ),
                        6 =>
                            array(
                                'id' => 'pzch_NRY_9ZF',
                                'name' => 'Audionomer och logopeder',
                                'type' => 'ssyk-level-4',
                                'legacyAmsTaxonomyId' => '2283',
                                'parentId' => 'NYW6_mP6_vwf',
                            ),
                        7 =>
                            array(
                                'id' => '7XXd_4St_nit',
                                'name' => 'Barnmorskor',
                                'type' => 'ssyk-level-4',
                                'legacyAmsTaxonomyId' => '2222',
                                'parentId' => 'NYW6_mP6_vwf',
                            ),
                        8 =>
                            array(
                                'id' => 'NFUg_y9y_1TY',
                                'name' => 'Barnsjuksköterskor',
                                'type' => 'ssyk-level-4',
                                'legacyAmsTaxonomyId' => '2232',
                                'parentId' => 'NYW6_mP6_vwf',
                            ),
                        9 =>
                            array(
                                'id' => 'kHgb_AHf_vrY',
                                'name' => 'Barnsköterskor',
                                'type' => 'ssyk-level-4',
                                'legacyAmsTaxonomyId' => '5325',
                                'parentId' => 'NYW6_mP6_vwf',
                            ),
                        10 =>
                            array(
                                'id' => 'wNrt_Ysj_WuT',
                                'name' => 'Biomedicinska analytiker m.fl.',
                                'type' => 'ssyk-level-4',
                                'legacyAmsTaxonomyId' => '3212',
                                'parentId' => 'NYW6_mP6_vwf',
                            ),
                        11 =>
                            array(
                                'id' => 'Pq5C_SPC_bRA',
                                'name' => 'Dietister',
                                'type' => 'ssyk-level-4',
                                'legacyAmsTaxonomyId' => '2282',
                                'parentId' => 'NYW6_mP6_vwf',
                            ),
                        12 =>
                            array(
                                'id' => 'oj4c_P4b_cja',
                                'name' => 'Distriktssköterskor',
                                'type' => 'ssyk-level-4',
                                'legacyAmsTaxonomyId' => '2224',
                                'parentId' => 'NYW6_mP6_vwf',
                            ),
                        13 =>
                            array(
                                'id' => '8q1B_5AR_CEM',
                                'name' => 'Djursjukskötare m.fl.',
                                'type' => 'ssyk-level-4',
                                'legacyAmsTaxonomyId' => '3240',
                                'parentId' => 'NYW6_mP6_vwf',
                            ),
                        14 =>
                            array(
                                'id' => 's7vU_FhY_L5Z',
                                'name' => 'Fysioterapeuter och sjukgymnaster',
                                'type' => 'ssyk-level-4',
                                'legacyAmsTaxonomyId' => '2272',
                                'parentId' => 'NYW6_mP6_vwf',
                            ),
                        15 =>
                            array(
                                'id' => '6Fu3_qQA_9DK',
                                'name' => 'Företagssköterskor',
                                'type' => 'ssyk-level-4',
                                'legacyAmsTaxonomyId' => '2234',
                                'parentId' => 'NYW6_mP6_vwf',
                            ),
                        16 =>
                            array(
                                'id' => '6eAB_cbY_i9T',
                                'name' => 'Geriatriksjuksköterskor',
                                'type' => 'ssyk-level-4',
                                'legacyAmsTaxonomyId' => '2227',
                                'parentId' => 'NYW6_mP6_vwf',
                            ),
                        17 =>
                            array(
                                'id' => 'Z8ci_bBE_tmx',
                                'name' => 'Grundutbildade sjuksköterskor',
                                'type' => 'ssyk-level-4',
                                'legacyAmsTaxonomyId' => '2221',
                                'parentId' => 'NYW6_mP6_vwf',
                            ),
                        18 =>
                            array(
                                'id' => 'dyWo_sDb_MLQ',
                                'name' => 'Intensivvårdssjuksköterskor',
                                'type' => 'ssyk-level-4',
                                'legacyAmsTaxonomyId' => '2228',
                                'parentId' => 'NYW6_mP6_vwf',
                            ),
                        19 =>
                            array(
                                'id' => 'aWki_4uA_adn',
                                'name' => 'Kiropraktorer och naprapater m.fl.',
                                'type' => 'ssyk-level-4',
                                'legacyAmsTaxonomyId' => '2271',
                                'parentId' => 'NYW6_mP6_vwf',
                            ),
                        20 =>
                            array(
                                'id' => 'cuaN_Rj5_YCc',
                                'name' => 'Operationssjuksköterskor',
                                'type' => 'ssyk-level-4',
                                'legacyAmsTaxonomyId' => '2231',
                                'parentId' => 'NYW6_mP6_vwf',
                            ),
                        21 =>
                            array(
                                'id' => 'PUhV_DVQ_MM6',
                                'name' => 'Optiker',
                                'type' => 'ssyk-level-4',
                                'legacyAmsTaxonomyId' => '2284',
                                'parentId' => 'NYW6_mP6_vwf',
                            ),
                        22 =>
                            array(
                                'id' => 'bEDv_SL7_VrL',
                                'name' => 'Psykiatrisjuksköterskor',
                                'type' => 'ssyk-level-4',
                                'legacyAmsTaxonomyId' => '2225',
                                'parentId' => 'NYW6_mP6_vwf',
                            ),
                        23 =>
                            array(
                                'id' => 'VYeq_GDF_a2g',
                                'name' => 'Psykologer',
                                'type' => 'ssyk-level-4',
                                'legacyAmsTaxonomyId' => '2241',
                                'parentId' => 'NYW6_mP6_vwf',
                            ),
                        24 =>
                            array(
                                'id' => 'UUQi_UJ5_MSb',
                                'name' => 'Psykoterapeuter',
                                'type' => 'ssyk-level-4',
                                'legacyAmsTaxonomyId' => '2242',
                                'parentId' => 'NYW6_mP6_vwf',
                            ),
                        25 =>
                            array(
                                'id' => 'XjcN_5LT_bWx',
                                'name' => 'Receptarier',
                                'type' => 'ssyk-level-4',
                                'legacyAmsTaxonomyId' => '3213',
                                'parentId' => 'NYW6_mP6_vwf',
                            ),
                        26 =>
                            array(
                                'id' => '1tGC_fXC_mxX',
                                'name' => 'Röntgensjuksköterskor',
                                'type' => 'ssyk-level-4',
                                'legacyAmsTaxonomyId' => '2235',
                                'parentId' => 'NYW6_mP6_vwf',
                            ),
                        27 =>
                            array(
                                'id' => 'seu9_VoQ_VNo',
                                'name' => 'ST-läkare',
                                'type' => 'ssyk-level-4',
                                'legacyAmsTaxonomyId' => '2212',
                                'parentId' => 'NYW6_mP6_vwf',
                            ),
                        28 =>
                            array(
                                'id' => 'Bywn_Doc_3VF',
                                'name' => 'Skolsköterskor',
                                'type' => 'ssyk-level-4',
                                'legacyAmsTaxonomyId' => '2233',
                                'parentId' => 'NYW6_mP6_vwf',
                            ),
                        29 =>
                            array(
                                'id' => '7fNG_sve_JWU',
                                'name' => 'Skötare',
                                'type' => 'ssyk-level-4',
                                'legacyAmsTaxonomyId' => '5341',
                                'parentId' => 'NYW6_mP6_vwf',
                            ),
                        30 =>
                            array(
                                'id' => 'nu7c_QuB_KVQ',
                                'name' => 'Specialistläkare',
                                'type' => 'ssyk-level-4',
                                'legacyAmsTaxonomyId' => '2211',
                                'parentId' => 'NYW6_mP6_vwf',
                            ),
                        31 =>
                            array(
                                'id' => '4F9o_Jzv_Pwz',
                                'name' => 'Tandhygienister',
                                'type' => 'ssyk-level-4',
                                'legacyAmsTaxonomyId' => '3250',
                                'parentId' => 'NYW6_mP6_vwf',
                            ),
                        32 =>
                            array(
                                'id' => 'HPxT_fQJ_zwT',
                                'name' => 'Tandläkare',
                                'type' => 'ssyk-level-4',
                                'legacyAmsTaxonomyId' => '2260',
                                'parentId' => 'NYW6_mP6_vwf',
                            ),
                        33 =>
                            array(
                                'id' => '5dxv_nVQ_N8o',
                                'name' => 'Tandsköterskor',
                                'type' => 'ssyk-level-4',
                                'legacyAmsTaxonomyId' => '5350',
                                'parentId' => 'NYW6_mP6_vwf',
                            ),
                        34 =>
                            array(
                                'id' => 'F19Z_oB6_pg3',
                                'name' => 'Terapeuter inom alternativmedicin',
                                'type' => 'ssyk-level-4',
                                'legacyAmsTaxonomyId' => '3230',
                                'parentId' => 'NYW6_mP6_vwf',
                            ),
                        35 =>
                            array(
                                'id' => 'jY19_knH_MJp',
                                'name' => 'Undersköterskor, hemtjänst, hemsjukvård, äldreboende och habilitering',
                                'type' => 'ssyk-level-4',
                                'legacyAmsTaxonomyId' => '5321',
                                'parentId' => 'NYW6_mP6_vwf',
                            ),
                        36 =>
                            array(
                                'id' => 'LP4Z_ABV_gRm',
                                'name' => 'Undersköterskor, vård- och specialavdelning och mottagning',
                                'type' => 'ssyk-level-4',
                                'legacyAmsTaxonomyId' => '5323',
                                'parentId' => 'NYW6_mP6_vwf',
                            ),
                        37 =>
                            array(
                                'id' => 'WL4E_r4b_ek4',
                                'name' => 'Veterinärer',
                                'type' => 'ssyk-level-4',
                                'legacyAmsTaxonomyId' => '2250',
                                'parentId' => 'NYW6_mP6_vwf',
                            ),
                        38 =>
                            array(
                                'id' => 'tAJS_JNb_hDH',
                                'name' => 'Vårdbiträden',
                                'type' => 'ssyk-level-4',
                                'legacyAmsTaxonomyId' => '5330',
                                'parentId' => 'NYW6_mP6_vwf',
                            ),
                        39 =>
                            array(
                                'id' => 'GiNX_ESA_AL1',
                                'name' => 'Övrig vård- och omsorgspersonal',
                                'type' => 'ssyk-level-4',
                                'legacyAmsTaxonomyId' => '5349',
                                'parentId' => 'NYW6_mP6_vwf',
                            ),
                        40 =>
                            array(
                                'id' => 'gXqW_s5Q_ZjN',
                                'name' => 'Övriga läkare',
                                'type' => 'ssyk-level-4',
                                'legacyAmsTaxonomyId' => '2219',
                                'parentId' => 'NYW6_mP6_vwf',
                            ),
                        41 =>
                            array(
                                'id' => 'vTgW_pnr_QMp',
                                'name' => 'Övriga specialister inom hälso- och sjukvård',
                                'type' => 'ssyk-level-4',
                                'legacyAmsTaxonomyId' => '2289',
                                'parentId' => 'NYW6_mP6_vwf',
                            ),
                        42 =>
                            array(
                                'id' => '6zAR_EHM_Kwj',
                                'name' => 'Övriga specialistsjuksköterskor',
                                'type' => 'ssyk-level-4',
                                'legacyAmsTaxonomyId' => '2239',
                                'parentId' => 'NYW6_mP6_vwf',
                            ),
                    ),
            ),
        8 =>
            array(
                'id' => 'wTEr_CBC_bqh',
                'name' => 'Industriell tillverkning',
                'type' => 'occupation-field',
                'legacyAmsTaxonomyId' => '9',
                'items' =>
                    array(
                        0 =>
                            array(
                                'id' => 'dMVD_VYy_kgg',
                                'name' => 'Arbetsledare inom tillverkning',
                                'type' => 'ssyk-level-4',
                                'legacyAmsTaxonomyId' => '3122',
                                'parentId' => 'wTEr_CBC_bqh',
                            ),
                        1 =>
                            array(
                                'id' => 'sX9n_CWa_KVC',
                                'name' => 'Bergsprängare',
                                'type' => 'ssyk-level-4',
                                'legacyAmsTaxonomyId' => '8115',
                                'parentId' => 'wTEr_CBC_bqh',
                            ),
                        2 =>
                            array(
                                'id' => 'mPzg_93F_QEv',
                                'name' => 'Bokbindare m.fl.',
                                'type' => 'ssyk-level-4',
                                'legacyAmsTaxonomyId' => '7323',
                                'parentId' => 'wTEr_CBC_bqh',
                            ),
                        3 =>
                            array(
                                'id' => 'shkw_ojo_UL2',
                                'name' => 'Fordonsmontörer',
                                'type' => 'ssyk-level-4',
                                'legacyAmsTaxonomyId' => '8211',
                                'parentId' => 'wTEr_CBC_bqh',
                            ),
                        4 =>
                            array(
                                'id' => 'J9Vz_JxJ_Bji',
                                'name' => 'Gjutare',
                                'type' => 'ssyk-level-4',
                                'legacyAmsTaxonomyId' => '7211',
                                'parentId' => 'wTEr_CBC_bqh',
                            ),
                        5 =>
                            array(
                                'id' => 'DxiF_hTo_b3X',
                                'name' => 'Handpaketerare och andra fabriksarbetare',
                                'type' => 'ssyk-level-4',
                                'legacyAmsTaxonomyId' => '9320',
                                'parentId' => 'wTEr_CBC_bqh',
                            ),
                        6 =>
                            array(
                                'id' => 'dKUb_KBP_mw3',
                                'name' => 'Lackerare och industrimålare',
                                'type' => 'ssyk-level-4',
                                'legacyAmsTaxonomyId' => '7132',
                                'parentId' => 'wTEr_CBC_bqh',
                            ),
                        7 =>
                            array(
                                'id' => 'AUs8_M5f_dLt',
                                'name' => 'Maskinoperatörer inom ytbehandling, trä',
                                'type' => 'ssyk-level-4',
                                'legacyAmsTaxonomyId' => '8174',
                                'parentId' => 'wTEr_CBC_bqh',
                            ),
                        8 =>
                            array(
                                'id' => '4DET_dLf_iB9',
                                'name' => 'Maskinoperatörer, blekning, färgning och tvättning',
                                'type' => 'ssyk-level-4',
                                'legacyAmsTaxonomyId' => '8151',
                                'parentId' => 'wTEr_CBC_bqh',
                            ),
                        9 =>
                            array(
                                'id' => 'o31g_CX1_qhQ',
                                'name' => 'Maskinoperatörer, cement-, sten- och betongvaror',
                                'type' => 'ssyk-level-4',
                                'legacyAmsTaxonomyId' => '8114',
                                'parentId' => 'wTEr_CBC_bqh',
                            ),
                        10 =>
                            array(
                                'id' => 'rxmK_wwM_1NA',
                                'name' => 'Maskinoperatörer, farmaceutiska produkter',
                                'type' => 'ssyk-level-4',
                                'legacyAmsTaxonomyId' => '8131',
                                'parentId' => 'wTEr_CBC_bqh',
                            ),
                        11 =>
                            array(
                                'id' => 'ENV6_BNa_brP',
                                'name' => 'Maskinoperatörer, gummiindustri',
                                'type' => 'ssyk-level-4',
                                'legacyAmsTaxonomyId' => '8141',
                                'parentId' => 'wTEr_CBC_bqh',
                            ),
                        12 =>
                            array(
                                'id' => 'Vfum_e6B_7Bw',
                                'name' => 'Maskinoperatörer, kemisktekniska och fotografiska produkter',
                                'type' => 'ssyk-level-4',
                                'legacyAmsTaxonomyId' => '8132',
                                'parentId' => 'wTEr_CBC_bqh',
                            ),
                        13 =>
                            array(
                                'id' => 'kF59_fge_kts',
                                'name' => 'Maskinoperatörer, kvarn-, bageri- och konfektyrindustri',
                                'type' => 'ssyk-level-4',
                                'legacyAmsTaxonomyId' => '8163',
                                'parentId' => 'wTEr_CBC_bqh',
                            ),
                        14 =>
                            array(
                                'id' => 'gJtZ_EBc_n2z',
                                'name' => 'Maskinoperatörer, kött- och fiskberedningsindustri',
                                'type' => 'ssyk-level-4',
                                'legacyAmsTaxonomyId' => '8161',
                                'parentId' => 'wTEr_CBC_bqh',
                            ),
                        15 =>
                            array(
                                'id' => 'yJk6_azD_ywF',
                                'name' => 'Maskinoperatörer, mejeri',
                                'type' => 'ssyk-level-4',
                                'legacyAmsTaxonomyId' => '8162',
                                'parentId' => 'wTEr_CBC_bqh',
                            ),
                        16 =>
                            array(
                                'id' => 'iZLB_KpD_LLo',
                                'name' => 'Maskinoperatörer, pappersvaruindustri',
                                'type' => 'ssyk-level-4',
                                'legacyAmsTaxonomyId' => '8143',
                                'parentId' => 'wTEr_CBC_bqh',
                            ),
                        17 =>
                            array(
                                'id' => 'yPQ4_EaN_Dtj',
                                'name' => 'Maskinoperatörer, plastindustri',
                                'type' => 'ssyk-level-4',
                                'legacyAmsTaxonomyId' => '8142',
                                'parentId' => 'wTEr_CBC_bqh',
                            ),
                        18 =>
                            array(
                                'id' => 'aU9p_ekE_Fqf',
                                'name' => 'Maskinoperatörer, påfyllning, packning och märkning',
                                'type' => 'ssyk-level-4',
                                'legacyAmsTaxonomyId' => '8181',
                                'parentId' => 'wTEr_CBC_bqh',
                            ),
                        19 =>
                            array(
                                'id' => 'YiQw_N87_zLU',
                                'name' => 'Maskinoperatörer, ytbehandling',
                                'type' => 'ssyk-level-4',
                                'legacyAmsTaxonomyId' => '8121',
                                'parentId' => 'wTEr_CBC_bqh',
                            ),
                        20 =>
                            array(
                                'id' => 'VKKg_e4t_t46',
                                'name' => 'Maskinsnickare och maskinoperatörer, träindustri',
                                'type' => 'ssyk-level-4',
                                'legacyAmsTaxonomyId' => '7523',
                                'parentId' => 'wTEr_CBC_bqh',
                            ),
                        21 =>
                            array(
                                'id' => 'vaEp_iBS_c5h',
                                'name' => 'Maskinställare och maskinoperatörer, metallarbete',
                                'type' => 'ssyk-level-4',
                                'legacyAmsTaxonomyId' => '7223',
                                'parentId' => 'wTEr_CBC_bqh',
                            ),
                        22 =>
                            array(
                                'id' => 'SgAJ_DW2_FN5',
                                'name' => 'Montörer, elektrisk och elektronisk utrustning',
                                'type' => 'ssyk-level-4',
                                'legacyAmsTaxonomyId' => '8212',
                                'parentId' => 'wTEr_CBC_bqh',
                            ),
                        23 =>
                            array(
                                'id' => 'Kxm9_N3V_shF',
                                'name' => 'Montörer, metall-, gummi- och plastprodukter',
                                'type' => 'ssyk-level-4',
                                'legacyAmsTaxonomyId' => '8213',
                                'parentId' => 'wTEr_CBC_bqh',
                            ),
                        24 =>
                            array(
                                'id' => '8ddv_P8e_iYz',
                                'name' => 'Montörer, träprodukter',
                                'type' => 'ssyk-level-4',
                                'legacyAmsTaxonomyId' => '8214',
                                'parentId' => 'wTEr_CBC_bqh',
                            ),
                        25 =>
                            array(
                                'id' => 'UdrS_qzV_P7i',
                                'name' => 'Operatörer inom sågverk, hyvleri och plywood m.m.',
                                'type' => 'ssyk-level-4',
                                'legacyAmsTaxonomyId' => '8173',
                                'parentId' => 'wTEr_CBC_bqh',
                            ),
                        26 =>
                            array(
                                'id' => 'LeQV_umf_wUS',
                                'name' => 'Prepresstekniker',
                                'type' => 'ssyk-level-4',
                                'legacyAmsTaxonomyId' => '7321',
                                'parentId' => 'wTEr_CBC_bqh',
                            ),
                        27 =>
                            array(
                                'id' => '1G6H_AuG_qyy',
                                'name' => 'Processoperatörer, papper',
                                'type' => 'ssyk-level-4',
                                'legacyAmsTaxonomyId' => '8172',
                                'parentId' => 'wTEr_CBC_bqh',
                            ),
                        28 =>
                            array(
                                'id' => '4obu_LL6_RqJ',
                                'name' => 'Processoperatörer, pappersmassa',
                                'type' => 'ssyk-level-4',
                                'legacyAmsTaxonomyId' => '8171',
                                'parentId' => 'wTEr_CBC_bqh',
                            ),
                        29 =>
                            array(
                                'id' => 'LEvM_7Hs_w8i',
                                'name' => 'Processoperatörer, stenkross- och malmförädling',
                                'type' => 'ssyk-level-4',
                                'legacyAmsTaxonomyId' => '8112',
                                'parentId' => 'wTEr_CBC_bqh',
                            ),
                        30 =>
                            array(
                                'id' => 'dAu7_VyL_hsy',
                                'name' => 'Provsmakare och kvalitetsbedömare',
                                'type' => 'ssyk-level-4',
                                'legacyAmsTaxonomyId' => '7613',
                                'parentId' => 'wTEr_CBC_bqh',
                            ),
                        31 =>
                            array(
                                'id' => 'QqHf_XKZ_eyy',
                                'name' => 'Slaktare och styckare m.fl.',
                                'type' => 'ssyk-level-4',
                                'legacyAmsTaxonomyId' => '7611',
                                'parentId' => 'wTEr_CBC_bqh',
                            ),
                        32 =>
                            array(
                                'id' => '4bxV_58E_P9N',
                                'name' => 'Slipare m.fl.',
                                'type' => 'ssyk-level-4',
                                'legacyAmsTaxonomyId' => '7224',
                                'parentId' => 'wTEr_CBC_bqh',
                            ),
                        33 =>
                            array(
                                'id' => 'vCBT_Pnd_8UB',
                                'name' => 'Stenhuggare m.fl.',
                                'type' => 'ssyk-level-4',
                                'legacyAmsTaxonomyId' => '8116',
                                'parentId' => 'wTEr_CBC_bqh',
                            ),
                        34 =>
                            array(
                                'id' => 'TrwQ_RXT_W8a',
                                'name' => 'Stålkonstruktionsmontörer och grovplåtsslagare',
                                'type' => 'ssyk-level-4',
                                'legacyAmsTaxonomyId' => '7215',
                                'parentId' => 'wTEr_CBC_bqh',
                            ),
                        35 =>
                            array(
                                'id' => 'wQ1E_Bzk_ZyA',
                                'name' => 'Svetsare och gasskärare',
                                'type' => 'ssyk-level-4',
                                'legacyAmsTaxonomyId' => '7212',
                                'parentId' => 'wTEr_CBC_bqh',
                            ),
                        36 =>
                            array(
                                'id' => 'XeJB_bkn_mRn',
                                'name' => 'Tryckare',
                                'type' => 'ssyk-level-4',
                                'legacyAmsTaxonomyId' => '7322',
                                'parentId' => 'wTEr_CBC_bqh',
                            ),
                        37 =>
                            array(
                                'id' => 'L4hA_SJP_SFi',
                                'name' => 'Tunnplåtslagare',
                                'type' => 'ssyk-level-4',
                                'legacyAmsTaxonomyId' => '7214',
                                'parentId' => 'wTEr_CBC_bqh',
                            ),
                        38 =>
                            array(
                                'id' => 'm8TS_hdk_pSf',
                                'name' => 'Valsverksoperatörer',
                                'type' => 'ssyk-level-4',
                                'legacyAmsTaxonomyId' => '8122',
                                'parentId' => 'wTEr_CBC_bqh',
                            ),
                        39 =>
                            array(
                                'id' => 'MSnK_3Z8_4qA',
                                'name' => 'Verktygsmakare',
                                'type' => 'ssyk-level-4',
                                'legacyAmsTaxonomyId' => '7222',
                                'parentId' => 'wTEr_CBC_bqh',
                            ),
                        40 =>
                            array(
                                'id' => 'UcNa_inr_snV',
                                'name' => 'Övriga maskin- och processoperatörer vid stål- och metallverk',
                                'type' => 'ssyk-level-4',
                                'legacyAmsTaxonomyId' => '8129',
                                'parentId' => 'wTEr_CBC_bqh',
                            ),
                        41 =>
                            array(
                                'id' => 'icae_Y69_H8E',
                                'name' => 'Övriga maskinoperatörer, livsmedelsindustri m.m.',
                                'type' => 'ssyk-level-4',
                                'legacyAmsTaxonomyId' => '8169',
                                'parentId' => 'wTEr_CBC_bqh',
                            ),
                        42 =>
                            array(
                                'id' => 'skLS_kpa_Ui1',
                                'name' => 'Övriga maskinoperatörer, textil-, skinn- och läderindustri',
                                'type' => 'ssyk-level-4',
                                'legacyAmsTaxonomyId' => '8159',
                                'parentId' => 'wTEr_CBC_bqh',
                            ),
                        43 =>
                            array(
                                'id' => 'HXzD_qvt_HV6',
                                'name' => 'Övriga montörer',
                                'type' => 'ssyk-level-4',
                                'legacyAmsTaxonomyId' => '8219',
                                'parentId' => 'wTEr_CBC_bqh',
                            ),
                        44 =>
                            array(
                                'id' => 'hxm6_xkr_dHm',
                                'name' => 'Övriga process- och maskinoperatörer',
                                'type' => 'ssyk-level-4',
                                'legacyAmsTaxonomyId' => '8189',
                                'parentId' => 'wTEr_CBC_bqh',
                            ),
                    ),
            ),
        9 =>
            array(
                'id' => 'yhCP_AqT_tns',
                'name' => 'Installation, drift, underhåll',
                'type' => 'occupation-field',
                'legacyAmsTaxonomyId' => '10',
                'items' =>
                    array(
                        0 =>
                            array(
                                'id' => 'MW1P_GNJ_4F9',
                                'name' => 'Distributionselektriker',
                                'type' => 'ssyk-level-4',
                                'legacyAmsTaxonomyId' => '7413',
                                'parentId' => 'yhCP_AqT_tns',
                            ),
                        1 =>
                            array(
                                'id' => 'Cppd_9P7_HeR',
                                'name' => 'Drifttekniker vid värme- och vattenverk',
                                'type' => 'ssyk-level-4',
                                'legacyAmsTaxonomyId' => '8191',
                                'parentId' => 'yhCP_AqT_tns',
                            ),
                        2 =>
                            array(
                                'id' => 'fWrt_sLg_koW',
                                'name' => 'Elektronikreparatörer och kommunikationselektriker m.fl.',
                                'type' => 'ssyk-level-4',
                                'legacyAmsTaxonomyId' => '7420',
                                'parentId' => 'yhCP_AqT_tns',
                            ),
                        3 =>
                            array(
                                'id' => 'df9D_e6y_61z',
                                'name' => 'Fastighetsskötare',
                                'type' => 'ssyk-level-4',
                                'legacyAmsTaxonomyId' => '5152',
                                'parentId' => 'yhCP_AqT_tns',
                            ),
                        4 =>
                            array(
                                'id' => 'iGTu_bYL_2T7',
                                'name' => 'Flygmekaniker m.fl.',
                                'type' => 'ssyk-level-4',
                                'legacyAmsTaxonomyId' => '7232',
                                'parentId' => 'yhCP_AqT_tns',
                            ),
                        5 =>
                            array(
                                'id' => 'a75S_eLg_JWH',
                                'name' => 'Industrielektriker',
                                'type' => 'ssyk-level-4',
                                'legacyAmsTaxonomyId' => '7412',
                                'parentId' => 'yhCP_AqT_tns',
                            ),
                        6 =>
                            array(
                                'id' => 'yyF7_jsW_EeP',
                                'name' => 'Installations- och serviceelektriker',
                                'type' => 'ssyk-level-4',
                                'legacyAmsTaxonomyId' => '7411',
                                'parentId' => 'yhCP_AqT_tns',
                            ),
                        7 =>
                            array(
                                'id' => 'Lzpv_ofL_3H5',
                                'name' => 'Motorfordonsmekaniker och fordonsreparatörer',
                                'type' => 'ssyk-level-4',
                                'legacyAmsTaxonomyId' => '7231',
                                'parentId' => 'yhCP_AqT_tns',
                            ),
                        8 =>
                            array(
                                'id' => 'QEBd_qHu_vGr',
                                'name' => 'Processövervakare, kemisk industri',
                                'type' => 'ssyk-level-4',
                                'legacyAmsTaxonomyId' => '8192',
                                'parentId' => 'yhCP_AqT_tns',
                            ),
                        9 =>
                            array(
                                'id' => 'E87t_egE_pjA',
                                'name' => 'Processövervakare, metallproduktion',
                                'type' => 'ssyk-level-4',
                                'legacyAmsTaxonomyId' => '8193',
                                'parentId' => 'yhCP_AqT_tns',
                            ),
                        10 =>
                            array(
                                'id' => 'KttZ_Skc_bMR',
                                'name' => 'Underhållsmekaniker och maskinreparatörer',
                                'type' => 'ssyk-level-4',
                                'legacyAmsTaxonomyId' => '7233',
                                'parentId' => 'yhCP_AqT_tns',
                            ),
                        11 =>
                            array(
                                'id' => '9DdK_AZY_ZNK',
                                'name' => 'Vaktmästare m.fl.',
                                'type' => 'ssyk-level-4',
                                'legacyAmsTaxonomyId' => '9622',
                                'parentId' => 'yhCP_AqT_tns',
                            ),
                        12 =>
                            array(
                                'id' => '7Zqy_hSM_Fig',
                                'name' => 'Övriga drifttekniker och processövervakare',
                                'type' => 'ssyk-level-4',
                                'legacyAmsTaxonomyId' => '8199',
                                'parentId' => 'yhCP_AqT_tns',
                            ),
                        13 =>
                            array(
                                'id' => 'ieVp_d5L_rS9',
                                'name' => 'Övriga servicearbetare',
                                'type' => 'ssyk-level-4',
                                'legacyAmsTaxonomyId' => '9629',
                                'parentId' => 'yhCP_AqT_tns',
                            ),
                    ),
            ),
        10 =>
            array(
                'id' => 'Uuf1_GMh_Uvw',
                'name' => 'Kropps- och skönhetsvård',
                'type' => 'occupation-field',
                'legacyAmsTaxonomyId' => '4',
                'items' =>
                    array(
                        0 =>
                            array(
                                'id' => 'HATH_AfN_RRz',
                                'name' => 'Fotterapeuter',
                                'type' => 'ssyk-level-4',
                                'legacyAmsTaxonomyId' => '5144',
                                'parentId' => 'Uuf1_GMh_Uvw',
                            ),
                        1 =>
                            array(
                                'id' => 'LyBp_bY6_bZK',
                                'name' => 'Frisörer',
                                'type' => 'ssyk-level-4',
                                'legacyAmsTaxonomyId' => '5141',
                                'parentId' => 'Uuf1_GMh_Uvw',
                            ),
                        2 =>
                            array(
                                'id' => 'xr7w_N6Q_QMA',
                                'name' => 'Hudterapeuter',
                                'type' => 'ssyk-level-4',
                                'legacyAmsTaxonomyId' => '5142',
                                'parentId' => 'Uuf1_GMh_Uvw',
                            ),
                        3 =>
                            array(
                                'id' => 'uxHV_KXc_PKD',
                                'name' => 'Massörer och massageterapeuter',
                                'type' => 'ssyk-level-4',
                                'legacyAmsTaxonomyId' => '5143',
                                'parentId' => 'Uuf1_GMh_Uvw',
                            ),
                        4 =>
                            array(
                                'id' => 'ezKk_kss_CiQ',
                                'name' => 'Övriga skönhets- och kroppsterapeuter',
                                'type' => 'ssyk-level-4',
                                'legacyAmsTaxonomyId' => '5149',
                                'parentId' => 'Uuf1_GMh_Uvw',
                            ),
                    ),
            ),
        11 =>
            array(
                'id' => '9puE_nYg_crq',
                'name' => 'Kultur, media, design',
                'type' => 'occupation-field',
                'legacyAmsTaxonomyId' => '11',
                'items' =>
                    array(
                        0 =>
                            array(
                                'id' => 'wVfo_Njx_1rB',
                                'name' => 'Bibliotekarier och arkivarier',
                                'type' => 'ssyk-level-4',
                                'legacyAmsTaxonomyId' => '2622',
                                'parentId' => '9puE_nYg_crq',
                            ),
                        1 =>
                            array(
                                'id' => 'CkRH_4Qn_iX3',
                                'name' => 'Bild- och sändningstekniker',
                                'type' => 'ssyk-level-4',
                                'legacyAmsTaxonomyId' => '3521',
                                'parentId' => '9puE_nYg_crq',
                            ),
                        2 =>
                            array(
                                'id' => '34Tn_BQQ_tfo',
                                'name' => 'Bildkonstnärer m.fl.',
                                'type' => 'ssyk-level-4',
                                'legacyAmsTaxonomyId' => '2651',
                                'parentId' => '9puE_nYg_crq',
                            ),
                        3 =>
                            array(
                                'id' => 'Mbt6_3ko_DiD',
                                'name' => 'Designer inom spel och digitala medier',
                                'type' => 'ssyk-level-4',
                                'legacyAmsTaxonomyId' => '2173',
                                'parentId' => '9puE_nYg_crq',
                            ),
                        4 =>
                            array(
                                'id' => '3J38_DNz_YKK',
                                'name' => 'Fotografer',
                                'type' => 'ssyk-level-4',
                                'legacyAmsTaxonomyId' => '3431',
                                'parentId' => '9puE_nYg_crq',
                            ),
                        5 =>
                            array(
                                'id' => 'zfve_s6G_tpc',
                                'name' => 'Författare m.fl.',
                                'type' => 'ssyk-level-4',
                                'legacyAmsTaxonomyId' => '2641',
                                'parentId' => '9puE_nYg_crq',
                            ),
                        6 =>
                            array(
                                'id' => '8Bmh_vtM_zts',
                                'name' => 'Grafiska formgivare m.fl.',
                                'type' => 'ssyk-level-4',
                                'legacyAmsTaxonomyId' => '2172',
                                'parentId' => '9puE_nYg_crq',
                            ),
                        7 =>
                            array(
                                'id' => 'DqLe_pH6_jyj',
                                'name' => 'Industridesigner',
                                'type' => 'ssyk-level-4',
                                'legacyAmsTaxonomyId' => '2171',
                                'parentId' => '9puE_nYg_crq',
                            ),
                        8 =>
                            array(
                                'id' => 'CSUf_ZVM_a7Z',
                                'name' => 'Inredare, dekoratörer och scenografer m.fl.',
                                'type' => 'ssyk-level-4',
                                'legacyAmsTaxonomyId' => '3432',
                                'parentId' => '9puE_nYg_crq',
                            ),
                        9 =>
                            array(
                                'id' => 'PH2M_uV4_r72',
                                'name' => 'Inspicienter och scriptor m.fl.',
                                'type' => 'ssyk-level-4',
                                'legacyAmsTaxonomyId' => '3433',
                                'parentId' => '9puE_nYg_crq',
                            ),
                        10 =>
                            array(
                                'id' => 'SgNH_hag_n9D',
                                'name' => 'Journalister m.fl.',
                                'type' => 'ssyk-level-4',
                                'legacyAmsTaxonomyId' => '2642',
                                'parentId' => '9puE_nYg_crq',
                            ),
                        11 =>
                            array(
                                'id' => 'gmRr_7tt_eHj',
                                'name' => 'Koreografer och dansare',
                                'type' => 'ssyk-level-4',
                                'legacyAmsTaxonomyId' => '2653',
                                'parentId' => '9puE_nYg_crq',
                            ),
                        12 =>
                            array(
                                'id' => '4BsK_q2C_sCL',
                                'name' => 'Ljus-, ljud- och scentekniker',
                                'type' => 'ssyk-level-4',
                                'legacyAmsTaxonomyId' => '3522',
                                'parentId' => '9puE_nYg_crq',
                            ),
                        13 =>
                            array(
                                'id' => 'Qbvf_6nd_Esn',
                                'name' => 'Museiintendenter m.fl.',
                                'type' => 'ssyk-level-4',
                                'legacyAmsTaxonomyId' => '2621',
                                'parentId' => '9puE_nYg_crq',
                            ),
                        14 =>
                            array(
                                'id' => 'AWJF_wqZ_va9',
                                'name' => 'Musiker, sångare och kompositörer',
                                'type' => 'ssyk-level-4',
                                'legacyAmsTaxonomyId' => '2652',
                                'parentId' => '9puE_nYg_crq',
                            ),
                        15 =>
                            array(
                                'id' => 'rYSG_3WJ_LmC',
                                'name' => 'Regissörer och producenter av film, teater m.m.',
                                'type' => 'ssyk-level-4',
                                'legacyAmsTaxonomyId' => '2654',
                                'parentId' => '9puE_nYg_crq',
                            ),
                        16 =>
                            array(
                                'id' => 'iBUL_s38_izZ',
                                'name' => 'Skådespelare',
                                'type' => 'ssyk-level-4',
                                'legacyAmsTaxonomyId' => '2655',
                                'parentId' => '9puE_nYg_crq',
                            ),
                        17 =>
                            array(
                                'id' => 'PQDm_Z63_zst',
                                'name' => 'Översättare, tolkar och lingvister m.fl.',
                                'type' => 'ssyk-level-4',
                                'legacyAmsTaxonomyId' => '2643',
                                'parentId' => '9puE_nYg_crq',
                            ),
                        18 =>
                            array(
                                'id' => 'PF4H_kQD_zpL',
                                'name' => 'Övriga designer och formgivare',
                                'type' => 'ssyk-level-4',
                                'legacyAmsTaxonomyId' => '2179',
                                'parentId' => '9puE_nYg_crq',
                            ),
                        19 =>
                            array(
                                'id' => 'xuSE_mtB_Mir',
                                'name' => 'Övriga yrken inom kultur och underhållning',
                                'type' => 'ssyk-level-4',
                                'legacyAmsTaxonomyId' => '3439',
                                'parentId' => '9puE_nYg_crq',
                            ),
                    ),
            ),
        12 =>
            array(
                'id' => 'bH5L_uXD_ZAX',
                'name' => 'Militärt arbete',
                'type' => 'occupation-field',
                'legacyAmsTaxonomyId' => '22',
                'items' =>
                    array(
                        0 =>
                            array(
                                'id' => 'KiVA_anS_RJh',
                                'name' => 'Officerare',
                                'type' => 'ssyk-level-4',
                                'legacyAmsTaxonomyId' => '0110',
                                'parentId' => 'bH5L_uXD_ZAX',
                            ),
                        1 =>
                            array(
                                'id' => 'jXUQ_rUV_iBv',
                                'name' => 'Soldater m.fl.',
                                'type' => 'ssyk-level-4',
                                'legacyAmsTaxonomyId' => '0310',
                                'parentId' => 'bH5L_uXD_ZAX',
                            ),
                        2 =>
                            array(
                                'id' => 'dhgR_9jk_95r',
                                'name' => 'Specialistofficerare',
                                'type' => 'ssyk-level-4',
                                'legacyAmsTaxonomyId' => '0210',
                                'parentId' => 'bH5L_uXD_ZAX',
                            ),
                    ),
            ),
        13 =>
            array(
                'id' => 'VuuL_7CH_adj',
                'name' => 'Naturbruk',
                'type' => 'occupation-field',
                'legacyAmsTaxonomyId' => '13',
                'items' =>
                    array(
                        0 =>
                            array(
                                'id' => '1EBv_UzM_ozQ',
                                'name' => 'Bärplockare och plantörer m.fl.',
                                'type' => 'ssyk-level-4',
                                'legacyAmsTaxonomyId' => '9210',
                                'parentId' => 'VuuL_7CH_adj',
                            ),
                        1 =>
                            array(
                                'id' => 'Lm3Z_gek_GYc',
                                'name' => 'Fiskare',
                                'type' => 'ssyk-level-4',
                                'legacyAmsTaxonomyId' => '6222',
                                'parentId' => 'VuuL_7CH_adj',
                            ),
                        2 =>
                            array(
                                'id' => 'c8r8_e4L_gwj',
                                'name' => 'Fiskodlare',
                                'type' => 'ssyk-level-4',
                                'legacyAmsTaxonomyId' => '6221',
                                'parentId' => 'VuuL_7CH_adj',
                            ),
                        3 =>
                            array(
                                'id' => 'KwVo_sQu_G2e',
                                'name' => 'Förare av jordbruks- och skogsmaskiner',
                                'type' => 'ssyk-level-4',
                                'legacyAmsTaxonomyId' => '8341',
                                'parentId' => 'VuuL_7CH_adj',
                            ),
                        4 =>
                            array(
                                'id' => 'k3R3_UkC_nK2',
                                'name' => 'Odlare av jordbruksväxter, frukt och bär',
                                'type' => 'ssyk-level-4',
                                'legacyAmsTaxonomyId' => '6111',
                                'parentId' => 'VuuL_7CH_adj',
                            ),
                        5 =>
                            array(
                                'id' => 'qouP_wtb_93q',
                                'name' => 'Skogsarbetare',
                                'type' => 'ssyk-level-4',
                                'legacyAmsTaxonomyId' => '6210',
                                'parentId' => 'VuuL_7CH_adj',
                            ),
                        6 =>
                            array(
                                'id' => 'XurM_DVs_ggn',
                                'name' => 'Specialister och rådgivare inom lantbruk m.m.',
                                'type' => 'ssyk-level-4',
                                'legacyAmsTaxonomyId' => '2134',
                                'parentId' => 'VuuL_7CH_adj',
                            ),
                        7 =>
                            array(
                                'id' => '3LdB_WEJ_8Ms',
                                'name' => 'Specialister och rådgivare inom skogsbruk',
                                'type' => 'ssyk-level-4',
                                'legacyAmsTaxonomyId' => '2135',
                                'parentId' => 'VuuL_7CH_adj',
                            ),
                        8 =>
                            array(
                                'id' => 'XBh3_Xrm_C4R',
                                'name' => 'Trädgårdsanläggare m.fl.',
                                'type' => 'ssyk-level-4',
                                'legacyAmsTaxonomyId' => '6113',
                                'parentId' => 'VuuL_7CH_adj',
                            ),
                        9 =>
                            array(
                                'id' => '2xQ4_4kh_kTZ',
                                'name' => 'Trädgårdsodlare',
                                'type' => 'ssyk-level-4',
                                'legacyAmsTaxonomyId' => '6112',
                                'parentId' => 'VuuL_7CH_adj',
                            ),
                        10 =>
                            array(
                                'id' => 'KYmy_iqC_xiQ',
                                'name' => 'Uppfödare och skötare av lantbrukets husdjur',
                                'type' => 'ssyk-level-4',
                                'legacyAmsTaxonomyId' => '6121',
                                'parentId' => 'VuuL_7CH_adj',
                            ),
                        11 =>
                            array(
                                'id' => 'MSzH_F2n_Emb',
                                'name' => 'Uppfödare och skötare av sällskapsdjur',
                                'type' => 'ssyk-level-4',
                                'legacyAmsTaxonomyId' => '6122',
                                'parentId' => 'VuuL_7CH_adj',
                            ),
                        12 =>
                            array(
                                'id' => 'RYCQ_ogb_uUY',
                                'name' => 'Växtodlare och djuruppfödare, blandad drift',
                                'type' => 'ssyk-level-4',
                                'legacyAmsTaxonomyId' => '6130',
                                'parentId' => 'VuuL_7CH_adj',
                            ),
                        13 =>
                            array(
                                'id' => 'Lrsj_wRZ_sFV',
                                'name' => 'Övriga djuruppfödare och djurskötare',
                                'type' => 'ssyk-level-4',
                                'legacyAmsTaxonomyId' => '6129',
                                'parentId' => 'VuuL_7CH_adj',
                            ),
                    ),
            ),
        14 =>
            array(
                'id' => 'kJeN_wmw_9wX',
                'name' => 'Naturvetenskapligt arbete',
                'type' => 'occupation-field',
                'legacyAmsTaxonomyId' => '14',
                'items' =>
                    array(
                        0 =>
                            array(
                                'id' => 'Z2MZ_eYc_Lfv',
                                'name' => 'Cell- och molekylärbiologer m.fl.',
                                'type' => 'ssyk-level-4',
                                'legacyAmsTaxonomyId' => '2131',
                                'parentId' => 'kJeN_wmw_9wX',
                            ),
                        1 =>
                            array(
                                'id' => 'dsK3_hkt_zGy',
                                'name' => 'Farmakologer och biomedicinare',
                                'type' => 'ssyk-level-4',
                                'legacyAmsTaxonomyId' => '2133',
                                'parentId' => 'kJeN_wmw_9wX',
                            ),
                        2 =>
                            array(
                                'id' => 'KM7d_Z6Y_LCJ',
                                'name' => 'Fysiker och astronomer',
                                'type' => 'ssyk-level-4',
                                'legacyAmsTaxonomyId' => '2111',
                                'parentId' => 'kJeN_wmw_9wX',
                            ),
                        3 =>
                            array(
                                'id' => 'V7Yz_4WV_g4z',
                                'name' => 'Geologer och geofysiker m.fl.',
                                'type' => 'ssyk-level-4',
                                'legacyAmsTaxonomyId' => '2114',
                                'parentId' => 'kJeN_wmw_9wX',
                            ),
                        4 =>
                            array(
                                'id' => 'eofS_oZs_RZi',
                                'name' => 'Kemister',
                                'type' => 'ssyk-level-4',
                                'legacyAmsTaxonomyId' => '2113',
                                'parentId' => 'kJeN_wmw_9wX',
                            ),
                        5 =>
                            array(
                                'id' => 'ZA1N_Z2B_nFQ',
                                'name' => 'Matematiker och aktuarier',
                                'type' => 'ssyk-level-4',
                                'legacyAmsTaxonomyId' => '2121',
                                'parentId' => 'kJeN_wmw_9wX',
                            ),
                        6 =>
                            array(
                                'id' => 'LP8B_auW_wMp',
                                'name' => 'Meteorologer',
                                'type' => 'ssyk-level-4',
                                'legacyAmsTaxonomyId' => '2112',
                                'parentId' => 'kJeN_wmw_9wX',
                            ),
                        7 =>
                            array(
                                'id' => 'puim_6PY_DGj',
                                'name' => 'Miljö- och hälsoskyddsinspektörer',
                                'type' => 'ssyk-level-4',
                                'legacyAmsTaxonomyId' => '2182',
                                'parentId' => 'kJeN_wmw_9wX',
                            ),
                        8 =>
                            array(
                                'id' => 'rE1E_m3d_cx1',
                                'name' => 'Specialister inom miljöskydd och miljöteknik',
                                'type' => 'ssyk-level-4',
                                'legacyAmsTaxonomyId' => '2183',
                                'parentId' => 'kJeN_wmw_9wX',
                            ),
                        9 =>
                            array(
                                'id' => 'e9FK_VKh_ahW',
                                'name' => 'Växt- och djurbiologer',
                                'type' => 'ssyk-level-4',
                                'legacyAmsTaxonomyId' => '2132',
                                'parentId' => 'kJeN_wmw_9wX',
                            ),
                    ),
            ),
        15 =>
            array(
                'id' => 'MVqp_eS8_kDZ',
                'name' => 'Pedagogiskt arbete',
                'type' => 'occupation-field',
                'legacyAmsTaxonomyId' => '15',
                'items' =>
                    array(
                        0 =>
                            array(
                                'id' => 'NNK9_F1o_pK5',
                                'name' => 'Doktorander',
                                'type' => 'ssyk-level-4',
                                'legacyAmsTaxonomyId' => '2314',
                                'parentId' => 'MVqp_eS8_kDZ',
                            ),
                        1 =>
                            array(
                                'id' => 'XW9L_tA9_WaX',
                                'name' => 'Elevassistenter m.fl.',
                                'type' => 'ssyk-level-4',
                                'legacyAmsTaxonomyId' => '5312',
                                'parentId' => 'MVqp_eS8_kDZ',
                            ),
                        2 =>
                            array(
                                'id' => 'P7eS_nP8_3dy',
                                'name' => 'Forskarassistenter m.fl.',
                                'type' => 'ssyk-level-4',
                                'legacyAmsTaxonomyId' => '2313',
                                'parentId' => 'MVqp_eS8_kDZ',
                            ),
                        3 =>
                            array(
                                'id' => 'CFW8_eBa_NaV',
                                'name' => 'Fritidspedagoger',
                                'type' => 'ssyk-level-4',
                                'legacyAmsTaxonomyId' => '2342',
                                'parentId' => 'MVqp_eS8_kDZ',
                            ),
                        4 =>
                            array(
                                'id' => '5ek3_Cgq_WeZ',
                                'name' => 'Förskollärare',
                                'type' => 'ssyk-level-4',
                                'legacyAmsTaxonomyId' => '2343',
                                'parentId' => 'MVqp_eS8_kDZ',
                            ),
                        5 =>
                            array(
                                'id' => 'oQUQ_D11_HPx',
                                'name' => 'Grundskollärare',
                                'type' => 'ssyk-level-4',
                                'legacyAmsTaxonomyId' => '2341',
                                'parentId' => 'MVqp_eS8_kDZ',
                            ),
                        6 =>
                            array(
                                'id' => '4KhP_FxL_uZ5',
                                'name' => 'Gymnasielärare',
                                'type' => 'ssyk-level-4',
                                'legacyAmsTaxonomyId' => '2330',
                                'parentId' => 'MVqp_eS8_kDZ',
                            ),
                        7 =>
                            array(
                                'id' => 'EA6o_N1N_QtT',
                                'name' => 'Idrottstränare och instruktörer m.fl.',
                                'type' => 'ssyk-level-4',
                                'legacyAmsTaxonomyId' => '3422',
                                'parentId' => 'MVqp_eS8_kDZ',
                            ),
                        8 =>
                            array(
                                'id' => '2x2V_UeL_6ke',
                                'name' => 'Lärare i yrkesämnen',
                                'type' => 'ssyk-level-4',
                                'legacyAmsTaxonomyId' => '2320',
                                'parentId' => 'MVqp_eS8_kDZ',
                            ),
                        9 =>
                            array(
                                'id' => 'AwXA_EM4_71n',
                                'name' => 'Professionella idrottsutövare',
                                'type' => 'ssyk-level-4',
                                'legacyAmsTaxonomyId' => '3421',
                                'parentId' => 'MVqp_eS8_kDZ',
                            ),
                        10 =>
                            array(
                                'id' => 'Gm5j_S2Y_aTB',
                                'name' => 'Professorer',
                                'type' => 'ssyk-level-4',
                                'legacyAmsTaxonomyId' => '2311',
                                'parentId' => 'MVqp_eS8_kDZ',
                            ),
                        11 =>
                            array(
                                'id' => '3FP7_4Eg_x8P',
                                'name' => 'Speciallärare och specialpedagoger m.fl.',
                                'type' => 'ssyk-level-4',
                                'legacyAmsTaxonomyId' => '2351',
                                'parentId' => 'MVqp_eS8_kDZ',
                            ),
                        12 =>
                            array(
                                'id' => 'jJF3_qaQ_Zsh',
                                'name' => 'Studie- och yrkesvägledare',
                                'type' => 'ssyk-level-4',
                                'legacyAmsTaxonomyId' => '2352',
                                'parentId' => 'MVqp_eS8_kDZ',
                            ),
                        13 =>
                            array(
                                'id' => 'yVZH_zHh_6fG',
                                'name' => 'Trafiklärare',
                                'type' => 'ssyk-level-4',
                                'legacyAmsTaxonomyId' => '3441',
                                'parentId' => 'MVqp_eS8_kDZ',
                            ),
                        14 =>
                            array(
                                'id' => 'cYCo_PxY_zQd',
                                'name' => 'Universitets- och högskolelektorer',
                                'type' => 'ssyk-level-4',
                                'legacyAmsTaxonomyId' => '2312',
                                'parentId' => 'MVqp_eS8_kDZ',
                            ),
                        15 =>
                            array(
                                'id' => 'mcRJ_kq2_jFr',
                                'name' => 'Övriga pedagoger med teoretisk specialistkompetens',
                                'type' => 'ssyk-level-4',
                                'legacyAmsTaxonomyId' => '2359',
                                'parentId' => 'MVqp_eS8_kDZ',
                            ),
                        16 =>
                            array(
                                'id' => 'RPBE_x5M_cXX',
                                'name' => 'Övriga universitets- och högskolelärare',
                                'type' => 'ssyk-level-4',
                                'legacyAmsTaxonomyId' => '2319',
                                'parentId' => 'MVqp_eS8_kDZ',
                            ),
                        17 =>
                            array(
                                'id' => '1CX5_mZw_Vcq',
                                'name' => 'Övriga utbildare och instruktörer',
                                'type' => 'ssyk-level-4',
                                'legacyAmsTaxonomyId' => '3449',
                                'parentId' => 'MVqp_eS8_kDZ',
                            ),
                    ),
            ),
        16 =>
            array(
                'id' => 'whao_Q6A_ScE',
                'name' => 'Sanering och renhållning',
                'type' => 'occupation-field',
                'legacyAmsTaxonomyId' => '12',
                'items' =>
                    array(
                        0 =>
                            array(
                                'id' => 'FjdF_H2e_tAG',
                                'name' => 'Bilrekonditionerare, fönsterputsare m.fl.',
                                'type' => 'ssyk-level-4',
                                'legacyAmsTaxonomyId' => '9120',
                                'parentId' => 'whao_Q6A_ScE',
                            ),
                        1 =>
                            array(
                                'id' => 'X7HR_rZK_4wj',
                                'name' => 'Renhållnings- och återvinningsarbetare',
                                'type' => 'ssyk-level-4',
                                'legacyAmsTaxonomyId' => '9610',
                                'parentId' => 'whao_Q6A_ScE',
                            ),
                        2 =>
                            array(
                                'id' => 'idjo_2Wr_a3E',
                                'name' => 'Saneringsarbetare m.fl.',
                                'type' => 'ssyk-level-4',
                                'legacyAmsTaxonomyId' => '7134',
                                'parentId' => 'whao_Q6A_ScE',
                            ),
                        3 =>
                            array(
                                'id' => 'SUfj_4D9_FNx',
                                'name' => 'Skorstensfejare',
                                'type' => 'ssyk-level-4',
                                'legacyAmsTaxonomyId' => '7133',
                                'parentId' => 'whao_Q6A_ScE',
                            ),
                        4 =>
                            array(
                                'id' => 'Z6TY_xDf_Yup',
                                'name' => 'Städare',
                                'type' => 'ssyk-level-4',
                                'legacyAmsTaxonomyId' => '9111',
                                'parentId' => 'whao_Q6A_ScE',
                            ),
                        5 =>
                            array(
                                'id' => 'FtyZ_Joo_tB8',
                                'name' => 'Städledare och husfruar',
                                'type' => 'ssyk-level-4',
                                'legacyAmsTaxonomyId' => '5151',
                                'parentId' => 'whao_Q6A_ScE',
                            ),
                        6 =>
                            array(
                                'id' => 'o1gn_FoS_fB7',
                                'name' => 'Övrig hemservicepersonal m.fl.',
                                'type' => 'ssyk-level-4',
                                'legacyAmsTaxonomyId' => '9119',
                                'parentId' => 'whao_Q6A_ScE',
                            ),
                    ),
            ),
        17 =>
            array(
                'id' => 'GazW_2TU_kJw',
                'name' => 'Socialt arbete',
                'type' => 'occupation-field',
                'legacyAmsTaxonomyId' => '16',
                'items' =>
                    array(
                        0 =>
                            array(
                                'id' => 'Hi9c_iTe_gHH',
                                'name' => 'Barnskötare',
                                'type' => 'ssyk-level-4',
                                'legacyAmsTaxonomyId' => '5311',
                                'parentId' => 'GazW_2TU_kJw',
                            ),
                        1 =>
                            array(
                                'id' => 'R8bW_rsJ_b2G',
                                'name' => 'Begravnings- och krematoriepersonal',
                                'type' => 'ssyk-level-4',
                                'legacyAmsTaxonomyId' => '5161',
                                'parentId' => 'GazW_2TU_kJw',
                            ),
                        2 =>
                            array(
                                'id' => 'BWwk_fYX_S5B',
                                'name' => 'Behandlingsassistenter och socialpedagoger m.fl.',
                                'type' => 'ssyk-level-4',
                                'legacyAmsTaxonomyId' => '3411',
                                'parentId' => 'GazW_2TU_kJw',
                            ),
                        3 =>
                            array(
                                'id' => '5uP5_Ugw_aVE',
                                'name' => 'Biståndsbedömare m.fl.',
                                'type' => 'ssyk-level-4',
                                'legacyAmsTaxonomyId' => '2663',
                                'parentId' => 'GazW_2TU_kJw',
                            ),
                        4 =>
                            array(
                                'id' => 'wzeq_No2_LF1',
                                'name' => 'Diakoner',
                                'type' => 'ssyk-level-4',
                                'legacyAmsTaxonomyId' => '2672',
                                'parentId' => 'GazW_2TU_kJw',
                            ),
                        5 =>
                            array(
                                'id' => 'FpPP_jqK_xzT',
                                'name' => 'Friskvårdskonsulenter och hälsopedagoger m.fl.',
                                'type' => 'ssyk-level-4',
                                'legacyAmsTaxonomyId' => '3424',
                                'parentId' => 'GazW_2TU_kJw',
                            ),
                        6 =>
                            array(
                                'id' => 'aA2Z_9XX_R1v',
                                'name' => 'Fritidsledare m.fl.',
                                'type' => 'ssyk-level-4',
                                'legacyAmsTaxonomyId' => '3423',
                                'parentId' => 'GazW_2TU_kJw',
                            ),
                        7 =>
                            array(
                                'id' => 'dJXy_Rpq_a2u',
                                'name' => 'Kuratorer',
                                'type' => 'ssyk-level-4',
                                'legacyAmsTaxonomyId' => '2662',
                                'parentId' => 'GazW_2TU_kJw',
                            ),
                        8 =>
                            array(
                                'id' => 'x5rn_vga_gRK',
                                'name' => 'Pastorer m.fl.',
                                'type' => 'ssyk-level-4',
                                'legacyAmsTaxonomyId' => '3412',
                                'parentId' => 'GazW_2TU_kJw',
                            ),
                        9 =>
                            array(
                                'id' => 'sq3e_WVv_Fjd',
                                'name' => 'Personliga assistenter',
                                'type' => 'ssyk-level-4',
                                'legacyAmsTaxonomyId' => '5343',
                                'parentId' => 'GazW_2TU_kJw',
                            ),
                        10 =>
                            array(
                                'id' => '2L2s_EU8_PzR',
                                'name' => 'Präster',
                                'type' => 'ssyk-level-4',
                                'legacyAmsTaxonomyId' => '2671',
                                'parentId' => 'GazW_2TU_kJw',
                            ),
                        11 =>
                            array(
                                'id' => 'pok1_ipJ_yzD',
                                'name' => 'Socialsekreterare',
                                'type' => 'ssyk-level-4',
                                'legacyAmsTaxonomyId' => '2661',
                                'parentId' => 'GazW_2TU_kJw',
                            ),
                        12 =>
                            array(
                                'id' => '7pz9_eY9_D2s',
                                'name' => 'Vårdare, boendestödjare',
                                'type' => 'ssyk-level-4',
                                'legacyAmsTaxonomyId' => '5342',
                                'parentId' => 'GazW_2TU_kJw',
                            ),
                        13 =>
                            array(
                                'id' => 'DSGC_nw7_WnH',
                                'name' => 'Övrig servicepersonal',
                                'type' => 'ssyk-level-4',
                                'legacyAmsTaxonomyId' => '5169',
                                'parentId' => 'GazW_2TU_kJw',
                            ),
                        14 =>
                            array(
                                'id' => 'n6iX_f2z_XfE',
                                'name' => 'Övriga yrken inom socialt arbete',
                                'type' => 'ssyk-level-4',
                                'legacyAmsTaxonomyId' => '2669',
                                'parentId' => 'GazW_2TU_kJw',
                            ),
                    ),
            ),
        18 =>
            array(
                'id' => 'E7hm_BLq_fqZ',
                'name' => 'Säkerhetsarbete',
                'type' => 'occupation-field',
                'legacyAmsTaxonomyId' => '17',
                'items' =>
                    array(
                        0 =>
                            array(
                                'id' => 'Uw64_cuc_U3H',
                                'name' => 'Arbetsmiljöingenjörer, yrkes- och miljöhygieniker',
                                'type' => 'ssyk-level-4',
                                'legacyAmsTaxonomyId' => '2181',
                                'parentId' => 'E7hm_BLq_fqZ',
                            ),
                        1 =>
                            array(
                                'id' => 'wCx8_rY3_XUT',
                                'name' => 'Brandingenjörer och byggnadsinspektörer m.fl.',
                                'type' => 'ssyk-level-4',
                                'legacyAmsTaxonomyId' => '3355',
                                'parentId' => 'E7hm_BLq_fqZ',
                            ),
                        2 =>
                            array(
                                'id' => 'ug5y_o6z_U3L',
                                'name' => 'Brandmän',
                                'type' => 'ssyk-level-4',
                                'legacyAmsTaxonomyId' => '5411',
                                'parentId' => 'E7hm_BLq_fqZ',
                            ),
                        3 =>
                            array(
                                'id' => 'hgAg_gLr_YGg',
                                'name' => 'Kriminalvårdare',
                                'type' => 'ssyk-level-4',
                                'legacyAmsTaxonomyId' => '5412',
                                'parentId' => 'E7hm_BLq_fqZ',
                            ),
                        4 =>
                            array(
                                'id' => 'rNcE_Zno_pD8',
                                'name' => 'Poliser',
                                'type' => 'ssyk-level-4',
                                'legacyAmsTaxonomyId' => '3360',
                                'parentId' => 'E7hm_BLq_fqZ',
                            ),
                        5 =>
                            array(
                                'id' => 'kZwz_D8K_bKs',
                                'name' => 'SOS-operatörer m.fl.',
                                'type' => 'ssyk-level-4',
                                'legacyAmsTaxonomyId' => '5414',
                                'parentId' => 'E7hm_BLq_fqZ',
                            ),
                        6 =>
                            array(
                                'id' => 'nuXg_Wjc_JPd',
                                'name' => 'Säkerhetsinspektörer m.fl.',
                                'type' => 'ssyk-level-4',
                                'legacyAmsTaxonomyId' => '3354',
                                'parentId' => 'E7hm_BLq_fqZ',
                            ),
                        7 =>
                            array(
                                'id' => 'FKCE_Anf_zGH',
                                'name' => 'Tull- och kustbevakningstjänstemän',
                                'type' => 'ssyk-level-4',
                                'legacyAmsTaxonomyId' => '3351',
                                'parentId' => 'E7hm_BLq_fqZ',
                            ),
                        8 =>
                            array(
                                'id' => 'iqZh_3yX_i8n',
                                'name' => 'Väktare och ordningsvakter',
                                'type' => 'ssyk-level-4',
                                'legacyAmsTaxonomyId' => '5413',
                                'parentId' => 'E7hm_BLq_fqZ',
                            ),
                        9 =>
                            array(
                                'id' => 'ayQ4_G3W_A2w',
                                'name' => 'Övrig bevaknings- och säkerhetspersonal',
                                'type' => 'ssyk-level-4',
                                'legacyAmsTaxonomyId' => '5419',
                                'parentId' => 'E7hm_BLq_fqZ',
                            ),
                    ),
            ),
        19 =>
            array(
                'id' => '6Hq3_tKo_V57',
                'name' => 'Tekniskt arbete',
                'type' => 'occupation-field',
                'legacyAmsTaxonomyId' => '18',
                'items' =>
                    array(
                        0 =>
                            array(
                                'id' => '41KB_bfk_5jR',
                                'name' => 'Arkitekter m.fl.',
                                'type' => 'ssyk-level-4',
                                'legacyAmsTaxonomyId' => '2161',
                                'parentId' => '6Hq3_tKo_V57',
                            ),
                        1 =>
                            array(
                                'id' => 'SPYW_7Z1_ShT',
                                'name' => 'Civilingenjörsyrken inom elektroteknik',
                                'type' => 'ssyk-level-4',
                                'legacyAmsTaxonomyId' => '2143',
                                'parentId' => '6Hq3_tKo_V57',
                            ),
                        2 =>
                            array(
                                'id' => 'rwpH_6RA_XTT',
                                'name' => 'Civilingenjörsyrken inom gruvteknik och metallurgi',
                                'type' => 'ssyk-level-4',
                                'legacyAmsTaxonomyId' => '2146',
                                'parentId' => '6Hq3_tKo_V57',
                            ),
                        3 =>
                            array(
                                'id' => 'qn2U_dB9_Cmh',
                                'name' => 'Civilingenjörsyrken inom kemi och kemiteknik',
                                'type' => 'ssyk-level-4',
                                'legacyAmsTaxonomyId' => '2145',
                                'parentId' => '6Hq3_tKo_V57',
                            ),
                        4 =>
                            array(
                                'id' => 'xm5G_vGn_iyk',
                                'name' => 'Civilingenjörsyrken inom logistik och produktionsplanering',
                                'type' => 'ssyk-level-4',
                                'legacyAmsTaxonomyId' => '2141',
                                'parentId' => '6Hq3_tKo_V57',
                            ),
                        5 =>
                            array(
                                'id' => 'PRQn_9yw_NJA',
                                'name' => 'Civilingenjörsyrken inom maskinteknik',
                                'type' => 'ssyk-level-4',
                                'legacyAmsTaxonomyId' => '2144',
                                'parentId' => '6Hq3_tKo_V57',
                            ),
                        6 =>
                            array(
                                'id' => 'U8HK_Jdi_GuC',
                                'name' => 'Fastighetsförvaltare',
                                'type' => 'ssyk-level-4',
                                'legacyAmsTaxonomyId' => '3335',
                                'parentId' => '6Hq3_tKo_V57',
                            ),
                        7 =>
                            array(
                                'id' => 'eRkT_cTv_H9v',
                                'name' => 'Flygtekniker',
                                'type' => 'ssyk-level-4',
                                'legacyAmsTaxonomyId' => '3155',
                                'parentId' => '6Hq3_tKo_V57',
                            ),
                        8 =>
                            array(
                                'id' => 'ketV_G9W_GeR',
                                'name' => 'GIS- och kartingenjörer',
                                'type' => 'ssyk-level-4',
                                'legacyAmsTaxonomyId' => '3117',
                                'parentId' => '6Hq3_tKo_V57',
                            ),
                        9 =>
                            array(
                                'id' => 'nDaB_vdy_eAy',
                                'name' => 'Ingenjörer och tekniker inom elektroteknik',
                                'type' => 'ssyk-level-4',
                                'legacyAmsTaxonomyId' => '3113',
                                'parentId' => '6Hq3_tKo_V57',
                            ),
                        10 =>
                            array(
                                'id' => '3jEy_yuT_aVo',
                                'name' => 'Ingenjörer och tekniker inom gruvteknik och metallurgi',
                                'type' => 'ssyk-level-4',
                                'legacyAmsTaxonomyId' => '3116',
                                'parentId' => '6Hq3_tKo_V57',
                            ),
                        11 =>
                            array(
                                'id' => '33Nt_DSs_YYA',
                                'name' => 'Ingenjörer och tekniker inom industri, logistik och produktionsplanering',
                                'type' => 'ssyk-level-4',
                                'legacyAmsTaxonomyId' => '3111',
                                'parentId' => '6Hq3_tKo_V57',
                            ),
                        12 =>
                            array(
                                'id' => 'v9nU_6Fw_4Qg',
                                'name' => 'Ingenjörer och tekniker inom kemi och kemiteknik',
                                'type' => 'ssyk-level-4',
                                'legacyAmsTaxonomyId' => '3115',
                                'parentId' => '6Hq3_tKo_V57',
                            ),
                        13 =>
                            array(
                                'id' => 'K8yg_U4C_gkY',
                                'name' => 'Ingenjörer och tekniker inom maskinteknik',
                                'type' => 'ssyk-level-4',
                                'legacyAmsTaxonomyId' => '3114',
                                'parentId' => '6Hq3_tKo_V57',
                            ),
                        14 =>
                            array(
                                'id' => 'bExu_8gk_azk',
                                'name' => 'Laboratorieingenjörer',
                                'type' => 'ssyk-level-4',
                                'legacyAmsTaxonomyId' => '3215',
                                'parentId' => '6Hq3_tKo_V57',
                            ),
                        15 =>
                            array(
                                'id' => 'ETAR_ggZ_Wuw',
                                'name' => 'Landskapsarkitekter',
                                'type' => 'ssyk-level-4',
                                'legacyAmsTaxonomyId' => '2162',
                                'parentId' => '6Hq3_tKo_V57',
                            ),
                        16 =>
                            array(
                                'id' => 'GMDo_DVo_Yzh',
                                'name' => 'Lantmätare',
                                'type' => 'ssyk-level-4',
                                'legacyAmsTaxonomyId' => '2164',
                                'parentId' => '6Hq3_tKo_V57',
                            ),
                        17 =>
                            array(
                                'id' => 'Pd51_xnr_KCY',
                                'name' => 'Planeringsarkitekter m.fl.',
                                'type' => 'ssyk-level-4',
                                'legacyAmsTaxonomyId' => '2163',
                                'parentId' => '6Hq3_tKo_V57',
                            ),
                        18 =>
                            array(
                                'id' => '39yB_xPQ_ozd',
                                'name' => 'Tandtekniker och ortopedingenjörer m.fl.',
                                'type' => 'ssyk-level-4',
                                'legacyAmsTaxonomyId' => '3214',
                                'parentId' => '6Hq3_tKo_V57',
                            ),
                        19 =>
                            array(
                                'id' => 'GC7L_Yw7_Mfo',
                                'name' => 'Tekniker, bilddiagnostik och medicinteknisk utrustning',
                                'type' => 'ssyk-level-4',
                                'legacyAmsTaxonomyId' => '3211',
                                'parentId' => '6Hq3_tKo_V57',
                            ),
                        20 =>
                            array(
                                'id' => 'mp2Y_vyC_RFV',
                                'name' => 'Övriga civilingenjörsyrken',
                                'type' => 'ssyk-level-4',
                                'legacyAmsTaxonomyId' => '2149',
                                'parentId' => '6Hq3_tKo_V57',
                            ),
                        21 =>
                            array(
                                'id' => 'mis4_feV_uex',
                                'name' => 'Övriga ingenjörer och tekniker',
                                'type' => 'ssyk-level-4',
                                'legacyAmsTaxonomyId' => '3119',
                                'parentId' => '6Hq3_tKo_V57',
                            ),
                    ),
            ),
        20 =>
            array(
                'id' => 'ASGV_zcE_bWf',
                'name' => 'Transport',
                'type' => 'occupation-field',
                'legacyAmsTaxonomyId' => '19',
                'items' =>
                    array(
                        0 =>
                            array(
                                'id' => 'WhBn_FAp_ZNW',
                                'name' => 'Arbetsledare inom lager och terminal',
                                'type' => 'ssyk-level-4',
                                'legacyAmsTaxonomyId' => '4321',
                                'parentId' => 'ASGV_zcE_bWf',
                            ),
                        1 =>
                            array(
                                'id' => 'nk6Z_5oD_QoM',
                                'name' => 'Bangårdspersonal',
                                'type' => 'ssyk-level-4',
                                'legacyAmsTaxonomyId' => '8312',
                                'parentId' => 'ASGV_zcE_bWf',
                            ),
                        2 =>
                            array(
                                'id' => 'gaBh_1vR_tNE',
                                'name' => 'Brevbärare och postterminalarbetare',
                                'type' => 'ssyk-level-4',
                                'legacyAmsTaxonomyId' => '4420',
                                'parentId' => 'ASGV_zcE_bWf',
                            ),
                        3 =>
                            array(
                                'id' => 'FiDm_2S8_gx7',
                                'name' => 'Buss- och spårvagnsförare',
                                'type' => 'ssyk-level-4',
                                'legacyAmsTaxonomyId' => '8331',
                                'parentId' => 'ASGV_zcE_bWf',
                            ),
                        4 =>
                            array(
                                'id' => 'kDnq_Q98_sD3',
                                'name' => 'Fartygsbefäl m.fl.',
                                'type' => 'ssyk-level-4',
                                'legacyAmsTaxonomyId' => '3152',
                                'parentId' => 'ASGV_zcE_bWf',
                            ),
                        5 =>
                            array(
                                'id' => 'yct8_Pun_DWd',
                                'name' => 'Flygledare',
                                'type' => 'ssyk-level-4',
                                'legacyAmsTaxonomyId' => '3154',
                                'parentId' => 'ASGV_zcE_bWf',
                            ),
                        6 =>
                            array(
                                'id' => 'SZ7Q_2zF_nFy',
                                'name' => 'Hamnarbetare',
                                'type' => 'ssyk-level-4',
                                'legacyAmsTaxonomyId' => '9331',
                                'parentId' => 'ASGV_zcE_bWf',
                            ),
                        7 =>
                            array(
                                'id' => '1Tso_4TB_RkE',
                                'name' => 'Kabinpersonal m.fl.',
                                'type' => 'ssyk-level-4',
                                'legacyAmsTaxonomyId' => '5111',
                                'parentId' => 'ASGV_zcE_bWf',
                            ),
                        8 =>
                            array(
                                'id' => 'kLyY_rwr_aJr',
                                'name' => 'Lager- och terminalpersonal',
                                'type' => 'ssyk-level-4',
                                'legacyAmsTaxonomyId' => '4322',
                                'parentId' => 'ASGV_zcE_bWf',
                            ),
                        9 =>
                            array(
                                'id' => '3MBw_pDA_P2F',
                                'name' => 'Lastbilsförare m.fl.',
                                'type' => 'ssyk-level-4',
                                'legacyAmsTaxonomyId' => '8332',
                                'parentId' => 'ASGV_zcE_bWf',
                            ),
                        10 =>
                            array(
                                'id' => 'UGgc_Vm9_Bog',
                                'name' => 'Lokförare',
                                'type' => 'ssyk-level-4',
                                'legacyAmsTaxonomyId' => '8311',
                                'parentId' => 'ASGV_zcE_bWf',
                            ),
                        11 =>
                            array(
                                'id' => 'Rsoy_sS6_6c4',
                                'name' => 'Maskinbefäl',
                                'type' => 'ssyk-level-4',
                                'legacyAmsTaxonomyId' => '3151',
                                'parentId' => 'ASGV_zcE_bWf',
                            ),
                        12 =>
                            array(
                                'id' => 'CbQK_7th_Tyf',
                                'name' => 'Matroser och jungmän m.fl.',
                                'type' => 'ssyk-level-4',
                                'legacyAmsTaxonomyId' => '8350',
                                'parentId' => 'ASGV_zcE_bWf',
                            ),
                        13 =>
                            array(
                                'id' => '7n3y_FTE_qSe',
                                'name' => 'Piloter m.fl.',
                                'type' => 'ssyk-level-4',
                                'legacyAmsTaxonomyId' => '3153',
                                'parentId' => 'ASGV_zcE_bWf',
                            ),
                        14 =>
                            array(
                                'id' => 'bwnk_nv2_1cR',
                                'name' => 'Ramppersonal, flyttkarlar och varupåfyllare m.fl.',
                                'type' => 'ssyk-level-4',
                                'legacyAmsTaxonomyId' => '9332',
                                'parentId' => 'ASGV_zcE_bWf',
                            ),
                        15 =>
                            array(
                                'id' => 'qhbP_JEJ_HtK',
                                'name' => 'Reklamutdelare och tidningsdistributörer',
                                'type' => 'ssyk-level-4',
                                'legacyAmsTaxonomyId' => '9621',
                                'parentId' => 'ASGV_zcE_bWf',
                            ),
                        16 =>
                            array(
                                'id' => 'ffz2_2n3_R7g',
                                'name' => 'Taxiförare m.fl.',
                                'type' => 'ssyk-level-4',
                                'legacyAmsTaxonomyId' => '8321',
                                'parentId' => 'ASGV_zcE_bWf',
                            ),
                        17 =>
                            array(
                                'id' => '957L_kZK_rHZ',
                                'name' => 'Transportledare och transportsamordnare',
                                'type' => 'ssyk-level-4',
                                'legacyAmsTaxonomyId' => '4323',
                                'parentId' => 'ASGV_zcE_bWf',
                            ),
                        18 =>
                            array(
                                'id' => 'MrcX_RDn_N53',
                                'name' => 'Truckförare',
                                'type' => 'ssyk-level-4',
                                'legacyAmsTaxonomyId' => '8344',
                                'parentId' => 'ASGV_zcE_bWf',
                            ),
                        19 =>
                            array(
                                'id' => 's78G_Zp2_dkq',
                                'name' => 'Tågvärdar och ombordansvariga m.fl.',
                                'type' => 'ssyk-level-4',
                                'legacyAmsTaxonomyId' => '5112',
                                'parentId' => 'ASGV_zcE_bWf',
                            ),
                        20 =>
                            array(
                                'id' => 'P7Ay_ooF_pri',
                                'name' => 'Övriga bil-, motorcykel- och cykelförare',
                                'type' => 'ssyk-level-4',
                                'legacyAmsTaxonomyId' => '8329',
                                'parentId' => 'ASGV_zcE_bWf',
                            ),
                    ),
            ),
    );

}