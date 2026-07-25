<?php
/**
 * DebugBar Module - Module Info Language Constants
 *
 * @copyright       (c) 2000-2026 XOOPS Project (https://xoops.org)
 * @license             GNU GPL 2 (https://www.gnu.org/licenses/gpl-2.0.html)
 * @author              Richard Griffith <richard@geekwright.com>
 */
// _LANGCODE: uk

define('_MI_DEBUGBAR_NAME', 'DebugBar');
define('_MI_DEBUGBAR_DSC', 'Звіти про помилки та аналіз продуктивності за допомогою PHP DebugBar');

define('_MI_DEBUGBAR_ENABLE', 'Показати DebugBar');
define('_MI_DEBUGBAR_SMARTYDEBUG', 'Увімкнути налагодження Smarty');
define('_MI_DEBUGBAR_FILESDEBUG', 'Увімкнути вкладку підключених файлів');
define('_MI_DEBUGBAR_FILESDEBUG_DSC', 'Показати всі PHP-файли, завантажені під час запиту');
define('_MI_DEBUGBAR_SLOWQUERY', 'Поріг повільного запиту (секунди)');
define('_MI_DEBUGBAR_SLOWQUERY_DSC', 'Запити, повільніші за це, виділяються червоним (наприклад, 0.05 = 50ms)');

define('_MI_DEBUGBAR_QUERYMODE',      'Журналювання запитів');
define('_MI_DEBUGBAR_QUERYMODE_DSC',  'Усі запити або лише повільні та помилкові');
define('_MI_DEBUGBAR_QUERYMODE_ALL',  'Усі запити');
define('_MI_DEBUGBAR_QUERYMODE_SLOW', 'Лише повільні та помилки');

define('_MI_DEBUGBAR_RAY_ENABLE', 'Увімкнути інтеграцію Ray');
define('_MI_DEBUGBAR_RAY_ENABLE_DSC', 'Надсилати дані налагодження до застосунку Ray');

define('_MI_DEBUGBAR_ADMENU1', 'Головна');
define('_MI_DEBUGBAR_MENU_ABOUT', 'Про модуль');

//Help
\define('_MI_DEBUGBAR_DIRNAME', basename(dirname(__DIR__, 2)));
\define('_MI_DEBUGBAR_HELP_HEADER', __DIR__ . '/help/helpheader.tpl');
\define('_MI_DEBUGBAR_BACK_2_ADMIN', 'Повернутися до адміністрування ');
\define('_MI_DEBUGBAR_OVERVIEW', 'Огляд');

//help multipage
\define('_MI_DEBUGBAR_DISCLAIMER', 'Відмова від відповідальності');
\define('_MI_DEBUGBAR_LICENSE', 'Ліцензія');
\define('_MI_DEBUGBAR_SUPPORT', 'Підтримка');
