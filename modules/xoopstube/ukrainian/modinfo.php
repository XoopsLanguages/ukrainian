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

// Module Info
// The name of this module
define('_MI_XOOPSTUBE_NAME', "XoopsTube");

// A brief description of this module
define('_MI_XOOPSTUBE_DESC', "З модулем <em>XoopsTube</em> ви можете додавати та класифікувати фільми з сайтів, як <br />YouTube, DailyMotion, LiveLeak, і т.д. до Вашого веб-сайту.");

// Names of blocks for this module (Not all module has blocks)
define('_MI_XOOPSTUBE_BNAME1', "Останні відео (t)");
define('_MI_XOOPSTUBE_BNAME2', "Останні відео");
define('_MI_XOOPSTUBE_BNAME3', "Топ відео (t)");
define('_MI_XOOPSTUBE_BNAME4', "Топ відео");
define('_MI_XOOPSTUBE_BNAME5', "Останні відео (h)");
define('_MI_XOOPSTUBE_BNAME6', "Випадкові відео");
define('_MI_XOOPSTUBE_BNAME7', "Випадкові відео (h)");

// Sub menu titles
define('_MI_XOOPSTUBE_SMNAME1', "Представити");
define('_MI_XOOPSTUBE_SMNAME2', "Популярне");
define('_MI_XOOPSTUBE_SMNAME3', "Високо оцінені");
define('_MI_XOOPSTUBE_SMNAME4', "Останні оголошення");

// Names of admin menu items
define('_MI_XOOPSTUBE_BINDEX', "Адміністратор");
define('_MI_XOOPSTUBE_INDEXPAGE', "Індекс сторінки");
define('_MI_XOOPSTUBE_MCATEGORY', "Категорії ");
define('_MI_XOOPSTUBE_MVIDEOS', "Місцеві відео");
define('_MI_XOOPSTUBE_MUPLOADS', "Завантажити зображення");
define('_MI_XOOPSTUBE_PERMISSIONS', "Дозвіл");
define('_MI_XOOPSTUBE_BLOCKADMIN', "Параметри блокування");
define('_MI_XOOPSTUBE_MVOTEDATA', "Голоси");

// Title of config items
define('_MI_XOOPSTUBE_POPULAR', "Кількість популярних відео");
define('_MI_XOOPSTUBE_POPULARDSC', "Число звернень до статусу відео буде вважатись популярним.");

define('_MI_XOOPSTUBE_ICONDISPLAY', "відео Популярні та Нові:");
define('_MI_XOOPSTUBE_DISPLAYICONDSC', "Оберіть, як відображати популярні і нові іконки в відео спсику.");
define('_MI_XOOPSTUBE_DISPLAYICON1', "Відображати, як іконки");
define('_MI_XOOPSTUBE_DISPLAYICON2', "Відображати, як текст");
define('_MI_XOOPSTUBE_DISPLAYICON3', "Не відображати");

define('_MI_XOOPSTUBE_DAYSNEW', "videos Days New:");
define('_MI_XOOPSTUBE_DAYSNEWDSC', "Число днів, статус відео буде розглядатись,як новий.");

define('_MI_XOOPSTUBE_DAYSUPDATED', "videos Days Updated:");
define('_MI_XOOPSTUBE_DAYSUPDATEDDSC', "Декілька днів відео статус буде розглядатись, як оновлений.");

define('_MI_XOOPSTUBE_PERPAGE', "video Listing Count:");
define('_MI_XOOPSTUBE_PERPAGEDSC', "Кількість відео для відображення в кожній категорії перепису.");

define('_MI_XOOPSTUBE_ADMINPAGE', "Admin Index Videos Count:");
define('_MI_XOOPSTUBE_AMDMINPAGEDSC', "Кількість нових відео для відображення в модулі адміністратора.");

