<?php
/**
 * $Id: blocks.php 11267 2013-03-20 13:16:32Z cesag $
 * Module: Publisher
 * Author: The SmartFactory <www.smartfactory.ca>
 * Licence: GNU
 */
// Blocks
define("_MB_PUBLISHER_ALLCAT","Всі категорії");
define("_MB_PUBLISHER_AUTO_LAST_ITEMS","Автоматично відображати останні пункт(и)?");
define("_MB_PUBLISHER_CATEGORY","Категорія");
define("_MB_PUBLISHER_CHARS","Довжина назви");
define("_MB_PUBLISHER_COMMENTS","Коментар(і)");
define("_MB_PUBLISHER_DATE","Дата публікації");
define("_MB_PUBLISHER_FIRST","Виключити перший");
define("_MB_PUBLISHER_DISP","Відобразити");
define("_MB_PUBLISHER_DISPLAY_COMMENTS","Відображати підрахунок коментарів?");
define("_MB_PUBLISHER_DISPLAY_TYPE","Відобразити тип:");
define("_MB_PUBLISHER_DISPLAY_TYPE_BLOCK","Кожний пункт є блоком");
define("_MB_PUBLISHER_DISPLAY_TYPE_BULLET","Кожний пункт є ядром");
define("_MB_PUBLISHER_DISPLAY_WHO_AND_WHEN","Відображати афішу та дату?");
define("_MB_PUBLISHER_FULLITEM","Читати повну статтю");
define("_MB_PUBLISHER_HITS","Кількість звернень");
define("_MB_PUBLISHER_ITEMS","Статті");
define("_MB_PUBLISHER_LAST_ITEMS_COUNT","якщо 'Так', скільки пунктів відображати?");
define("_MB_PUBLISHER_ORDER","Відображати замовлення");
define("_MB_PUBLISHER_ORDER_SHOW","Показати порядок в блоці");
define("_MB_PUBLISHER_POSTEDBY","Опубліковані");
define("_MB_PUBLISHER_READMORE","Читати більше...");
define("_MB_PUBLISHER_READS","читає");
define("_MB_PUBLISHER_SELECT_ITEMS","якщо 'Ні', оберіть статтю для відображення:");
define("_MB_PUBLISHER_SELECTCAT","Відображати категорію:");
define("_MB_PUBLISHER_VISITITEM","Візит");
define("_MB_PUBLISHER_WEIGHT","Список по ширені");
define("_MB_PUBLISHER_WHO_WHEN","Опубліковано  %s на  %s");
//bd tree block hack
define("_MB_PUBLISHER_LEVELS","рівні");
define("_MB_PUBLISHER_CURRENTCATEGORY","Поточна категорія");
define("_MB_PUBLISHER_ASC","ASC");
define("_MB_PUBLISHER_DESC","DESC");
define("_MB_PUBLISHER_SHOWITEMS","Показати пункти");
//--/bd
define("_MB_PUBLISHER_FILES","файли");
define("_MB_PUBLISHER_DIRECTDOWNLOAD","Пряме посилання на скачування файлу, замість посилання на статтю?");
define("_MB_PUBLISHER_FROM","Оберіть статтю <br />з ");
define("_MB_PUBLISHER_UNTIL","&nbsp;&nbsp;to");
define("_MB_PUBLISHER_DATE_FORMAT","Дата повинна бути в форматі мм/дд/рр");
define("_MB_PUBLISHER_ARTICLES_FROM_TO","Статті опубліковані між %s та %s");
define("_MB_PUBLISHER_TRUNCATE","Обрізати короткий текст в заданих байтах(0 відключає цю функцію) :");
define("_MB_PUBLISHER_DISPLAY_CATIMAGE","Відображати зображення категорії(якщо категорія обрана)?");
define("_MB_PUBLISHER_MORE","Більше:");
define("_MB_PUBLISHER_NUMBER_COLUMN_VIEW","Кількість стовпців для відображення");
define("_MB_PUBLISHER_NUMBER_ITEMS_CAT","Кількість пунктів в кожній категорії");
define("_MB_PUBLISHER_IMAGE_TO_DISPLAY","Оберіть зображення для відображення");
define("_MB_PUBLISHER_IMAGE_ARTICLE","Зображення статті");
define("_MB_PUBLISHER_IMAGE_CATEGORY","Зображення категорії");
define("_MB_PUBLISHER_IMAGE_AVATAR","Аватар користувача");
//latest news  block
define("_MB_PUBLISHER_SP"," : ");
define("_MB_PUBLISHER_NO_COMMENTS","Немає коментарів");
define("_MB_PUBLISHER_MORE_ITEMS","Більше статей");
define("_MB_PUBLISHER_POSTER","Відправлений");
define("_MB_PUBLISHER_COLUMNS","Кількість стовпців");
define("_MB_PUBLISHER_COLUMN","стовпці");
define("_MB_PUBLISHER_TEXTLENGTH","Кількість листів");
define("_MB_PUBLISHER_LETTER","Лист");
define("_MB_PUBLISHER_IMGWIDTH","Ширина зображення");
define("_MB_PUBLISHER_IMGHEIGHT","Висота зображення");
define("_MB_PUBLISHER_PIXEL","піксель");
define("_MB_PUBLISHER_BORDER","Відобразити розмір кордону");
define("_MB_PUBLISHER_BORDERCOLOR","Відобразити виділений колір");
define("_MB_PUBLISHER_IMGPOSITION","Відобразити положення");
define("_MB_PUBLISHER_DISPLAY_MORELINK","Відображати \"Більше новин\"?");
define("_MB_PUBLISHER_DISPLAY_TOPICLINK","Відображати \"Теми\"?");
define("_MB_PUBLISHER_DISPLAY_ARCHIVELINK","Відображати \"Архіви\"?");
define("_MB_PUBLISHER_DISPLAY_SUBMITLINK","Відображати \"Уявити\"?");
define("_MB_PUBLISHER_DISPLAY_POSTEDBY","Відображати \"Відправлений\"?");
define("_MB_PUBLISHER_DISPLAY_POSTTIME","Відображати \"Дата\"?");
define("_MB_PUBLISHER_DISPLAY_COMMENT","Відображати \"Коментар(і)\"?");
define("_MB_PUBLISHER_DISPLAY_TOPICTITLE","Відображати \"Назва теми\"?");
define("_MB_PUBLISHER_DISPLAY_READ","Відображати \"Лічильник читання\"?");
define("_MB_PUBLISHER_DISPLAY_PRINT","Відображати значок друку?");
define("_MB_PUBLISHER_DISPLAY_PDF","Відображати pdf значок?");
define("_MB_PUBLISHER_DISPLAY_EMAIL","Відображати значок електронної пошти?");
define("_MB_PUBLISHER_TOPICSDISPLAY","Теми для відображення");
define("_MB_PUBLISHER_SCROLL","Enable Scrolling News Ticker");
define("_MB_PUBLISHER_SCROLLHEIGHT","Scroll Height");
define("_MB_PUBLISHER_SCROLLSPEED","Scroll Speed");
define("_MB_PUBLISHER_SCROLLDIR","Scroll Direction");
define("_MB_PUBLISHER_SCROLL_RIGHT","Право");
define("_MB_PUBLISHER_SCROLL_LEFT","Ліво");
define("_MB_PUBLISHER_SCROLL_UP","Вгору");
define("_MB_PUBLISHER_SCROLL_DOWN","Вниз");
define("_MB_PUBLISHER_SELECTEDSTORIES","Встановити ідентифікатори статей (e.g.: 3,8,23,46) примітка: встановіть 0, щоб показати всі");
define("_MB_PUBLISHER_IMGDISPLAY","Показати зображення статті");
define("_MB_PUBLISHER_GENERALCONFIG","<strong>Загальні параметри</strong>");
define("_MB_PUBLISHER_PHOTOSCONFIG","<strong>Параметри зображень</strong>");
define("_MB_PUBLISHER_LINKSCONFIG","<strong>Параметри посилань</strong>");
define("_MB_PUBLISHER_TOPICSCONFIG","<strong>Параметри теми</strong>");
define("_MB_PUBLISHER_TEMPLATESCONFIG","<strong>Параметри шаблону</strong>");
define("_MB_PUBLISHER_SUBMITNEWS","Представлена стаття");
define("_MB_PUBLISHER_TEMPLATE","Шаблон ");
define("_MB_PUBLISHER_TEMPLATE_NORMAL","Нормальний");
define("_MB_PUBLISHER_TEMPLATE_EXTENDED","Розширений");
define("_MB_PUBLISHER_TEMPLATE_TICKER","Ticker");
define("_MB_PUBLISHER_TEMPLATE_SLIDER1","Зникнення- в сладі");
define("_MB_PUBLISHER_TEMPLATE_SLIDER2","Вкладка слайдеру");
define("_MB_PUBLISHER_ARCHIVE","Архів");
//25-11-2012
define("_MB_PUBLISHER_ONECOMMENT","1 коментар");
