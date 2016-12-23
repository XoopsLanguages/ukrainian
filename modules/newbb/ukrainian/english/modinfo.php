<?php
// $Id: modinfo.php,v 2.3 2012/02/08 16:20:00 dhcst Exp $
// Thanks Tom (http://www.wf-projects.com), for correcting the Engligh language package
if (defined('NEWBB_MODINFO_DEFINED')) return;
define('NEWBB_MODINO_DEFINED', true);
// Module Info
// The name of this module
define('_MI_NEWBB_NAME', "Форум");
// A brief description of this module
define('_MI_NEWBB_DESC', "XOOPS товарисво Дошка оголошень");
// Names of blocks for this module (Not all module has blocks)
define('_MI_NEWBB_BLOCK_TOPIC_POST', "Відповіді останніх тем. Він буде падати (використати передові теми блоку візуалізації)"); // irmtfan
define('_MI_NEWBB_BLOCK_TOPIC', "Останні теми. Він буде падати (використати передові теми блоку візуалізації)"); // irmtfan
define('_MI_NEWBB_BLOCK_POST', "Останні повідомлення");
define('_MI_NEWBB_BLOCK_AUTHOR', "Автори");
define('_MI_NEWBB_BLOCK_TAG_CLOUD', "Cloud тегів");
define('_MI_NEWBB_BLOCK_TAG_TOP', "Кращі теги");
// Names of admin menu items
define('_MI_NEWBB_ADMENU_INDEX', "Індекс");
define('_MI_NEWBB_ADMENU_CATEGORY', "Категорії");
define('_MI_NEWBB_ADMENU_FORUM', "Форуми");
define('_MI_NEWBB_ADMENU_PERMISSION', "Дозвіл");
define('_MI_NEWBB_ADMENU_BLOCK', "Блоки");
define('_MI_NEWBB_ADMENU_ORDER', "Замовлення");
define('_MI_NEWBB_ADMENU_SYNC', "Синхронізувати форуми");
define('_MI_NEWBB_ADMENU_PRUNE', "Prune");
define('_MI_NEWBB_ADMENU_REPORT', "Звіти");
define('_MI_NEWBB_ADMENU_DIGEST', "Довідник");
define('_MI_NEWBB_ADMENU_VOTE', "Голоси");
define('_MI_NEWBB_ADMENU_TYPE', "Типи теми");
define('_MI_NEWBB_ADMENU_ABOUT', "Про");
//config options
define('_MI_DO_DEBUG', "Режим налагодження");
define('_MI_DO_DEBUG_DESC', "Відобразити повідомлення про помилку");
define('_MI_DO_REWRITE', "SEO-URL включений");
define('_MI_DO_REWRITE_DESC', "переписує URL, Вам необхідно mod_rewrite і a. htaccess побачити readme.htaccess");
define('_MI_IMG_SET', "Встановити зображення");
define('_MI_IMG_SET_DESC', "Оберіть зображення, встановлене для використання");
define('_MI_THEMESET', "Встановити тему");
define('_MI_THEMESET_DESC', "Модуль по всій, оберіть '"._NONE."', що буде використовувати загальносистемну тему");
define('_MI_DIR_ATTACHMENT', "Вкладенняфізичного шляху.");
define('_MI_DIR_ATTACHMENT_DESC', "Фізичнй шлях потрібно встановлювати тільки з Вашим кореня xoops і не раніше, наприклад, Ви модливо маєте вкладення до завантаження www.yoururl.com/uploads/newbb , шлях увійшов би тоді до '/uploads/newbb' ніколи не включають в себе '/' шлях ескізу стає '/uploads/newbb/thumbs'");
define('_MI_PATH_MAGICK', "Шлях до ImageMagick");
define('_MI_PATH_MAGICK_DESC', "Звичайно це '/usr/bin/X11'. Залиште це поле порожнім, якщо у Вас немає встановленого або автоматичного виявленого ImageMagicK.");
define('_MI_SUBFORUM_DISPLAY', "Режим відображення підфоруму на сторінці індексу");
define('_MI_SUBFORUM_DISPLAY_DESC', "Виберіть один з методів для відображення підфорумів");
define('_MI_SUBFORUM_EXPAND', "Розширити");
define('_MI_SUBFORUM_COLLAPSE', "Колапс");
define('_MI_SUBFORUM_HIDDEN', "Приховано");
define('_MI_POST_EXCERPT', "Витримка повідомлення на сторінці форуму");
define('_MI_POST_EXCERPT_DESC', "Довжина поштової виписки за допомогою миші. 0 без всякої витримки.");
define('_MI_PATH_NETPBM', "Шлях для Netpbm");
define('_MI_PATH_NETPBM_DESC', "Звичайно це '/usr/bin'. Залиште це поле порожнім, якщо у Вас немає встановленого або автоматично виявленого Netpbm.");
define('_MI_IMAGELIB', "Виберіть бібліотеку зображень для використання");
define('_MI_IMAGELIB_DESC', "Виберіть, які саме зображення бібліотеки використовувати для мініатюр. Залиште AUTO для автоматичного вибору.");
define('_MI_MAX_IMG_WIDTH', "Максимальна ширина зображення");
define('_MI_MAX_IMG_WIDTH_DESC', "Встановлює максимально доступну <strong>Ширину</strong>, розмір завантаженого зображення в іншому випадку буде використовуватись зі слайдами. <br >Введіть 0, якщо Ви не хочете створювати ескізи.");
define('_MI_MAX_IMG_HEIGHT', "Максимальна висота зображення");	 
define('_MI_MAX_IMG_HEIGHT_DESC', "Встановлює максимально допустиму висоту завантаженого зображення.");
define('_MI_MAX_IMAGE_WIDTH', "Максимальна ширина зображення для створення мініатюри");
define('_MI_MAX_IMAGE_WIDTH_DESC', "Встановлює максимальну ширину завантаженого зображення, щоб створити ескіз. <br >Зображення з шириною більше, ніж значення, не використовувати.");
define('_MI_MAX_IMAGE_HEIGHT', "Максимальна висота зображення для створення мініатюри");
define('_MI_MAX_IMAGE_HEIGHT_DESC', "Встановлює максимальну висоту завантаженого зображення, щоб створити ескіз. <br >Зображення з висотою більше, ніж значення, не використовувати.");
define('_MI_SHOW_DIS', "Показати відмову від відповідальності на");
define('_MI_DISCLAIMER', "Відмова");
define('_MI_DISCLAIMER_DESC', "Введіть текст Вашої відмови від відповідальності, яка буде показана на вище обраних опціях.");
define('_MI_DISCLAIMER_TEXT', "Форум містить багато повідомлень з великою кількістю корисної інформації. <br /><br />Для того, щоб зберегти число подвійних посад до мінімуму, ми б хотіли попросити Вас скористатись пошуком форуму, перш нід відправляти свої питання тут.");
define('_MI_NONE', "Жоден");
define('_MI_POST', "Опублікувати");
define('_MI_REPLY', "Відповісти");
define('_MI_OP_BOTH', "Обидва");
define('_MI_WOL_ENABLE', "Включити тих, хто зараз на форумі");
define('_MI_WOL_ENABLE_DESC', "Включити тих, хто зараз на форумі у блоці, показаному нижче контрольного аркуша і на сторінках форуму");
define('_MI_NULL', "виключити");
define('_MI_TEXT', "текст");
define('_MI_GRAPHIC', "графічний");
define('_MI_USERLEVEL', "HP/MP/EXP Рівень режиму");
define('_MI_USERLEVEL_DESC', "<strong>HP</strong>  визначається Вашою середньою кількістю повідомлень на день.<br /><strong>MP</strong>  визначається Вашою датою вступу із зв'язку з повідомленнями.<br /><strong>EXP</strong> йде в гору кожен раз, коли Ви розміщуєте і отримуєте 100%, Ваш рівень посилюється і EXP падає до 0 знову.");
define('_MI_RSS_ENABLE', "Включити RSS потік");
define('_MI_RSS_ENABLE_DESC', "Включити RSS потік, параметри редагування нижче для максимальних елементів і елементів опису довжини");
define('_MI_RSS_MAX_ITEMS', "RSS Макс. елментів");
define('_MI_RSS_MAX_DESCRIPTION', "RSS Макс. довжина опису");
define('_MI_RSS_UTF8', "RSS кодування з UTF-8");
define('_MI_RSS_UTF8_DESCRIPTION', "'UTF-8' застосовується у випадку неможливості включення в іншому випадку '"._CHARSET."' буде використаний.");
define('_MI_RSS_CACHETIME', "RSS час кеш-подачі");
define('_MI_RSS_CACHETIME_DESCRIPTION', "Час кешу для повторно генеруючого RSS потоку, у хвилинах.");
define('_MI_MEDIA_ENABLE', "Включення медіа особливості");
define('_MI_MEDIA_ENABLE_DESC', "Показати зображення прямо в публікації.");
define('_MI_USERBAR_ENABLE', "Включити Userbar");
define('_MI_USERBAR_ENABLE_DESC', "Відображення розширення Userbar: Профіль, PM, ICQ, MSN, і т.д...");
define('_MI_GROUPBAR_ENABLE', "Включити Group bar");
define('_MI_GROUPBAR_ENABLE_DESC', "Відображення груп користувача в інформаційному полі повідомлень.");
define('_MI_RATING_ENABLE', "Включення функції рейтингу");
define('_MI_RATING_ENABLE_DESC', "Дозволити тему рейтингу");
define('_MI_VIEWMODE', "Режим перегляду різьблення");
define('_MI_VIEWMODE_DESC', "Щоб змінити загальні параметри viewmode within в межах потоку, встановіть Жоден , для того щоб переключити функцію виключення");
define('_MI_COMPACT', "Компактний");
define('_MI_MENUMODE', "Режим меню за замовчуванням");
define('_MI_MENUMODE_DESC', "'ОБРАТИ' - обрати опцію,'ВАГАТИСЯ' - може уповільнити IE,'CLICK' - вимагає JAVASCRIPT");
define('_MI_REPORTMOD_ENABLE', "Повідомити повідомлення");
define('_MI_REPORTMOD_ENABLE_DESC', "Користувач може поскаржитись на повідомлення Модератору(ам), з будь-якої причини, яка дозволяє Модератору(ам) вжити заходів");
define('_MI_SHOW_JUMPBOX', "Показати Jumpbox");
define('_MI_JUMPBOXDESC', "Якщо параметр включений, меню, що розкриває дозвіл користувачам перейти на інший форум з форуму або теми");
define('_MI_SHOW_PERMISSIONTABLE', "Показати таблицю дозволів");
define('_MI_SHOW_PERMISSIONTABLE_DESC', "Встановлення ТАК відобразить право користувача");
define('_MI_EMAIL_DIGEST', "Надіслати повідомлення дайджест");
define('_MI_EMAIL_DIGEST_DESC', "Встановити період часу для відправки повідомлення дайджесту для користувачів");
define('_MI_NEWBB_EMAIL_NONE', "Немає електронної пошти");
define('_MI_NEWBB_EMAIL_DAILY', "Щодня");
define('_MI_NEWBB_EMAIL_WEEKLY', "Щонеділі");
define('_MI_SHOW_IP', "Показати IP користувача");
define('_MI_SHOW_IP_DESC', "Встановленя ТАК покаже IP користувачів модераторам");
define('_MI_ENABLE_KARMA', "Включити вимоги карми");
define('_MI_ENABLE_KARMA_DESC', "Це дозволяє користувачу встновити вимоги карми для інших користувачів, читаючи його/її пост");
define('_MI_KARMA_OPTIONS', "Карма-параметри для публікації");
define('_MI_KARMA_OPTIONS_DESC', "Використовуйте ',' ,як роздільник для мульти-опцій.");
// irmtfan rewise since
define('_MI_SINCE_OPTIONS', "'З' варіантів  створення в полі вибору 'viewform.php', 'list.topic.php'and 'search.php'");
define('_MI_SINCE_OPTIONS_DESC', "Позитивне значення протягом декількох днів і негативне значення протягом декількох годин. Використовуйте ',' як роздільник для мульти-опцій. (0=з початку) (365=з останнього року)");
define('_MI_SINCE_DEFAULT', "'З' значення за замовчуванням у вікні вибору");
define('_MI_SINCE_DEFAULT_DESC', "Значення за замовчуванням в полі вибору, якщо не вказано користувачами. Позитивне значення протягом декількох днів і негативне значення протягом декількох годин. (0=з початку) (365=з останнього року)");
define('_MI_MODERATOR_HTML', "Дозволити HTML теги модераторам");
define('_MI_MODERATOR_HTML_DESC', "Ця опція дозволяє лише модераторам використовувати HTML в публікації");
define('_MI_USER_ANONYMOUS', "Дозволити зареєстрованим користувачам публікувати повідомлення анонімно");
define('_MI_USER_ANONYMOUS_DESC', "Це дозволяє користувачеві увійти в систему, але залишитись анонімом");
define('_MI_ANONYMOUS_PRE', "Префікс для анонімного користувача");
define('_MI_ANONYMOUS_PRE_DESC', "Це додасть префікс для анонімних користувачів при відправці повідомлень");
define('_MI_REQUIRE_REPLY', "Дозволити вимагати відповіді на прочитану публікацію");
define('_MI_REQUIRE_REPLY_DESC', "Ця функція змушує читачів відповісти на оригінальні плакати, перш ніж модливо бути прочитати оригінал");
define('_MI_EDIT_TIMELIMIT', "Ліміт часу для редагування публікацій");
define('_MI_EDIT_TIMELIMIT_DESC', "Встановити ліміт часу для користувача на редагування іх власних постів. В хвилинах, 0 для необмеження");
define('_MI_DELETE_TIMELIMIT', "Ліміт часу для видалення публікацій");
define('_MI_DELETE_TIMELIMIT_DESC', "Встановити ліміт часу для користувача на видалення іх власних постів. В хвилинах, 0 для необмеження");
define('_MI_POST_TIMELIMIT', "Обмеження за часом для послідовного роміщення");
define('_MI_POST_TIMELIMIT_DESC', "Встановити ліміт часу для послідовного розміщення. В секундах, 0 для необмеження");
define('_MI_RECORDEDIT_TIMELIMIT', "Обмеження часу для запису редагування інформації");
define('_MI_RECORDEDIT_TIMELIMIT_DESC', "Встановити ліміт часу для відмови від запису інформації редагування. В хвилинах, 0 для необмеження");
define('_MI_SHOW_REALNAME', "Показати дійсне ім'я");
define('_MI_SHOW_REALNAME_DESC', "Замінити ім' користувача на дійсне ім'я.");
define('_MI_CACHE_ENABLE', "Включити кеш");
define('_MI_CACHE_ENABLE_DESC', "Зберігати деякі проміжні результати в сесії для збереження запитів");
define('_MI_QUICKREPLY_ENABLE', "Включити швидку відповідь");
define('_MI_QUICKREPLY_ENABLE_DESC', "Це дасть можливість швидкої відповіді");
define('_MI_POSTSPERPAGE', "Публікацій на сторінці");
define('_MI_POSTSPERPAGE_DESC', "Максимальна кількість публікацій, які будуть відображатись на сторінці");
define('_MI_POSTSFORTHREAD', "Максимальна кількість повідомлень для режиму перегляду різьблення");
define('_MI_POSTSFORTHREAD_DESC', "Плоский режим застосовується у випадку неможливості порахувати повідомлення");
define('_MI_TOPICSPERPAGE', "Теми на сторінці");
define('_MI_TOPICSPERPAGE_DESC', "Максимальна кількість тем, які будуть відображатись на сторінці");
define('_MI_IMG_TYPE', "Тип зображення");
define('_MI_IMG_TYPE_DESC', "Виберіть тип зображення кнопок на форумі.<br />- png: для високої швидкості серверу<br />- gif: для нормальної швидкості<br />- auto: gif для IE та png для інших браузерів");
define('_MI_PNGFORIE_ENABLE', "Включити PNG хак");
define('_MI_PNGFORIE_ENABLE_DESC', "Рубати, щоб дозволити PNG атрибут прозорості з IE");
define('_MI_FORM_OPTIONS', "Варіанти форм");
define('_MI_FORM_OPTIONS_DESC', "Варіанти форм, які користувачі можуть обирати при відправленні/редагуванні/відповіді.");
define('_MI_FORM_COMPACT', "Компактний");
define('_MI_FORM_DHTML', "DHTML");
define('_MI_MAGICK', "ImageMagick");
define('_MI_NETPBM', "Netpbm");
define('_MI_GD1', "GD1 Бібліотека");
define('_MI_GD2', "GD2 Бібліотека");
define('_MI_AUTO', "Автоматично");
define('_MI_WELCOMEFORUM', "Форум для привітання нового користувача");
define('_MI_WELCOMEFORUM_DESC', "Повідомлення профілю буде опубліковане, коли користувач відвідає модуль форуму в перший раз");
define('_MI_PERMCHECK_ONDISPLAY', "Перевірити дозвіл");
define('_MI_PERMCHECK_ONDISPLAY_DESC', "Перевірити дозвіл для редагування на сторінці відображення");
define('_MI_USERMODERATE', "Включити стримування користувача");
define('_MI_USERMODERATE_DESC', "Модератор форуму може призупинити діяльність користувача протягом певного періоду часу на форумі");
// RMV-NOTIFY
// Notification event descriptions and mail templates
define('_MI_NEWBB_THREAD_NOTIFY', "Тема");
define('_MI_NEWBB_THREAD_NOTIFYDSC', "Варіанти повідомлень, які відносяться до поточної теми.");
define('_MI_NEWBB_FORUM_NOTIFY', "Форум");
define('_MI_NEWBB_FORUM_NOTIFYDSC', "Варіанти повідомлень, які відносяться до поточного форуму.");
define('_MI_NEWBB_GLOBAL_NOTIFY', "Глобальний");
define('_MI_NEWBB_GLOBAL_NOTIFYDSC', "Глобальний форум параметрів повідомлень.");
define('_MI_NEWBB_THREAD_NEWPOST_NOTIFY', "Нова публікація");
define('_MI_NEWBB_THREAD_NEWPOST_NOTIFYCAP', "Повідомит мені про нові публікації в поточній темі.");
define('_MI_NEWBB_THREAD_NEWPOST_NOTIFYDSC', "Оповістити, коли нове повідомлення буде опубліковано в поточній темі.");
define('_MI_NEWBB_THREAD_NEWPOST_NOTIFYSBJ', "[{X_SITENAME}] {X_MODULE} автоматичне повідмолення : Нова публікація в темі");
define('_MI_NEWBB_FORUM_NEWTHREAD_NOTIFY', "Нова тема");
define('_MI_NEWBB_FORUM_NEWTHREAD_NOTIFYCAP', "Повідомити мене про нові теми на поточному форумі.");
define('_MI_NEWBB_FORUM_NEWTHREAD_NOTIFYDSC', "Оповіщення, коли новий потік запускається на поточному форумі.");
define('_MI_NEWBB_FORUM_NEWTHREAD_NOTIFYSBJ', "[{X_SITENAME}] {X_MODULE} автоматичне повідомлення : Нова тема у форумі");
define('_MI_NEWBB_GLOBAL_NEWFORUM_NOTIFY', "Новий форум");
define('_MI_NEWBB_GLOBAL_NEWFORUM_NOTIFYCAP', "Повідомити мене, коли новий форум буде створено.");
define('_MI_NEWBB_GLOBAL_NEWFORUM_NOTIFYDSC', "Оповістит, коли новий форум буде створено.");
define('_MI_NEWBB_GLOBAL_NEWFORUM_NOTIFYSBJ', "[{X_SITENAME}] {X_MODULE} автоматичне повідомлення : Новий форум");
define('_MI_NEWBB_GLOBAL_NEWPOST_NOTIFY', "Нова публікація");
define('_MI_NEWBB_GLOBAL_NEWPOST_NOTIFYCAP', "Повідомляти мене про будь які нові публікації.");
define('_MI_NEWBB_GLOBAL_NEWPOST_NOTIFYDSC', "Оповістит, коли будь яке нове повідомлення буде опубліковано.");
define('_MI_NEWBB_GLOBAL_NEWPOST_NOTIFYSBJ', "[{X_SITENAME}] {X_MODULE} автоматичне повідомлення : Нова публікація");
define('_MI_NEWBB_FORUM_NEWPOST_NOTIFY', "Нова публікація");
define('_MI_NEWBB_FORUM_NEWPOST_NOTIFYCAP', "Повідомити мене про будь-які нові публікації на поточному форумі.");
define('_MI_NEWBB_FORUM_NEWPOST_NOTIFYDSC', "Оповіщення, коли будь-яке нове повідомлення публікується на поточному форумі.");
define('_MI_NEWBB_FORUM_NEWPOST_NOTIFYSBJ', "[{X_SITENAME}] {X_MODULE} автоматичне повідмолення : Нова публікація на форумі");
define('_MI_NEWBB_GLOBAL_NEWFULLPOST_NOTIFY', "Нова публікація (Повний текст)");
define('_MI_NEWBB_GLOBAL_NEWFULLPOST_NOTIFYCAP', "Повідомити мене про будь-які нові публікації (включаючи повний текст повідомлення).");
define('_MI_NEWBB_GLOBAL_NEWFULLPOST_NOTIFYDSC', "Отримати повний текст повідомлення, коли будь-яке нове повідомлення буде опубліковане.");
define('_MI_NEWBB_GLOBAL_NEWFULLPOST_NOTIFYSBJ', "[{X_SITENAME}] {X_MODULE} автоматичне повідомлення : Нова публікація (повний текст)");
define('_MI_NEWBB_GLOBAL_DIGEST_NOTIFY', "Дайджест");
define('_MI_NEWBB_GLOBAL_DIGEST_NOTIFYCAP', "Повідомити мене про подальший дайджест.");
define('_MI_NEWBB_GLOBAL_DIGEST_NOTIFYDSC', "Отримувати повідомлення дайджесту.");
define('_MI_NEWBB_GLOBAL_DIGEST_NOTIFYSBJ', "[{X_SITENAME}] {X_MODULE} автоматичне повідомлення : повідомлення дайджесту");
// FOR installation
define('_MI_NEWBB_INSTALL_CAT_TITLE', "Категорія для тестування");
define('_MI_NEWBB_INSTALL_CAT_DESC', "Категорія для випробовування.");
define('_MI_NEWBB_INSTALL_FORUM_NAME', "Тестовий форум");
define('_MI_NEWBB_INSTALL_FORUM_DESC', "Форум для тестування.");
define('_MI_NEWBB_INSTALL_POST_SUBJECT', "Вітання! Форум працює.");
define('_MI_NEWBB_INSTALL_POST_TEXT', "
	Ласкаво просимо до ".(htmlspecialchars($GLOBALS["xoopsConfig"]['sitename'], ENT_QUOTES))." форуму.
	Не соромтесь зареєструватись та увійти, щоб почати обговорення.
	
	Якщо у Вас є будь-які питання щодо використання NewBB, будь ласка, відвійте Ваш місцевий сайт підтримки або [url=http://www.simple-xoops.de/forum/]NewBB Модульний сайт[/url].
	");
define('_MI_NEWBB_ADMENU_GROUPMOD', "Помірна група");
define('_MI_SUBJECT_PREFIX', "Додати префікс до теми предмета");
define('_MI_SUBJECT_PREFIX_DESC', "Задає префікс, наприклад, [ВИРІШИТИ] на початку суб'єкта. Для отримання додаткових можливостей, використайте одну ',' як роздільник. ЖОДЕН немає префікса.");
define('_MI_SUBJECT_PREFIX_DEFAULT', '<font color="#00CC00"> [solved] </ font> <font color="#00CC00"> [done] </ font> <font color="#FF0000"> [request] </ font> , <font color="#FF0000"> [bug report] </ font> <font color="#FF0000"> [unsolved] </ font>');
define('_MI_SUBJECT_PREFIX_LEVEL', "Дозволити використання превіксів");
define('_MI_SUBJECT_PREFIX_LEVEL_DESC', "Група(и) обирає(ють) префікси, щоб використовувати це.");
define('_MI_SPL_DISABLE', "інвалід");
define('_MI_SPL_ANYONE', "кожен");
define('_MI_SPL_MEMBER', "Учасники");
define('_MI_SPL_MODERATOR', "Модератори");
define('_MI_SPL_ADMIN', "Адміністратори");
define('_MI_STATISTIK_ENABLE', "включити Статистику");
define('_MI_STATISTIK_ENABLE_DESC', "Статуси будуть показани на Вашому форумі в нижній частині кожного форуму/теми");
//4.05
define('_MI_SHOW_INFOBOX', "Показати Infobox");
define('_MI_SHOW_INFOBOX_DESC', "Infobox містить інформацію про користувача (дата вступу, кількість посад,...)");
define('_MI_NEWBB_INFOBOX_NONE', "Ні");
define('_MI_NEWBB_INFOBOX_HIDDEN', "Так, зруйновано");
define('_MI_NEWBB_INFOBOX_SHOW', "Так, розширено");
define('_MI_SHOW_SOCIALLINKS', "Показати соціальні посилання");
define('_MI_SHOW_SOCIALLINKS_DESC', "Показати кнопки загального доступу на нижній частині кожного посту");
//4.2
define('_MI_PAGENAV_DISPLAY', "відображення навігації");
define('_MI_PAGENAV_DISPLAY_DESC', "Показує номер сторінки в режимі відповідного обладнання");
define('_MI_PAGENAV_ZAHL', "як номери");
define('_MI_PAGENAV_BILD', "у вигляді невеликих зображень");
define('_MI_PAGENAV_SELECT', "у вікні вибору");
define('_MI_ADVERTISING', "Показати рекламу");
define('_MI_ADVERTISING_DESC', "показує комерційну перерву після другої теми");
define('_MI_USERATTACH_ENABLE', "показати вкладення тільки для зареєстрованих користувачів");
define('_MI_USERATTACH_DESC', "показує вкладення в форумі тільки після входу в систему.");
// 4.3
define('_MI_NEWBB_BLOCK_LIST_TOPIC', "Надати список тем");// irmtfan
?>