define('_MI_XOOPSTUBE_ARTICLESSORT', "Замовити відео за замовчуванням:");
define('_MI_XOOPSTUBE_ARTICLESSORTDSC', "Оберіть порядок за замовчуванням для відео перепису.");

define('_MI_XOOPSTUBE_SORTCATS', "Сортувати категорії за:");
define('_MI_XOOPSTUBE_SORTCATSDSC', "Виберіть, як категорії та під-категорії упорякувати.");

define('_MI_XOOPSTUBE_SUBCATS', "Під-категорії:");
define('_MI_XOOPSTUBE_SUBCATSDSC', "Виберіть Так. Обераючи Ні, під-категорії будуть приховані в переписі.");

define('_MI_XOOPSTUBE_EDITOR', "Редактор для використання (адміністратор):");
define('_MI_XOOPSTUBE_EDITORCHOICE', "Оберіть редактор для користування для сторони адміністратора. Якщо у вас 'звичайна' установка (н-д, ви використовуєте тільки XOOPS ядро редактор класу, за умови в базовому пакеті стандартних XOOPS), тоді, ви можете просто обрати DHTML і з'єднати");
define('_MI_XOOPSTUBE_EDITORUSER', "Редактор для використання (користувач):");
define('_MI_XOOPSTUBE_EDITORCHOICEUSER', "Оберіть редактор для користування для сторони користувача. Якщо у вас 'звичайна' установка (н-д, ви використовуєте тільки XOOPS ядро редактор класу, за умови в базовому пакеті стандартних XOOPS), тоді, ви можете просто обрати DHTML і з'єднати");
define('_MI_XOOPSTUBE_FORM_DHTML', "DHTML");
define('_MI_XOOPSTUBE_FORM_COMPACT', "З'єднувати");
define('_MI_XOOPSTUBE_FORM_SPAW', "Spaw редактор");
define('_MI_XOOPSTUBE_FORM_HTMLAREA', "HtmlArea реадктор");
define('_MI_XOOPSTUBE_FORM_FCK', "FCK редактор");
define('_MI_XOOPSTUBE_FORM_KOIVI', "Koivi редактор");
define('_MI_XOOPSTUBE_FORM_TINYEDITOR', "TinyEditor");

define('_MI_XOOPSTUBE_USESHOTS', "Відображати зображення знімків екрану?");
define('_MI_XOOPSTUBE_USESHOTSDSC', "Оберіть так, для відображення зображення знімків екрану для кожного елементу відео");

define('_MI_XOOPSTUBE_USETHUMBS', "Використати ескізи:");
define('_MI_XOOPSTUBE_USETHUMBSDSC', "Підтримувані типи посилань: JPG, GIF, PNG.<div style='padding-top: 8px;'>WF-посилання будуть використовувати ескізи для зображень. Встановіть 'Ні' для користування оригінальним зображенням, якщо сервер не підтримує цю опцію.</div>");

define('_MI_XOOPSTUBE_IMGUPDATE', "Оновити есскізи?");
define('_MI_XOOPSTUBE_IMGUPDATEDSC', "Якщо обрані ескізи будуть оновлені на кожній сторінці, в іншому випадку, перше зображення мініатюри буде незалежно використовуватись. <br /><br />");

define('_MI_XOOPSTUBE_SHOTWIDTH', "Відображати ширину знімку екрану");
define('_MI_XOOPSTUBE_SHOTWIDTHDSC', "Відображати ширину для знімку екрану");

define('_MI_XOOPSTUBE_SHOTHEIGHT', "Відображати висоту знімку екрану");
define('_MI_XOOPSTUBE_SHOTHEIGHTDSC', "Відображати висоту для знімку екрану");

define('_MI_XOOPSTUBE_MAINIMGDIR', "Головний каталог зобржень");

define('_MI_XOOPSTUBE_CATEGORYIMG', "Завантажити каталог категорії зображень");

define('_MI_XOOPSTUBE_DATEFORMAT', "Відмітка:");
define('_MI_XOOPSTUBE_DATEFORMATDSC', "Відмітка за замовчуванням для XoopsTube");

