<?php
/**
 * Main Definitions
 *
 * @package   ::    xoopspoll
 * @subpackage:: defines
 * @version   ::    $Id: main.php 11539 2013-05-13 20:56:06Z zyspec $
 */

/**
 *    File Name pollresults.php
 */
define('_MD_XOOPSPOLL_TOTALVOTES', 'Загальна кількість голосів: %s');
define('_MD_XOOPSPOLL_TOTALVOTERS', 'Всього голосували: %s');

/**
 * File Name index.php
 */
define('_MD_XOOPSPOLL_POLLSLIST', 'Список опитувань');
define('_MD_XOOPSPOLL_ALREADYVOTED', 'На жаль, ви вже проголосували.');
define('_MD_XOOPSPOLL_THANKSFORVOTE', 'Дякуємо за Ваш голос!');
define('_MD_XOOPSPOLL_SORRYEXPIRED', 'На жаль, але опитування вже закрито.');
define('_MD_XOOPSPOLL_YOURPOLLAT', '%s, Ваш голос в %s'); // 1st %s is user name, 2nd %s is site name
define('_MD_XOOPSPOLL_PREV', 'Попереднє');
define('_MD_XOOPSPOLL_NEXT', 'Наступне');
define('_MD_XOOPSPOLL_POLLQUESTION', 'Питання опитування');
define('_MD_XOOPSPOLL_VOTERS', 'Всього голосували');
define('_MD_XOOPSPOLL_VOTES', 'Загальна кількість голосів');
define('_MD_XOOPSPOLL_EXPIRATION', 'Витікання');
define('_MD_XOOPSPOLL_EXPIRED', 'Термін дії закінчився');
define('_MD_XOOPSPOLL_MUSTLOGIN', 'На жаль, Ви повинні увійти в систему, щоб проголосувати.');

/**
 * File Name xoopspollrenderer.php
 */
// %s represents date
define('_MD_XOOPSPOLL_HIDE_ENDSAT', 'Закінчується  %s');
define('_MD_XOOPSPOLL_HIDE_ENDEDAT', 'Закінчилось %s');
define('_MD_XOOPSPOLL_STARTSAT', 'Починається %s');
define('_MD_XOOPSPOLL_VOTE', 'Голос');
define('_MD_XOOPSPOLL_RESULTS', 'Результати');

// 1.32

/**
 * File name /admin/index.php
 */
define('_MD_XOOPSPOLL_DASHBOARD', 'Xoops Опитування Dashboard');
define('_MD_XOOPSPOLL_TOTALPOLLS', 'Всього опитувань: <strong>%s</strong> ');
define('_MD_XOOPSPOLL_TOTALACTIVE', 'Активні опитування: <strong>%s</strong> ');
define('_MD_XOOPSPOLL_TOTALWAITING', 'Опитування не розпочато: <strong>%s</strong> ');
define('_MD_XOOPSPOLL_TOTALEXPIRED', 'Опитування з вичерпаним терміном дії: <strong>%s</strong> ');

// 1.40
define('_MD_XOOPSPOLL_VOTE_NOW', 'Натисніть тут, щоб проголосувати зараз!');
define('_MD_XOOPSPOLL_ERROR_INVALID_POLLID', 'Недійсне ID опитування, будь ласка, спробуйте ще раз.');
define('_MD_XOOPSPOLL_CANNOTVOTE', 'На жаль, але ви не можете голосувати у цьому опитуванні.');
define('_MD_XOOPSPOLL_HIDE_NEVER', 'ніколи не приховувати результати');
define('_MD_XOOPSPOLL_HIDE_ALWAYS', 'завжди приховувати результати');
define('_MD_XOOPSPOLL_HIDE_VOTED', 'приховувати результати, поки не закінчиться опитування');
define('_MD_XOOPSPOLL_HIDE_END', 'приховувати результати, поки не закінчиться термін');
define('_MD_XOOPSPOLL_HIDE_ALWAYS_MSG', 'Результати цього опитування є приватними  та не видимими.');
define('_MD_XOOPSPOLL_HIDE_VOTED_MSG', 'Результати цього опитування стануть видимі, коли ви проголосуєте.');
define('_MD_XOOPSPOLL_HIDE_END_MSG', 'Результати цього опитування стануть видимі, коли воно завершиться.');
define('_MD_XOOPSPOLL_YOURVOTEAT', '%s, Ваш голос в %s'); // 1st %s is user name, 2nd %s is site name
define('_MD_XOOPSPOLL_VOTE_ERROR', 'Проблема з реєстрацією Вашого голосу. Будь ласка, спробуйте ще раз.');
define('_MD_XOOPSPOLL_MULTITEXT', 'Будь ласка, оберіть максимальну кількість %d пунктів');
define('_MD_XOOPSPOLL_OBSCURED', 'Приховано');

//Mail Voter
define('_MD_XOOPSPOLL_ENDED_AT', 'Опитування закінчилось %s.');
define('_MD_XOOPSPOLL_ENDS_ON', 'Голосування в опитуванні завершується %s.');
define('_MD_XOOPSPOLL_SEE_AT', 'Ви можете побачити результати опитування:');
define('_MD_XOOPSPOLL_SEE_AFTER', 'Ви можете побачити результати опитування, як тільки воно завершиться:');

define('_MD_XOOPSPOLL_ERROR_OPTIONS_MISSING', 'Вам необхідно додати деяких опцій до опитування');
