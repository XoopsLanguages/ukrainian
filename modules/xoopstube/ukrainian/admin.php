<?php

/**
 * Module: XoopsTube
 *
 * You may not change or alter any portion of this comment or credits
 * of supporting developers from this source code or any supporting source code
 * which is considered copyrighted (c) material of the original comment or credit authors.
 *
 * PHP version 5
 *
 * @category        Module
 * @package         Xoopstube
 * @author          XOOPS Development Team
 * @copyright       2001-2013 The XOOPS Project
 * @license         GNU GPL 2 or later (http://www.gnu.org/licenses/gpl-2.0.html)
 * @version         $Id$
 * @link            http://sourceforge.net/projects/xoops/
 * @since           1.0.6
 */

define('_AM_XOOPSTUBE_WARNINSTALL1', "<span style='font-weight: bold;'>УВАГА:</span> <span style='text-decoration: underline;'>Каталог</span> %s існує на сервері.<br />Будь ласка, видаліть цю папку з міркувань безпеки.");
define('_AM_XOOPSTUBE_WARNINSTALL2', "<span style='font-weight: bold;'>УВАГА:</span> <span style='text-decoration: underline;'>Файл</span> %s існує на сервері.<br />Будь ласка, видаліть цю папку з міркувань безпеки.");
define('_AM_XOOPSTUBE_WARNINSTALL3', "<span style='font-weight: bold;'>УВАГА:</span> <span style='text-decoration: underline;'>Папка</span> %s не існує на сервері.<br />Ця папка потрібна для XoopsTube.");

define('_AM_XOOPSTUBE_MODULE_NAME', "XoopsTube");

define('_AM_XOOPSTUBE_BMODIFY', "Змінити");
define('_AM_XOOPSTUBE_BDELETE', "Видалити");
define('_AM_XOOPSTUBE_BCREATE', "Створити");
define('_AM_XOOPSTUBE_BADD', "Додати");
define('_AM_XOOPSTUBE_BAPPROVE', "Затвердити");
define('_AM_XOOPSTUBE_BIGNORE', "Ігнорувати");
define('_AM_XOOPSTUBE_BCANCEL', "Відмінити");
define('_AM_XOOPSTUBE_BSAVE', "Зберегти");
define('_AM_XOOPSTUBE_BRESET', "Скинути");
define('_AM_XOOPSTUBE_BMOVE', "Перемістити відео");
define('_AM_XOOPSTUBE_BUPLOAD', "Завантажити");
define('_AM_XOOPSTUBE_BDELETEIMAGE', "Видалити обране зображення");
define('_AM_XOOPSTUBE_BRETURN', "Повернутися!");
define('_AM_XOOPSTUBE_DBERROR', "Помилка доступу до бази даних");
// Other Options
define('_AM_XOOPSTUBE_TEXTOPTIONS', "Опції тексту:");
define('_AM_XOOPSTUBE_DISABLEHTML', " Заборонити HTML теги");
define('_AM_XOOPSTUBE_DISABLESMILEY', " Заборонити іконки смайлів");
define('_AM_XOOPSTUBE_DISABLEXCODE', " Заборонити XOOPS код");
define('_AM_XOOPSTUBE_DISABLEIMAGES', " Заборонити зображення");
define('_AM_XOOPSTUBE_DISABLEBREAK', " Використати XOOPS перетворення розрив рядка?");
define('_AM_XOOPSTUBE_UPLOADFILE', "Файл завантажено успішно");
define('_AM_XOOPSTUBE_NOMENUITEMS', "Немає пунктів в меню");
// Admin Bread crumb
define('_AM_XOOPSTUBE_PREFS', "Переваги");
define('_AM_XOOPSTUBE_BUPDATE', "Оновити модуль");
define('_AM_XOOPSTUBE_BINDEX', "Головний індекс");
define('_AM_XOOPSTUBE_BPERMISSIONS', "Дозволи");
// define('_AM_XOOPSTUBE_BLOCKADMIN","Блоки");
define('_AM_XOOPSTUBE_BLOCKADMIN', "Параметри блокування");
define('_AM_XOOPSTUBE_GOMODULE', "До модуля");
define('_AM_XOOPSTUBE_ABOUT', "Про");
// Admin Summary
define('_AM_XOOPSTUBE_SCATEGORY', "Категорія:  <strong>%s</strong> ");
define('_AM_XOOPSTUBE_SFILES', "Відео:  <strong>%s</strong> ");
define('_AM_XOOPSTUBE_SNEWFILESVAL', "Представлений:  <strong>%s</strong> ");
define('_AM_XOOPSTUBE_SMODREQUEST', "Змінений:  <strong>%s</strong> ");
define('_AM_XOOPSTUBE_SREVIEWS', "Відгуки: ");

// Admin Main Menu
define('_AM_XOOPSTUBE_MCATEGORY', "Управління категорією");
define('_AM_XOOPSTUBE_MVIDEOS', "Управління відео");
define('_AM_XOOPSTUBE_MLISTBROKEN', "Список зламаних відео");
define('_AM_XOOPSTUBE_MLISTPINGTIMES', "Список посилань Pingtime");
define('_AM_XOOPSTUBE_INDEXPAGE', "Управління індексною сторінкою");
define('_AM_XOOPSTUBE_MCOMMENTS', "Коментарі");
define('_AM_XOOPSTUBE_MVOTEDATA', "Голосові дані");
define('_AM_XOOPSTUBE_MUPLOADS', "Завантажити зображення");

// Category defines
define('_AM_XOOPSTUBE_CCATEGORY_CREATENEW', "Створити нову категорію");
define('_AM_XOOPSTUBE_CCATEGORY_MODIFY', "Змінити категорію");
define('_AM_XOOPSTUBE_CCATEGORY_MOVE', "Перемістити відео категорії");
define('_AM_XOOPSTUBE_CCATEGORY_MODIFY_TITLE', "Назва категорії:");
define('_AM_XOOPSTUBE_CCATEGORY_MODIFY_FAILED', "Не вдалось перемістити відео: неможливо перемістити до цієї категорії");
define('_AM_XOOPSTUBE_CCATEGORY_MODIFY_FAILEDT', "Не вдалось перемістити відео: неможливо знайти цю категорію");
define('_AM_XOOPSTUBE_CCATEGORY_MODIFY_MOVED', "Відео переміщено та категорія видалена");
define('_AM_XOOPSTUBE_CCATEGORY_CREATED', "Нова категорія створена і база даних оновлена успішно");
define('_AM_XOOPSTUBE_CCATEGORY_MODIFIED', "Обрана категорія змінена і база даних оновлена успішно");
define('_AM_XOOPSTUBE_CCATEGORY_DELETED', "Обрана категорія видалена і база даних оновлена успішно");
define('_AM_XOOPSTUBE_CCATEGORY_AREUSURE', "УВАГА: Ви впевнені, що хочете видалити цю категорію та всі відео та коментарі?");
define('_AM_XOOPSTUBE_CCATEGORY_NOEXISTS', "Ви повинні створити нову категорію, перш нід додавати відео");
define('_AM_XOOPSTUBE_FCATEGORY_GROUPPROMPT', "Права досутпу до категорії:<div style='padding-top: 8px;'><span style='font-weight: normal;'>Оберіть групи користувачів, хто матиме дозвіл до категорії.</span></div>");
define('_AM_XOOPSTUBE_FCATEGORY_SUBGROUPPROMPT', "Категорія подачі дозволів:<div style='padding-top: 8px;'><span style='font-weight: normal;'>Оберіть групи користувачів, хто матиме дозвіл надсилати відео до цієї категорії.</span></div>");
define('_AM_XOOPSTUBE_FCATEGORY_MODGROUPPROMPT', "Категорія модерації дозволів:<div style='padding-top: 8px;'><span style='font-weight: normal;'>Оберіть групи користувачів, хто матиме дозвіл модерувати категорією.</span></div>");

