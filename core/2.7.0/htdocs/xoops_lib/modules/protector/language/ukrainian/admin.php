<?php
// mymenu
define('_MD_A_MYMENU_MYTPLSADMIN','');
define('_MD_A_MYMENU_MYBLOCKSADMIN','Дозволи');
define('_MD_A_MYMENU_MYPREFERENCES','Налаштування');
// index.php
define('_AM_TH_DATETIME', 'Час');
define('_AM_TH_USER', 'Користувач');
define('_AM_TH_IP', 'IP');
define('_AM_TH_АГЕНТ', 'AGENT');
define('_AM_TH_TYPE', 'Тип');
define('_AM_TH_DESCRIPTION', 'Опис');
define('_AM_TH_BADIPS','Bad IPs<br /><br /><span style="font-weight:normal;">Write each IP a line<br />blank means all IPs are allowed</span>');
define('_AM_TH_GROUP1IPS','Allowed IPs for Group=1<br /><br /><span style="font-weight:normal;">Write each IP a line.<br />192.168. means 192.168.*<br />blank means all IPs are allowed</span>');
define('_AM_LABEL_COMPACTLOG', 'Компактний журнал');
define('_AM_BUTTON_COMPACTLOG', 'Стиснути!');
define('_AM_JS_COMPACTLOGCONFIRM', 'Дубльовані записи (IP,Тип) буде видалено');
define('_AM_LABEL_REMOVEALL', 'Видалити всі записи');
define('_AM_BUTTON_REMOVEALL', 'Видалити все!');
define('_AM_JS_REMOVEALLCONFIRM', 'Всі журнали видалені абсолютно. ти справді добре?');
define('_AM_LABEL_REMOVE', 'Видаліть перевірені записи:');
define('_AM_BUTTON_REMOVE', 'Видалити!');
define('_AM_JS_REMOVECONFIRM', 'Видалити OK?');
define('_AM_MSG_IPFILESUPDATED', 'Файли для IP оновлено');
define('_AM_MSG_BADIPSCANTOPEN', 'Неможливо відкрити файл для поганого IP');
define('_AM_MSG_GROUP1IPSCANTOPEN', 'Неможливо відкрити файл для дозволу group=1');
define('_AM_MSG_REMOVED', 'Записи видалено');
define('_AM_MSG_DELFAILED', 'Не вдалося видалити записи');
define('_AM_FMT_CONFIGSNOTWRITABLE', 'Зробити доступним для запису каталог конфігурацій: %s');
// prefix_manager.php
define('_AM_H3_PREFIXMAN', 'Менеджер префіксів');
define('_AM_MSG_DBUPDATED', 'Базу даних успішно оновлено!');
define('_AM_CONFIRM_DELETE', 'Усі дані буде видалено. добре?');
define('_AM_TXT_HOWTOCHANGEDB',"Якщо ви хочете змінити префікс,<br> відредагуйте %s/data/secure.php вручну.<br><br>define('XOOPS_DB_PREFIX', '<b>%s</b>');");
// advisory.php
define('_AM_ADV_NOTSECURE', 'Небезпечно');
define('_AM_ADV_TRUSTPATHPUBLIC', 'Якщо ви бачите зображення -NG- або посилання повертає нормальну сторінку, ваш XOOPS_TRUST_PATH розміщено неправильно. Найкраще місце для XOOPS_TRUST_PATH знаходиться за межами DocumentRoot. Якщо ви не можете цього зробити, вам потрібно розмістити .htaccess (DENY FROM ALL) просто під XOOPS_TRUST_PATH як другий найкращий спосіб.');
define('_AM_ADV_TRUSTPATHPUBLICLINK', 'Check that PHP files inside TRUST_PATH are set to read-only (it must be 404,403 or 500 error)');
define('_AM_ADV_REGISTERGLOBALS',"Якщо \"УВІМКНЕНО\", цей параметр заохочує різноманітні ін'єкційні атаки. Якщо ви можете, вимкніть «register_globals» у php.ini або, якщо це неможливо, створіть або відредагуйте .htaccess у своєму каталозі XOOPS:");
define('_AM_ADV_ALLOWURLFOPEN',"If 'ON', this setting allows attackers to execute arbitrary scripts on remote servers.<br />Only administrator can change this option.<br />If you are an admin, edit php.ini or httpd.conf.<br /><b>Sample of httpd.conf:<br /> &nbsp; php_admin_flag &nbsp; allow_url_fopen &nbsp; off</b><br />Else, claim it to your administrators.");
define('_AM_ADV_USETRANSSID',"If 'ON', your Session ID will be displayed in anchor tags etc.<br />To prevent session hi-jacking, add a line into .htaccess in XOOPS_ROOT_PATH.<br /><b>php_flag session.use_trans_sid off</b>");
define('_AM_ADV_DBPREFIX',"This setting invites 'SQL Injections'.<br />Don't forget turning 'Force sanitizing *' ON in this module's preferences.");
define('_AM_ADV_LINK_TO_PREFIXMAN', 'Перейти до менеджера префіксів');
define('_AM_ADV_MAINUNPATCHED', 'Ви повинні відредагувати свій mainfile.php так, як написано в README.');
define('_AM_ADV_DBFACTORYPATCHED', 'Ваша фабрика баз даних готова до DBLayer Trapping anti-SQL-Injection');
define('_AM_ADV_DBFACTORYUNPATCHED', 'Ваша фабрика баз даних не готова до DBLayer Trapping anti-SQL-Injection. Потрібні деякі патчі.');
define('_AM_ADV_SUBTITLECHECK', 'Перевірте, чи добре працює Protector');
define('_AM_ADV_CHECKCONTAMI', 'Забруднення');
define('_AM_ADV_CHECKISOCOM', 'Ізольовані коментарі');
//XOOPS 2.5.4
define('_AM_ADV_REGISTERGLOBALS2', 'і помістіть у нього рядок нижче:');
//XOOPS 2.5.8
define('_AM_PROTECTOR_PREFIX', 'Префікс');
define('_AM_PROTECTOR_TABLES', 'Таблиці');
define('_AM_PROTECTOR_UPDATED', 'Оновлено');
define('_AM_PROTECTOR_COPY', 'Копіювати');
define('_AM_PROTECTOR_ACTIONS', 'Дії');
// XOOPS 2.5.10 v Protector 3.60
define('_AM_LABEL_BAN_BY_IP', 'Заборонити IP-адреси перевірених записів:');
define('_AM_BUTTON_BAN_BY_IP', 'IP Бан!');
define('_AM_JS_BANCONFIRM', 'IP Забанити?');
define('_AM_MSG_BANNEDIP', 'IP-адреси заблоковані');
define('_AM_ADMINSTATS_TITLE', 'Підсумок журналу Protector');
// XOOPS 2.5.11
define('_AM_ADMINSTATS_LAST_MONTH', 'Минулий місяць');
define('_AM_ADMINSTATS_LAST_WEEK', 'Минулий тиждень');
define('_AM_ADMINSTATS_LAST_DAY', 'Вчора');
define('_AM_ADMINSTATS_LAST_HOUR', 'Остання година');