define('_MI_XOOPSTUBE_TOTALCHARS', "Встановити загальну кількість символів для опису?");
define('_MI_XOOPSTUBE_TOTALCHARSDSC', "Встановити загальну кількість символів для опису на сторінці індексу.");

define('_MI_XOOPSTUBE_OTHERVIDEOS', "Показати інші відео, представлені подавцем?");
define('_MI_XOOPSTUBE_OTHERVIDEOSDSC', "Оберіть Так, якщо інші відео подавця слід відобразити.");

define('_MI_XOOPSTUBE_SHOWSUBMITTER', "Показати подавця?");
define('_MI_XOOPSTUBE_SHOWSUBMITTERDSC', "Оберіть Так, якщо ви би хотіли щоб відображались подавці кожного відео.");

define('_MI_XOOPSTUBE_SHOWSBOOKMARKS', "Показати соціальні закладки?");
define('_MI_XOOPSTUBE_SHOWSBOOKMARKSDSC', "Оберіть Так, якщо Ви хочете, щоб іконки соціальних закладок відображались під відео.");

define('_MI_XOOPSTUBE_USEMETADESCR', "Генерація мета-опису:");
define('_MI_XOOPSTUBE_USEMETADSC', "За допомогою цієї опції мета-опису  буде засновано на описі відео.");

define('_MI_XOOPSTUBE_USERTAGDESCR', "Користувач може представити теги:");
define('_MI_XOOPSTUBE_USERTAGDSC', "Оберіть Так, якщо користувачу дозволено прдеставляти теги.");

define('_MI_XOOPSTUBE_SHOWDISCLAIMER', "Показати Відмову перед повідомленням користувачу?");
define('_MI_XOOPSTUBE_SHOWDISCLAIMERDSC', "До того, як користувач може представити відео, показати правила вступу?");

define('_MI_XOOPSTUBE_DISCLAIMER', "Введіть пред'явлення відмови тексту:");

define('_MI_XOOPSTUBE_SHOWVIDEODISCL', "Показати відмову перед відео користувача?");
define('_MI_XOOPSTUBE_SHOWVIDEODISCLDSC', "Показати правила перж ніж відкриється відео?");

define('_MI_XOOPSTUBE_VIDEODISCLAIMER', "Введіть текст відео відмови:");

define('_MI_XOOPSTUBE_COPYRIGHT', "Повідомлення про авторські права:");
define('_MI_XOOPSTUBE_COPYRIGHTDSC', "Оберіть, щоб відобразити повідомлення про авторсські права на сторінці відео.");

define('_MI_XOOPSTUBE_CHECKHOST', "Заборонити пряме відео зв'язування? (качає)");
define('_MI_XOOPSTUBE_REFERERS', "Ці сайти можуть безпосередньо  відео до ваших відео <br />розділяти з #");
define('_MI_XOOPSTUBE_ANONPOST', "Анонімний користувач прдеставлення:");
define('_MI_XOOPSTUBE_ANONPOSTDSC', "Дозволити анонімним користувачам представляти або завантажувати до вашого веб-сайту?");
define('_MI_XOOPSTUBE_AUTOAPPROVE', "Автоматичне затвердження доданих закладок");
define('_MI_XOOPSTUBE_AUTOAPPROVEDSC', "Оберіть 'схвалити представлені відео без модерації'.");

define('_MI_XOOPSTUBE_MAXFILESIZE', "Завантажити розмір (KB)");
define('_MI_XOOPSTUBE_MAXFILESIZEDSC', "Максимальний розмір відео дозволений з завантаження відео.");
define('_MI_XOOPSTUBE_IMGWIDTH', "Ширина завантаження зображення");
define('_MI_XOOPSTUBE_IMGWIDTHDSC', "Максимальна ширина зображення дозволяється при завантаженні відео зображення");
define('_MI_XOOPSTUBE_IMGHEIGHT', "Висота завантаженого зображення");
define('_MI_XOOPSTUBE_IMGHEIGHTDSC', "Максимальна висота зображення дозволяється при завантаженні відео зображення");