define('_AM_XOOPSTUBE_FCATEGORY_TITLE', "Назва категорії:");
define('_AM_XOOPSTUBE_FCATEGORY_WEIGHT', "Вага категорії:");
define('_AM_XOOPSTUBE_FCATEGORY_SUBCATEGORY', "Встановити як підкатегорія:");
define('_AM_XOOPSTUBE_FCATEGORY_CIMAGE', "Обрати зображення категорії:");
define('_AM_XOOPSTUBE_FCATEGORY_DESCRIPTION', "Встановити опис категорії:");
define('_AM_XOOPSTUBE_FCATEGORY_SUMMARY', "Встановити резюме категорії:");
/**
 * Index page Defines
 */
define('_AM_XOOPSTUBE_IPAGE_UPDATED', "Індекс сторінки змінено та база даних оновлена успішно!");
define('_AM_XOOPSTUBE_IPAGE_INFORMATION', "Інформація індексної сторінки");
define('_AM_XOOPSTUBE_IPAGE_MODIFY', "Зміни індексної сторінки");
define('_AM_XOOPSTUBE_IPAGE_CIMAGE', "Обрати зображення індексу:");
define('_AM_XOOPSTUBE_IPAGE_CTITLE', "Назва індексу:");
define('_AM_XOOPSTUBE_IPAGE_CHEADING', "Заголовок індексу:");
define('_AM_XOOPSTUBE_IPAGE_CHEADINGA', "Центрування заголовку індексу:");
define('_AM_XOOPSTUBE_IPAGE_CFOOTER', "Нижній колонтитул індексу:");
define('_AM_XOOPSTUBE_IPAGE_CFOOTERA', "Центрування нижнього колонтитула індексу:");
define('_AM_XOOPSTUBE_IPAGE_CLEFT', "Вирівняти по лівому краю");
define('_AM_XOOPSTUBE_IPAGE_CCENTER', "Вирівняти по центру");
define('_AM_XOOPSTUBE_IPAGE_CRIGHT', "Вирівняти по правому краю");
/**
 * Permissions defines
 */
define('_AM_XOOPSTUBE_PERM_MANAGEMENT', "Управління правами доступу");
define('_AM_XOOPSTUBE_PERM_PERMSNOTE', "<div><span style='font-weight: bold;'>ПРИМІТКА:</span> Зверніть увагу, що навіть якщо ви встановили правильні права перегляду тут, група не може побачити статті або блоки, якщо ви не надаєте групі дозвіл на доступ до модулю. Щоб зробити це, перейдіть <span style='font-weight: bold;'>System admin > Групи</span>, виберіть відповідну групу і натисніть прапорці, щоб надати членам групи доступ.</div>");
define('_AM_XOOPSTUBE_PERM_CPERMISSIONS', "Категорія дозволи");
define('_AM_XOOPSTUBE_PERM_CSELECTPERMISSIONS', "Оберіть категорії, що кожна група може переглядати");
define('_AM_XOOPSTUBE_PERM_CNOCATEGORY', "Неможливо всатновити дозвіл: Жодної категорії не було створено ще!");
define('_AM_XOOPSTUBE_PERM_FPERMISSIONS', "Відео дозволи");
define('_AM_XOOPSTUBE_PERM_FNOFILES', "Неможливо встановити дозвіл: Жодного !");
define('_AM_XOOPSTUBE_PERM_FSELECTPERMISSIONS', "Оберіть відео, що може переглядати кожна група");
/**
 * Upload defines
 */
define('_AM_XOOPSTUBE_VIDEO_IMAGEUPLOAD', "Зображення успішно завантажене на сервер призначення");
define('_AM_XOOPSTUBE_VIDEO_NOIMAGEEXIST', "Помилка: Немає обранного зображення для завантаження.  Будь ласка, спробуйте ще раз!");
define('_AM_XOOPSTUBE_VIDEO_IMAGEEXIST', "Зображення вже існує в області завантаження!");
define('_AM_XOOPSTUBE_VIDEO_FILEDELETED', "Зображення було видалене.");
define('_AM_XOOPSTUBE_VIDEO_FILEERRORDELETE', "Помилка при видаленні відео: Відео не знайдено на сервері.");
define('_AM_XOOPSTUBE_VIDEO_NOFILEERROR', "Помилка при видаленні зображення: Немає обраного зображення для видалення.");
define('_AM_XOOPSTUBE_VIDEO_DELETEFILE', "УВАГА: Ви впевнені, що хочете видалити це посилання на зображення?");
define('_AM_XOOPSTUBE_VIDEO_IMAGEINFO', "Статус серверу");
define('_AM_XOOPSTUBE_VIDEO_SPHPINI', "<span style='font-weight: bold;'>Інформація взята з PHP ini посилання:</span>");
define('_AM_XOOPSTUBE_VIDEO_SAFEMODESTATUS', "Безпечний режим стану: ");
define('_AM_XOOPSTUBE_VIDEO_REGISTERGLOBALS', "Глобальна реєстрація: ");
define('_AM_XOOPSTUBE_VIDEO_SERVERUPLOADSTATUS', "Статус серверу завантаження: ");
define('_AM_XOOPSTUBE_VIDEO_MAXUPLOADSIZE', "Максимальний дозволений розмір завантаження: ");
define('_AM_XOOPSTUBE_VIDEO_MAXPOSTSIZE', "Максимальний дозволений розмір посилання: ");
define('_AM_XOOPSTUBE_VIDEO_SAFEMODEPROBLEMS', " (Це може викликати проблеми)");
define('_AM_XOOPSTUBE_VIDEO_GDLIBSTATUS', "Підтримка GD бібліотеки: ");
define('_AM_XOOPSTUBE_VIDEO_GDLIBVERSION', "Версія GD бібліотеки: ");
define('_AM_XOOPSTUBE_VIDEO_GDON', "<span style='font-weight: bold;'>Включено</span> (Thumbs Nails Available)");
define('_AM_XOOPSTUBE_VIDEO_GDOFF', "<span style='font-weight: bold;'>Виключено</span> (No Thumb Nails Available)");
define('_AM_XOOPSTUBE_VIDEO_OFF', "<span style='font-weight: bold;'>Вимкнено</span>");
define('_AM_XOOPSTUBE_VIDEO_ON', "<span style='font-weight: bold;'>Включено</span>");
define('_AM_XOOPSTUBE_VIDEO_CATIMAGE', "Категорія зображення");
define('_AM_XOOPSTUBE_VIDEO_SCREENSHOTS', "Зображення знімків екрану");
define('_AM_XOOPSTUBE_VIDEO_MAINIMAGEDIR', "Головні зображення");
define('_AM_XOOPSTUBE_VIDEO_FCATIMAGE', "Категорія зображення дороги");
define('_AM_XOOPSTUBE_VIDEO_FSCREENSHOTS', "Шлях зображення знімку екрану");
define('_AM_XOOPSTUBE_VIDEO_FMAINIMAGEDIR', "Основний шлях зображення");
define('_AM_XOOPSTUBE_VIDEO_FUPLOADIMAGETO', "Завантажити зображення: ");
define('_AM_XOOPSTUBE_VIDEO_FUPLOADPATH', "Завантажити Path: ");
define('_AM_XOOPSTUBE_VIDEO_FUPLOADURL', "Завантажити URL: ");
define('_AM_XOOPSTUBE_VIDEO_FOLDERSELECTION', "Оберіть завантажене призначення:");
define('_AM_XOOPSTUBE_VIDEO_FSHOWSELECTEDIMAGE', "Відобразити обрані зображення:");
define('_AM_XOOPSTUBE_VIDEO_FUPLOADIMAGE', "Завантажити нове зображення до обраного призначення:");

