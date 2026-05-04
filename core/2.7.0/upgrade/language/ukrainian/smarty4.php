<?php

// _LANGCODE: uk
// _CHARSET : UTF-8
// Translator: XOOPS Translation Team

define('_XOOPS_SMARTY4_MIGRATION', 'XOOPS Перехід на Smarty4');

define('_XOOPS_SMARTY4_SCANNER_RESULTS', 'Результати сканування');
define('_XOOPS_SMARTY4_SCANNER_RUN', 'Запустіть сканування');
define('_XOOPS_SMARTY4_SCANNER_END', 'Вийти зі сканера');
define('_XOOPS_SMARTY4_SCANNER_RULE', 'Правило');
define('_XOOPS_SMARTY4_SCANNER_MATCH', 'Збіг');
define('_XOOPS_SMARTY4_SCANNER_FILE', 'Файл');
define('_XOOPS_SMARTY4_SCANNER_FIXED', 'Виправити кількість');
define('_XOOPS_SMARTY4_SCANNER_MANUAL_REVIEW', 'Потрібна перевірка вручну');
define('_XOOPS_SMARTY4_SCANNER_AUTOFIX', 'Може бути автоматично виправлено: кожну змінну елемента буде перейменовано шляхом додавання "_item" (наприклад, "foo" стане "foo_item").');
define('_XOOPS_SMARTY4_SCANNER_NOT_WRITABLE', 'Не можна записувати');

define('_XOOPS_SMARTY4_RESCAN_OPTIONS', 'Параметри повторного сканування');

define('_XOOPS_SMARTY4_FIX_BUTTON', 'Установіть прапорець «Так» нижче, а потім натисніть кнопку «Запустити сканування», щоб спробувати автоматично виправити виявлені проблеми.');
define('_XOOPS_SMARTY4_SCANNER_MARK_COMPLETE', 'Позначити як завершене');

define('_XOOPS_SMARTY4_TEMPLATE_DIR', 'Каталог шаблонів (необов’язково)');
define('_XOOPS_SMARTY4_TEMPLATE_EXT', 'Розширення шаблону (необов’язково)');


define(
    '_XOOPS_SMARTY4_SCANNER_OFFER',
    <<<'EOT'
<h3>XOOPS 2.7.0 вносить значні зміни: Smarty 4</h3>

<p>На жаль, ця зміна може потенційно порушити роботу деяких старих тем. Тому, перш ніж продовжити оновлення, переконайтеся, що ви виконали такі дії:

<li>Запустіть preflight.php, щоб перевірити наявність застарілих тем або шаблонів модулів.</li>
<li>Якщо виявлено будь-які проблеми, ознайомтеся з цим документом, щоб зрозуміти необхідні зміни, перш ніж продовжити оновлення.</li>
<li>Після внесення необхідних змін запустіть preflight.php знову.</li>
<li>Якщо проблем більше немає, можна починати процес оновлення.</li>
</p>
EOT,
);