define('_MI_XOOPSTUBE_UPLOADDIR', "Завантажити каталог (No trailing slash)");
define('_MI_XOOPSTUBE_ALLOWSUBMISS', "Матеріали користувача:");
define('_MI_XOOPSTUBE_ALLOWSUBMISSDSC', "Дозволити користувачам додавати нові відео");
define('_MI_XOOPSTUBE_ALLOWUPLOADS', "Завантаження користувача:");
define('_MI_XOOPSTUBE_ALLOWUPLOADSDSC', "Дозволити користувачам завантажувати відео безпосередньо на свій веб-сайт");
define('_MI_XOOPSTUBE_SCREENSHOTS', "Завантаження каталогу для знімків екрану");

define('_MI_XOOPSTUBE_SUBMITART', "відео Подача:");
define('_MI_XOOPSTUBE_SUBMITARTDSC', "Оберіть групи, які можуть представляти нові відео.");
define('_MI_XOOPSTUBE_RATINGGROUPS', "Відео рейтинг:");
define('_MI_XOOPSTUBE_RATINGGROUPSDSC', "Оберіть групи, які можуть оцінювати відео.");

define('_MI_XOOPSTUBE_QUALITY', "Знак якості:");
define('_MI_XOOPSTUBE_QUALITYDSC', "Найнижча якість: 0 Найвища: 100");
define('_MI_XOOPSTUBE_KEEPASPECT', "Залишити формат зображення?");
define('_MI_XOOPSTUBE_KEEPASPECTDSC', "");

define('_MI_XOOPSTUBE_TITLE', "Назва");
define('_MI_XOOPSTUBE_RATING', "Рейтинг");
define('_MI_XOOPSTUBE_WEIGHT', "Вага");
define('_MI_XOOPSTUBE_POPULARITY', "Популярність");
define('_MI_XOOPSTUBE_SUBMITTED2', "Дата подання");

// Text for notifications
define('_MI_XOOPSTUBE_GLOBAL_NOTIFY', "Глобальне");
define('_MI_XOOPSTUBE_GLOBAL_NOTIFYDSC', "Глобальні параметри повідомлень відео.");
define('_MI_XOOPSTUBE_CATEGORY_NOTIFY', "Категорія");
define('_MI_XOOPSTUBE_CATEGORY_NOTIFYDSC', "Варіанти повідомлень, які відносяться до категорії відео.");
define('_MI_XOOPSTUBE_VIDEO_NOTIFY', "Відео");
define('_MI_XOOPSTUBE_FILE_NOTIFYDSC', "Варіанти повідомлень до поточного відео.");
define('_MI_XOOPSTUBE_GLOBAL_NEWCATEGORY_NOTIFY', "Нова категорія");
define('_MI_XOOPSTUBE_GLOBAL_NEWCATEGORY_NOTIFYCAP', "Повідомити мене, коли створюється нова категорія відео.");
define('_MI_XOOPSTUBE_GLOBAL_NEWCATEGORY_NOTIFYDSC', "Оповіщення, коли створюється нова категорія відео.");
define('_MI_XOOPSTUBE_GLOBAL_NEWCATEGORY_NOTIFYSBJ', "[{X_SITENAME}] {X_MODULE} автоматичне повідомлення : Нова відео ктегорія");

define('_MI_XOOPSTUBE_GLOBAL_VIDEOMODIFY_NOTIFY', "Запит на змінення відео");
define('_MI_XOOPSTUBE_GLOBAL_VIDEOMODIFY_NOTIFYCAP', "Повідомити мене про будь-який запит модифікації.");
define('_MI_XOOPSTUBE_GLOBAL_VIDEOMODIFY_NOTIFYDSC', "Оповіщення, коли представляється будь-який запит модифікації відео.");
define('_MI_XOOPSTUBE_GLOBAL_VIDEOMODIFY_NOTIFYSBJ', "[{X_SITENAME}] {X_MODULE} автомтичне повідомлення : Запит на відео змінення");

