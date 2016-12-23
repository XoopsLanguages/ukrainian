<?php
/*
 You may not change or alter any portion of this comment or credits
 of supporting developers from this source code or any supporting source code
 which is considered copyrighted (c) material of the original comment or credit authors.

 This program is distributed in the hope that it will be useful,
 but WITHOUT ANY WARRANTY; without even the implied warranty of
 MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.
*/
/**
 * wgTeams module for xoops
 *
 * @copyright       The XOOPS Project (http://xoops.org)
 * @license         GPL 2.0 or later
 * @package         wgteams
 * @since           1.0
 * @min_xoops       2.5.7
 * @author          Goffy - Wedega.com - Email:<webmaster@wedega.com> - Website:<http://wedega.com>
 * @version         $Id: 1.0 admin.php 1 Sun 2015/12/27 23:18:01Z Goffy - Wedega $
 */
// ---------------- Admin Index ----------------
define('_AM_WGTEAMS_STATISTICS', 'Статистика');
// There are
define('_AM_WGTEAMS_THEREARE_TEAMS', "Команди <span class='bold'>%s</span> в базі даних");
define('_AM_WGTEAMS_THEREARE_MEMBERS', "Учасники <span class='bold'>%s</span>  в базі даних");
define('_AM_WGTEAMS_THEREARE_RELATIONS', "Родичі <span class='bold'>%s</span>  в базі даних");
define('_AM_WGTEAMS_THEREARE_INFOFIELDS', "Інформаційні поля <span class='bold'>%s</span>  в базі даних");
// ---------------- Admin Files ----------------
// There aren't
define('_AM_WGTEAMS_THEREARENT_TEAMS', 'Немає команд');
define('_AM_WGTEAMS_THEREARENT_MEMBERS', 'Немає учасників');
define('_AM_WGTEAMS_THEREARENT_RELATIONS', 'Немає родичів');
define('_AM_WGTEAMS_THEREARENT_INFOFIELDS', 'Немає інформаційних полів');
// Save/Delete
define('_AM_WGTEAMS_FORM_OK', 'Успішно збережено');
define('_AM_WGTEAMS_FORM_DELETE_OK', 'Успішно видалено');
define('_AM_WGTEAMS_FORM_SURE_DELETE', "Ви впевнені, що хочете видалити: <b><span style='color : Red;'>%s </span></b>");
define('_AM_WGTEAMS_FORM_SURE_RENEW', "Ви впевнені, що хочете оновити: <b><span style='color : Red;'>%s </span></b>");
// Lists
define('_AM_WGTEAMS_TEAMS_LIST', 'Список команд');
define('_AM_WGTEAMS_MEMBERS_LIST', 'Список учасників');
define('_AM_WGTEAMS_RELATIONS_LIST', 'Список родичів');
define('_AM_WGTEAMS_INFOFIELDS_LIST', 'Список інформаційних полів');
// ---------------- Admin Classes ----------------
// Team add/edit
define('_AM_WGTEAMS_TEAM_ADD', 'Додати команду');
define('_AM_WGTEAMS_TEAM_EDIT', 'Редагувати Команду');
// Elements of Team
define('_AM_WGTEAMS_TEAM_ID', 'Id');
define('_AM_WGTEAMS_TEAM_NAME', 'Назва команди');
define('_AM_WGTEAMS_TEAM_DESCR', 'Опис команди');
define('_AM_WGTEAMS_TEAM_IMAGE', 'Зображення команди');
define('_AM_WGTEAMS_TEAM_NB_COLS', 'Nb cols');
define('_AM_WGTEAMS_TEAM_TABLESTYLE', 'Стиль таблиці');
define('_AM_WGTEAMS_TEAM_IMAGESTYLE', 'Стиль зображення');
define('_AM_WGTEAMS_TEAM_DISPLAYSTYLE', 'Позиція зображення учасника');
define('_AM_WGTEAMS_TEAM_WEIGHT', 'Ширина');
define('_AM_WGTEAMS_TEAM_ONLINE', 'В мережі');
// options _AM_WGTEAMS_TEAM_TABLESTYLE
define('_AM_WGTEAMS_TEAM_TABLESTYLE_DEF', 'За замовчуванням (використовувати стиль за замовчуванням)');
define('_AM_WGTEAMS_TEAM_TABLESTYLE_BORDERED', 'Обмежено (додати межу з усіх сторін таблиці та елементів)');
define('_AM_WGTEAMS_TEAM_TABLESTYLE_STRIPED', 'Смугастий (Додати зебра-чергування в будь-який рядок таблиці)');
define('_AM_WGTEAMS_TEAM_TABLESTYLE_LINED', 'Підкладка (додати рядки в верхню частину)');
// options _AM_WGTEAMS_TEAM_IMAGESTYLE
define('_AM_WGTEAMS_TEAM_IMAGESTYLE_DEF', 'За замовчуванням (використовувати стиль зображення за замовчуванням)');
define('_AM_WGTEAMS_TEAM_IMAGESTYLE_CIRCLE', 'Коло (формує коло зображення)');
define('_AM_WGTEAMS_TEAM_IMAGESTYLE_ROUNDED', 'Округлі (додає закругляє кути зображення)');
define('_AM_WGTEAMS_TEAM_IMAGESTYLE_THUMBNAIL', 'Ескіз (формує зображення в маленьке)');
// options _AM_WGTEAMS_TEAM_DISPLAYSTYLE
define('_AM_WGTEAMS_TEAM_DISPLAYSTYLE_LEFT', 'Ліво (ліворуч)');
define('_AM_WGTEAMS_TEAM_DISPLAYSTYLE_DEF', 'За замовчуванням (на вершині)');
define('_AM_WGTEAMS_TEAM_DISPLAYSTYLE_RIGHT', 'Право (праворуч)');