// Main Index defines
define('_AM_XOOPSTUBE_MINDEX_VIDEOSUMMARY', "Додаткова інформація модуля адміністратора");
define('_AM_XOOPSTUBE_MINDEX_PUBLISHEDVIDEO', "Опубліковані відео:");
define('_AM_XOOPSTUBE_MINDEX_AUTOPUBLISHEDVIDEO', "Автоматично опубліковоані відео:");
define('_AM_XOOPSTUBE_MINDEX_AUTOEXPIRE', "Auto Expire Videos:");
define('_AM_XOOPSTUBE_MINDEX_EXPIRED', "Expired Videos:");
define('_AM_XOOPSTUBE_MINDEX_OFFLINEVIDEO', "Офлайн відео:");
define('_AM_XOOPSTUBE_MINDEX_ID', "ID");
define('_AM_XOOPSTUBE_MINDEX_TITLE', "Назва відео");
define('_AM_XOOPSTUBE_MINDEX_POSTER', "Плакат");
define('_AM_XOOPSTUBE_MINDEX_ONLINE', "Статус");
define('_AM_XOOPSTUBE_MINDEX_ONLINESTATUS', "Статус в мережі");
define('_AM_XOOPSTUBE_MINDEX_PUBLISH', "Опубліковано");
define('_AM_XOOPSTUBE_MINDEX_PUBLISHED', "Опубліковано");
define('_AM_XOOPSTUBE_MINDEX_EXPIRE', "Expired");
define('_AM_XOOPSTUBE_MINDEX_NOTSET', "Не встановлена дата");
define('_AM_XOOPSTUBE_MINDEX_SUBMITTED', "Представлена дата");

define('_AM_XOOPSTUBE_MINDEX_ACTION', "Дія");
define('_AM_XOOPSTUBE_MINDEX_NOVIDEOSFOUND', "УВАГА: Немає відео, що задовольняю критерії");
define('_AM_XOOPSTUBE_MINDEX_PAGE', "<span style='font-weight: bold;'>Сторінка:<span style='font-weight: bold;'> ");
define('_AM_XOOPSTUBE_MINDEX_PAGEINFOTXT', '<ul><li>XoopsTubes деталі головної сторінки.</li><li>Ви можете легко змінити логотип зображення, заголовок, основний заголовок індексу і текст нижнього колонтитула, щоб задовольнити зовнішній вигляд</li></ul><br />Примітка: обране зображення логотипу буде використовуватись протягом XoopsTube.');
define('_AM_XOOPSTUBE_MINDEX_RESPONSE', "Час реакції");
// Submitted Links
define('_AM_XOOPSTUBE_SUB_SUBMITTEDFILES', "Відправлене відео");
define('_AM_XOOPSTUBE_SUB_FILESWAITINGINFO', "Інформація про очікуваннч відео");
define('_AM_XOOPSTUBE_SUB_FILESWAITINGVALIDATION', "Очікування перевірки відео: ");
define('_AM_XOOPSTUBE_SUB_APPROVEWAITINGFILE', "<span style='font-weight: bold;'>Затвердити</span> інормацію про нове відео без перевірки.");
define('_AM_XOOPSTUBE_SUB_EDITWAITINGFILE', "<span style='font-weight: bold;'>Редагувати</span> інформацію нового відео, а потім затвердити.");
define('_AM_XOOPSTUBE_SUB_DELETEWAITINGFILE', "<span style='font-weight: bold;'>Видалити</span> інформацію про нове відео.");
define('_AM_XOOPSTUBE_SUB_NOFILESWAITING', "Не має жодного відео, яке б відповідало цим критеріям");
define('_AM_XOOPSTUBE_SUB_NEWFILECREATED', "Нові дані відео створені і база даних оновлено успішно");
// Vote Information
define('_AM_XOOPSTUBE_VOTE_RATINGINFOMATION', "Інформаційне голосування");
define('_AM_XOOPSTUBE_VOTE_TOTALVOTES', "Загальна кількість голосів: ");
define('_AM_XOOPSTUBE_VOTE_REGUSERVOTES', "Голоси зареєстровнаних користувачів: %s");
define('_AM_XOOPSTUBE_VOTE_ANONUSERVOTES', "Голоси анонмних користувачів: %s");
define('_AM_XOOPSTUBE_VOTE_USER', "Коирстувач");
define('_AM_XOOPSTUBE_VOTE_IP', "IP адреса");
define('_AM_XOOPSTUBE_VOTE_DATE', "Представлено");
define('_AM_XOOPSTUBE_VOTE_RATING', "Рейтинг");
define('_AM_XOOPSTUBE_VOTE_NOREGVOTES', "Немає голосів зареєстрованих користувачів");
define('_AM_XOOPSTUBE_VOTE_NOUNREGVOTES', "Немає голосів незареєстрованих користувачів");
define('_AM_XOOPSTUBE_VOTE_VOTEDELETED', "Дані голосування видалені.");
define('_AM_XOOPSTUBE_VOTE_ID', "ID");
define('_AM_XOOPSTUBE_VOTE_FILETITLE', "Назва відео");
define('_AM_XOOPSTUBE_VOTE_DISPLAYVOTES', "Інформаційні дані голосування");
define('_AM_XOOPSTUBE_VOTE_NOVOTES', "Немає голосів користувачів для відображення");
define('_AM_XOOPSTUBE_VOTE_DELETE', "Немає голосів користувачів для відображення");
define('_AM_XOOPSTUBE_VOTE_DELETEDSC', "<span style='font-weight: bold;'>Видалити</span> обрану інформацію про голосування з бази даних.");
define('_AM_XOOPSTUBE_VOTEDELETED', "Обраний голос видалено з оновленї бази даних");