define('_MI_XOOPSTUBE_GLOBAL_VIDEOBROKEN_NOTIFY', "Зламане відео представлене");
define('_MI_XOOPSTUBE_GLOBAL_VIDEOBROKEN_NOTIFYCAP', "Повідомити мене про будь-який зламаний відеозвіт.");
define('_MI_XOOPSTUBE_GLOBAL_VIDEOBROKEN_NOTIFYDSC', "Оповіщення, коли представляєься зламаний відеозвіт.");
define('_MI_XOOPSTUBE_GLOBAL_VIDEOBROKEN_NOTIFYSBJ', "[{X_SITENAME}] {X_MODULE} автоматичне повідомлення : Повідомлення про зламане відео");

define('_MI_XOOPSTUBE_GLOBAL_VIDEOSUBMIT_NOTIFY', "Представлене відео");
define('_MI_XOOPSTUBE_GLOBAL_VIDEOSUBMIT_NOTIFYCAP', "Повідомити мене, коли представляється будь-яке відео (очікує підтвердження).");
define('_MI_XOOPSTUBE_GLOBAL_VIDEOSUBMIT_NOTIFYDSC', "Оповіщення, коли представляється будь-яке відео (очікує підтвердження).");
define('_MI_XOOPSTUBE_GLOBAL_VIDEOSUBMIT_NOTIFYSBJ', "[{X_SITENAME}] {X_MODULE} автоматичне повідомлення : Нове відео представлено");

define('_MI_XOOPSTUBE_GLOBAL_NEWVIDEO_NOTIFY', "Нове відео");
define('_MI_XOOPSTUBE_GLOBAL_NEWVIDEO_NOTIFYCAP', "Повідомити мене, коли публікується будь-яке нове відео.");
define('_MI_XOOPSTUBE_GLOBAL_NEWVIDEO_NOTIFYDSC', "Надіслати повідомлення, коли публікується будь-яке нове відео.");
define('_MI_XOOPSTUBE_GLOBAL_NEWVIDEO_NOTIFYSBJ', "[{X_SITENAME}] {X_MODULE} автоматичне повідомлення : Нове відео");

define('_MI_XOOPSTUBE_CATEGORY_FILESUBMIT_NOTIFY', "Прдеставлене відео");
define('_MI_XOOPSTUBE_CATEGORY_FILESUBMIT_NOTIFYCAP', "Повідомити мене, коли представляється нове відео (очікує підтвердження) до поточної категорії.");
define('_MI_XOOPSTUBE_CATEGORY_FILESUBMIT_NOTIFYDSC', "Надіслати повідомлення, коли представляється нове відео (очікує підтвердження) до поточної категорії.");
define('_MI_XOOPSTUBE_CATEGORY_FILESUBMIT_NOTIFYSBJ', "[{X_SITENAME}] {X_MODULE} автоматичне повідомлення : Нове відео представлено в категорії");

define('_MI_XOOPSTUBE_CATEGORY_NEWVIDEO_NOTIFY', "Нове відео");
define('_MI_XOOPSTUBE_CATEGORY_NEWVIDEO_NOTIFYCAP', "Повідомити мене, коли публікується нове відео в поточній категорії.");
define('_MI_XOOPSTUBE_CATEGORY_NEWVIDEO_NOTIFYDSC', "Надіслати повідомлення, коли публікується нове відео в поточній категорії.");
define('_MI_XOOPSTUBE_CATEGORY_NEWVIDEO_NOTIFYSBJ', "[{X_SITENAME}] {X_MODULE} автоматичне повідомлення : Нове відео в категорії");

