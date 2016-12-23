<?php
/**
 * ****************************************************************************
 *  - A Project by Developers TEAM For Xoops - ( http://www.xoops.org )
 * ****************************************************************************
 *  XNEWSLETTER - MODULE FOR XOOPS
 *  Copyright (c) 2007 - 2012
 *  Goffy ( wedega.com )
 *
 *  You may not change or alter any portion of this comment or credits
 *  of supporting developers from this source code or any supporting
 *  source code which is considered copyrighted (c) material of the
 *  original comment or credit authors.
 *
 *  This program is distributed in the hope that it will be useful,
 *  but WITHOUT ANY WARRANTY; without even the implied warranty of
 *  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 *  GNU General Public License for more details.
 *  ---------------------------------------------------------------------------
 *  @copyright  Goffy ( wedega.com )
 *  @license    GPL 2.0
 *  @package    xnewsletter
 *  @author     Goffy ( webmaster@wedega.com )
 *
 *  Version : 1 Mon 2012/11/05 14:31:32 :  Exp $
 * ****************************************************************************
 */
// Admin
define('_MI_XNEWSLETTER_NAME',"xNewsletter");
define('_MI_XNEWSLETTER_DESC',"Newsletter модуль для Xoops");
//Menu
define('_MI_XNEWSLETTER_ADMENU1',"Панель приладів");
define('_MI_XNEWSLETTER_ADMENU2',"Акаунти");
define('_MI_XNEWSLETTER_ADMENU3',"Категорії");
define('_MI_XNEWSLETTER_ADMENU4',"Абоненти");
define('_MI_XNEWSLETTER_ADMENU5',"Категорії-підкатегорії");
define('_MI_XNEWSLETTER_ADMENU6',"Бюлетні");
define('_MI_XNEWSLETTER_ADMENU7',"Прикріплення");
define('_MI_XNEWSLETTER_ADMENU8',"Протоколи");
define('_MI_XNEWSLETTER_ADMENU9',"Список розсилки");
define('_MI_XNEWSLETTER_ADMENU10',"Bounced електронна пошта");
define('_MI_XNEWSLETTER_ADMENU11',"Технічне обслуговування");
define('_MI_XNEWSLETTER_ADMENU12',"Імпорт");
define('_MI_XNEWSLETTER_ADMENU13',"Список завдань");
define('_MI_XNEWSLETTER_ADMENU99',"Про");
define('_MI_XNEWSLETTER_SUBSCRIBE',"(Від)підписка");
define('_MI_XNEWSLETTER_LIST',"Список бюлетней");
define('_MI_XNEWSLETTER_LIST_SUBSCR',"Список абонентів");
define('_MI_XNEWSLETTER_CREATE',"Створити бюлетень");
//Blocks
define('_MI_XNEWSLETTER_CATSUBSCR_BLOCK_RECENT',"Поточні реєстрації");
define('_MI_XNEWSLETTER_CATSUBSCR_BLOCK_DAY',"Сьогоднішні реєстрації");
define('_MI_XNEWSLETTER_LETTER_BLOCK_RECENT',"Поточні бюлетні");
define('_MI_XNEWSLETTER_LETTER_BLOCK_DAY',"Сьогоднішні бюлетні");
define('_MI_XNEWSLETTER_LETTER_BLOCK_RANDOM',"Випадкові розсилки");
//Config
define('_MI_XNEWSLETTER_EDITOR',"Редактор");
define('_MI_XNEWSLETTER_KEYWORDS',"Ключові слова");
define('_MI_XNEWSLETTER_KEYWORDS_DESC',"Вставте тут ключові слова (через кому)");
define('_MI_XNEWSLETTER_ADMINPERPAGE',"Кількість записів у списку на сторінках адміністрування");
define('_MI_XNEWSLETTER_ADMINPERPAGE_DESC',"Вказує, скільки елементів ви хочете відобразити на сторінці в списку.");
define('_MI_XNEWSLETTER_ADVERTISE',"Код реклами");
define('_MI_XNEWSLETTER_ADVERTISE_DESC',"Вставте сюди код реклами");
define('_MI_XNEWSLETTER_SOCIALACTIVE',"Перегляд соціальних мереж?");
define('_MI_XNEWSLETTER_SOCIALACTIVE_DESC',"Якщо ви хочете побачити кнопки соціальних мереж, натисніть на Так");
define('_MI_XNEWSLETTER_SOCIALCODE',"Код соціальних мереж");
define('_MI_XNEWSLETTER_SOCIALCODE_DESC',"Вставте сюди код соціальних мереж");
define('_MI_XNEWSLETTER_ATTACHMENT_MAXSIZE',"Максимальний розмір файлу");
define('_MI_XNEWSLETTER_ATTACHMENT_MAXSIZE_DESC',"Максимальний розмір файлу для вкладень");
define('_MI_XNEWSLETTER_ATTACHMENT_MIMETYPES',"Mime-types");
define('_MI_XNEWSLETTER_ATTACHMENT_MIMETYPES_DESC',"Допустимі MIME-типи для прикріпленняs");
define('_MI_XNEWSLETTER_ATTACHMENT_PATH',"Завантажити доріжку");
define('_MI_XNEWSLETTER_ATTACHMENT_PATH_DESC',"Визначити шлях, де будуть збережені завантажені вкладення ( папки після {XOOPS_ROOT_PATH}/uploads ), <b>з косою рисою на початку</b> та <b>з лідируючим слешом</b>.");
define('_MI_XNEWSLETTER_USE_MAILINGLIST',"Використовуйте функцію додаткови списків розсилки");
define('_MI_XNEWSLETTER_USE_MAILINGLIST_DESC',"Якщо у вас є існуючі списки розсилки, ви можете синхронізувати і дереєструвати бюлетень зі списком розсилки. <b>xNewsletter не може створити список розсилки </b>. Якщо ви включите цю функцію, ви отримаєте додаткову вкладку на сторінці адміністрування xNewsletter.");
define('_MI_XNEWSLETTER_GROUPS_WITHOUT_ACTKEY',"Групи (від) підписки без підтвердження по електронній пошті");
define('_MI_XNEWSLETTER_GROUPS_WITHOUT_ACTKEY_DESC',"Визначте групи, які можуть зробити (від) підписку на інформаційний бюлетень безпосередньо, без відправки назад підтвердження по електронній пошті");
define('_MI_XNEWSLETTER_GROUPS_CHANGE_OTHER',"Групи з дозволом змінювати підписку інших осіб");
define('_MI_XNEWSLETTER_GROUPS_CHANGE_OTHER_DESC',"Визначте групи, які можуть змінити підписку інших осіб. Видалення реєстрації не представляється можливим. Цим групам повинен також дозвіл для перегляду списку абонентів категорії розсилку. Рекомендується, дати цій групі також дозвіл на створення інформаційних бюлетенів.");
define('_MI_XNEWSLETTER_USE_SALUTATION',"Використовуйте поле привітанням");
define('_MI_XNEWSLETTER_USE_SALUTATION_DESC',"Будь ласка, вирішите, чи хочете ви використовувати вітання як 'Mr.', 'Mrs.',...");
define('_MI_XNEWSLETTER_SEND_IN_PACKAGES',"адіслати електронні листи в пакетах");
define('_MI_XNEWSLETTER_SEND_IN_PACKAGES_DESC',"Кількість повідомлень електронної пошти, які повинні бути відправлені в одному пакеті. 0 означає, що всі електронні листи завжди будуть відправлені негайно. Ви можете використовувати цю опцію тільки, якщо ви можете почати cronjobs з зовнішніми програмами.");
define('_MI_XNEWSLETTER_SEND_IN_PACKAGES_TIME',"Період часу для відправки повідомлень електронної пошти в пакетах");
define('_MI_XNEWSLETTER_SEND_IN_PACKAGES_TIME_DESC',"Період часу, протягом декількох хвилин, коли наступний пакет повинен бути посланий. Використовується тільки, якщо Електронна пошта в пакетах 'більше, ніж 0.");
define('_MI_XNEWSLETTER_UPGRADEFAILED',"Помилка при оновленні модуля");
// version 1.2
define('_MI_XNEWSLETTER_SUBSCRINFO_BLOCK',"інформаційний бюлетень");
define('_MI_XNEWSLETTER_SUBSCRINFO_TEXT_BLOCK',"Якщо ви хочете отримувати інформацію вчасно, то підпишіться на нашу розсилку");
// version 1.3
define('_MI_XNEWSLETTER_WELCOME_MESSAGE',"Привітання");
define('_MI_XNEWSLETTER_WELCOME_MESSAGE_DESC',"Html формат");
define('_MI_XNEWSLETTER_WELCOME',"<h2>Ласкаво просимо в нашу систему розсилки</h2>Ми сподіваємося, що ми можемо тримати вас в курсі наших інформаційних бюлетенів. Не соромтеся підписатися на один або кілька наших інформаційних бюлетенів. Якщо ви не хочете більше підписки, ви можете легко відмовитися від підписки тут. Ви також можете відмовитися від підписки в простий спосіб за допомогою посилання в кожній з наших розсилок.");
define('_MI_XNEWSLETTER_DATEFORMAT', "Шаблон");
define('_MI_XNEWSLETTER_DATEFORMATDSC', "За замовчуванням шаблон для модуля переднього кінця. <br />Більше інформації тут: <a href='http://www.php.net/manual/en/function.date.php'>http://www.php.net/manual/en/function.date.php</a>");
//
define('_MI_XNEWSLETTER_ADMENU_TEMPLATES',"Шаблони");
define('_MI_XNEWSLETTER_EDITOR_DESC',"");
define('_MI_XNEWSLETTER_TEMPLATE_EDITOR',"Редактор шаблонів");
define('_MI_XNEWSLETTER_TEMPLATE_EDITOR_DESC',"");
