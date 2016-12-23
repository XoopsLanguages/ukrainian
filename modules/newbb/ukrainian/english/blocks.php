<?php
// $Id: blocks.php,v 1.3 2005/10/19 17:20:33 phppp Exp $
// Blocks
if(defined('NEWBB_BLOCKS_DEFINED')) return;
else define('NEWBB_BLOCKS_DEFINED', true);
define('_MB_NEWBB_FORUM', "Форум");
define('_MB_NEWBB_TOPIC', "Тема");
define('_MB_NEWBB_RPLS', "Відповіді");
define('_MB_NEWBB_VIEWS', "Перегляди");
define('_MB_NEWBB_LPOST', "Останє повідомлення");
define('_MB_NEWBB_VSTFRMS', "Форуми");
define('_MB_NEWBB_DISPLAY', "Кількість повідомлень:");
define('_MB_NEWBB_DISPLAYMODE', "Відобразити режим:");
define('_MB_NEWBB_DISPLAYMODE_FULL', "Заповнено");
define('_MB_NEWBB_DISPLAYMODE_COMPACT', "Зменшено");
define('_MB_NEWBB_DISPLAYMODE_LITE', "Полегшена");
define('_MB_NEWBB_FORUMLIST', "Дозволено список форуму:");
define('_MB_NEWBB_ALLTOPICS', "Теми");
define('_MB_NEWBB_ALLPOSTS', "Повідомлення");
define('_MB_NEWBB_CRITERIA', "Відобразити критерії");
define('_MB_NEWBB_CRITERIA_TOPIC', "Теми");
define('_MB_NEWBB_CRITERIA_POST', "Повідомлення");
define('_MB_NEWBB_CRITERIA_TIME', "Найбільш пізні");
define('_MB_NEWBB_CRITERIA_TITLE', "Запостити назву");
define('_MB_NEWBB_CRITERIA_TEXT', "Запостити текст");
define('_MB_NEWBB_CRITERIA_VIEWS', "Найбільше переглядів");
define('_MB_NEWBB_CRITERIA_REPLIES', "Найбільше відповідей");
define('_MB_NEWBB_CRITERIA_DIGEST', "Найновіший дайджест");
define('_MB_NEWBB_CRITERIA_STICKY', "Найновіше популярне");
define('_MB_NEWBB_CRITERIA_DIGESTS', "Найбільше дайджестів");
define('_MB_NEWBB_CRITERIA_STICKYS', "Найбільше популярних тем");
define('_MB_NEWBB_TIME', "Часовий проміжок");
define('_MB_NEWBB_TIME_DESC', "Позитивний для днів, негативний для годин");
define('_MB_NEWBB_TITLE', "Назва");
define('_MB_NEWBB_AUTHOR', "Автор");
define('_MB_NEWBB_COUNT', "Підрахунок");
define('_MB_NEWBB_INDEXNAV', "Відобразити навігатор");
define('_MB_NEWBB_TITLE_LENGTH', "Довжина назви/повідомлення");
// 4.3
// added by irmtfan
define('_MB_NEWBB_CRITERIA_DESC', "ви можете обрати декілька критерій та вони додадуться до пункту WHERE за допомогою AND. Наприклад: популярні та невідповідені теми. Null= усе");
define('_MB_NEWBB_CRITERIA_SORT_DESC', "Примітка: Найновіше/Найстаріше Найбільш/Найменше повино бути встановлено у Впорядковано за");
define('_MB_NEWBB_DISPLAYMODE_DESC', "Відобразити обране із тем у блоках ЯКЩО тема має їх ТА користувач має право доступу");
define('_MB_NEWBB_CRITERIA_ORDER', "Впорядкувати за");
define('_MB_NEWBB_TITLE_LENGTH_DESC', "Довжина назви теми уривку у блоці. 0 якщо уся назва та немає уривків.");
define('_MB_NEWBB_POST_EXCERPT', "Опублікувати текстовий уривок у блоці");
define('_MB_NEWBB_POST_EXCERPT_DESC', "Довжина опублікованого текстового уривку мишею за назвою теми у блоці. 0 якщо не показувати опублікований текст.");
?>