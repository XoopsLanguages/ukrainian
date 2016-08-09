<?php
// Module Info
// The name of this module
define('_MI_CONTACT_NAME', "Зв'язатися з нами");
define('_MI_CONTACT_DESC', "Контактний модуль зі сховищем пошти та бази даних");
// Admin menu
define('_MI_CONTACT_MENU_HOME', "Додому");
define('_MI_CONTACT_MENU_HOME_DESC', "Повернутися на головну сторінку");
define('_MI_CONTACT_MENU_CONTACT', "Повідомлення");
define('_MI_CONTACT_MENU_CONTACT_DESC', "Список повідомлень");
define('_MI_CONTACT_MENU_TOOLS', "Очищення");
define('_MI_CONTACT_MENU_TOOLS_DESC', "Інструменти для очищення");
define('_MI_CONTACT_MENU_LOGS', "Реєстрація");
define('_MI_CONTACT_MENU_LOGS_DESC', "Отримати реєстрацію");
define('_MI_CONTACT_MENU_ABOUT', "Про нас");
define('_MI_CONTACT_MENU_ABOUT_DESC', "Про цей модуль");
define('_MI_CONTACT_MENU_HELP', "Допомога");
define('_MI_CONTACT_MENU_HELP_DESC', "Модульна допомога");
// Module Settings
define('_MI_CONTACT_FORM_URL', "Отримати URL");
define('_MI_CONTACT_FORM_URL_DESC', "");
define('_MI_CONTACT_FORM_ICQ', "Отримати ICQ");
define('_MI_CONTACT_FORM_ICQ_DESC', "");
define('_MI_CONTACT_FORM_COMPANY', "Отримати компанію");
define('_MI_CONTACT_FORM_COMPANY_DESC', "");
define('_MI_CONTACT_FORM_LOCATION', "Отримати розташування");
define('_MI_CONTACT_FORM_LOCATION_DESC', "");
define('_MI_CONTACT_FORM_PHONE', "Отримати номер телефону");
define('_MI_CONTACT_FORM_PHONE_DESC', "");
define('_MI_CONTACT_FORM_ADDRESS', "Отримати адресу");
define('_MI_CONTACT_FORM_ADDRESS_DESC', "");
define('_MI_CONTACT_FORM_DEPT', "Показати обрані рубрики");
define('_MI_CONTACT_FORM_DEPT_DESC', "");
define('_MI_CONTACT_DEPT', "Рубрики/Отримувачі");
define('_MI_CONTACT_DEPT_DESC', "Рубрики дозволяють вам визначати кобмінації рубрика/пошта.<br />"
    . "Користувачі, обрані з визначеної рубрики, будуть мати контактну інформацію відіслану на відповідну електрону адресу, визначену вами.<br /><br />"
    . "Визначити кожну рубрику/пошту як наступні:<br /><br />"
    . "dept1,email1|dept2,email2|dept3,email3 і так далі - кожна рубрика та пошта повинні бути відокремлені<br />"
    . "через кому ',', і кожна комбінація рубрика пошта повина бути відокремлена вертикальною рисою '|'<br /><br />"
    . "Якщо рубрика/отримувач не визначені, лист буде віправлено на стандартну електрону адресу.");
define('_MI_CONTACT_PERPAGE', "Повідомлення по сторінково");
define('_MI_CONTACT_PERPAGE_DESC', "");
define('_MI_CONTACT_TOPINFO', "Головна форма зворотнього зв'язку");
define('_MI_CONTACT_TOPINFO_DESC', "Встановити HTML коди, щоб показувати їх на контактній сторінці");
define('_MI_CONTACT_HEAD_OPTIONS', "Опції форми");
define('_MI_CONTACT_HEAD_ADMIN', "Адмін налаштування");
define('_MI_CONTACT_HEAD_INFO', "Інформація");
//1.81
define('_MI_CONTACT_MAP', "Вбудувати google maps");
define('_MI_CONTACT_MAP_DESC', "Вбудувати google maps iframe <br> змінити ширину iframe до '100%'");
//2.1
define('_MI_CONTACT_FORM_SKYPE', "Отримати Skype");
define('_MI_CONTACT_FORM_SKYPE_DESC', "");

define('_MI_CONTACT_SUBJECT_PREFIX', "Додати Рубрику на початку?");
define('_MI_CONTACT_SUBJECT_PREFIX_DESC', "Якщо так, то назва Рубрики буде використана на початку теми листа");
define('_MI_CONTACT_PREFIX_TEXT', "Додатковий початок теми листа");
define('_MI_CONTACT_PREFIX_TEXT_DESC', "Цей текст буде включен перед рубрикою на початку теми листа");
define('_MI_CONTACT_PREFIX_TEXT_DEFAULT', "Контакт");
//2.21
define('_MI_CONTACT_HEAD_CAPTCHA', "Опції для Captcha");
define('_MI_CONTACT_FORM_RECAPTCHA_USE', "Використовувати Google reCaptcha?");
define('_MI_CONTACT_FORM_RECAPTCHA_USE_DESC', "Обрати  <em>Так</em> щоб використовувати Google reCaptcha у формі подання.  <br />За умовчанням: <em>Ні</em>");
define('_MI_CONTACT_FORM_RECAPTCHA_KEY', "Ваш reCaptcha ключ веб-сайту");
define('_MI_CONTACT_FORM_RECAPTCHA_KEY_DESC', "Більше про Google reCaptcha https://www.google.com/recaptcha <br>, а також у 'допомога'.");
define('_MI_CONTACT_HEAD_DEPT', "Опції для використання рубрики/отримувачі");
define('_MI_CONTACT_HEAD_MISC', "Різні опції");
define('_MI_CONTACT_MAIL_CONFIRM', "Відправити лист-підтвердження?");
define('_MI_CONTACT_MAIL_CONFIRM_DESC', "Якщо так, то короткий лист-підтвердження з базовою інформацією буде відправлено на надану електрону адресу. ");
define('_MI_CONTACT_RECIPIENT_STD', "Стандартний отримувач");
define('_MI_CONTACT_RECIPIENT_STD_DESC', "Кожен запит буде відправлено на цю електрону адресу");

//2.23
define('_MI_B_CONTACT_FORM', "Форма зворотнього зв'язку");
define('_MI_B_CONTACT_FORM_DESC', "Форма зворонього зв'язку як блок");
define('_MI_B_CONTACT_MAP', "Розташування");
define('_MI_B_CONTACT_MAP_DESC', "Показати обране розташування на Google Maps як блок");
define('_MI_B_CONTACT_FORM_MAP', "Форма зворотнього зв'язку та розташування");
define('_MI_B_CONTACT_FORM_MAP_DESC', "Показати форму зворотнього зв'язку разом з обраним розташуванням на Google Maps як блок");

define('_MI_CONTACT_DEFAULT', "Контакна інформація за умовчанням");
define('_MI_CONTACT_DEFAULT_DESC', "Тут ви можете визначити додаткову інформацію, яка повинна відображатися поруч із формою зворотнього зв'язку (наприклад, ім'я,адреса, номер телефону,...)");
