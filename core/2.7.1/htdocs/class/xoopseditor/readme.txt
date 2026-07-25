xoopseditor provides a collective of editors for XOOPS

посібник користувача:

1 перевірте файли xoops_version.php у /xoopseditor/, щоб переконатися, що він новіший за ваші поточні

2 завантажити /xoopseditor/ до /XOOPS/class/ => /XOOPS/class/xoopseditor/:
  XOOPS/class/xoopseditor/dhtmlext
  XOOPS/class/xoopseditor/dhtmltextarea
  XOOPS/клас/xoopseditor/fckeditor
  XOOPS/class/xoopseditor/koivi
  XOOPS/class/xoopseditor/textarea
  XOOPS/class/xoopseditor/tinymce

3 налаштуйте параметри, де це можливо
3.1 ./dhtmlext(усі редактори)/мова/: створіть локальний мовний файл на основі english.php
3.3 ./dhtmlext(усі редактори)/editor_registry.php: встановити конфігурації для редактора: порядок - порядок відображення, якщо використовується вибір редактора, 0 для вимкненого; nohtml - працює для не-html синтаксису
3.3 ./FCKeditor/module/: скопіюйте файли до папок модулів, якщо потрібні спеціальні дозволи на завантаження, сховище та параметри редактора
3.3.1 ./FCKeditor/module/fckeditor.config.js: параметри редактора зазвичай не потрібно змінювати
3.3.2 ./FCKeditor/module/fckeditor.connector.php: щоб указати папку для перегляду файлів (та зберігання для завантаження) => XOOPS/uploads/XOOPS_FCK_FOLDER/, потрібно створити папку вручну
3.3.3 ./FCKeditor/module/fckeditor.upload.php: вкажіть дозвіл на завантаження та сховище для завантаження
3.4 XOOPS/uploads/fckeditor/: щоб створити папку, якщо FCKeditor увімкнено, використовується для завантажень, з яких папка завантаження не вказана
3.5 ./tinymce/tinymce/jscripts/: завантажте локальні мовні файли з http://tinymce.moxiecode.com/language.php

4 перевірте назви файлів: для системи, яка враховує регістр імен файлів, переконайтеся, що назви файлів буквально правильні, тобто «FCKeditor» не ідентичний «fckeditor»

5 перевірте /xoopseditor/sampleform.inc.php для посібника з розробки
