<?php
// The name of this module
define("_MI_XFORMS_NAME", "xForms");

// A brief description of this module
define("_MI_XFORMS_DESC", "Генератор контактних форм");

// admin/menu.php
define("_MI_XFORMS_ADMENU0", "Додому");
define("_MI_XFORMS_ADMENU1", "Управління формами");
define("_MI_XFORMS_ADMENU2", "Створити нову форму");
define("_MI_XFORMS_ADMENU3", "Створення елементів форми");
define("_MI_XFORMS_ADMENU4", "Форма звіту");
define("_MI_XFORMS_ADMENU5", "Про");

//	template descriptions
define("_MI_XFORMS_TMPL_FORM_DESC", "Шаблон для форм");
define("_MI_XFORMS_TMPL_ERROR_DESC", "Сторінка для відображення, коли виникає помилка");

//	preferences
define("_MI_XFORMS_TEXT_WIDTH", "Ширина текстових полів за замовчуванням");
define("_MI_XFORMS_TEXT_MAX", "Максимальна довжина полів за замовчуванням");
define("_MI_XFORMS_TAREA_ROWS", "Рядки текстових областей за замовчуванням");
define("_MI_XFORMS_TAREA_COLS", "Стовпці текстових областей за замовчуванням");
define("_MI_XFORMS_MAIL_CHARSET", "Текст кодування для надсилання електронних листів");
define("_MI_XFORMS_TMPL_MAIN_DESC", "Головна сторінка xForms");
define("_MI_XFORMS_MOREINFO", "Надіслати додаткову інформацію поряд з представленими даними");
define("_MI_XFORMS_MOREINFO_USER", "Ім'я користувача та інформаційна сторінка користувача");
define("_MI_XFORMS_MOREINFO_IP", "IP адреса представника");
define("_MI_XFORMS_MOREINFO_AGENT", "Агент користувача представника (інфо-браузер)");
define("_MI_XFORMS_MOREINFO_FORM", "URL адреса представленої форми");
define("_MI_XFORMS_PREFIX", "Префікс тексту для обов'язкових полів");
define("_MI_XFORMS_SUFFIX", "Суфікс тексту для обов'язкових полів");
define("_MI_XFORMS_INTRO", "Введення тексту на головній сторінці");
define("_MI_XFORMS_GLOBAL", "Текст буде відображений в кожній формі сторінки");
define("_MI_XFORMS_DEFAULT_TITLE", "Назва заголовка сторінки за замовчуванням");

// preferences default values
define("_MI_XFORMS_MAIL_CHARSET_DESC", "Залиште порожнім для " . _CHARSET);
define("_MI_XFORMS_INTRO_DEFAULT", "Не соромтесь зв'язатись з нами наступними способами:");
define("_MI_XFORMS_GLOBAL_DEFAULT", "[b]* Required[/b]");
define("_MI_XFORMS_UPLOADDIR", "Фізичний шлях для збереження завантаженних файлів без пробілів");
define("_MI_XFORMS_UPLOADDIR_DESC", "Всі файли завантаження будуть зберігатися тут, коли форма відправляється через приватне повідомлення");
define("_MI_XFORMS_CAPTCHA", "Використовувати капчу в представленій формі?");
define("_MI_XFORMS_CAPTCHADSC", "Виберіть  <em>Так</em> для використання капчі в представленій формі. <br />За замовчуванням: <em>Так</em>");
define("_MI_XFORMS_NOFORM", "Текст показує, коли немає ніяких видимих форм для поточного користувача");
define("_MI_XFORMS_NOFORM_DEFAULT", "Вибачте, немає форм в даний час (видимих для вас).");
define("_MI_XFORMS_SHOWFORMS", "Форми доступні для домашньої сторінки?");
define("_MI_XFORMS_SHOWFORMS_DESC", "Ідентифікувати коли ви хочете побачити форму доступну користувачу, коли немає ідентифікованного параметру. Якщо ви оберете "Ні" користувач перейде на домашню сторінку сайту, коли немає ідентифікаційного параметру.");
define("_MI_XFORMS_DEFAULT_TITLE_DESC", "Форми сторінки");

define("_MI_xforms_ADMENU0","Додому");
//1.22
define("_MI_XFORMS_ELE_SELECT_CTRY_DEFAULT","Оберіть країну за замовчуванням");