// member add/edit
define('_AM_WGTEAMS_MEMBER_ADD', 'Додати учасника');
define('_AM_WGTEAMS_MEMBER_EDIT', 'Редагувати учасника');
// Elements of member
define('_AM_WGTEAMS_MEMBER_ID', 'Id');
define('_AM_WGTEAMS_MEMBER_FIRSTNAME', 'Ім я');
define('_AM_WGTEAMS_MEMBER_LASTNAME', 'Фамілія');
define('_AM_WGTEAMS_MEMBER_TITLE', 'Назва');
define('_AM_WGTEAMS_MEMBER_ADDRESS', 'Адреса');
define('_AM_WGTEAMS_MEMBER_PHONE', 'Телефон');
define('_AM_WGTEAMS_MEMBER_EMAIL', 'Електронна пошта');
define('_AM_WGTEAMS_MEMBER_IMAGE', 'Зображення');
// Relation add/edit
define('_AM_WGTEAMS_RELATION_ADD', 'Додати родича');
define('_AM_WGTEAMS_RELATION_EDIT', 'Редагувати родича');
// Elements of Relation
define('_AM_WGTEAMS_RELATION_ID', 'Id');
define('_AM_WGTEAMS_RELATION_TEAM_ID', 'Команди');
define('_AM_WGTEAMS_RELATION_MEMBER_ID', 'Учасники');
define('_AM_WGTEAMS_RELATION_INFO_1_FIELD', 'Назва Інфо 1');
define('_AM_WGTEAMS_RELATION_INFO_1', 'Інфо 1');
define('_AM_WGTEAMS_RELATION_INFO_2_FIELD', 'Назва Інфо 2');
define('_AM_WGTEAMS_RELATION_INFO_2', 'Інфо 2');
define('_AM_WGTEAMS_RELATION_INFO_3_FIELD', 'Назва Інфо 3');
define('_AM_WGTEAMS_RELATION_INFO_3', 'Інфо 3');
define('_AM_WGTEAMS_RELATION_INFO_4_FIELD', 'Назва Інфо 4');
define('_AM_WGTEAMS_RELATION_INFO_4', 'Інфо 4');
define('_AM_WGTEAMS_RELATION_INFO_5_FIELD', 'Назва Інфо 5');
define('_AM_WGTEAMS_RELATION_INFO_5', 'Інфо 5');
define('_AM_WGTEAMS_RELATION_WEIGHT', 'Ширина');
// Infofield add/edit
define('_AM_WGTEAMS_INFOFIELD_ADD', 'Додати інформаційне поле');
define('_AM_WGTEAMS_INFOFIELD_EDIT', 'Редагувати інформаційне поле');
// Elements of Infofield
define('_AM_WGTEAMS_INFOFIELD_ID', 'Поле id');
define('_AM_WGTEAMS_INFOFIELD_NAME', 'Поле ім я');
// General
define('_AM_WGTEAMS_FORM_UPLOAD', 'Завантажити файл');
define('_AM_WGTEAMS_FORM_UPLOAD_IMG', 'Зображити зображення');
define('_AM_WGTEAMS_FORM_IMAGE_PATH', 'Файли в %s');
define('_AM_WGTEAMS_FORM_IMAGE_EXIST', 'Існуючі зображення');
define('_AM_WGTEAMS_FORM_ACTION', 'Дія');
define('_AM_WGTEAMS_FORM_EDIT', 'Зміни');
define('_AM_WGTEAMS_FORM_DELETE', 'Очистити');
define('_AM_WGTEAMS_SUBMITTER', 'Представлений');
define('_AM_WGTEAMS_DATE_CREATE', 'Дата створення');
// ---------------- Admin Others ----------------
define('_AM_WGTEAMS_MAINTAINEDBY', ' підтримується ');
// ---------------- End ----------------
