<?php
/*
 * You may not change or alter any portion of this comment or credits
 * of supporting developers from this source code or any supporting source code
 * which is considered copyrighted (c) material of the original comment or credit authors.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.
 */

/**
 * Modern Theme Language Definitions
 */
// _LANGCODE: uk

// Compatibility with default/oxygen theme
if (!defined('_OXYGEN_SYSOPTIONS')) {
    define('_OXYGEN_SYSOPTIONS', 'Системні параметри');
}

// -- Dashboard: KPI Cards --
define('_MODERN_TOTAL_USERS', 'Усього користувачів');
define('_MODERN_NEW_THIS_MONTH', 'Нових цього місяця');
define('_MODERN_ACTIVE_MODULES', 'Активні модулі');
define('_MODERN_ACTIVE_MODULES_USERS', 'Модулі для користувачів');
define('_MODERN_ACTIVE_MODULES_ADMINS', 'Тільки адміністраторські');
define('_MODERN_ACTIVE_USERS', 'Активні користувачі');
define('_MODERN_LAST_30_DAYS', 'Останні 30 днів');
define('_MODERN_SERVER_LOAD', 'Навантаження сервера');
define('_MODERN_CURRENT', 'Поточне');

// -- Dashboard: Charts --
define('_MODERN_USER_REGISTRATIONS', 'Реєстрації користувачів');
define('_MODERN_NEW_USERS_6_MONTHS', 'Нові користувачі за останні 6 місяців');
define('_MODERN_USER_GROUPS', 'Групи користувачів');
define('_MODERN_DISTRIBUTION_BY_GROUP', 'Розподіл за групами');
define('_MODERN_CONTENT_DISTRIBUTION', 'Розподіл контенту');
define('_MODERN_CONTENT_ACROSS_MODULES', 'Контент по модулях');
define('_MODERN_NEW_USERS', 'Нові користувачі');

// -- Dashboard: System Information --
define('_MODERN_SYSTEM_INFORMATION', 'Системна інформація');
define('_MODERN_COMPOSER_PACKAGES', 'Пакети Composer');
define('_MODERN_COMPONENT', 'Компонент');
define('_MODERN_VALUE', 'Значення');
define('_MODERN_STATUS', 'Статус');
define('_MODERN_PACKAGE', 'Пакет');
define('_MODERN_VERSION', 'Версія');
define('_MODERN_SERVER_API', 'API сервера');
define('_MODERN_OPERATING_SYSTEM', 'Операційна система');
define('_MODERN_MEMORY_LIMIT', 'Ліміт пам\'яті');
define('_MODERN_UPLOAD_MAX_SIZE', 'Максимальний розмір завантаження');
define('_MODERN_MAX_EXECUTION_TIME', 'Максимальний час виконання');
define('_MODERN_POST_MAX_SIZE', 'Максимальний розмір POST');
define('_MODERN_FILE_UPLOADS', 'Завантаження файлів');

// -- Dashboard: Status Badges --
define('_MODERN_STATUS_ACTIVE', 'Активний');
define('_MODERN_STATUS_RUNNING', 'Працює');
define('_MODERN_STATUS_GOOD', 'Добре');
define('_MODERN_STATUS_CONFIGURED', 'Налаштований');
define('_MODERN_STATUS_ADEQUATE', 'Достатній');
define('_MODERN_STATUS_ENABLED', 'Увімкнений');

// -- Sidebar --
define('_MODERN_CONTROL_PANEL', 'Панель управління');
define('_MODERN_MODULES', 'Модулі');
define('_MODERN_SYSTEM', 'Система');

// -- Header --
define('_MODERN_TOGGLE_MENU', 'Перемкнути меню');
define('_MODERN_ONLINE', 'Онлайн');
define('_MODERN_TOGGLE_DARK_MODE', 'Перемкнути темний режим');

// -- Customizer --
define('_MODERN_THEME_SETTINGS', 'Налаштування теми');
define('_MODERN_COLOR_SCHEME', 'Колірна схема');
define('_MODERN_COLOR_DEFAULT_BLUE', 'Синій за замовчуванням');
define('_MODERN_COLOR_DEFAULT', 'За замовчуванням');
define('_MODERN_COLOR_NATURE_GREEN', 'Природний зелений');
define('_MODERN_COLOR_GREEN', 'Зелений');
define('_MODERN_COLOR_ROYAL_PURPLE', 'Королівський фіолетовий');
define('_MODERN_COLOR_PURPLE', 'Фіолетовий');
define('_MODERN_COLOR_WARM_ORANGE', 'Теплий помаранчевий');
define('_MODERN_COLOR_ORANGE', 'Помаранчевий');
define('_MODERN_COLOR_OCEAN_TEAL', 'Морський бірюзовий');
define('_MODERN_COLOR_TEAL', 'Бірюзовий');
define('_MODERN_COLOR_BOLD_RED', 'Насичений червоний');
define('_MODERN_COLOR_RED', 'Червоний');
define('_MODERN_DASHBOARD_SECTIONS', 'Розділи панелі');
define('_MODERN_KPI_CARDS', 'KPI-картки');
define('_MODERN_CHARTS', 'Діаграми');
define('_MODERN_MODULE_WIDGETS', 'Віджети модулів');
define('_MODERN_CONTENT_TRACKING', 'Відстеження контенту');
define('_MODERN_CONTENT_TRACKING_HINT', 'Виберіть модулі для відображення на діаграмі розподілу контенту.');
define('_MODERN_SIDEBAR', 'Бічна панель');
define('_MODERN_COMPACT_MODE', 'Компактний режим');
define('_MODERN_SHOW_ICONS', 'Показувати іконки');
define('_MODERN_DISPLAY', 'Відображення');
define('_MODERN_ANIMATIONS', 'Анімації');
define('_MODERN_COMPACT_VIEW', 'Компактний вигляд');
define('_MODERN_RESET_TO_DEFAULTS', 'Скинути до типових');
define('_MODERN_CLOSE_SETTINGS', 'Закрити налаштування');
define('_MODERN_CUSTOMIZE_THEME', 'Налаштувати тему');
define('_MODERN_CONFIRM_RESET', 'Скинути всі налаштування до типових?');

// -- Footer --
define('_MODERN_POWERED_BY', 'Працює на XOOPS');
define('_MODERN_THEME_VERSION', 'Сучасна тема адміністратора v1.0');

// -- Page --
define('_MODERN_OPEN', 'Відкрити');

// -- Widgets --
define('_MODERN_VIEW_ALL', 'Переглянути все');

// -- Content Module Labels (for Content Distribution chart) --
define('_MODERN_MOD_ARTICLES', 'Статті');
define('_MODERN_MOD_NEWS', 'Новини');
define('_MODERN_MOD_DOWNLOADS', 'Завантаження');
define('_MODERN_MOD_JOBS', 'Вакансії');
define('_MODERN_MOD_BLOG_POSTS', 'Блог-публікації');
define('_MODERN_MOD_ALUMNI', 'Випускники');
define('_MODERN_MOD_PEDIGREES', 'Родоводи');
define('_MODERN_MOD_PROPERTIES', 'Нерухомість');
define('_MODERN_MOD_FORUM_POSTS', 'Публікації форуму');
define('_MODERN_MOD_LINKS', 'Посилання');

// -- Charts: Dataset Labels --
define('_MODERN_ITEMS', 'Елементи');
