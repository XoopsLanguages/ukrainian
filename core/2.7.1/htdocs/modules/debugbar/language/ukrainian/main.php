<?php
/**
 * DebugBar Module - Main Language Constants
 *
 * @copyright       (c) 2000-2026 XOOPS Project (https://xoops.org)
 * @license             GNU GPL 2 (https://www.gnu.org/licenses/gpl-2.0.html)
 * @author              trabis <lusopoemas@gmail.com>
 * @author              Richard Griffith <richard@geekwright.com>
 */
// _LANGCODE: uk

define('_MD_DEBUGBAR_DEBUG', 'Налагодження');
define('_MD_DEBUGBAR_INCLUDED_FILES', 'Підключені файли');
define('_MD_DEBUGBAR_PHP_VERSION', 'Версія PHP');
define('_MD_DEBUGBAR_NONE', 'Немає');
define('_MD_DEBUGBAR_ERRORS', 'Помилки');
define('_MD_DEBUGBAR_DEPRECATED', 'Застаріле');
define('_MD_DEBUGBAR_QUERIES', 'Запити');
define('_MD_DEBUGBAR_BLOCKS', 'Блоки');
define('_MD_DEBUGBAR_EXTRA', 'Додатково');
define('_MD_DEBUGBAR_TIMERS', 'Таймери');
define('_MD_DEBUGBAR_TIMETOLOAD', '%s завантажувався %s секунд.');
define('_MD_DEBUGBAR_TOTAL', 'Разом');
define('_MD_DEBUGBAR_NOT_CACHED', 'Не кешовано');
define('_MD_DEBUGBAR_CACHED', 'Кешовано (оновлюється кожні %s секунд)');

// Value display labels (Smarty/DebugBar panels)
define('_MD_DEBUGBAR_EMPTY_STRING', '(порожній рядок)');
define('_MD_DEBUGBAR_NULL', 'NULL');
define('_MD_DEBUGBAR_BOOL_TRUE', 'bool ІСТИНА');
define('_MD_DEBUGBAR_BOOL_FALSE', 'bool FALSE');

// Extra panel labels
define('_MD_DEBUGBAR_DATABASE_QUERIES', 'Запити до бази даних');
define('_MD_DEBUGBAR_MEMORY_USAGE', 'Використання пам\'яті');
define('_MD_DEBUGBAR_QUERY_SUMMARY', '%d запитів');
define('_MD_DEBUGBAR_QUERY_DUPLICATES', '(%d дублікатів)');
define('_MD_DEBUGBAR_BYTES', '%s байт');
define('_MD_DEBUGBAR_DB_VERSION', '%s версія');

// Query error formatting
define('_MD_DEBUGBAR_QUERY_ERROR', '-- Номер помилки: %s Повідомлення про помилку: %s');
define('_MD_DEBUGBAR_QUERY_ERROR_RAY', "
-- Помилка #%s: %s");

// Ray labels
define('_MD_DEBUGBAR_RAY_EXCEPTION', 'Виняток');
define('_MD_DEBUGBAR_RAY_QUERY', 'Запит #%d');
define('_MD_DEBUGBAR_RAY_DUP', '[DUP x%d]');
define('_MD_DEBUGBAR_RAY_SLOW', 'ПОВІЛЬНО');
define('_MD_DEBUGBAR_RAY_BLOCK_CACHED', 'Блок (кеш %ds)');
define('_MD_DEBUGBAR_RAY_BLOCK_NOT_CACHED', 'Блокувати (не кешовано)');
define('_MD_DEBUGBAR_RAY_DUMP', 'Дамп');
define('_MD_DEBUGBAR_RAY_TEMPLATE_CONTEXT', 'Контекст шаблону');
define('_MD_DEBUGBAR_RAY_NO_VARS', '(немає змінних шаблону)');
define('_MD_DEBUGBAR_RAY_VARS_COUNT', '%s (%d вар.)');

// Install error messages
define('_MD_DEBUGBAR_ERR_DIR_CREATE', 'Каталог "modules/debugbar/%s" не створено');
define('_MD_DEBUGBAR_ERR_DIR_COPY', 'Не вдалося створити каталог "%s" під час копіювання ресурсу');
