<?php
/**
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
//General
define('_AM_XNEWSLETTER_FORMOK',"Зареєстровано успішно");
define('_AM_XNEWSLETTER_FORMDELOK',"Видалено успішно");
define('_AM_XNEWSLETTER_FORMDELNOTOK',"Помилка при видаленні");
define('_AM_XNEWSLETTER_FORMSUREDEL',"Ви впевнені, що хочете видалити: <span class='bold red'>%s</span>");
define('_AM_XNEWSLETTER_FORMSUREDEL_LIST',"Ви впевнені, що хочете видалити усі пункти протоколу:<span class='bold red'>%s</span>");
define('_AM_XNEWSLETTER_FORMSURERENEW',"Ви впевнені, що хочете продовжити термін дії: <span class='bold red'>%s</span>");
define('_AM_XNEWSLETTER_FORMUPLOAD',"Завантажити");
define('_AM_XNEWSLETTER_FORMIMAGE_PATH',"Файл представлен в %s");
define('_AM_XNEWSLETTER_FORMACTION',"Дія");
define('_AM_XNEWSLETTER_ERROR_NO_VALID_ID',"Помилка: не дійсний id!");
define('_AM_XNEWSLETTER_OK',"Успіх");
define('_AM_XNEWSLETTER_FAILED',"не вдалось");
define('_AM_XNEWSLETTER_SAVE',"Зберегти");
define('_AM_XNEWSLETTER_DETAILS',"Показати деталі");
define('_AM_XNEWSLETTER_SEARCH',"Пошук");
define('_AM_XNEWSLETTER_SEARCH_EQUAL',"=");
define('_AM_XNEWSLETTER_SEARCH_CONTAINS',"містить");
define('_AM_XNEWSLETTER_ACCOUNTS_TYPE_PHPMAIL',"php mail()");
define('_AM_XNEWSLETTER_ACCOUNTS_TYPE_PHPSENDMAIL',"php sendmail()");
define('_AM_XNEWSLETTER_ACCOUNTS_TYPE_POP3',"pop before smtp");
define('_AM_XNEWSLETTER_ACCOUNTS_TYPE_SMTP',"smtp");
define('_AM_XNEWSLETTER_ACCOUNTS_TYPE_GMAIL',"gmail");
define('_AM_XNEWSLETTER_ACCOUNTS_TYPE_NOTREQUIRED',"Не вимагається");
define('_AM_XNEWSLETTER_ACCOUNTS_TYPE_NAME',"Ім'я мого аккаунту");
define('_AM_XNEWSLETTER_ACCOUNTS_TYPE_YOURNAME',"John Doe");
define('_AM_XNEWSLETTER_ACCOUNTS_TYPE_YOUREMAIL',"name@yourdomain.com");
define('_AM_XNEWSLETTER_ACCOUNTS_TYPE_USERNAME',"ім'я користувача");
define('_AM_XNEWSLETTER_ACCOUNTS_TYPE_PWD',"пароль");
define('_AM_XNEWSLETTER_ACCOUNTS_TYPE_POP3_SERVER_IN',"pop3.yourdomain.com");
define('_AM_XNEWSLETTER_ACCOUNTS_TYPE_POP3_PORT_IN',"110");
define('_AM_XNEWSLETTER_ACCOUNTS_TYPE_POP3_SERVER_OUT',"mail.yourdomain.com");
define('_AM_XNEWSLETTER_ACCOUNTS_TYPE_POP3_PORT_OUT',"25");
define('_AM_XNEWSLETTER_ACCOUNTS_TYPE_SMTP_SERVER_IN',"imap.yourdomain.com");
define('_AM_XNEWSLETTER_ACCOUNTS_TYPE_SMTP_PORT_IN',"143");
define('_AM_XNEWSLETTER_ACCOUNTS_TYPE_SMTP_SERVER_OUT',"mail.yourdomain.com");
define('_AM_XNEWSLETTER_ACCOUNTS_TYPE_SMTP_PORT_OUT',"25");
define('_AM_XNEWSLETTER_ACCOUNTS_TYPE_GMAIL_USERNAME',"yourusername@gmail.com");
define('_AM_XNEWSLETTER_ACCOUNTS_TYPE_GMAIL_SERVER_IN',"imap.gmail.com");
define('_AM_XNEWSLETTER_ACCOUNTS_TYPE_GMAIL_PORT_IN',"993");
define('_AM_XNEWSLETTER_ACCOUNTS_TYPE_SECURETYPE_IN',"tls");
define('_AM_XNEWSLETTER_ACCOUNTS_TYPE_GMAIL_SERVER_OUT',"smtp.gmail.com");
define('_AM_XNEWSLETTER_ACCOUNTS_TYPE_GMAIL_PORT_OUT',"465");
define('_AM_XNEWSLETTER_ACCOUNTS_TYPE_SECURETYPE_OUT',"ssl");
define('_AM_XNEWSLETTER_ACCOUNTS_TYPE_CHECK',"Перевірити налаштування");
define('_AM_XNEWSLETTER_LETTER_ACTION',"Дія після зберігання");
define('_AM_XNEWSLETTER_LETTER_ACTION_SAVED',"Збережено");
define('_AM_XNEWSLETTER_LETTER_ACTION_NO',"Немає дії");
define('_AM_XNEWSLETTER_LETTER_ACTION_COPYNEW',"Копія і нове");
define('_AM_XNEWSLETTER_LETTER_ACTION_PREVIEW',"Показати попередній перегляд");
define('_AM_XNEWSLETTER_LETTER_ACTION_SEND',"Відправити бюлетень усім абонентам");
define('_AM_XNEWSLETTER_LETTER_ACTION_RESEND',"Переслати бюлетень абонентам, кому не вдалось надіслати");
define('_AM_XNEWSLETTER_LETTER_ACTION_SENDTEST',"Надіслати бюлетень для тестування");
define('_AM_XNEWSLETTER_LETTER_EMAIL_TEST',"Електронний лист для тестування бюлетню");
define('_AM_XNEWSLETTER_LETTER_EMAIL_ALTBODY',"Переглянути повідомлення, будь ласка, використовуйте HTML адресу");
define('_AM_XNEWSLETTER_LETTER_ERROR_INVALID_ATT_ID',"Помилка при видалення прикріплення (недійсне вкладення id)");
define('_AM_XNEWSLETTER_SEND_SUCCESS',"Бюлетень відравлен");
define('_AM_XNEWSLETTER_SEND_SUCCESS_TEST',"Бюлетень відправлен для тесту");
define('_AM_XNEWSLETTER_SEND_SUCCESS_NUMBER',"Надсилання %t бюлетня(ей) успішне");
define('_AM_XNEWSLETTER_SEND_SUCCESS_ML',"Обробляння списку розсилки успішне");
define('_AM_XNEWSLETTER_SEND_SUCCESS_ML_DETAIL',"Відправлення '%a' списку розсилки успішне");
define('_AM_XNEWSLETTER_SEND_ERROR_NUMBER',"Помилка при відправленні бюлетня: %e %t бюлетні не відправлені");
define('_AM_XNEWSLETTER_SEND_ERROR_PHPMAILER',"Помилка phpmailer: ");
define('_AM_XNEWSLETTER_SEND_ERROR_NO_EMAIL',"Помилка: Немає доступу до адреси електронної пошти");
define('_AM_XNEWSLETTER_SEND_ERROR_NO_LETTERID',"Помилка: Немає обраного дійсного бюлетня");
define('_AM_XNEWSLETTER_SEND_ERROR_INALID_TEMPLATE_PATH',"Помилка:  Шлях шаблону '%p' не знайден");
define('_AM_XNEWSLETTER_SEND_SURE_SENT',"Цей бюлетень вже був відправлений усім абонентам.<br />Ви дійсно хочете відправити цей бюлетень усім абонентам ще раз?");
define('_AM_XNEWSLETTER_SEND_ERROR_NO_SUBSCR',"Помилка: Немає дійсних абонентів для обранного бюлетня(ей)");
//Index
define('_AM_XNEWSLETTER_LETTER',"Статистика бюлетня");
define('_AM_XNEWSLETTER_THEREARE_ACCOUNTS',"<span class='bold'>%s</span> Рахунки в Базі даних");
define('_AM_XNEWSLETTER_THEREARE_CAT',"<span class='bold'>%s</span> Категорії в Базі даних");
define('_AM_XNEWSLETTER_THEREARE_SUBSCR',"<span class='bold'>%s</span> Абоненти в Базі даних");
define('_AM_XNEWSLETTER_THEREARE_CATSUBSCR',"<span class='bold'>%s</span> Категорії-Абонентів в Базі даних");
define('_AM_XNEWSLETTER_THEREARE_LETTER',"<span class='bold'>%s</span> Бюлетень в Базі даних");
define('_AM_XNEWSLETTER_THEREARE_PROTOCOL',"<span class='bold'>%s</span> Протокол в Базі даних");
define('_AM_XNEWSLETTER_THEREARE_ATTACHMENT',"<span class='bold'>%s</span> Прикріплення в Базі даних");
define('_AM_XNEWSLETTER_THEREARE_MAILINGLIST',"<span class='bold'>%s</span> Список розсилки в Базі даних");
define('_AM_XNEWSLETTER_THEREARE_BMH',"<span class='bold'>%s</span>  Відмовлені листи в Базі даних");
define('_AM_XNEWSLETTER_THEREARE_TASK',"<span class='bold'>%s</span> Завдання в Базі даних");
//Buttons
define('_AM_XNEWSLETTER_NEWACCOUNTS',"Додати новий аккаунт");
define('_AM_XNEWSLETTER_ACCOUNTSLIST',"Список аккаунтів");
define('_AM_XNEWSLETTER_ACCOUNTSWAIT',"Аккаунти в очікуванні");
define('_AM_XNEWSLETTER_NEWCAT',"Додати нову категорію");
define('_AM_XNEWSLETTER_CATLIST',"Список категорій");
define('_AM_XNEWSLETTER_CATWAIT',"Категорії в очікуванні");
define('_AM_XNEWSLETTER_NEWSUBSCR',"Додати нового абонента");
define('_AM_XNEWSLETTER_SUBSCRLIST',"Список абонентів");
define('_AM_XNEWSLETTER_SUBSCRWAIT',"Абоненти в очікуванні");
define('_AM_XNEWSLETTER_NEWCATSUBSCR',"Додати нові Категорії-абонентів");
define('_AM_XNEWSLETTER_CATSUBSCRLIST',"Список Категорій-абонентів");
define('_AM_XNEWSLETTER_CATSUBSCRWAIT',"Категорії-абонентів в очікуванні");
define('_AM_XNEWSLETTER_NEWLETTER',"Додати новий бюлетень");
define('_AM_XNEWSLETTER_LETTERLIST',"Список бюлетней");
define('_AM_XNEWSLETTER_LETTERWAIT',"Бюлетні в очікуванні");
define('_AM_XNEWSLETTER_LETTER_DELETE_ALL',"Видалити протокол цього бюлетня");
define('_AM_XNEWSLETTER_NEWPROTOCOL',"Додати новий протокол");
define('_AM_XNEWSLETTER_PROTOCOLLIST',"Список проколів");
define('_AM_XNEWSLETTER_PROTOCOLWAIT',"Протоколи в очікуванні");
define('_AM_XNEWSLETTER_NEWATTACHMENT',"Додати нове прикріплення");
define('_AM_XNEWSLETTER_ATTACHMENTLIST',"Список прикріплень");
define('_AM_XNEWSLETTER_ATTACHMENTWAIT',"Прикріплення в очікуванні");
define('_AM_XNEWSLETTER_NEWMAILINGLIST',"Додати новий список розсилки");
define('_AM_XNEWSLETTER_MAILINGLISTLIST',"Список списків розсилки");
define('_AM_XNEWSLETTER_MAILINGLISTWAIT',"Список розсилки в очікуванні");
define('_AM_XNEWSLETTER_RUNBMH',"Запуск відмоленої обробки електронної пошти");
define('_AM_XNEWSLETTER_BMHLIST',"Список відмовленої обробки електронної пошти");
define('_AM_XNEWSLETTER_BMHWAIT',"Відмовлена обробка електронної пошти в очікуванні");
define('_AM_XNEWSLETTER_ACCOUNTS_ADD',"Додати аккаунт");
define('_AM_XNEWSLETTER_ACCOUNTS_EDIT',"Редагувати аккаунт");
define('_AM_XNEWSLETTER_ACCOUNTS_DELETE',"Видалити аккаунт");
define('_AM_XNEWSLETTER_ACCOUNTS_ID',"Id");
define('_AM_XNEWSLETTER_ACCOUNTS_TYPE',"Тип");
define('_AM_XNEWSLETTER_ACCOUNTS_NAME',"Ім'я");
define('_AM_XNEWSLETTER_ACCOUNTS_YOURNAME',"Ваше ім'я");
define('_AM_XNEWSLETTER_ACCOUNTS_YOURMAIL',"Ваша пошта");
define('_AM_XNEWSLETTER_ACCOUNTS_USERNAME',"Ім'я користувача");
define('_AM_XNEWSLETTER_ACCOUNTS_PASSWORD',"Пароль");
define('_AM_XNEWSLETTER_ACCOUNTS_INCOMING',"Вхідні");
define('_AM_XNEWSLETTER_ACCOUNTS_SERVER_IN',"Сервер вхідної пошти");
define('_AM_XNEWSLETTER_ACCOUNTS_PORT_IN',"Порт в");
define('_AM_XNEWSLETTER_ACCOUNTS_SECURETYPE_IN',"Безпечний тип в ");
define('_AM_XNEWSLETTER_ACCOUNTS_OUTGOING',"Вихідні");
define('_AM_XNEWSLETTER_ACCOUNTS_SERVER_OUT',"Сервер вихідної пошти");
define('_AM_XNEWSLETTER_ACCOUNTS_PORT_OUT',"Порт з ");
define('_AM_XNEWSLETTER_ACCOUNTS_SECURETYPE_OUT',"Безпечний тип з");
define('_AM_XNEWSLETTER_ACCOUNTS_DEFAULT',"Аккаунт за замовчування");
define('_AM_XNEWSLETTER_ACCOUNTS_BOUNCE_INFO',"Додаткова інформація для відмовленої обробки електронної пошти");
define('_AM_XNEWSLETTER_ACCOUNTS_USE_BMH',"Використати відмовлену обробку електронної пошти");
define('_AM_XNEWSLETTER_ACCOUNTS_INBOX',"Поштова скринька для перевірки наявності листа");
define('_AM_XNEWSLETTER_ACCOUNTS_HARDBOX',"Використати цю поштову скриньку, як 'hard box'");
define('_AM_XNEWSLETTER_ACCOUNTS_HARDBOX_DESC',"Назва поштової скриньки повинна начинатись з 'INBOX.'. Ви можете обрати стандартну папку в вашій поштовій скринці (наприклад, INBOX.Trash) або створити вашу власну папку, як 'hard' таand 'soft'. Якщо ввести нове ім'я папки, папка буде створена (ця функція не доступна для gmail-акаунтів).");
define('_AM_XNEWSLETTER_ACCOUNTS_MOVEHARD',"Перенести відмовлену електронну пошту в 'hard box'");
define('_AM_XNEWSLETTER_ACCOUNTS_SOFTBOX',"Використати цю поштову скриньку, як 'hard box' 'soft box'");
define('_AM_XNEWSLETTER_ACCOUNTS_MOVESOFT',"Перенести відмовлену електронну пошту в 'soft box'");
define('_AM_XNEWSLETTER_ACCOUNTS_SUBMITTER',"Подавець");
define('_AM_XNEWSLETTER_ACCOUNTS_CREATED',"Створено");
define('_AM_XNEWSLETTER_ACCOUNTS_ERROR_OPEN_MAILBOX',"Помилка при відкриванні поштової скриньки! Будь ласка, перевірте ваші налаштування!");
define('_AM_XNEWSLETTER_SAVE_AND_CHECK',"Зберегти та перевірити налаштування");
define('_AM_XNEWSLETTER_ACCOUNTS_CHECK_OK',"успішно  ");
define('_AM_XNEWSLETTER_ACCOUNTS_CHECK_FAILED',"невдало  ");
define('_AM_XNEWSLETTER_ACCOUNTS_CHECK_SKIPPED',"пропущено");
define('_AM_XNEWSLETTER_ACCOUNTS_CHECK',"Перевірити результат");
define('_AM_XNEWSLETTER_ACCOUNTS_CHECK_INFO',"Додаткова інформація");
define('_AM_XNEWSLETTER_ACCOUNTS_CHECK_OPEN_MAILBOX',"Відкрити поштову скриньку ");
define('_AM_XNEWSLETTER_ACCOUNTS_CHECK_OPEN_FOLDERS',"Відкрити папки ");
define('_AM_XNEWSLETTER_ACCOUNTS_CHECK_BMH',"Обробка відмовленої електронної пошти ");
define('_AM_XNEWSLETTER_ACCOUNTS_CHECK_BMH_INBOX',"Поштова скринька");
define('_AM_XNEWSLETTER_ACCOUNTS_CHECK_BMH_HARDBOX',"Hardbox");
define('_AM_XNEWSLETTER_ACCOUNTS_CHECK_BMH_SOFTBOX',"Softbox");
define('_AM_XNEWSLETTER_CAT_ADD',"Додати категорію");
define('_AM_XNEWSLETTER_CAT_EDIT',"Редагувати категорію");
define('_AM_XNEWSLETTER_CAT_DELETE',"Видалити категорію");
define('_AM_XNEWSLETTER_CAT_ID',"Id");
//define('_AM_XNEWSLETTER_CAT_NAME',"Назва бюлетня");
define('_AM_XNEWSLETTER_CAT_NAME',"Назва категорії");
define('_AM_XNEWSLETTER_CAT_INFO',"Додаткова інформація");
define('_AM_XNEWSLETTER_CAT_GPERMS_CREATE',"Дозділ для створення");
define('_AM_XNEWSLETTER_CAT_GPERMS_CREATE_DESC',"<br /><span style='font-weight:normal'>- Створити новий бюлетень<br />- Редагувати, видалити, надіслати власні бюлетні</span>");
define('_AM_XNEWSLETTER_CAT_GPERMS_ADMIN',"Дозвіл адміністратора");
define('_AM_XNEWSLETTER_CAT_GPERMS_ADMIN_DESC',"<br /><span style='font-weight:normal'>Редагувати, видалити, надіслати усі бюлетні цієї категорії</span>");
define('_AM_XNEWSLETTER_CAT_GPERMS_READ',"Дозвіл на читання/підписку");
define('_AM_XNEWSLETTER_CAT_GPERMS_LIST',"Дозвіл нат перегляд списку абонентів");
define('_AM_XNEWSLETTER_CAT_SUBMITTER',"Подавець");
define('_AM_XNEWSLETTER_CAT_CREATED',"Створено");
define('_AM_XNEWSLETTER_CAT_MAILINGLIST',"Список розсилки");
define('_AM_XNEWSLETTER_SUBSCR_ADD',"Додати Абонента");
define('_AM_XNEWSLETTER_SUBSCR_EDIT',"Редагувати Абонента");
define('_AM_XNEWSLETTER_SUBSCR_DELETE',"Видалити Абонента");
define('_AM_XNEWSLETTER_SUBSCR_ID',"Id");
define('_AM_XNEWSLETTER_SUBSCR_EMAIL',"Електронна пошта");
define('_AM_XNEWSLETTER_SUBSCR_FIRSTNAME',"Ім'я");
define('_AM_XNEWSLETTER_SUBSCR_LASTNAME',"Прізвище");
define('_AM_XNEWSLETTER_SUBSCR_UID',"Ім'я користувача");
define('_AM_XNEWSLETTER_SUBSCR_SEX',"Вітання");
define('_AM_XNEWSLETTER_SUBSCR_SEX_EMPTY',"");
define('_AM_XNEWSLETTER_SUBSCR_SEX_BOY',"Mstr.");
define('_AM_XNEWSLETTER_SUBSCR_SEX_MALE',"Містер");
define('_AM_XNEWSLETTER_SUBSCR_SEX_GIRL',"Міс");
define('_AM_XNEWSLETTER_SUBSCR_SEX_FEMALE',"Пані");
define('_AM_XNEWSLETTER_SUBSCR_SEX_DOCTOR',"Доктор");
define('_AM_XNEWSLETTER_SUBSCR_SEX_FAMILY',"Сім'я");
define('_AM_XNEWSLETTER_SUBSCR_SEX_COMP',"Компанія");
define('_AM_XNEWSLETTER_SUBSCR_SUBMITTER',"Подавець");
define('_AM_XNEWSLETTER_SUBSCR_CREATED',"Створено");
define('_AM_XNEWSLETTER_SUBSCR_ACTIVATED',"активувати?");
define('_AM_XNEWSLETTER_SUBSCR_SHOW_ALL',"Показати все");
define('_AM_XNEWSLETTER_CATSUBSCR_ADD',"Додати абонента до категорії");
define('_AM_XNEWSLETTER_CATSUBSCR_EDIT',"Редагувати абонента в категорії");
define('_AM_XNEWSLETTER_CATSUBSCR_DELETE',"Видалити абонента з категорії");
define('_AM_XNEWSLETTER_CATSUBSCR_ID',"Id");
define('_AM_XNEWSLETTER_CATSUBSCR_CATID',"Бюлетень");
define('_AM_XNEWSLETTER_CATSUBSCR_SUBSCRID',"Абоненти");
define('_AM_XNEWSLETTER_CATSUBSCR_QUITED',"Відписався");
define('_AM_XNEWSLETTER_CATSUBSCR_SUBMITTER',"Подавець");
define('_AM_XNEWSLETTER_CATSUBSCR_CREATED',"Створено");
define('_AM_XNEWSLETTER_CATSUBSCR_SUREDELETE',"Ви дійсно хочете видалити<br />'%s'<br /> з <br />'%c' ?");
define('_AM_XNEWSLETTER_CATSUBSCR_QUIT_NONE',"Жоден");
define('_AM_XNEWSLETTER_CATSUBSCR_QUIT_NOW',"Звільнити зараз");
define('_AM_XNEWSLETTER_CATSUBSCR_QUIT_REMOVE',"Видалити дату звільнення");
define('_AM_XNEWSLETTER_LETTER_ADD',"Додати бюлетень");
define('_AM_XNEWSLETTER_LETTER_EDIT',"Редагувати бюлетень");
define('_AM_XNEWSLETTER_LETTER_DELETE',"Видалити бюлетень");
define('_AM_XNEWSLETTER_LETTER_ID',"Id");
define('_AM_XNEWSLETTER_LETTER_TITLE',"Назва");
define('_AM_XNEWSLETTER_LETTER_CONTENT',"Зміст");
define('_AM_XNEWSLETTER_LETTER_TEMPLATE',"Шаблон");
define('_AM_XNEWSLETTER_LETTER_CATS',"Категорії");
define('_AM_XNEWSLETTER_LETTER_ATTACHMENT',"Прикріплення");
define('_AM_XNEWSLETTER_LETTER_STATUS',"Статус");
define('_AM_XNEWSLETTER_LETTER_SUBMITTER',"Подавець");
define('_AM_XNEWSLETTER_LETTER_CREATED',"Створено");
define('_AM_XNEWSLETTER_LETTER_ACCOUNTS_AVAIL',"Доступні акаунти");
define('_AM_XNEWSLETTER_LETTER_ACCOUNT',"Акаунт");
define('_AM_XNEWSLETTER_LETTER_MAILINGLIST',"Використати список розсилки");
define('_AM_XNEWSLETTER_LETTER_MAILINGLIST_NO',"Жоден");
define('_AM_XNEWSLETTER_ATTACHMENT_ADD',"Додати прикріплення");
define('_AM_XNEWSLETTER_ATTACHMENT_EDIT',"Редагувати прикріплення");
define('_AM_XNEWSLETTER_ATTACHMENT_DELETE',"Видалити прикріплення");
define('_AM_XNEWSLETTER_ATTACHMENT_ID',"Id");
define('_AM_XNEWSLETTER_ATTACHMENT_LETTER_ID',"Лист-Id");
define('_AM_XNEWSLETTER_ATTACHMENT_NAME',"Ім'я");
define('_AM_XNEWSLETTER_ATTACHMENT_TYPE',"Тип файлу");
define('_AM_XNEWSLETTER_ATTACHMENT_SUBMITTER',"Подавець");
define('_AM_XNEWSLETTER_ATTACHMENT_CREATED',"Створено");
define('_AM_XNEWSLETTER_PROTOCOL_ADD',"Додати протокол");
define('_AM_XNEWSLETTER_PROTOCOL_EDIT',"Редагувати протокол");
define('_AM_XNEWSLETTER_PROTOCOL_DELETE',"Видалити протокол");
define('_AM_XNEWSLETTER_PROTOCOL_ID',"Id");
define('_AM_XNEWSLETTER_PROTOCOL_LETTER_ID',"Бюлетень-Id");
define('_AM_XNEWSLETTER_PROTOCOL_SUBSCRIBER_ID',"Абонент-Id");
define('_AM_XNEWSLETTER_PROTOCOL_STATUS',"Статус");
define('_AM_XNEWSLETTER_PROTOCOL_SUCCESS',"Успіх");
define('_AM_XNEWSLETTER_PROTOCOL_SUBMITTER',"Подавець");
define('_AM_XNEWSLETTER_PROTOCOL_CREATED',"Створено");
define('_AM_XNEWSLETTER_PROTOCOL_LAST_STATUS',"Останній статус");
define('_AM_XNEWSLETTER_PROTOCOL_MISC',"Різні пункти протоколу");
define('_AM_XNEWSLETTER_PROTOCOL_NO_SUBSCREMAIL',"Не знайдень електронну пошту одержувача");
define('_AM_XNEWSLETTER_MAILINGLIST_ADD',"Додати список розсилки");
define('_AM_XNEWSLETTER_MAILINGLIST_EDIT',"Редагувати список розсилки");
define('_AM_XNEWSLETTER_MAILINGLIST_DELETE',"Видалити список розсилки");
define('_AM_XNEWSLETTER_MAILINGLIST_ID',"Id");
define('_AM_XNEWSLETTER_MAILINGLIST_NAME',"Ім'я");
define('_AM_XNEWSLETTER_MAILINGLIST_EMAIL',"Електронна пошта");
define('_AM_XNEWSLETTER_MAILINGLIST_EMAIL_DESC',"Електронна пошта, де підписаний код повинен бути відправлений");
define('_AM_XNEWSLETTER_MAILINGLIST_LISTNAME',"Назва списку");
define('_AM_XNEWSLETTER_MAILINGLIST_SUBSCRIBE',"Підписати код");
define('_AM_XNEWSLETTER_MAILINGLIST_SUBSCRIBE_DESC',"{електронна пошта} буде замінена на електронну пошту абонента");
define('_AM_XNEWSLETTER_MAILINGLIST_UNSUBSCRIBE',"Відписати код");
define('_AM_XNEWSLETTER_MAILINGLIST_SUBMITTER',"Подавець");
define('_AM_XNEWSLETTER_MAILINGLIST_CREATED',"Створено");
define('_AM_XNEWSLETTER_BOUNCETYPE',"Тип відмов");
define('_AM_XNEWSLETTER_BMH_EDIT',"Редагувати обробку відмовленої електронної пошти");
define('_AM_XNEWSLETTER_BMH_DELETE',"Видалити обробку відмовленої електронної пошти");
define('_AM_XNEWSLETTER_BMH_ID',"Id");
define('_AM_XNEWSLETTER_BMH_RULE_NO',"Правило №");
define('_AM_XNEWSLETTER_BMH_RULE_CAT',"Правило кішки");
define('_AM_XNEWSLETTER_BMH_BOUNCETYPE',"Тип відмов");
define('_AM_XNEWSLETTER_BMH_REMOVE',"Вилучені");
define('_AM_XNEWSLETTER_BMH_EMAIL',"Електронна пошта");
define('_AM_XNEWSLETTER_BMH_SUBJECT',"Суб'єкт");
define('_AM_XNEWSLETTER_BMH_MEASURE',"Міра");
define('_AM_XNEWSLETTER_BMH_SUBMITTER',"Подавець");
define('_AM_XNEWSLETTER_BMH_CREATED',"Створено");
define('_AM_XNEWSLETTER_BMH_MEASURE_PENDING',"В очікуванні");
define('_AM_XNEWSLETTER_BMH_MEASURE_NOTHING',"Нічого не робити");
define('_AM_XNEWSLETTER_BMH_MEASURE_QUIT',"Тимчасово звільнити цього абонента");
define('_AM_XNEWSLETTER_BMH_MEASURE_DELETE',"Видалити цього абонента");
define('_AM_XNEWSLETTER_BMH_MEASURE_QUITED',"Абонент тимчасово видален");
define('_AM_XNEWSLETTER_BMH_MEASURE_DELETED',"Абонент видалений");
define('_AM_XNEWSLETTER_BMH_MEASURE_ALREADY_DELETED',"Абонент вже видалений! Дія не прдставляється можливою!");
define('_AM_XNEWSLETTER_BMH_MEASURE_DELETE_SURE',"Ви дійсно хочете видалити цю реєстрацію з усіма абонентами?<br /><br />Пізніше реактивація абонентам не буде можливою!<br /><br />");
define('_AM_XNEWSLETTER_BMH_ERROR_NO_SUBSCRID',"Немає існуючої реєстрації для цієї електронної пошти!");
define('_AM_XNEWSLETTER_BMH_ERROR_NO_ACTIVE',"Обробка відмовленної електронної пошти не активована в жодному акаунті");
define('_AM_XNEWSLETTER_BMH_RSLT',"Результати перевірки електронної пошти %b<br /> Прочитані повідомлення: %r<br />Дії прийняті: %a<br />Дії не прийняті:%n<br />Переставлено:%m<br />Видалено: %d<br /><br /><br />");
define('_AM_XNEWSLETTER_BMH_SUCCESSFUL',"Обробка відмовленої електронної пошти завершена успішно");
define('_AM_XNEWSLETTER_BMH_MEASURE_ALL',"Показати все");
define('_AM_XNEWSLETTER_BMH_MEASURE_SHOW_NONE',"Немає доступної відмовленої електронної пошти '%s'");
define('_AM_XNEWSLETTER_MAINTENANCE_CAT',"Категорія");
define('_AM_XNEWSLETTER_MAINTENANCE_DESCR',"Опис");
define('_AM_XNEWSLETTER_MAINTENANCE_PARAM',"Параметри");
define('_AM_XNEWSLETTER_MAINTENANCE_ERROR',"Помилка під час виконання технічного обслуговування");
define('_AM_XNEWSLETTER_MAINTENANCE_DELETEDATE',"Видалити всі реєстрації без підтвердження, якщо реєстрація була до цієї дати.<br />Увага: скасування не можливе! Будь ласка, перевірте дату до цього.");
define('_AM_XNEWSLETTER_MAINTENANCE_DELETEUSER',"Ці <b>%s</b> непідтвердженні реєстрації із зазначення дати до %s дійсно видалені.<br />Увага: це неможливо скасувати!");
define('_AM_XNEWSLETTER_MAINTENANCE_DELETEPROTOCOL',"Видалити усі протоколи та відрелюгувати таблиці");
define('_AM_XNEWSLETTER_MAINTENANCE_DELETEPROTOK',"Таблиця протоколу підтримується.");
define('_AM_XNEWSLETTER_MAINTENANCE_DELETENOTHING',"Немає необхідних дій.");
define('_AM_XNEWSLETTER_MAINTENANCE_DELETEUSEROK',"%s Користувачі видалені");
define('_AM_XNEWSLETTER_MAINTENANCE_DELETE_INVALID_SUBCR',"Видалити підписку на розсилку без існуючої реєстрації");
define('_AM_XNEWSLETTER_MAINTENANCE_DELETE_INVALID_SUBCR_OK',"%s підписки були видалені");
define('_AM_XNEWSLETTER_MAINTENANCE_DELETE_INVALID_SUBCR_NODATA',"Не знайдено ніяких доступних даних в таблиці");
define('_AM_XNEWSLETTER_MAINTENANCE_DELETE_INVALID_ML',"Порівняйте дату бюлетню зі списком розсилки та правильністю недійсних даних");
define('_AM_XNEWSLETTER_MAINTENANCE_DELETE_INVALID_ML_OK',"%s неправильна дата в списку розсилки була виправлена");
define('_AM_XNEWSLETTER_MAINTENANCE_DELETE_INVALID_ML_NODATA',"Не знайдено дійсного списку розсилки");
define('_AM_XNEWSLETTER_MAINTENANCE_DELETE_INVALID_CATNL',"Порівняйте дату бюлетню зі списком розсилки та правильністю недійсних даних");
define('_AM_XNEWSLETTER_MAINTENANCE_DELETE_INVALID_CATNL_OK',"%s неправильна дата в списку розсилки була виправлена");
define('_AM_XNEWSLETTER_MAINTENANCE_DELETE_INVALID_CATNL_NODATA',"Не знайдено дійсного списку розсилки");
define('_AM_XNEWSLETTER_MAINTENANCE_DELETE_IMPORT',"Видалити таблиці імпорту і скидання таблиці");
define('_AM_XNEWSLETTER_MAINTENANCE_DELETE_IMPORT_OK',"Імпорт таблиці підтримується.");
define('_AM_XNEWSLETTER_IMPORT_SEARCH',"Пошук адрес електронної пошти доступний для імпорту");
define('_AM_XNEWSLETTER_IMPORT_PRESELECT_CAT',"Попередньо виберіть категорію");
define('_AM_XNEWSLETTER_IMPORT_PLUGINS_AVAIL',"Доступні плагіни");
define('_AM_XNEWSLETTER_IMPORT_CONTINUE',"Продовжити");
define('_AM_XNEWSLETTER_IMPORT_AFTER_READ',"Дія після прочитання даних");
define('_AM_XNEWSLETTER_IMPORT_READ_CHECK',"Показати дані для перевірки");
define('_AM_XNEWSLETTER_IMPORT_CHECK_LIMIT',"Обмежте адреси електронної пошти для імпорту");
define('_AM_XNEWSLETTER_IMPORT_CHECK_LIMIT_PACKAGE',"Обмежте адреси електронної пошти на етапі обробки");
define('_AM_XNEWSLETTER_IMPORT_NOLIMIT',"Без обмежень");
define('_AM_XNEWSLETTER_IMPORT_READ_IMPORT',"Імпортувати дані відразу, без перевірки");
define('_AM_XNEWSLETTER_IMPORT_SHOW',"Показати %s до %l %n доступні адреси електронної пошти");
define('_AM_XNEWSLETTER_IMPORT_NODATA',"Дані не знайдено");
define('_AM_XNEWSLETTER_IMPORT_EMAIL_EXIST',"Електронна пошта вже зареєстрована");
define('_AM_XNEWSLETTER_IMPORT_CATSUBSCR_EXIST',"Підписка вже існує");
define('_AM_XNEWSLETTER_IMPORT_NOIMPORT',"-- Не імпортувати --");
define('_AM_XNEWSLETTER_IMPORT_EXEC',"Імпорт адрес електронної пошти як попередньо обрані");
define('_AM_XNEWSLETTER_IMPORT_RESULT_SKIP',"Імпорт адрес електронної пошти %e пропускається");
define('_AM_XNEWSLETTER_IMPORT_RESULT_FAILED',"Імпортувати адреси електронної пошти %e не вдалось");
define('_AM_XNEWSLETTER_IMPORT_RESULT_REG_OK',"Реєстрація успішна");
define('_AM_XNEWSLETTER_IMPORT_RESULT_SUBSCR_OK',"Підписано на категорію успішно");
define('_AM_XNEWSLETTER_IMPORT_SKIP_EXISTING',"Пропустити існуючі підписки");
define('_AM_XNEWSLETTER_IMPORT_FINISHED',"Обробка %p %t адрес електронної пошти успішно завершена");
define('_AM_XNEWSLETTER_IMPORT_INFO',"Додати усіх користувачів групи до бюлетня");
define('_AM_XNEWSLETTER_IMPORT_CSV_OPT',"Опції CSV-файлу");
define('_AM_XNEWSLETTER_IMPORT_CSV_FILE',"CSV-файл:");
define('_AM_XNEWSLETTER_IMPORT_CSV_DELIMITER',"Роздільник:");
define('_AM_XNEWSLETTER_IMPORT_CSV_HEADER',"CSV-файл з заголовком");
define('_AM_XNEWSLETTER_IMPORT_CSV',"Одна колонка (електронна пошта) або чотири колонки (електронна пошта | стать | ім'я | прізвище)<br / >дивитись sample1col.csv and sample4col.csv in /plug-ins");
define('_AM_XNEWSLETTER_IMPORT_XOOPSUSER',"Опції імпорту/синхронізації XoopsUsers");
define('_AM_XNEWSLETTER_IMPORT_XOOPSUSER_GROUPS',"Обрати групи");
define('_AM_XNEWSLETTER_NEWTASK',"Додати нове завдання");
define('_AM_XNEWSLETTER_TASKLIST',"Список завдань");
define('_AM_XNEWSLETTER_TASK_ADD',"Додати завдання");
define('_AM_XNEWSLETTER_TASK_EDIT',"Редагувати завдання");
define('_AM_XNEWSLETTER_TASK_DELETE',"Видалити завдання");
define('_AM_XNEWSLETTER_TASK_ID',"Id");
define('_AM_XNEWSLETTER_TASK_LETTER_ID',"Письмо");
define('_AM_XNEWSLETTER_TASK_SUBSCR_ID',"Абонент");
define('_AM_XNEWSLETTER_TASK_STATUS',"Статус");
define('_AM_XNEWSLETTER_TASK_STARTTIME',"Час початку");
define('_AM_XNEWSLETTER_TASK_SUBMITTER',"Подавець");
define('_AM_XNEWSLETTER_TASK_CREATED',"Створено");
define('_AM_XNEWSLETTER_TASK_ERROR_CREATE',"Помилка при створенні елементів у списку завданнь");
define('_AM_XNEWSLETTER_TASK_NO_DATA',"Немає завдання в очікуванні");
//Error NoFrameworks
define('_AM_XNEWSLETTER_NOFRAMEWORKS',"Помилка: Ви не Структури \"модуль адміністратора\". Будь ласка, встановіть цю Структуру");
define('_AM_XNEWSLETTER_MAINTAINEDBY',"підтримується");
define('_AM_XNEWSLETTER_SEND_ERROR_NO_LETTERCONTENT',"Немає доступного тексту для друку");
define('_AM_XNEWSLETTER_FORMSEARCH_SUBSCR_EXIST',"Пошук існуючої передплати на адресу електронної пошти");
define('_AM_XNEWSLETTER_SUBSCR_NO_CATSUBSCR',"Для цієї адреси електронної пошти не достопуне прикріплення до бюлетня категорії");
//version 1.2
define('_AM_XNEWSLETTER_IMPORT_ERROR_NO_PLUGIN',"Помилка: необхідних файлів 'plugins/%p.php' не знайдено!");
define('_AM_XNEWSLETTER_IMPORT_ERROR_NO_FUNCTION',"Помилка: необхідна функція 'xnewsletter_plugin_getdata_%f' не існує!");
//version 1.3
//General
define('_AM_XNEWSLETTER_LETTER_CONTENT_DESC','Html format');
//
define('_AM_XNEWSLETTER_SUBSCR_SEX_PREVIEW','Mr.');
define('_AM_XNEWSLETTER_SUBSCR_FIRSTNAME_PREVIEW','John');
define('_AM_XNEWSLETTER_SUBSCR_LASTNAME_PREVIEW','Doe');
define('_AM_XNEWSLETTER_SUBSCR_EMAIL_PREVIEW','username@example.com');
//
define('_AM_XNEWSLETTER_TEMPLATE_ADD',"Додати шаблон");
define('_AM_XNEWSLETTER_TEMPLATE_EDIT',"Редагувати шаблон");
define('_AM_XNEWSLETTER_TEMPLATE_DELETE',"Видалити шаблон");
define('_AM_XNEWSLETTER_TEMPLATE_ID',"Id");
define('_AM_XNEWSLETTER_TEMPLATE_TITLE',"Назва");
define('_AM_XNEWSLETTER_TEMPLATE_DESCRIPTION',"Опис");
define('_AM_XNEWSLETTER_TEMPLATE_DESCRIPTION_DESC','');
define('_AM_XNEWSLETTER_TEMPLATE_CONTENT',"Зміст");
define('_AM_XNEWSLETTER_TEMPLATE_CONTENT_DESC','
    Html format
    <br />
    This module uses the Xoops <a href="http://www.smarty.net/">Smarty template engine</a> to render the email letter.
    <br /><br />
    Available smarty-vars are:
    <ul>
    <li>&lt;{$salutation}&gt; or &lt;{$sex}&gt;: the subscriber Salutation field</li>
    <li>&lt;{$firstname}&gt;: the subscriber First name field</li>
    <li>&lt;{$lastname}&gt;: the subscriber Last name field</li>
    <li>&lt;{$email}&gt; or &lt;{$subscr_email}&gt;: the subscriber Email field</li>
    </ul>
    <ul>
    <li>&lt;{$title}&gt;: the newsletter Title field</li>
    <li>&lt;{$content}&gt;: the newsletter Content field</li>
    </ul>
    <ul>
    <li>&lt;{$date}&gt;: the sending date as timestamp integer <br /><span style="font-size:0.9em">(e.g.: &lt;{$date|date_format:"%Y/%m/%d"}&gt; will output the date formatted as 2001/01/04)</span></li>
    <li>&lt;{$unsubscribe_url}&gt;: the unsubscribe url</li>
    </ul>
    <ul>
    <li>&lt;{$xoops_url}&gt;: the site main url (e.g. http://localhost/)</li>
    <li>&lt;{$xoops_langcode}&gt;: the site langcode (e.g. en)</li>
    <li>&lt;{$xoops_charset}&gt;: the site cherset (e.g. UTF-8)</li>
    </ul>');
define('_AM_XNEWSLETTER_TEMPLATE_SUBMITTER',"Подавець");
define('_AM_XNEWSLETTER_TEMPLATE_CREATED',"Створено");
//Buttons
define('_AM_XNEWSLETTER_NEWTEMPLATE',"Додати новий шаблон");
define('_AM_XNEWSLETTER_TEMPLATELIST',"Список Шаблонів");
