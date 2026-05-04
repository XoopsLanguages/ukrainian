<?php
// _LANGCODE: uk
// _CHARSET : UTF-8
// Translator: XOOPS Translation Team

define('LEGEND_XOOPS_PATHS', 'Фізичні шляхи XOOPS');
define('LEGEND_DATABASE', 'Набір символів бази даних');

define('XOOPS_LIB_PATH_LABEL', 'XOOPS каталог бібліотеки');
define('XOOPS_LIB_PATH_HELP', 'Physical path to the XOOPS library directory WITHOUT trailing slash, for forward compatibility. Locate the folder out of ' . XOOPS_ROOT_PATH . ' to make it secure.');
define('XOOPS_DATA_PATH_LABEL', 'XOOPS каталог файлів даних');
define('XOOPS_DATA_PATH_HELP', 'Physical path to the XOOPS datafiles (writable) directory WITHOUT trailing slash, for forward compatibility. Locate the folder out of ' . XOOPS_ROOT_PATH . ' to make it secure.');

define('DB_COLLATION_LABEL', 'Набір символів і сортування бази даних');
define('DB_COLLATION_HELP', "Станом на 4.12 MySQL підтримує власний набір символів і сортування. Однак це складніше, ніж очікувалося, тому НЕ ВНОСІТЬ жодних змін, якщо ви не впевнені у своєму виборі.");
define('DB_COLLATION_NOCHANGE', 'Не змінювати');

define('XOOPS_PATH_FOUND', 'Шлях знайдено.');
define('ERR_COULD_NOT_ACCESS', 'Не вдалося отримати доступ до вказаної папки. Будь ласка, переконайтеся, що він існує та його читає сервер.');
define('CHECKING_PERMISSIONS', 'Перевірка дозволів на файл і каталог...');
define('ERR_NEED_WRITE_ACCESS', 'Серверу необхідно надати доступ для запису до таких файлів і папки<br>(тобто <em>chmod 777 directory_name</em> на сервері UNIX/LINUX)');
define('IS_NOT_WRITABLE', '%s НЕ доступний для запису.');
define('IS_WRITABLE', '%s доступний для запису.');
define('ERR_COULD_NOT_WRITE_MAINFILE', 'Помилка запису вмісту в mainfile.php, запишіть вміст у mainfile.php вручну.');
