<?php
/**
 * Installer main english strings declaration file
 *
 * @copyright    (c) 2000-2026 XOOPS Project (https://xoops.org)
 * @license          GNU GPL 2.0 or later (https://www.gnu.org/licenses/gpl-2.0.html)
 * @package          installer
 * @since            2.3.0
 * @author           Haruki Setoyama  <haruki@planewave.org>
 * @author           Kazumi Ono <webmaster@myweb.ne.jp>
 * @author           Skalpa Keo <skalpa@xoops.org>
 * @author           Taiwen Jiang <phppp@users.sourceforge.net>
 * @author           dugris <dugris@frxoops.org>
 */
// _LANGCODE: uk
// _CHARSET : UTF-8
// Translator: XOOPS Translation Team
define('SHOW_HIDE_HELP', 'Показати/приховати текст довідки');
// License
//define('LICENSE_NOT_WRITEABLE', 'License is %s . <br/><span style="colour:#ff0000">Make ../include/license.php Writable</span>');
//define('LICENSE_IS_WRITEABLE', 'License is %s');
// Configuration check page
define('SERVER_API', 'API сервера');
define('PHP_EXTENSION', 'розширення %s');
define('CHAR_ENCODING', 'Кодування символів');
define('XML_PARSING', 'Аналіз XML');
define('REQUIREMENTS', 'Вимоги');
define('_PHP_VERSION', 'Версія PHP');
define('RECOMMENDED_SETTINGS', 'Рекомендовані налаштування');
define('RECOMMENDED_EXTENSIONS', 'Рекомендовані розширення');
define('SETTING_NAME', 'Назва налаштування');
define('RECOMMENDED', 'Рекомендовано');
define('CURRENT', 'Поточний');
define('RECOMMENDED_EXTENSIONS_MSG', 'Ці розширення не потрібні для звичайного використання, але можуть знадобитися для вивчення
 деяких специфічних функцій (наприклад, багатомовної підтримки або підтримки RSS). Тому їх рекомендується встановити.');
define('NONE', 'Немає');
define('SUCCESS', 'Успіх');
define('WARNING', 'Попередження');
define('FAILED', 'Невдало');
// Titles (main and pages)
define('XOOPS_INSTALL_WIZARD', 'Майстер встановлення XOOPS');
define('LANGUAGE_SELECTION', 'Вибір мови');
define('LANGUAGE_SELECTION_TITLE', 'Оберіть вашу мову');        // L128
define('INTRODUCTION', 'Вступ');
define('INTRODUCTION_TITLE', 'Ласкаво просимо до Майстра встановлення XOOPS');        // L0
define('CONFIGURATION_CHECK', 'Перевірка конфігурації');
define('CONFIGURATION_CHECK_TITLE', 'Перевірка конфігурації сервера');
define('PATHS_SETTINGS', 'Налаштування шляхів');
define('PATHS_SETTINGS_TITLE', 'Налаштування шляхів');
define('DATABASE_CONNECTION', 'Підключення до бази даних');
define('DATABASE_CONNECTION_TITLE', 'Підключення до бази даних');
define('DATABASE_CONFIG', 'Конфігурація бази даних');
define('DATABASE_CONFIG_TITLE', 'Конфігурація бази даних');
define('CONFIG_SAVE', 'Зберегти конфігурацію');
define('CONFIG_SAVE_TITLE', 'Збереження конфігурації системи');
define('TABLES_CREATION', 'Створення таблиць');
define('TABLES_CREATION_TITLE', 'Створення таблиць бази даних');
define('INITIAL_SETTINGS', 'Початкові налаштування');
define('INITIAL_SETTINGS_TITLE', 'Введіть початкові налаштування');
define('DATA_INSERTION', 'Вставка даних');
define('DATA_INSERTION_TITLE', 'Збереження налаштувань у базі даних');
define('WELCOME', 'Ласкаво просимо');
define('WELCOME_TITLE', 'Ласкаво просимо на ваш сайт XOOPS');        // L0
// Settings (labels and help text)
define('XOOPS_PATHS', 'Фізичні шляхи XOOPS');
define('XOOPS_URLS', 'Веб-розташування');
define('XOOPS_ROOT_PATH_LABEL', 'XOOPS кореневий фізичний шлях документів');
define('XOOPS_ROOT_PATH_HELP', 'Фізичний шлях до каталогу документів XOOPS (обслуговуваних) БЕЗ косої риски в кінці');
define('XOOPS_LIB_PATH_LABEL', 'XOOPS каталог бібліотеки');
define('XOOPS_LIB_PATH_HELP', 'Physical path to the XOOPS library directory WITHOUT trailing slash, for forward compatibility. Locate the folder out of ' . XOOPS_ROOT_PATH_LABEL . ' to make it secure.');
define('XOOPS_DATA_PATH_LABEL', 'XOOPS каталог файлів даних');
define('XOOPS_DATA_PATH_HELP', 'Physical path to the XOOPS data files (writable) directory WITHOUT trailing slash, for forward compatibility. Locate the folder out of ' . XOOPS_ROOT_PATH_LABEL . ' to make it secure.');
define('XOOPS_URL_LABEL', 'Розташування веб-сайту (URL)'); // L56
define('XOOPS_URL_HELP', 'Головний URL, який використовуватиметься для доступу до інсталяції XOOPS'); // L58
define('LEGEND_CONNECTION', 'Підключення до сервера');
define('LEGEND_DATABASE', 'База даних'); // L51
define('DB_HOST_LABEL', 'Ім\'я хоста сервера');    // L27
define('DB_HOST_HELP', 'Ім\'я хоста сервера бази даних. Якщо ви не впевнені, <em>localhost</em> працює в більшості випадків'); // L67
define('DB_USER_LABEL', 'Ім\'я користувача');    // L28
define('DB_USER_HELP', 'Ім\'я облікового запису користувача, який використовуватиметься для підключення до сервера бази даних'); // L65
define('DB_PASS_LABEL', 'Пароль');    // L52
define('DB_PASS_HELP', 'Пароль облікового запису користувача бази даних'); // L68
define('DB_NAME_LABEL', 'Назва бази даних');    // L29
define('DB_NAME_HELP', 'Ім\'я бази даних на хості. Інсталятор спробує створити базу даних, якщо вона не існує'); // L64
define('DB_CHARSET_LABEL', 'Набір символів бази даних');
define('DB_CHARSET_HELP', 'MySQL містить підтримку набору символів, яка дає змогу зберігати дані за допомогою різноманітних наборів символів і виконувати порівняння відповідно до різноманітних сортувань.');
define('DB_COLLATION_LABEL', 'Зіставлення бази даних');
define('DB_COLLATION_HELP', 'Зіставлення — це набір правил для порівняння символів у наборі символів.');
define('DB_PREFIX_LABEL', 'Префікс таблиці');    // L30
define('DB_PREFIX_HELP', 'Цей префікс буде додано до всіх нових таблиць, створених, щоб уникнути конфліктів імен у базі даних. Якщо ви не впевнені, просто збережіть значення за умовчанням'); // L63
define('DB_PCONNECT_LABEL', 'Використовувати постійне з\'єднання');    // L54
define('DB_PCONNECT_HELP', "Типовим значенням є \"Ні\". Залиште це поле порожнім, якщо ви не впевнені"); // L69
define('DB_DATABASE_LABEL', 'База даних');
define('LEGEND_ADMIN_ACCOUNT', 'Обліковий запис адміністратора');
define('ADMIN_LOGIN_LABEL', 'Вхід адміністратора'); // L37
define('ADMIN_EMAIL_LABEL', 'Електронна пошта адміністратора'); // L38
define('ADMIN_PASS_LABEL', 'Пароль адміністратора'); // L39
define('ADMIN_CONFIRMPASS_LABEL', 'Підтвердити пароль'); // L74
// Buttons
define('BUTTON_PREVIOUS', 'Назад'); // L42
define('BUTTON_NEXT', 'Next'); // L47
// Messages
define('XOOPS_FOUND', '%s знайдено');
define('CHECKING_PERMISSIONS', 'Перевірка дозволів на файл і каталог...'); // L82
define('IS_NOT_WRITABLE', '%s НЕ доступний для запису.'); // L83
define('IS_WRITABLE', '%s доступний для запису.'); // L84
define('XOOPS_PATH_FOUND', 'Шлях знайдено.');
//define('READY_CREATE_TABLES', 'No XOOPS tables were detected.<br />The installer is now ready to create the XOOPS system tables.<br />Press <em>next</em> to proceed.');
define('XOOPS_TABLES_FOUND', 'The XOOPS system tables already exists in your database.<br />Press <em>next</em> to go to the next step.'); // L131
define('XOOPS_TABLES_CREATED', 'XOOPS system tables have been created.<br />Press <em>next</em> to go to the next step.');
//define('READY_INSERT_DATA', 'Тепер інсталятор готовий вставити вихідні дані у вашу базу даних.');
//define('READY_SAVE_MAINFILE', 'The installer is now ready to save the specified settings to <em>mainfile.php</em>.<br />Press <em>next</em> to proceed.');
define('SAVED_MAINFILE', 'Settings saved in mainfile.php');
define('SAVED_MAINFILE_MSG', 'The installer has saved the specified settings to <em>mainfile.php</em> and <em>secure.php</em>. Press <em>next</em> to go to the next step.');
define('DATA_ALREADY_INSERTED', 'XOOPS data found in database.<br />Press <em>next</em> to go to the next step.');
define('DATA_INSERTED', 'Initial data has been inserted into database.<br />Press <em>next</em> to go to the next step.');
// %s is database name
define('DATABASE_CREATED', 'Базу даних %s створено!'); // L43
// %s is table name
define('TABLE_NOT_CREATED', 'Неможливо створити таблицю %s'); // L118
define('TABLE_CREATED', 'Таблицю %s створено.'); // L45
define('ROWS_INSERTED', '%d записи вставлено до таблиці %s.'); // L119
define('ROWS_FAILED', 'Не вдалося вставити %d записи до таблиці %s.'); // L120
define('TABLE_ALTERED', 'Таблицю %s оновлено.'); // L133
define('TABLE_NOT_ALTERED', 'Не вдалося оновити таблицю %s.'); // L134
define('TABLE_DROPPED', 'Таблицю %s вилучено.'); // L163
define('TABLE_NOT_DROPPED', 'Не вдалося видалити таблицю %s.'); // L164
// Error messages
define('ERR_COULD_NOT_ACCESS', 'Не вдалося отримати доступ до вказаної папки. Будь ласка, переконайтеся, що він існує та його читає сервер.');
define('ERR_NO_XOOPS_FOUND', 'У вказаній папці не знайдено встановлення XOOPS.');
define('ERR_INVALID_EMAIL', 'Недійсна електронна пошта'); // L73
define('ERR_REQUIRED', 'Інформація є обов\'язковою.'); // L41
define('ERR_PASSWORD_MATCH', 'Два паролі не збігаються');
define('ERR_NEED_WRITE_ACCESS', 'The server must be given write access to the following files and folders<br />(i.e. <em>chmod 777 directory_name</em> on a UNIX/LINUX server)<br />If they are not available or not created correctly, please create manually and set proper permissions.');
define('ERR_NO_DATABASE', 'Не вдалося створити базу даних. Зверніться до адміністратора сервера для отримання деталей.'); // L31
define('ERR_NO_DBCONNECTION', 'Не вдалося підключитися до сервера бази даних.'); // L106
define('ERR_WRITING_CONSTANT', 'Помилка запису константи %s.'); // L122
define('ERR_COPY_MAINFILE', 'Не вдалося скопіювати файл розповсюдження до %s');
define('ERR_WRITE_MAINFILE', 'Не вдалося записати в %s. Будь ласка, перевірте дозвіл файлу та повторіть спробу.');
define('ERR_READ_MAINFILE', 'Не вдалося відкрити %s для читання');
define('ERR_INVALID_DBCHARSET', "Набір символів '%s' не підтримується.");
define('ERR_INVALID_DBCOLLATION', "Зіставлення '%s' не підтримується.");
define('ERR_CHARSET_NOT_SET', 'Стандартний набір символів не встановлено для бази даних XOOPS.');
define('_INSTALL_CHARSET', 'UTF-8');
define('SUPPORT', 'Supports');
define('LOGIN', 'Автентифікація');
define('LOGIN_TITLE', 'Автентифікація');
define('USER_LOGIN', 'Вхід адміністратора');
define('USERNAME', 'Ім\'я користувача:');
define('PASSWORD', 'Пароль :');
define('ICONV_CONVERSION', 'Перетворення набору символів');
define('ZLIB_COMPRESSION', 'Стиснення Zlib');
define('IMAGE_FUNCTIONS', 'Функції зображень');
define('IMAGE_METAS', 'Метадані зображення (exif)');
define('FILTER_FUNCTIONS', 'Функції фільтрів');
define('ADMIN_EXIST', 'The administrator account already exists.<br />Press <strong>next</strong> to go to the next step.');
define('CONFIG_SITE', 'Налаштування сайту');
define('CONFIG_SITE_TITLE', 'Налаштування сайту');
define('MODULES', 'Встановлення модулів');
define('MODULES_TITLE', 'Встановлення модулів');
define('THEME', 'Вибрати тему');
define('THEME_TITLE', 'Вибрати тему за замовчуванням');
define('INSTALLED_MODULES', 'The following modules have been installed.<br />Press <strong>next</strong> to go to the next step.');
define('NO_MODULES_FOUND', 'No modules found.<br />Press <strong>next</strong> to go to the next step.');
define('NO_INSTALLED_MODULES', 'No module installed.<br />Press <strong>next</strong> to go to the next step.');
define('THEME_NO_SCREENSHOT', 'Знімок екрана не знайдено');
define('IS_VALOR', ' => ');
// password message
define('PASSWORD_LABEL', 'Password strength : ');
define('PASSWORD_DESC', 'Пароль не введено');
define('PASSWORD_GENERATOR', 'Генератор паролів');
define('PASSWORD_GENERATE', 'Згенерувати');
define('PASSWORD_COPY', 'Копіювати');
define('PASSWORD_VERY_WEAK', 'Дуже слабкий');
define('PASSWORD_WEAK', 'Слабкий');
define('PASSWORD_BETTER', 'Краще');
define('PASSWORD_MEDIUM', 'Середній');
define('PASSWORD_STRONG', 'Сильний');
define('PASSWORD_STRONGEST', 'Найсильніший');
//2.5.7
define('WRITTEN_LICENSE', 'Написав XOOPS %s Ліцензійний ключ: <strong>%s</strong>');
//2.5.8
define('CHMOD_CHGRP_REPEAT', 'Повторити');
define('CHMOD_CHGRP_IGNORE', 'Використати все одно');
define('CHMOD_CHGRP_ERROR', 'Можливо, інсталятор не зможе записати файл конфігурації %1$s.<p>PHP записує файли під користувачем %2$s і групою %3$s.<p>У каталозі %4$s/ є користувач %5$s і група %6$s');
//2.5.9
define("CURL_HTTP", "Бібліотека клієнта URL (cURL)");
define('XOOPS_COOKIE_DOMAIN_LABEL', 'Домен файлів cookie для веб-сайту');
define('XOOPS_COOKIE_DOMAIN_HELP', 'Домен для встановлення файлів cookie. Може бути пустим, повний хост із URL (www.example.com) або зареєстрований домен без субдоменів (example.com) для спільного використання між субдоменами (www.example.com і blog.example.com.)');
define('INTL_SUPPORT', 'Функції інтернаціоналізації');
define('XOOPS_SOURCE_CODE', "XOOPS на GitHub");
define('XOOPS_INSTALLING', 'Встановлення');
define('XOOPS_ERROR_ENCOUNTERED', 'Помилка');
define('XOOPS_ERROR_SEE_BELOW', 'Перегляньте повідомлення нижче.');
define('MODULES_AVAILABLE', 'Доступні модулі');
define('INSTALL_THIS_MODULE', 'Додати %s');
//2.5.11
define('ERR_COPY_CONFIG_FILE', 'Не вдалося скопіювати файл конфігурації %s');
//2.7.0
// website name and slogan
define('_WEBSITE_NAME', 'XOOPS Сайт');
define('_WEBSITE_SLOGAN', 'Просто використовуй!');
define('_WEBSITE_META_KEYWORDS', 'xoops, структура веб-додатків, cms, система керування вмістом');
define('_WEBSITE_FOOTER', "Powered by XOOPS © 2001-{X_YEAR} <a href='https://xoops.org' rel='external' title='The XOOPS Project'>The XOOPS Project</a>");
define('_WEBSITE_COPYRIGHT', 'Авторське право © 2001-{X_YEAR}');
define('_WEBSITE_DESCRIPTION', 'XOOPS — це динамічний об’єктно-орієнтований сценарій порталу з відкритим кодом, написаний мовою PHP.');
define('_WEBSITE_CENSOR_REPLACE', 'УПС');