define('_MI_XOOPSTUBE_VIDEO_APPROVE_NOTIFY', "Затверджене відео");
define('_MI_XOOPSTUBE_VIDEO_APPROVE_NOTIFYCAP', "Повідомити мене, коли це відео буде затверджено.");
define('_MI_XOOPSTUBE_VIDEO_APPROVE_NOTIFYDSC', "Надіслати повідомлення, коли це відео буде затверджено.");
define('_MI_XOOPSTUBE_VIDEO_APPROVE_NOTIFYSBJ', "[{X_SITENAME}] {X_MODULE} автоматичне повідомлення : Відео затверджено");

define('_MI_XOOPSTUBE_AUTHOR_INFO', "Інформація для розробників");
define('_MI_XOOPSTUBE_AUTHOR_NAME', "Розробник");
define('_MI_XOOPSTUBE_AUTHOR_DEVTEAM', "Група розробників");
define('_MI_XOOPSTUBE_AUTHOR_WEBSITE', "Сайт розробника");
define('_MI_XOOPSTUBE_AUTHOR_EMAIL', "Написати розробнику");
define('_MI_XOOPSTUBE_AUTHOR_CREDITS', "Кредити");
define('_MI_XOOPSTUBE_MODULE_INFO', "Модуль інформаційного розвитку");
define('_MI_XOOPSTUBE_MODULE_STATUS', "Стан розвитку");
define('_MI_XOOPSTUBE_MODULE_DEMO', "Демо-версія сайту");
define('_MI_XOOPSTUBE_MODULE_SUPPORT', "Офіційний сайт підтримки");
define('_MI_XOOPSTUBE_MODULE_BUG', "Повідомити про помилку для цього модуля");
define('_MI_XOOPSTUBE_MODULE_FEATURE', "Запропонувати нову функцію для цього модуля");
define('_MI_XOOPSTUBE_MODULE_DISCLAIMER', "Відмова");
define('_MI_XOOPSTUBE_RELEASE', "Дата випуск");

define('_MI_XOOPSTUBE_MODULE_MAILLIST', "WF-Project список розсилки");
define('_MI_XOOPSTUBE_MODULE_MAILANNOUNCEMENTS', "Оголошення списку розсилки");
define('_MI_XOOPSTUBE_MODULE_MAILBUGS', "Помилка списку розсилки");
define('_MI_XOOPSTUBE_MODULE_MAILFEATURES', "Особливості списку розсилки");
define('_MI_XOOPSTUBE_MODULE_MAILANNOUNCEMENTSDSC', "Отримати останні оголошення від XOOPS.");
define('_MI_XOOPSTUBE_MODULE_MAILBUGSDSC', "Відстеження помилки та подання переліку розсилки");
define('_MI_XOOPSTUBE_MODULE_MAILFEATURESDSC', "Запит нових модливостей списку розсилки.");

