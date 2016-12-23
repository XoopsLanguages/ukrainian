<?php
/**
 * Module Info Language Definitions
 *
 * @package xoopspoll
 * @version ::  $Id: modinfo.php 11593 2013-05-27 22:28:05Z zyspec $
 */

/**
 * The name of this module
 */
define('_MI_XOOPSPOLL_NAME', 'XOOPS Опитування');

/**
 * A brief description of this module
 */
define('_MI_XOOPSPOLL_DESC', 'XOOPS модуль опитування може бути використаний для відображення інтерактивних форм обстеження на сайті. ');

/**#@+
 * Name and description of block for this module
 */
define('_MI_XOOPSPOLL_BNAME1', 'Опитування');
define('_MI_XOOPSPOLL_BNAME1DSC', 'Показати необмежену кількість опитувань/обстежень');
define('_MI_XOOPSPOLL_BNAME1A', 'Опитування, використовуючі HTML, оберають');
define('_MI_XOOPSPOLL_BNAME1ADSC', 'Показати необмежену кількість опитувань/обстежень за допомогою HTML, виберіть');
define('_MI_XOOPSPOLL_BNAME2', 'Одиночне опитування');
define('_MI_XOOPSPOLL_BNAME2DSC', 'Показати одиночне опитування');
/**#@-*/

/**#@+
 * Module properties
 */
//define('_MI_XOOPSPOLL_LIMITBYIP', 'Заборонити голосувати двічі, шляхом перевірки IP-адреси.');
//define('_MI_XOOPSPOLL_LIMITBYIPDSC', 'IP-адреса користувача перевіряється для того, щоб уникнути дворазового голосування з однієї IP-адреси. Будь ласка, зверніть увагу, якщо є два різних користувача однієї IP-адреси, останній не зможе проголосувати.');
//define('_MI_XOOPSPOLL_LIMITBYUID', 'Заборона голосувати двічі від того ж користувача.');
//define('_MI_XOOPSPOLL_LIMITBYUIDDSC', 'Перевірте ID користувача, який ввійшов в систему, щоб запобігти дворазового голосування.');
define('_MI_XOOPSPOLL_LOOKUPHOST', 'Відобразити host name замість IP адреси в Адміністраційний вхід');
define('_MI_XOOPSPOLL_LOOKUPHOSTDSC', 'Список host names замість IP адрес в журналі перегляду опитування. Так як nslookup використовується, це може зайняти більше часу, щоб відобразити імена.');
define('_MI_XOOPSPOLL_DISPVOTE', 'Показати кількість голосів і голосуєчих користувачам.');
define('_MI_XOOPSPOLL_DISPVOTEDSC', 'Це дозволить показати/приховати загальну кількість голосів та виборців в опитуванні користувачам на сторінках і в блоках. Кількість завжди відображається в панелі адміністратора.');
//define('_MI_XOOPSPOLL_CHOOSEEDITOR', 'Виберіть текстовий редактор для використання:');
//define('_MI_XOOPSPOLL_CHOOSEEDITORDSC', 'Цей редактор буде використовуватись при введені опису.');
define('_MI_XOOPSPOLL_HIDEFORUM_POLLS', 'Приховати опитування, створене на форумі з модулів опитувань та блоків');
define('_MI_XOOPSPOLL_HIDEFORUM_POLLSDSC', 'Якщо Так, опитування створені на форумі (newbb) будуть приховані в модулі опитувань.<br />Обреіть Так, якщо модуль форуму не встановлен.');
/**#@-*/

/**#@+
 * Template description
 */
define('_MI_XOOPSPOLL_INDEX_DSC', 'Шаблон модульного індексу');
define('_MI_XOOPSPOLL_VIEW_DSC', 'Відображати шаблон опитування');
define('_MI_XOOPSPOLL_RESULTS_DSC', 'Відображати шаблон результатів');
define('_MI_XOOPSPOLL_RESULTS_REND_DSC', 'Відображати шаблон надання результатів');
define('_MI_XOOPSPOLL_ADMIN_INDEX_DSC', 'Шаблон адміністрування для відображення модуля інформації');
define('_MI_XOOPSPOLL_ADMIN_LIST_DSC', 'Шаблон адміністрування для списку посилань інформації');
define('_MI_XOOPSPOLL_ADMIN_UTIL_DSC', 'Шаблон адміністрування для списку комунальних послуг');
//define('_MI_XOOPSPOLL_HELP_DSC', 'Шаблон для відображення модуля сторінки довідки');
/**#@-*/

/**#@+
 * index.php definition
 */
define('_MI_XOOPSPOLL_HOME', 'Додому');
define('_MI_XOOPSPOLL_HOMEDSC', 'Головна сторінка модулю адріністрації');
define('_MI_XOOPSPOLL_ADMENU1', 'Опитування');
define('_MI_XOOPSPOLL_ADMENU1DSC', 'Внести в список/Редагувати/Видалити адміністрування опитуваннями');
define('_MI_XOOPSPOLL_ADMENU2', 'Комунальні послуги');
define('_MI_XOOPSPOLL_ADMENU2DSC', 'Модуль помічників');
define('_MI_XOOPSPOLL_ADABOUT', 'Про');
define('_MI_XOOPSPOLL_ADABOUTDSC', 'Дізнатись більше про XOOPS модуль опитування');
//define('_MI_XOOPSPOLL_ADMIN_HELP', 'Допомога');
/**#@-*/
