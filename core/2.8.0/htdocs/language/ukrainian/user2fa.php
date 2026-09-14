<?php
/**
 * Second-factor challenge strings.
 *
 * A file of their own, apart from user.php: xoops_loadLanguage() falls back
 * to English for a missing file but never fills gaps in a present one, so
 * a language pack that predates the challenge renders it in English rather
 * than failing on an undefined constant.
 *
 * You may not change or alter any portion of this comment or credits
 * of supporting developers from this source code or any supporting source code
 * which is considered copyrighted (c) material of the original comment or credit authors.
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.
 *
 * @copyright       (c) 2000-2026 XOOPS Project (https://xoops.org)
 * @license             GNU GPL 2 (https://www.gnu.org/licenses/gpl-2.0.html)
 * @package             core
 * @since               2.7.4
 */

// XOOPS 2.7.4: two-factor challenge
define('_US_2FA_TITLE', 'Другий крок');
define('_US_2FA_PROMPT', 'Введіть код із вашого застосунку автентифікації');
define('_US_2FA_CODE', 'Код автентифікації');
define('_US_2FA_PROMPT_EMAIL', 'Ми надіслали шестизначний код на %s. Введіть його нижче.');
define('_US_2FA_CODE_EMAIL', 'Код із вашого електронного листа');
define('_US_2FA_SEND', 'Надіслати новий код');
define('_US_2FA_SENT', 'Новий код надіслано на %s. Він дійсний десять хвилин.');
define('_US_2FA_SEND_WAIT', 'Код було надіслано менше хвилини тому. Перевірте вхідні та папку зі спамом, перш ніж запитувати новий.');
define('_US_2FA_SEND_FAILED', 'Код зараз не вдалося надіслати. Спробуйте ще раз за хвилину або скористайтеся кодом відновлення.');
define('_US_2FA_EMAIL_SUBJECT', '%s: ваш код входу');
define('_US_2FA_EMAIL_BODY', 'Ваш код входу для %s:

%s

Він дійсний %d хвилин і працює один раз. Якщо ви його не запитували, ігноруйте це повідомлення та подумайте про зміну пароля.');
define('_US_2FA_RECOVERY', 'Використати код відновлення натомість');
define('_US_2FA_RECOVERY_HINT', 'Кожен код відновлення працює один раз. Використання одного з них надсилає вам електронного листа.');
define('_US_2FA_SUBMIT', 'Продовжити');
define('_US_2FA_STARTAGAIN', 'Термін цього входу минув або його було перервано. Будь ласка, почніть знову.');
define('_US_2FA_BACKTOLOGIN', 'Повернутися до форми входу');
define('_US_2FA_BADCODE', 'Цей код не було прийнято.');
define('_US_2FA_LOCKED', 'Забагато спроб. Другий крок заблоковано на п\'ятнадцять хвилин; код відновлення все ще працює.');
define('_US_2FA_UNAVAILABLE', 'Другий крок наразі недоступний. Код відновлення все ще працює, або зверніться до адміністратора сайту.');
define('_US_2FA_REQUIRED', 'Для цього облікового запису увімкнено двофакторну автентифікацію. Будь ласка, увійдіть через сторінку входу сайту.');
define('_US_2FA_HTTP_LOGIN', 'Це спливне вікно не може завершити двофакторний вхід через HTTP, оскільки ваш пароль буде надіслано без шифрування. Використайте вхід на сайті, або попросіть адміністратора увімкнути HTTPS для сайту.');
define('_US_2FA_LOCKED_MAIL_SUBJECT', '%s: другий крок заблоковано');
define('_US_2FA_LOCKED_MAIL_BODY', 'Для вашого облікового запису на %s було введено п\'ять неправильних кодів другого кроку з %s. Другий крок заблоковано на п\'ятнадцять хвилин. Якщо це були не ви, змініть пароль.');
define('_US_2FA_RECOVERY_MAIL_SUBJECT', '%s: використано код відновлення');
define('_US_2FA_RECOVERY_MAIL_BODY', 'Код відновлення було використано для входу у ваш обліковий запис на %s з %s. Цей код більше не працює. Якщо це були не ви, змініть пароль і скиньте коди відновлення.');
