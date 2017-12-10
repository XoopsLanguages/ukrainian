<?php
// $Id: user.php 12363 2014-03-08 10:39:06Z beckmi $
// _LANGCODE: en
// _CHARSET : UTF-8
// Translator: XOOPS Translation Team
//%%%%%%		File Name user.php 		%%%%%
define('_US_NOTREGISTERED','Не зареєстровані?  Click <a href="register.php">here</a>.');
define('_US_LOSTPASSWORD','Забули пароль?');
define('_US_NOPROBLEM','Немає проблем. Просто введіть адресу вашої електронної пошти, ми маємо файл вашого облікового запису.');
define('_US_YOUREMAIL','Ваша електронна пошта: ');
define('_US_SENDPASSWORD','Надіслати пароль');
define('_US_LOGGEDOUT','Ви вийшли з');
define('_US_THANKYOUFORVISIT','Дякуємо за Ваш візит на наш сайт!');
define('_US_INCORRECTLOGIN','Некорректне ім я користувача!');
define('_US_LOGGINGU','Дякуємо за вхід в, %s.');
// 2001-11-17 ADD
define('_US_NOACTTPADM','Обраний користувач деактивован або ще не активован.<br />Будь ласка, зв яжіться з адміністратором для деталей.');
define('_US_ACTKEYNOT','Ключ активації неправильний!');
define('_US_ACONTACT','Обраний акаунт вже активован!');
define('_US_ACTLOGIN','Ваш акаунт вже активовано. Будь ласка, ввійдіть за зареєстрованим паролем.');
define('_US_NOPERMISS','На жаль, у вас немає дозволу на виконання цієї дії!');
define('_US_SURETODEL','Ви впевнені, що хочете видалити Ваш акаунт?');
define('_US_REMOVEINFO','Це видалить всі Ваші дані з нашої бази даних.');
define('_US_BEENDELED','Ваш акаунт видален.');
define('_US_ACTFAILD','Помилка при активації!');
//%%%%%%		File Name register.php 		%%%%%
define('_US_USERREG','Реєстрація користувача');
define('_US_NICKNAME','Ім я користувача');
define('_US_EMAIL','Електронна пошта');
define('_US_ALLOWVIEWEMAIL','Дозволити іншим користувачам переглядати Вашу адресу електронної пошти');
define('_US_WEBSITE','Веб-сайт');
define('_US_TIMEZONE','Часовий пояс');
define('_US_AVATAR','Аватар');
define('_US_VERIFYPASS','Підтвердіть пароль');
define('_US_SUBMIT','Уявити');
define('_US_USERNAME','Ім я користувача');
define('_US_FINISH','Завершити');
define('_US_REGISTERNG','Неможливо зареєструвати нового користувача.');
define('_US_MAILOK','Періодично отримувати повідомлення по електронній пошті <br />від адміністраторів та модераторів?');
define('_US_DISCLAIMER','Відмова');
define('_US_IAGREE','Я згоден в вище');
define('_US_UNEEDAGREE','На жаль, Ви повинні погодити з нашими умовами, щоб зареєструватись.');
define('_US_NOREGISTER','На жаль, ми зараз закриті для рєстраціїї нових користувачів');
// %s is username. This is a subject for email
define('_US_USERKEYFOR','Ключ активації для користувача %s');
define('_US_YOURREGISTERED','Тепер Ви зареєстровані. Лист, що містить ключ активації, на адресу електронної пошту, яку ви вказали. Будь ласка, дотримуйтесь інструкції в листі, щоб активувати свій акаунт. ');
define('_US_YOURREGMAILNG','Тепер Ви зареєстровані. Однак, нам не вдалось відправити листа активації на Вашу електронну пошту через внутрішню помилку, яка сталася на нашому сервері. Ми просимо вибачення за незручності, будь ласка, надішліть до веб-майстру по електронній пошті повідомлення щодо цієї ситуації.');
define('_US_YOURREGISTERED2','Тепер Ви зареєстровані.  Будь ласка, зачекайте, поки адміністратор активує Ваш акаунт.  Ви отримаєте листа одразу, як буде активовано акаунт.  Це може зайняти деякий час, будь ласка, будьте терплячі.');
// %s is your site name
define('_US_NEWUSERREGAT','Реєстрація нового користувача на %s');
// %s is a username
define('_US_HASJUSTREG','%s тільки що зареєстрований!');
define('_US_INVALIDMAIL','ПОМИЛКА: Недійсна електронна пошта');
define('_US_EMAILNOSPACES','ПОМИЛКА: Адреса електронної пошти не має містити пробілів.');
define('_US_INVALIDNICKNAME','ПОМИЛКА: Недійсне ім я користувача');
define('_US_NICKNAMETOOLONG','Ім я користувача надто довге. Воно повино бути менше ніж %s символів.');
define('_US_NICKNAMETOOSHORT','Ім я користувача надто коротке. Воно повино бути більше ніж %s символів.');
define('_US_NAMERESERVED','ПОМИЛКА: Ім я зарезервоване.');
define('_US_NICKNAMENOSPACES','Не може бути пробілів в імені користувача.');
define('_US_NICKNAMETAKEN','ПОМИЛКА: Ім я користувача прийнято.');
define('_US_EMAILTAKEN','ПОМИЛКА: Адреса електронної пошти вже зареєстрована.');
define('_US_ENTERPWD','ПОМИЛКА: Ви повинні надати пароль.');
define('_US_SORRYNOTFOUND','На жаль, не знайдено відповідні дані користувача.');
// %s is your site name
define('_US_NEWPWDREQ','Новий запит пароля при %s');
define('_US_YOURACCOUNT','Ваш акаунт в %s');
define('_US_MAILPWDNG','пошта_пароль: не вдалося оновити запис користувача. Зв яжіться з адміністратором');
// %s is a username
define('_US_PWDMAILED','Пароль для %s пошти.');
define('_US_CONFMAIL','Підтвердження по електронній поштй для %s .');
define('_US_ACTVMAILNG','Помилка при відправленні повідомлення %s');
define('_US_ACTVMAILOK','Повідомлення по електронній пошті %s відправлено..');
//%%%%%%		File Name userinfo.php 		%%%%%
define('_US_SELECTNG','Немає обраного користувача! Будь ласка, поверніться назад і спробуйте ще раз.');
define('_US_PM','PM');
define('_US_ICQ','ICQ');
define('_US_AIM','AIM');
define('_US_YIM','YIM');
define('_US_MSNM','MSNM');
define('_US_LOCATION','Місцезнаходження');
define('_US_OCCUPATION','Діяльність');
define('_US_INTEREST','Інтереси');
define('_US_SIGNATURE','ПІдпис');
define('_US_EXTRAINFO','Додаткова інформація');
define('_US_EDITPROFILE','Редагувати профіль');
define('_US_LOGOUT','Вийти');
define('_US_INBOX','Вхідні');
define('_US_MEMBERSINCE','Учасник з');
define('_US_RANK','Ранг');
define('_US_POSTS','Коментарі/Пости');
define('_US_LASTLOGIN','Останій логін');
define('_US_ALLABOUT','Все про %s');
define('_US_STATISTICS','Статистика');
define('_US_MYINFO','Моя інформація');
define('_US_BASICINFO','Основна інформація');
define('_US_MOREABOUT','Більше про мене');
define('_US_SHOWALL','Показати ВСЕ');
//%%%%%%		File Name edituser.php 		%%%%%
define('_US_PROFILE','Профіль');
define('_US_REALNAME','Дійсне ім я');
define('_US_SHOWSIG','Завжди використовувати мій підпис');
define('_US_CDISPLAYMODE','Режим відображення коментарів');
define('_US_CSORTORDER','Коментарі сортовані');
define('_US_PASSWORD','Пароль');
define('_US_TYPEPASSTWICE','(записати новий пароль два рази, щоб змінити його)');
define('_US_SAVECHANGES','Зберегти змінення');
define('_US_NOEDITRIGHT',"На жаль, Ви не маєте право редагувати дані цього користувача.");
define('_US_PASSNOTSAME','Паролі різні. Вони повинні бути однакові.');
define('_US_PWDTOOSHORT','На жаль, Ваш пароль повинен бути не менше <strong>%s</strong> символів.');
define('_US_PROFUPDATED','Ваш профіль оновлено!');
define('_US_USECOOKIE','Зберігайте ім я користувача протягом 1 року');
define('_US_NO','Ні');
define('_US_DELACCOUNT','Видалити акаунт');
define('_US_MYAVATAR','Мій аватар');
define('_US_UPLOADMYAVATAR','Завантажити аватар');
define('_US_MAXPIXEL','Максимальний розмір в пікселях');
define('_US_MAXIMGSZ','Максимальний розмір зображення (байт)');
define('_US_SELFILE','Обрати файл');
define('_US_OLDDELETED','Ваш старий аватар буде видалено!');
define('_US_CHOOSEAVT','Виберіть аватар зі списку доступних');
define('_US_PRESSLOGIN','Натисніть на кнопку нижче щоб уввійти в систему');
define('_US_ADMINNO','Користувач в групі веб-майстрів не можуть бути видалені');
define('_US_GROUPS','Користувач\'s Групи');
define('_US_REMEMBERME','Запам ятати мене');
// Welcoming emai/PM subject
define('_US_WELCOME_SUBJECT','Ласкаво просимо до %s');

//XOOPS 2.5.4
define('_US_SKYPE','Скайп');
define('_US_FACEBOOK','Facebook');
