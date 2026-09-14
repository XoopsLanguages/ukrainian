<?php
//
// _LANGCODE: uk
// _CHARSET : UTF-8
// Translator: XOOPS Translation Team

$content .= "<h3>Ваш сайт</h3>
<p>Тепер ви можете перейти на <a href='../index.php'>домашню сторінку вашого сайту</a>.</p>
<h3>Підтримка</h3>
<p>Відвідайте <a href='https://xoops.org/' rel='external'>Проект XOOPS</a></p>
<p><strong>УВАГА:</strong> Ваш сайт наразі містить мінімальну функціональність. 
Будь ласка, відвідайте <a href='https://xoops.org/' rel='external' title='XOOPS Web Application System'>xoops.org</a> 
щоб дізнатися більше про розширення XOOPS за допомогою <em>модулів</em> для текстових сторінок, фотогалерей, форумів тощо, 
а також про налаштування вигляду XOOPS за допомогою <em>тем</em>.</p>
";

$content .= "<h3>Конфігурація безпеки</h3>
<p>Інсталятор спробує налаштувати ваш сайт з міркувань безпеки. Перевірте ще раз, щоб переконатися:
<div class='confirmMsg'>
Файл <em>mainfile.php</em> доступний лише для читання.<br>
Видаліть папку <em>{$installer_modified}</em> (або <em>install</em>, якщо інсталятор не перейменував її автоматично) з вашого сервера.
</div>
</p>
";
