<?php
/**
 * ****************************************************************************
 *  - A Project by Developers TEAM For Xoops - ( http://www.xoops.org )
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
// Main
define('_MA_XNEWSLETTER_INDEX',"Додому");
define('_MA_XNEWSLETTER_TITLE',"xNewsletter");
define('_MA_XNEWSLETTER_DESC',"Newsletter модуль для Xoops");
define('_MA_XNEWSLETTER_WELCOME',"<h2>Вітаємо у нашій системі бюлетнів</h2>Ми сподіваємось, ми можемо тримати вас в курсі нашої розсилки. Не соромтесь підписуватись на одну або декілька наших розсилок. Якщо Ви не хочете отримувати розсилку більше, Ви просто можете відписатися тут. Також Ви можете відписатися в простий спосіб за допомогою посилання в кожній розсильці.");
define('_MA_XNEWSLETTER_ACCOUNTS',"Акаунти");
define('_MA_XNEWSLETTER_CAT',"Категорія");
define('_MA_XNEWSLETTER_SUBSCR',"Абоненти");
define('_MA_XNEWSLETTER_CATSUBSCR',"Абонент категорії розсилки");
define('_MA_XNEWSLETTER_LETTER',"Лист");
define('_MA_XNEWSLETTER_PROTOCOL',"Протокол");
define('_MA_XNEWSLETTER_BMH',"Bounced обробник електронної пошти");
define('_MA_XNEWSLETTER_ADMIN',"Адміністратор");
define('_MA_XNEWSLETTER_LETTER_CATS',"Надіслати з розсилкою");
define('_MA_XNEWSLETTER_SUBSCRIPTION_SEARCH',"Пошук підписки");
define('_MA_XNEWSLETTER_SUBSCRIPTION_SEARCH_EMAIL',"Пошук або додавання  підписки на це повідомлення: ");
define('_AM_XNEWSLETTER_SUBSCRIPTION_SEARCH_ADD',"Пошук / додавання  підписки");
define('_MA_XNEWSLETTER_SUBSCRIPTION_EXIST',"Існуючі підписки");
define('_MA_XNEWSLETTER_SUBSCRIPTION_EXIST_NONE',"Немає існуючих підписок");
define('_MA_XNEWSLETTER_REGISTRATION_EXIST',"Існуючі реєстрації цієї електронної пошти");
define('_MA_XNEWSLETTER_REGISTRATION_NONE',"Ваша електронна адреса не зареєстрований досі. Для підписки нам буде потрібна додаткова інформація. Будь ласка, заповніть реєстраційну форму.<br />Ми хочемо повідомити Вам, що ваша IP-адреса буде збережена з метою забезпечення прозорості.");
define('_MA_XNEWSLETTER_REGISTRATION_ADD',"Якщо ви хочете, ви можете додати більше однієї людини до однієї електронній пошті, а потім ви можете зробити різні підписки");
define('_MA_XNEWSLETTER_SUBSCRIPTION_ADD',"Додати нову підписку");
define('_MA_XNEWSLETTER_SUBSCRIPTION_EDIT',"Редагування підписки");
define('_MA_XNEWSLETTER_SUBSCRIPTION_DELETE',"видалити підписку");
define('_MA_XNEWSLETTER_SUBSCRIPTION_DELETE_SURE',"Ви дійсно хочете видалити цю реєстрацію з усіма підписками?<br /><br />Якщо ви хочете (від) підписатися на один або кілька інформаційних бюлетенів, будь ласка, використовуйте кнопку редагування!<br /><br />");
define('_MA_XNEWSLETTER_SUBSCRIPTION_INFO_PERS',"Ваша особиста інформація");
define('_MA_XNEWSLETTER_SUBSCRIPTION_SELECT_CATS',"Виберіть свій бюлетень");
define('_MA_XNEWSLETTER_SUBSCRIPTION_CATS_AVAIL',"Доступні інформаційні бюлетені");
define('_MA_XNEWSLETTER_SUBSCRIPTION_NO_CATS_AVAIL',"Немає доступних інформаційних бюлетенів");
define('_MA_XNEWSLETTER_SUBSCRIPTION_OK',"Вибрані елементи були успішно зареєстровані");
define('_MA_XNEWSLETTER_SUBSCRIPTION_ERROR',"Були помилки при роботі на (від) підписку");
define('_MA_XNEWSLETTER_SUBSCRIPTION_ERROR_NOID',"Помилка: немає дійсного subscriber-id");
define('_MA_XNEWSLETTER_SUBSCRIPTION_ERROR_NOEMAIL',"Помилка: не повна адреса електронної пошти");
define('_MA_XNEWSLETTER_SUBSCRIPTION_ERROR_SENDACTKEY',"Помилка при відправці по електронній пошті підтвердження");
define('_MA_XNEWSLETTER_SUBSCRIPTION_ERROR_SAVESUBSCR',"Помилка збереження особистої інформації");
define('_MA_XNEWSLETTER_SUBSCRIPTION_ERROR_INVALIDKEY',"Помилка: немає дійсного типу ключа");
define('_MA_XNEWSLETTER_SUBSCRIPTION_ERROR_NODATAKEY',"Помилка: Немає даних для цього ключа");
define('_MA_XNEWSLETTER_SUBSCRIPTION_ERROR_NOVALIDKEY',"Помилка: немає дійсного ключа");
define('_MA_XNEWSLETTER_SUBSCRIPTION_ERROR_SAVECATSUBSCR',"Помилка при збереженні інформацію про (від)підписку");
define('_MA_XNEWSLETTER_SUBSCRIPTION_REG_OK',"Реєстрація вашої особистої інформації були успішна.");
define('_MA_XNEWSLETTER_SUBSCRIPTION_PROT_SUBSCRIBE',"Відписку бюлетня '%nl' успішна");
define('_MA_XNEWSLETTER_SUBSCRIPTION_PROT_UNSUBSCRIBE',"Відписку бюлетня '%nl' успішна");
define('_MA_XNEWSLETTER_SUBSCRIPTION_PROT_NO_CHANGE',"Немає змін у бюлетені вибору '%nl'");
define('_MA_XNEWSLETTER_SUBSCRIPTION_PROT_DAT_QUITED_REMOVED',"Дата виходу від підписки на розсилку '%nl' успішно видалена");
define('_MA_XNEWSLETTER_SUBSCRIPTION_PROT_SENT_INFO',"Інформаційний лист, відправлено '%e'");
define('_MA_XNEWSLETTER_SUBSCRIPTION_QUITED',"<span style='color:red'>Увага: деактивовано веб-майстром!</span>");
define('_MA_XNEWSLETTER_SUBSCRIPTION_QUITED_DETAIL',"<span style='color:red'>Увага: Ця підписка була відключина веб-майстром на %q в результаті 'bounced' листа! Якщо ви хочете активувати підписку, будь ласка, нехай цей бюлетень перевірять.</span>");
define('_MA_XNEWSLETTER_UNSUBSCRIPTION_OK',"Електронна пошта '%e' була успішно відписана від розсилки '%n'");
define('_MA_XNEWSLETTER_UNSUBSCRIPTION_ERROR',"Помилка при відписці '%e' з бюлетня '%n'");
define('_MA_XNEWSLETTER_SUBSCRIPTION_UPDATE_OK',"Ваш бюлетень змінено");
define('_MA_XNEWSLETTER_SUBSCRIPTION_REG_CLOSED',"Реєстрація завершена");
define('_MA_XNEWSLETTER_SUBSCRIPTIONSUBJECT',"Підтвердити отримання бюлетня на ");
define('_MA_XNEWSLETTER_SUBSCRIPTION_SUBJECT_CHANGE',"Інформація про зміни вашого бюлетня ");
define('_MA_XNEWSLETTER_SENDMAIL_REG_OK',"Лист з кодом підтвердження відправлено.");
define('_MA_XNEWSLETTER_DELETESUBJECT',"Підтвердити видалення бюлетня з");
define('_MA_XNEWSLETTER_SUBSCRIPTION_REG_UPDATE_CLOSED',"Реєстраційні дані були успішно збережені.");
define('_MA_XNEWSLETTER_SENDMAIL_UNREG_OK',"Лист для підтвердження активації надіслано на електронну пошту.");
define('_MA_XNEWSLETTER_SUBSCRIPTION_UNFINISHED',"<span style='color:red'>Увага: реєстрація досі не підтверджена. Будь ласка, натисніть на посилання активація, що ми прислали на Вашу електронну пошту. Якщо ви не отримали електронного листа, будь ласка, натисніть <a href='%link'>here</a> щоб отримати листа ще раз.</span>");
define('_MA_XNEWSLETTER_PLEASE_LOGIN',"Адреса електронної пошти %s належить зареєстрованому користувачу. <br /> будь ласка, увійдіть, щоб змінити дані.");
define('_MA_XNEWSLETTER_LETTER_NONEAVAIL',"Немає бюлетнів доступних на цей момент");
//1.2.2
define('_MA_XNEWSLETTER_ACCOUNTS_NONEAVAIL',"Немає доступних акаунтів електронної пошти на даний момент");
//1.3
define('_MD_XNEWSLETTER_SUBSCRIBE',"(Відмовитись від)Підписка");
define('_MD_XNEWSLETTER_LIST',"Список бюлетней");
define('_MD_XNEWSLETTER_LIST_SUBSCR',"Список підписки");
define('_MD_XNEWSLETTER_LETTER_CREATE',"Створити бюлетень");
define('_MD_XNEWSLETTER_LETTER_EDIT',"Редагувати бюлетень");
define('_MD_XNEWSLETTER_LETTER_DELETE',"Видалити бюлетень");
define('_MD_XNEWSLETTER_LETTER_COPY',"Копіювати/клонувати бюлетень");
define('_MD_XNEWSLETTER_LETTER_PREVIEW',"Перегляд");
define('_MD_XNEWSLETTER_SUBSCRIPTION_EDIT',"Редагувати підписки");
define('_MD_XNEWSLETTER_SUBSCRIPTION_DELETE',"Видалити підписки");