define('_AM_XOOPSTUBE_VOTE_USERAVG', "Середній рейтинг користувачів");
define('_AM_XOOPSTUBE_VOTE_TOTALRATE', "Загальна кількість голосів");
define('_AM_XOOPSTUBE_VOTE_MAXRATE', "Максимум пунктів голосу");
define('_AM_XOOPSTUBE_VOTE_MINRATE', "Мінімум пунктів голосу");
define('_AM_XOOPSTUBE_VOTE_MOSTVOTEDTITLE', "Найбільше затверджений для");
define('_AM_XOOPSTUBE_VOTE_LEASTVOTEDTITLE', "Найменше затверджений для");
define('_AM_XOOPSTUBE_VOTE_MOSTVOTERSUID', "Найбільш активний голосуючий");
define('_AM_XOOPSTUBE_VOTE_REGISTERED', "Зареєстровані голоси");
define('_AM_XOOPSTUBE_VOTE_NONREGISTERED', "Анонімні голоси");
// Modifications
define('_AM_XOOPSTUBE_MOD_TOTMODREQUESTS', "Всього запитів модифікації: ");
define('_AM_XOOPSTUBE_MOD_MODREQUESTS', "Модифікація відео");
define('_AM_XOOPSTUBE_MOD_MODREQUESTSINFO', "Інформація про змінені відео");
define('_AM_XOOPSTUBE_MOD_MODID', "ID");
define('_AM_XOOPSTUBE_MOD_MODTITLE', "Назва");
define('_AM_XOOPSTUBE_MOD_MODPOSTER', "Оригінальний постер: ");
define('_AM_XOOPSTUBE_MOD_DATE', "Представлено");
define('_AM_XOOPSTUBE_MOD_NOMODREQUEST', "Немає запитів, які б відповідали цим критеріям");
define('_AM_XOOPSTUBE_MOD_TITLE', "Назва відео: ");
define('_AM_XOOPSTUBE_MOD_LID', "відео ID: ");
define('_AM_XOOPSTUBE_MOD_CID', "Категорія: ");
define('_AM_XOOPSTUBE_MOD_URL', "відео Url: ");
define('_AM_XOOPSTUBE_MOD_PUBLISHER', "Видавець: ");
define('_AM_XOOPSTUBE_MOD_SCREENSHOT', "Зображення знімку екрану: ");
define('_AM_XOOPSTUBE_MOD_DESCRIPTION', "Опис: ");
define('_AM_XOOPSTUBE_MOD_MODIFYSUBMITTER', "Подавець: ");
define('_AM_XOOPSTUBE_MOD_MODIFYSUBMIT', "Подавець");
define('_AM_XOOPSTUBE_MOD_PROPOSED', "Пропоновані деталі відео");
define('_AM_XOOPSTUBE_MOD_ORIGINAL', "Оригінальні деталі відео");
define('_AM_XOOPSTUBE_MOD_REQDELETED', "Запит модифікації видаляється з бази даних");
define('_AM_XOOPSTUBE_MOD_REQUPDATED', "Обране відео змінене і база даних оновлена успішно");
define('_AM_XOOPSTUBE_MOD_VIEW', 'Перегляд');
// Video management
define('_AM_XOOPSTUBE_VIDEO_ID', "Відео ID: ");
define('_AM_XOOPSTUBE_VIDEO_IP', "Завантажити IP: ");
define('_AM_XOOPSTUBE_VIDEO_ALLOWEDAMIME', "<div style='padding-top: 4px; padding-bottom: 4px;'><span style='font-weight: bold;'>Дозволені дії адміністратора для розширення відео</span>:</div>");
define('_AM_XOOPSTUBE_VIDEO_MODIFYFILE', "Змінити інформацію відео");
define('_AM_XOOPSTUBE_VIDEO_CREATENEWFILE', "Створити нове відео");
define('_AM_XOOPSTUBE_VIDEO_TITLE', "Назва відео: ");
define('_AM_XOOPSTUBE_VIDEO_DLVIDID', "id-код відео: ");
define('_AM_XOOPSTUBE_VIDEO_DLVIDID_NOTE', "
<span style='font-size: small;'><span style='font-weight: bold;'>YouTube:</span> http://www.youtube.com/watch?v=<span style='color: #FF0000;'>IsOtq-qCqZ4</span><br />
<span style='font-weight: bold;'>MetaCafe:</span> http://www.metacafe.com/watch/<span style='color: #FF0000;'>191543/sperm_whale_encounters_underwater_robot</span>/<br />
<span style='font-weight: bold;'>SPIKE/ifilm:</span> http://www.ifilm.com/video/<span style='color: #FF0000;'>2718605</span><br />
<span style='font-weight: bold;'>Photobucket:</span> http://i39.photobucket.com/albums/<span style='color: #FF0000;'>e168/vailtom/th_BigSquid</span>.jpg<br />
<span style='font-weight: bold;'>Google Video:</span> http://video.google.com/videoplay?docid=<span style='color: #FF0000;'>4761076111111865377</span>&q=rov&total=913&start=...<br />
<span style='font-weight: bold;'>MySpace TV:</span> http://vids.myspace.com/index.cfm?fuseaction=vids.individual&videoid=<span style='color: #FF0000;'>13171141</span><br />
<span style='font-weight: bold;'>DailyMotion:</span> http://www.dailymotion.com/video/<span style='color: #FF0000;'>x40bhg</span>_blondesecretary_fun<br />
<span style='font-weight: bold;'>Blip.tv </span>embed code<span style='font-weight: bold;'>:</span> http://blip.tv/play/<span style='color: #FF0000;'>Abe6EwA</span> ...<br />
<span style='font-weight: bold;'>ClipFish:</span> http://www.clipfish.de/player.php?videoid=<span style='color: #FF0000;'>MTg1NTYyfDM1Ng</span>%3D%3D<br />
<span style='font-weight: bold;'>LiveLeak:</span> http://www.liveleak.com/view?i=<span style='color: #FF0000;'>a59_1205566630</span><br />
<span style='font-weight: bold;'>Maktoob:</span> file=http://<span style='color: #FF0000;'>m003.maktoob.com/files/23/42/95531c25b690e48a3d69966b6a33b8d2/video/131102</span>.flv (from embed-code)<br />
<span style='font-weight: bold;'>Veoh:</span> http://www.veoh.com/videos/<span style='color: #FF0000;'>v15069875yApCz7r3</span>?jsonParams=...<br />
<span style='font-weight: bold;'>Vimeo:</span> http://www.vimeo.com/<span style='color: #FF0000;'>2246499</span><br />
<span style='font-weight: bold;'>Megavideo:</span> http://www.megavideo.com/?v=<span style='color: #FF0000;'>J6YSRE0T</span><br />
<span style='font-weight: bold;'>Viddler:</span> http://www.viddler.com/player/<span style='color: #FF0000;'>d32d2b94</span>/ (см. код для вставки)<br />
<span style='font-weight: bold;'>XoopsTube: </span><span style='color: #FF0000;'>Прийняти з меню вибору вище</span></span>");
define('_AM_XOOPSTUBE_VIDEO_PICURL', "Зображення url: ");
define('_AM_XOOPSTUBE_VIDEO_PICURLNOTE', "Зображення url, коли джерело: Google Video, MySpace TV, DailyMotion, Blip.tv, ClipFish, LiveLeak, Veoh, Vimeo, Megavideo or Maktoob");
define('_AM_XOOPSTUBE_VIDEO_DESCRIPTION', "Відео опис: ");
define('_AM_XOOPSTUBE_VIDEO_CATEGORY', "Головна категорія відео: ");
define('_AM_XOOPSTUBE_VIDEO_FILESSTATUS', " Встановити відео офлайн?<br /><br /><span style='font-weight: normal;font-size: smaller;'>Відео не буде видимим для всіх користувачів</span>");
define('_AM_XOOPSTUBE_VIDEO_SETASUPDATED', " Встановити статус відео як оновлений?<br /><br /><span style='font-weight: normal;font-size: smaller;'>Відео буде відображатись із значком оновлення</span>");
define('_AM_XOOPSTUBE_VIDEO_SHOTIMAGE', "Відео скріншот зображення: ");
define('_AM_XOOPSTUBE_VIDEO_DISCUSSINFORUM', "Додати обговорення на форум?");
define('_AM_XOOPSTUBE_VIDEO_PUBLISHDATE', "Дата публікації відео:");
define('_AM_XOOPSTUBE_VIDEO_EXPIREDATE', "Дата дійсного відео:");
define('_AM_XOOPSTUBE_VIDEO_CLEARPUBLISHDATE', "<br /><br />Видалення дати публікації:");
define('_AM_XOOPSTUBE_VIDEO_CLEAREXPIREDATE', "<br /><br />Видалення дійсної дати:");
define('_AM_XOOPSTUBE_VIDEO_PUBLISHDATESET', " Встановлення дати публікації: ");
define('_AM_XOOPSTUBE_VIDEO_SETDATETIMEPUBLISH', " Встановити дату/час публікації");
define('_AM_XOOPSTUBE_VIDEO_SETDATETIMEEXPIRE', " Встановити дату/час здійснення");
define('_AM_XOOPSTUBE_VIDEO_SETPUBLISHDATE', "<span style='font-weight: bold;'>Встановити дату публікації: </span>");
define('_AM_XOOPSTUBE_VIDEO_SETNEWPUBLISHDATE', "<span style='font-weight: bold;'>Встановити нову дату публікації: </span><br />Опубліковано:");
define('_AM_XOOPSTUBE_VIDEO_SETPUBDATESETS', "<span style='font-weight: bold;'>Встановлення дати публікації: </span><br />Опублікована дата:");
define('_AM_XOOPSTUBE_VIDEO_EXPIREDATESET', " Встановлення дійсної дати: ");
define('_AM_XOOPSTUBE_VIDEO_SETEXPIREDATE', "<span style='font-weight: bold;'>Встановити дійсну дату: </span>");
define('_AM_XOOPSTUBE_VIDEO_DELEDITMESS', "Видалити зламаний звіт?<br /><br /><span style='font-weight: normal;'>Коли ви обераєте <span style='font-weight: bold;'>ТАК</span> зламаний рапорт буде автоматично видалено і Ви підтверджуєте, що відео знову працює.</span>");
define('_AM_XOOPSTUBE_VIDEO_MUSTBEVALID', "Зображення знімку екрану повинно бути дійсним в %s каталозі (ex. shot.gif). Цей знімок екрану використовується тільки для внутрішнього XoopsTube internal flv гравця.");
define('_AM_XOOPSTUBE_VIDEO_EDITAPPROVE', "Затвердити відео:");
define('_AM_XOOPSTUBE_VIDEO_NEWFILEUPLOAD', "Нове відео створено і база даних оновлена успішно");
define('_AM_XOOPSTUBE_VIDEO_FILEMODIFIEDUPDATE', "Обране відео змінено і база даних оновлена успішно");
define('_AM_XOOPSTUBE_VIDEO_REALLYDELETEDTHIS', "Дійсно видалити обране відео?");
define('_AM_XOOPSTUBE_VIDEO_FILEWASDELETED', "Відео %s успішно видалено з бази даних!");
define('_AM_XOOPSTUBE_VIDEO_FILEAPPROVED', "Відео затверджено і база даних оновлена успішно");
define('_AM_XOOPSTUBE_VIDEO_CREATENEWSSTORY', "<span style='font-weight: bold;'>Сторити історію для новин з посилання</span>");
define('_AM_XOOPSTUBE_VIDEO_SUBMITNEWS', "Розмістити нове відео, як елемент новин?");
define('_AM_XOOPSTUBE_VIDEO_NEWSCATEGORY', "Виберіть категорію новин, щоб представити новини:");
define('_AM_XOOPSTUBE_VIDEO_NEWSTITLE', "Тема новини:<div style='padding-top: 4px; padding-bottom: 4px;'><span style='font-weight: normal;'>Залишити порожнім, щоб використовувати назву відео</span></div>");
define('_AM_XOOPSTUBE_VIDEO_PUBLISHER', "Ім'я видавця відео: ");

/**
 * Broken links defines
 */
define('_AM_XOOPSTUBE_SBROKENSUBMIT', "Зламаний: <strong>%s</strong> ");
//define('_AM_XOOPSTUBE_SBROKENSUBMIT","Зламаний");
define('_AM_XOOPSTUBE_BROKEN_FILE', "Зламані звіти");
define('_AM_XOOPSTUBE_BROKEN_FILEIGNORED', "Зламаний звіт проігноровано і успішно видалено з бази даних!");
define('_AM_XOOPSTUBE_BROKEN_NOWACK', "Визнаний статус змінено і базу даних оновлено!");
define('_AM_XOOPSTUBE_BROKEN_NOWCON', "Підтвреджений статус змінено і базу даних оновлено!");
define('_AM_XOOPSTUBE_BROKEN_REPORTINFO', "Зламані інформаційні звіти");
define('_AM_XOOPSTUBE_BROKEN_REPORTSNO', "Зламані звіти очікування:");
define('_AM_XOOPSTUBE_BROKEN_IGNOREDESC', "<span style='font-weight: bold;'>Ігнорувати</span> доповідь, і видалити тільки зламаний відео звіт.");
define('_AM_XOOPSTUBE_BROKEN_DELETEDESC', "<span style='font-weight: bold;'>Видалити</span> представлені дані і посилання зламаних відео звітів.");
define('_AM_XOOPSTUBE_BROKEN_EDITDESC', "<span style='font-weight: bold;'>Редагувати</span> відео, щоб вирішити цю проблему.");
define('_AM_XOOPSTUBE_BROKEN_ACKDESC', "<span style='font-weight: bold;'>Визнаний</span> Встановіть визнаний статус зламаного звіту файлу.");
define('_AM_XOOPSTUBE_BROKEN_CONFIRMDESC', "<span style='font-weight: bold;'>Підтверджений</span> Встановіть підтверджений статус зламаного відео звіту.");
define('_AM_XOOPSTUBE_BROKEN_ACKNOWLEDGED', "Визнаний");
define('_AM_XOOPSTUBE_BROKEN_DCONFIRMED', "Підтверджений");

define('_AM_XOOPSTUBE_BROKEN_ID', "ID");
define('_AM_XOOPSTUBE_BROKEN_TITLE', "Назва");
define('_AM_XOOPSTUBE_BROKEN_REPORTER', "Репортер");
define('_AM_XOOPSTUBE_BROKEN_FILESUBMITTER', "Подавець");
define('_AM_XOOPSTUBE_BROKEN_DATESUBMITTED', "Дата додавання");
define('_AM_XOOPSTUBE_BROKEN_ACTION', "Дія");
define('_AM_XOOPSTUBE_BROKEN_NOFILEMATCH', "Немає зламаних звітів, що відповідають цим критеріям");
define('_AM_XOOPSTUBE_BROKENFILEDELETED', "відео виделано з бази даних та видалено зламаний звіт");
define('_AM_XOOPSTUBE_BROKEN_VIDSOURCE', "Відео джерело");
/**
 * About defines
 */
define('_AM_XOOPSTUBE_BY', "по");
// block defines
define('_AM_XOOPSTUBE_BADMIN', "Блок адміністрації");
define('_AM_XOOPSTUBE_BLKDESC', "Опис");
define('_AM_XOOPSTUBE_TITLE', "Назва");
define('_AM_XOOPSTUBE_SIDE', "Центрування");
define('_AM_XOOPSTUBE_WEIGHT', "Вага");
define('_AM_XOOPSTUBE_VISIBLE', "Видимий");
define('_AM_XOOPSTUBE_ACTION', "Дія");
define('_AM_XOOPSTUBE_SBLEFT', "Ліво");
define('_AM_XOOPSTUBE_SBRIGHT', "Прова");
define('_AM_XOOPSTUBE_CBLEFT', "Лівий центр");
define('_AM_XOOPSTUBE_CBRIGHT', "Правий центр");
define('_AM_XOOPSTUBE_CBCENTER', "Середній центр");
define('_AM_XOOPSTUBE_ACTIVERIGHTS', "Активні права");
define('_AM_XOOPSTUBE_ACCESSRIGHTS', "Права доступу");
// image admin icon
define('_AM_XOOPSTUBE_ICO_EDIT', "Редагувати цей ресурс");
define('_AM_XOOPSTUBE_ICO_DELETE', "Видалити цей ресурс");
define('_AM_XOOPSTUBE_ICO_RESOURCE', "Редагувати цей ресурс");

define('_AM_XOOPSTUBE_ICO_ONLINE', "В мережі");
define('_AM_XOOPSTUBE_ICO_OFFLINE', "Не в мережі");
define('_AM_XOOPSTUBE_ICO_APPROVED', "Схвалено");
define('_AM_XOOPSTUBE_ICO_NOTAPPROVED', "Не схвалено");

define('_AM_XOOPSTUBE_ICO_VIDEO', "Пов'язані відео");
define('_AM_XOOPSTUBE_ICO_URL', "Додати споріднений URL");
define('_AM_XOOPSTUBE_ICO_ADD', "Додати");
define('_AM_XOOPSTUBE_ICO_APPROVE', "Затвердити");
define('_AM_XOOPSTUBE_ICO_STATS', "Статистика");
define('_AM_XOOPSTUBE_ICO_VIEW', "Переглянути цей елемент");

define('_AM_XOOPSTUBE_ICO_IGNORE', "Ігнорувати");
define('_AM_XOOPSTUBE_ICO_ACK', "Визначити непрацюючий звіт");
define('_AM_XOOPSTUBE_ICO_REPORT', "Визначити непрацюючий звіт?");
define('_AM_XOOPSTUBE_ICO_CONFIRM', "Підтвердженна замана доповідь");
define('_AM_XOOPSTUBE_ICO_CONBROKEN', "Підтвердіть непрацюючий звіт?");
define('_AM_XOOPSTUBE_ICO_RES', "Редагувати ресурси/Відео цього елементу");
define('_AM_XOOPSTUBE_MOD_URLRATING', "Рейтинг інтернет-контенту:");
// Alternate category
define('_AM_XOOPSTUBE_ALTCAT_CREATEF', "Додати альтернативну категорію");
define('_AM_XOOPSTUBE_MALTCAT', "Управління альтернативною категорією");
define('_AM_XOOPSTUBE_ALTCAT_MODIFYF', "Управління альтернативною категорією");
define('_AM_XOOPSTUBE_ALTCAT_INFOTEXT', "<ul><li>Альтернативні категорії можуть бути додані або легко видалені за допомогою цієї форми.</li></ul>");
define('_AM_XOOPSTUBE_ALTCAT_CREATED', 'Альтернативні категорії збережено!');

define('_AM_XOOPSTUBE_MRESOURCES', "Управління ресурсом");
define('_AM_XOOPSTUBE_RES_CREATED', "Управління ресурсом");
define('_AM_XOOPSTUBE_RES_ID', "ID");
define('_AM_XOOPSTUBE_RES_DESC', "Опис");
define('_AM_XOOPSTUBE_RES_NAME', "Назва ресурсу");
define('_AM_XOOPSTUBE_RES_TYPE', "Тип ресурсу");
define('_AM_XOOPSTUBE_RES_USER', "Користувач");
define('_AM_XOOPSTUBE_RES_CREATEF', "Додати ресурс");
define('_AM_XOOPSTUBE_RES_MODIFYF', "Змінити ресурс");
define('_AM_XOOPSTUBE_RES_NAMEF', "Назва ресурсу:");
define('_AM_XOOPSTUBE_RES_DESCF', "Опис ресурсу:");
define('_AM_XOOPSTUBE_RES_URLF', "Ресурс URL:");
define('_AM_XOOPSTUBE_RES_ITEMIDF', "Ресурс ID елемента:");
define('_AM_XOOPSTUBE_RES_INFOTEXT', "<ul><li>Нові ресурси можуть бути додані, відредаговані або легко видалені за допомогою цієї форми.</li>
    <li>Список усіх ресурсів приєданних до відео</li>
    <li>Змінити ім'я ресурсів та опис</li></ul>
    ");
define('_AM_XOOPSTUBE_LISTBROKEN', "Відображати відео, які можливо, зламані. NB: Ці результати можуть бути не точними і повинні бути прийняті в якості приблизного орієнтира.<br /><br />Будь ласка, перевірте, чи дійсно відео існує, до того як будь яка дія буде виконана.<br /><br />");
define('_AM_XOOPSTUBE_PINGTIMES', "Відображати перший розрахунковий час круглого пінг для кожного відео.<br /><br />NB: Ці результати можуть бути не точними і повинні бути прийняті в якості приблизного орієнтира.<br /><br />");

define('_AM_XOOPSTUBE_NO_FORUM', "Немає обраного форуму");

define('_AM_XOOPSTUBE_PERM_RATEPERMISSIONS', "Дозвіл лцінювання");
define('_AM_XOOPSTUBE_PERM_RATEPERMISSIONS_TEXT', "Оберіть групи, які можуть оцінювати відео в вибраних категоріях.");

define('_AM_XOOPSTUBE_PERM_AUTOPERMISSIONS', "Автоматично схвалені відео");
define('_AM_XOOPSTUBE_PERM_AUTOPERMISSIONS_TEXT', "Оберіть групи, які матимуть нові автоматично схвалені відео без втручання адміністратора.");

define('_AM_XOOPSTUBE_PERM_SPERMISSIONS', "Дозвіл подавця");
define('_AM_XOOPSTUBE_PERM_SPERMISSIONS_TEXT', "Оберіть групи, які можуть представляти нові відео для обраних категорій.");

define('_AM_XOOPSTUBE_PERM_APERMISSIONS', "Модератор груп");
define('_AM_XOOPSTUBE_PERM_APERMISSIONS_TEXT', "Оберіть групи, які мають права модератора для обраних категорій.");

define('_AM_XOOPSTUBE_TIME', "Час:");
define('_AM_XOOPSTUBE_KEYWORDS', "Ключові слова:");
define('_AM_XOOPSTUBE_KEYWORDS_NOTE', "Ключові слова повинні бути розділені комою (ключове слово1, ключове слово2, ключове слово3)");
define('_AM_XOOPSTUBE_VIDEO_META_DESCRIPTION', "Мета-опис");
define('_AM_XOOPSTUBE_VIDEO_META_DESCRIPTION_DSC', "Для того, щоб допомогти пошуковим системам, ви можете встановити мета-опис, яку ви б хотіли використовувати для цієї статті. Якщо ви залишите це поле порожнім, при стовренні категорії, воно буде автоматично заповнюватись коротким описом статті.");

define('_AM_XOOPSTUBE_VIDSOURCE', "Video джерело:");
define('_AM_XOOPSTUBE_VIDSOURCE2', "Video джерело");
define('_AM_XOOPSTUBE_YOUTUBE', "YouTube");
define('_AM_XOOPSTUBE_METACAFE', "MetaCafe");
define('_AM_XOOPSTUBE_IFILM', "Spike");
define('_AM_XOOPSTUBE_GOOGLEVIDEO', "Google відео");
define('_AM_XOOPSTUBE_MYSPAVETV', "MySpace TV");
define('_AM_XOOPSTUBE_PHOTOBUCKET', "Photobucket");
define('_AM_XOOPSTUBE_DAILYMOTION', "DailyMotion");

// Version 1.04 RC-1
define('_AM_XOOPSTUBE_BLIPTV', "Blip.tv");
define('_AM_XOOPSTUBE_XOOPSTUBE', "XoopsTube");
define('_AM_XOOPSTUBE_ICO_EXPIRE', "Термін дії закінчився");
define('_AM_XOOPSTUBE_MXOOPSTUBE', "Додати XoopsTube кліп");
define('_AM_XOOPSTUBE_VIDEO_CATVIDEOIMG', "Зображення відео");
define('_AM_XOOPSTUBE_VIDEO_FCATVIDEOIMG', "Шлях зображення відео");
define('_AM_XOOPSTUBE_VUPLOAD_VIDEOEXIST', "Відео вже існує");
define('_AM_XOOPSTUBE_VUPLOAD_VIDEOUPLOAD', "Відео завантажене");
define('_AM_XOOPSTUBE_VUPLOAD_NOVIDEOEXIST', "Відео не існує");
define('_AM_XOOPSTUBE_VUPLOAD_FILEDELETED', "Відео видалене");
define('_AM_XOOPSTUBE_VUPLOAD_FILEERRORDELETE', "Помилка");
define('_AM_XOOPSTUBE_VUPLOAD_NOFILEERROR', "Немає файлу");
define('_AM_XOOPSTUBE_VUPLOAD_DELETEFILE', "Видалити відео-файл");
define('_AM_XOOPSTUBE_VUPLOAD_CATVIDEO', "Відео файли");
define('_AM_XOOPSTUBE_VUPLOAD_FCATVIDEO', "Каталог завантаження відео");
define('_AM_XOOPSTUBE_VUPLOADS', "Завантаження відео");
define('_AM_XOOPSTUBE_VUPLOAD_FUPLOADPATH', "Шлях завантаження відео:");
define('_AM_XOOPSTUBE_VUPLOAD_FUPLOADURL', "url завантаження відео:");
define('_AM_XOOPSTUBE_VUPLOAD_FUPLOADVIDEOTO', "Завантажити відео: ");
define('_AM_XOOPSTUBE_VUPLOAD_FOLDERSELECTION', "Оберіть місце куди завантажувати");
define('_AM_XOOPSTUBE_VUPLOAD_FUPLOADVIDEO', "Відео для завантаження");
define('_AM_XOOPSTUBE_VUPLOAD_FSHOWSELECTEDFILE', "Оберіть відео файл");
define('_AM_XOOPSTUBE_VUPLOAD_FSHOWSELECTEDFILEDSC', "Відео файл повинен бути FLV формату");
define('_AM_XOOPSTUBE_BDELETEVIDEO', "Видалити відео");
define('_AM_XOOPSTUBE_NOVIDEO', "Немає відео для відображення");
define('_AM_XOOPSTUBE_NOIMAGE', "Немає зображення для відображення");
define('_AM_XOOPSTUBE_NOSELECT', "Немає вибору");
define('_AM_XOOPSTUBE_NOFILESELECT', "Немає обраного файлу");
define('_AM_XOOPSTUBE_XOOPSTUBEVIDEO', "XoopsTube Відео файл:");
define('_AM_XOOPSTUBE_WARNINSTALL4', "<span style='font-weight: bold;'>УВАГА:</span> <span style='text-decoration: underline;'>Папка</span> %s не записана. <br />Ця папка повина бути записана (CHMOD 777) для XoopsTube.");
define('_AM_XOOPSTUBE_CATSPONSOR', "Виберіть категорію спонсора:");
define('_AM_XOOPSTUBE_CATSPONSORDSC', "Якщо Ви оберете Client банер id з форми нижче, не буде збережений!");
define('_AM_XOOPSTUBE_BANNER', "Банер");
define('_AM_XOOPSTUBE_FBANNER', "Банер");
define('_AM_XOOPSTUBE_BANNERID', "Оберіть банер ID:");
define('_AM_XOOPSTUBE_BANNERIDDSC', "Якщо у вас обраний Client у формі над банером id не буде збережено!");
// Uploader class
define('_AM_XOOPSTUBE_READWRITEERROR', "Або Ви не обрали файл для завантаження, або недостатньо серверу для читання/запису, щоб завантажити цей файл!");
define('_AM_XOOPSTUBE_INVALIDFILESIZE', "Недійсний розмір файлу");
define('_AM_XOOPSTUBE_FILENAMEEMPTY', "Назва файлу пусте");
define('_AM_XOOPSTUBE_NOFILEUPLOAD', "Файл не завантажено, сталась помилка");
define('_AM_XOOPSTUBE_UPLOADERRORZERO', "Проблема з вашим завантаженням. Помилка: 0");
define('_AM_XOOPSTUBE_UPLOADERRORONE', "Файл, що ви намагались завантажити, завелик. Помилка: 1");
define('_AM_XOOPSTUBE_UPLOADERRORTWO', "Файл, що ви намагались завантажити, завелик. Помилка: 2");
define('_AM_XOOPSTUBE_UPLOADERRORTHREE', "Файл, що ви намагались завантажити, вже буд частково завантажений. Помилка: 3");
define('_AM_XOOPSTUBE_UPLOADERRORFOUR', "Немає обраних файлів для оновлення. Помилка: 4");
define('_AM_XOOPSTUBE_UPLOADERRORFIVE', "Немає обраних файлів для оновлення. Помилка: 5");
define('_AM_XOOPSTUBE_NOUPLOADDIR', "Оновлення каталогу не встановлене");
define('_AM_XOOPSTUBE_FAILOPENDIR', "Помилка відкриття каталогу: ");
define('_AM_XOOPSTUBE_FAILOPENDIRWRITEPERM', "Помилка відкриття каталогу з письмовим дозволом: ");
define('_AM_XOOPSTUBE_FILESIZEMAXSIZE', "Розмір файлу: %u. Максимальний розмір файлу: %u");
define('_AM_XOOPSTUBE_FILESIZEMAXWIDTH', "Ширина файлу: %u. Максимальна дозволена ширина: %u");
define('_AM_XOOPSTUBE_FILESIZEMAXHEIGHT', "Висота файлу: %u. Максимальна доволена висота: %u");
define('_AM_XOOPSTUBE_MIMENOTALLOW', "MIME запис не дозволено: ");
define('_AM_XOOPSTUBE_FAILEDUPLOADING', "Не вдалось завантажити файл: ");
define('_AM_XOOPSTUBE_ALREADYEXISTTRYAGAIN', " вже є на сервері. Будь ласка, змініть ім'я файлу та спробуйте ще раз.<br />");
define('_AM_XOOPSTUBE_ERRORSRETURNUPLOAD', "<h4>Помилки повернулись при оновленні</h4>");
define('_AM_XOOPSTUBE_DOESNOTEXIST', " не існує!");

// Version 1.04 RC-2
define('_AM_XOOPSTUBE_CLIPFISH', "ClipFish");
define('_AM_XOOPSTUBE_LIVELEAK', "LiveLeak");
define('_AM_XOOPSTUBE_MAKTOOB', 'Maktoob');
define('_AM_XOOPSTUBE_VEOH', 'Veoh');
define('_AM_XOOPSTUBE_FILE', "Файл ");
define('_AM_XOOPSTUBE_INFORMATION', "Відео-інформація");
define('_AM_XOOPSTUBE_VIDEO_DLVIDIDDSC', "Прийняти червону частину, як показано в прикладі нижче");
define('_AM_XOOPSTUBE_VIDEO_VIEWS', "Переглядів: ");
define('_AM_XOOPSTUBE_ERROR_CATISCAT', "Ви не можете встановити категорію, як підкатегорію для цієї же категорії!");

// Version 1.04 RC-3
define('_AM_XOOPSTUBE_MOD_VIDID', "id-код відео: ");
define('_AM_XOOPSTUBE_MOD_VIDSOURCE', "Відео джерело: ");
define('_AM_XOOPSTUBE_MOD_TIME', "Час: ");
define('_AM_XOOPSTUBE_MOD_KEYWORDS', "Ключові слова: ");
define('_AM_XOOPSTUBE_MOD_ITEM_TAG', "Теги: ");
define('_AM_XOOPSTUBE_MOD_PICURL', "Зображення url: ");
define('_AM_XOOPSTUBE_IPAGE_SHOWLATEST', "Показати останні оголошення?");
define('_AM_XOOPSTUBE_IPAGE_LATESTTOTAL', "Скільки відео показати?");
define('_AM_XOOPSTUBE_IPAGE_LATESTTOTAL_DSC', "0 виключає цю опцію.");

// Version 1.05 RC-1
define('_AM_XOOPSTUBE_VIMEO', 'Vimeo');
define('_AM_XOOPSTUBE_MEGAVIDEO', 'Megavideo');
define('_AM_XOOPSTUBE_VIDDLER', 'Viddler');
define('_AM_XOOPSTUBE_CATTITLE', 'Категорія');

// 1.06 Beta 2

//Definitions for FileCheck
define("_AM_XOOPSTUBE_FILECHECKS", "Інформація");
define("_AM_XOOPSTUBE_UPLOADMAX", "Максимальний розмір для завантаження: ");
define("_AM_XOOPSTUBE_POSTMAX", "Максмальний розмір посту: ");
define("_AM_XOOPSTUBE_UPLOADS", "Завантаження дозволено: ");
define("_AM_XOOPSTUBE_UPLOAD_ON", "Включено");
define("_AM_XOOPSTUBE_UPLOAD_OFF", "Вимкнено");
define("_AM_XOOPSTUBE_GDIMGSPPRT", "GD бібліотека зображень підтримується: ");
define("_AM_XOOPSTUBE_GDIMGON", "Так");
define("_AM_XOOPSTUBE_GDIMGOFF", "Ні");
define("_AM_XOOPSTUBE_GDIMGVRSN", "GD версія зображення бібліотеки: ");
define("_AM_XOOPSTUBE_UPDATE_SUCCESS", "Оновлено успішно");

define("_AM_XOOPSTUBE_WARNING", "Увага: ");
define("_AM_XOOPSTUBE_NOT_EXISTS", "НЕ існує");
define("_AM_XOOPSTUBE_UNABLE_TO_WRITE", "Я не можу написати: ");

define("_AM_XOOPSTUBE_TOGGLE_OFFLINE_SUCCESS", "Відео встановлено офлайн");
define("_AM_XOOPSTUBE_TOGGLE_ONLINE_SUCCESS", "Відео встановлено в мережі");
define("_AM_XOOPSTUBE_TOGGLE_FAILED", "Помилка при переключенні відео статусу: ");
define("_AM_XOOPSTUBE_TOGGLE", "Переключити значення ");

// missing definitions
/*
_AM_XOOPSTUBE_VIDEO_EXPIREWARNING
_MD_XOOPSTUBE_COUNTRYLTOH
_MD_XOOPSTUBE_COUNTRYHTOL

//xoopstube\admin\blockform.php
_AM_NAME
_AM_BLKTYPE
_AM_SBLEFT
_AM_SBRIGHT
_AM_CBLEFT
_AM_CBRIGHT
_AM_CBCENTER
_AM_CBBOTTOMLEFT,
_AM_CBBOTTOMRIGHT,
_AM_CBBOTTOM,
_AM_WEIGHT
_AM_VISIBLE,*/

// Navigation
define('_AM_XOOPSTUBE_BLOCKS_ADMIN', "Адміністрація блоків");
define('_AM_XOOPSTUBE_BLOCKS_MANAGMENT', "Управління");
define('_AM_XOOPSTUBE_BLOCKS_ADDBLOCK', "Додати новий блок");
define('_AM_XOOPSTUBE_BLOCKS_EDITBLOCK', "Релагувати блок");
define('_AM_XOOPSTUBE_BLOCKS_CLONEBLOCK', "Клонувати блок");

define("_AM_XOOPSTUBE_TOPPAGE", "Топ-сторінка");
define("_AM_XOOPSTUBE_ALLPAGES", "Всі сторінки");
//define("_AM_XOOPSTUBE_BADMIN","Сторінка");
//define("_AM_XOOPSTUBE_TITLE","Назва");
//define("_AM_XOOPSTUBE_SIDE","Сторона");
//define("_AM_XOOPSTUBE_WEIGHT","Вага");
//define("_AM_XOOPSTUBE_VISIBLE","Видимий");
define("_AM_XOOPSTUBE_VISIBLEIN", "Видимий в");
//define("_AM_XOOPSTUBE_ACTION","Дія");
define("_AM_XOOPSTUBE_ERROR403", "Ви не маєте дозвіл переглядати цю сторінку!");

//directories
define('_AM_XOOPSTUBE_AVAILABLE', "<span style='color : green;'>Наявний. </span>");
define('_AM_XOOPSTUBE_NOTAVAILABLE', "<span style='color : red;'>не доступний. </span>");
define('_AM_XOOPSTUBE_NOTWRITABLE', "<span style='color : red;'>" . ' бажано мати дозвіл ( %1$d ), но це має ( %2$d )' . '</span>');
define('_AM_XOOPSTUBE_CREATETHEDIR', 'Створити');
define('_AM_XOOPSTUBE_SETMPERM', 'Встановити дозвіл');

define('_AM_XOOPSTUBE_DIRCREATED', 'Папка створена');
define('_AM_XOOPSTUBE_DIRNOTCREATED', 'Папка не може бути створена');
define('_AM_XOOPSTUBE_PERMSET', 'Дозвіл встановлено');
define('_AM_XOOPSTUBE_PERMNOTSET', 'Дозвіл неможливо встановити');