define('_MI_XOOPSTUBE_WARNINGTEXT', "ПРОГРАМНЕ ЗАБЕЗПЕЧЕННЬ НАДАЄТЬСЯ XOOPS \"ЯК Є\" ТА \"З УСІМА ПОМИЛКАМИ.\"
XOOPS НЕ РОБИТЬ ПОДАННЯ АБО БУДЬ-ЯКИХ ГАРАНТІЙ ЩОДО
ЯКОСТІ, БЕЗПЕКИ АБО ПРИДАТНОСТІ ПРОГРАМНОГО ЗАБЕЗПЕЧЕННЯ, ПРЯМИХ АБО
НЕПРЯМИХ, У ТОМУ ЧИСЛІ, БЕЗ ОБМЕЖЕННЯ ГАРАНТІЇ
ТОВАРУ, ЗДАТНІСТЬ ДО КОНКРЕТНИХ ЦІЛЕЙ, АБО ВІДСУТНІСТЬ.
ДАЛІ, XOOPS НЕ ДАЄ БУДЬ ЯКИХ ГАРАНТІЙ,
ТОЧНІСТЬ ПОВНОТИ БУДЬ ЯКИХ ЗАЯВ, ІНФОРМАЦІЮ АБО МАТЕРІАЛИ
ЩОДО ПРОГРАМНОГО ЗАБЕЗПЕЧЕННЯ, ЯКИЙ МІСТИТЬСЯ НА XOOPS САЙТІ. НІ В ЯКОМУ РАЗІ
XOOPS НЕ НЕСЕ ВІДПОВІДАЛЬНОСТІ ЗА КАРАЛЬНІ, СПЕЦІАЛЬНІ,
АБО ВИПАДКОВІ ЗБИТКИ, АДЖЕ ВОНИ МОЖУТЬ ВИНИКНУТИ І НАВІТЬ ЯКЩО
XOOPS БУВ РАНЬШЕ ПОВІДОМЛЕНИЙ ПРО МОЖЛИВІСТЬ ТАКОГО ЗБИТКУ..");

define('_MI_XOOPSTUBE_AUTHOR_CREDITSTEXT', "WF-Projects група");
define('_MI_XOOPSTUBE_AUTHOR_BUGFIXES', "Виправити помилку історії");

// version 1.02
define('_MI_XOOPSTUBE_FORM_TINYMCE', "TinyMCE");
define('_MI_XOOPSTUBE_FORM_DHTMLEXT', "DHTML Розширений");

// Version 1.03
define('_MI_XOOPSTUBE_DATEFORMATADMIN', "Відмітка адміністрації:");
define('_MI_XOOPSTUBE_DATEFORMATADMINDSC', "Відмітка адміністрації за замовчуванням для XoopsTube");

// Version 1.04 RC-1
define('_MI_XOOPSTUBE_VIDEODIR', "Каталог завантаження відео:");
define('_MI_XOOPSTUBE_VIDEODIRDSC', "Встановити каталог для XoopsTube відео файлів");
define('_MI_XOOPSTUBE_VIDEOIMGDIR', "Завантажити відео скріншоти в каталог:");
define('_MI_XOOPSTUBE_VIDEOIMGDIRDSC', "Встановити каталог для XoopsTube відео скріншотів");
define('_MI_XOOPSTUBE_FLVPLAYER_CREDITS', "FLV Програвач");
define('_MI_XOOPSTUBE_FLVPLAYER_CREDITDSC', "JW FLV Media-програвач від LongTail Відео (Jeroen Wijering)");
define('_MI_XOOPSTUBE_VUPLOADS', "Завантажити відео");
define('_MI_XOOPSTUBE_CATEGORYIMGDSC', "");
define('_MI_XOOPSTUBE_MAINIMGDIRDSC', "");
define('_MI_XOOPSTUBE_BNAME8', "XoopsTube спонсор статистика");
define('_MI_XOOPSTUBE_ICONS_CREDITS', "Іконки");

// Version 1.04 RC-2
define('_MI_XOOPSTUBE_MODULE_MANUAL', "Керівництво");
define('_MI_XOOPSTUBE_MODULE_MANUALWIKI', "Wiki Керівництво");
define('_MI_XOOPSTUBE_MODULE_REQUESTNEWFEATURE', "Запросити нову функцію");
define('_MI_XOOPSTUBE_MODULE_SUBMITBUG', "Представити помилку");
define('_MI_XOOPSTUBE_BNAME9', "XoopsTube теги Cloud");
define('_MI_XOOPSTUBE_BNAME10', "XoopsTube кращі теги");
define('_MI_XOOPSTUBE_FLVPLAYER_MANUAL', "Керівництво FLV-плеєру");
define('_MI_XOOPSTUBE_FLVPLAYER_WIKI', "JW плеєр Wiki");

// Version 1.05 RC-1
define('_MI_XOOPSTUBE_CATCOLUMNS', "Вибрати кількість стовпців категорії:");
define('_MI_XOOPSTUBE_CATCOLUMNSDSC', "Вибрати кількість стовпців категорії, за замовчуванням: 2");
define('_MI_XOOPSTUBE_RATINGDISPLAY', "Показати характеристики рейтингу?");
define('_MI_XOOPSTUBE_RATINGDISPLAYDSC', "Обріть <em>Так</em> щоб відобразити особливості рейтингу. Оберіть <em>Ні</em>, якщо Ви не хочете, щоб відображались особливості рейтингу.");
define('_MI_XOOPSTUBE_AUTOPLAY', "Автоматично програвати відео");
define('_MI_XOOPSTUBE_AUTOPLAYDSC', "Оберіть <em>Так</em>, для того щоб відео грали автоматично.");
define('_MI_XOOPSTUBE_VERSION', "Версія");
define('_MI_XOOPSTUBE_LICENSE', "Ліцензія");
define('_MI_XOOPSTUBE_LICENSEDSC', "GNU General Public License (GPL) - копія GNU ліцензії додається (license.txt).");

define('_MI_XOOPSTUBE_ADD_VIDEO', "Додати відео");
define('_MI_XOOPSTUBE_ADD_CATEGORY', "Додати категорію");

// Admin Summary
define('_MI_XOOPSTUBE_SCATEGORY', "Категорія");
define('_MI_XOOPSTUBE_SFILES', "Відео");
define('_MI_XOOPSTUBE_SNEWFILESVAL', "Представлено");
define('_MI_XOOPSTUBE_SMODREQUEST', "Змінено");
define('_MI_XOOPSTUBE_SREVIEWS', "Відгуки: ");
define('_MI_XOOPSTUBE_SBROKENSUBMIT', "Зламанйи");

//Version 1.05 RC2
define('_MI_XOOPSTUBE_BNAME11', "Відео в центрі уваги");

//define('_MI_XOOPSTUBE_PREFERENCES_DIRECTIORIES', '<span style="font-weight: bold; color: #FF0000; font-size: small;"><b>Налаштування довідників</span> ');
define('_MI_XOOPSTUBE_PREFERENCES_DIRECTIORIES', '<span style="font-weight: bold; "><b>Налаштування довідників</span> ');
define('_MI_XOOPSTUBE_PREFERENCES_COMMENTS', '<span style="font-weight: bold; "><b>Коментарі/Повідомлення</span> ');
define('_MI_XOOPSTUBE_PREFERENCES_OTHERS', '<span style="font-weight: bold; "><b>Інші переваги</span> ');

define('_MI_XOOPSTUBE_PREFERENCES_DIRMODE', "Довідник письмових дозволів");
define('_MI_XOOPSTUBE_PREFERENCES_DIRMODE_DESC', "Встановити довідник письмових дозволів, як визначено для Unix (н-д, 0777 за замовчуванням для завантаження каталогів)");

// 1.06 RC2

define('_MI_XOOPSTUBE_BNAME1_DESC', "Показує надавно додані відео");
define('_MI_XOOPSTUBE_BNAME2_DESC', "Показує надавно додані відео");
define('_MI_XOOPSTUBE_BNAME3_DESC', "Показує top-clicked відео");
define('_MI_XOOPSTUBE_BNAME4_DESC', "Показує top-clicked відео");
define('_MI_XOOPSTUBE_BNAME5_DESC', "Показує надавно додані відео");
define('_MI_XOOPSTUBE_BNAME6_DESC', "Показує випадкове відео");
define('_MI_XOOPSTUBE_BNAME7_DESC', "Показує випадкове відео");
define('_MI_XOOPSTUBE_BNAME8_DESC', "Показує top-clicked банери");
define('_MI_XOOPSTUBE_BNAME9_DESC', "Показує cloud тегів");
define('_MI_XOOPSTUBE_BNAME10_DESC', "Показує кращі теги");
define('_MI_XOOPSTUBE_BNAME11_DESC', "Показує популярні відео");
