<?php
// $Id: admin.php 12363 2014-03-08 10:39:06Z beckmi $
// _LANGCODE: en
// _CHARSET : UTF-8
// Translator: XOOPS Translation Team
define('_PROFILE_AM_FIELD',"Поле");
define('_PROFILE_AM_FIELDS',"Поля");
define('_PROFILE_AM_CATEGORY',"Категорія");
define('_PROFILE_AM_STEP',"Крок");
define('_PROFILE_AM_SAVEDSUCCESS',"%s успішно збережені");
define('_PROFILE_AM_DELETEDSUCCESS',"%s успішно видалені");
define('_PROFILE_AM_RUSUREDEL',"Ви впевнені, що хочете видалити %s");
define('_PROFILE_AM_FIELDNOTCONFIGURABLE',"Поле не налаштовується.");
define('_PROFILE_AM_ADD',"Додати %s");
define('_PROFILE_AM_EDIT',"Редагувати %s");
define('_PROFILE_AM_TYPE',"Тип поля");
define('_PROFILE_AM_VALUETYPE',"Тип значення");
define('_PROFILE_AM_NAME',"Ім'я");
define('_PROFILE_AM_TITLE',"Назва");
define('_PROFILE_AM_DESCRIPTION',"Опис");
define('_PROFILE_AM_REQUIRED',"Вимоги?");
define('_PROFILE_AM_MAXLENGTH',"Максимальна довжина");
define('_PROFILE_AM_WEIGHT',"Вага");
define('_PROFILE_AM_DEFAULT',"За умовчанням");
define('_PROFILE_AM_NOTNULL',"Не нульовий?");
define('_PROFILE_AM_ARRAY',"Послідовність");
define('_PROFILE_AM_EMAIL',"Електронна пошта");
define('_PROFILE_AM_INT',"Інтегроване");
define('_PROFILE_AM_TXTAREA',"Текстова площа");
define('_PROFILE_AM_TXTBOX',"Текстове поле");
define('_PROFILE_AM_URL',"URL");
define('_PROFILE_AM_OTHER',"Інше");
define('_PROFILE_AM_FLOAT',"Плаваюча точка");
define('_PROFILE_AM_DECIMAL',"Десяткове число");
define('_PROFILE_AM_UNICODE_ARRAY',"Юнікод послідовність");
define('_PROFILE_AM_UNICODE_EMAIL',"Юнікод електороної пошти");
define('_PROFILE_AM_UNICODE_TXTAREA',"Юнікод текстової площи");
define('_PROFILE_AM_UNICODE_TXTBOX',"Юнікод текстового поля");
define('_PROFILE_AM_UNICODE_URL',"Юнікод URL");
define('_PROFILE_AM_PROF_VISIBLE_ON',"Поле відображається в профілі цих груп");
define('_PROFILE_AM_PROF_VISIBLE_FOR',"Поле відображається в профілі для цих груп");
define('_PROFILE_AM_PROF_VISIBLE',"Видимість");
define('_PROFILE_AM_PROF_EDITABLE',"Поле для редагування з профілю");
define('_PROFILE_AM_PROF_REGISTER',"Показати в реєстраційній формі");
define('_PROFILE_AM_PROF_SEARCH',"Пошук цими групами");
define('_PROFILE_AM_PROF_ACCESS',"Профіль доступний цим группам");
define('_PROFILE_AM_PROF_ACCESS_DESC',
        "<ul>" .
        "<li>Групи адміна: Якщо користувач належить до адмін груп, поточний користувач має доступ якщо та тільки якщо одиній з груп поточних користувачів дозволено доступ до адмін групи;інакше</li>" .
        "<li>Небазові групи: Якщо користувач нежить до однієї чи більше небазових груп (НЕ адмін, користувач, анонім), поточний користувач має доступ якщо та тільки якщо одні з груп поточного користувача дозволено дозволити будь-якій з небазових груп;інакше</li>" .
        "<li>Група Користувача: Якщо користувач належить до тільки групи користувача, поточний користувач має доступ якщо та тільки якщо одній з його груп дозволено доступ до групи користувача</li>" .
        "</ul>");
define('_PROFILE_AM_FIELDVISIBLE',"Поле ");
define('_PROFILE_AM_FIELDVISIBLEFOR'," видиме для ");
define('_PROFILE_AM_FIELDVISIBLEON'," перегляд профілю ");
define('_PROFILE_AM_FIELDVISIBLETOALL',"- Усім");
define('_PROFILE_AM_FIELDNOTVISIBLE',"не видиме");
define('_PROFILE_AM_CHECKBOX',"Прапорець");
define('_PROFILE_AM_GROUP',"Вибір групи");
define('_PROFILE_AM_GROUPMULTI',"Багатозначний вибір групи");
define('_PROFILE_AM_LANGUAGE',"Вибір мови");
define('_PROFILE_AM_RADIO',"Радіо кнопки");
define('_PROFILE_AM_SELECT',"Обрати");
define('_PROFILE_AM_SELECTMULTI',"Багатозначний вибір групи");
define('_PROFILE_AM_TEXTAREA',"Текстова площа");
define('_PROFILE_AM_DHTMLTEXTAREA',"DHTML Текстова площа");
define('_PROFILE_AM_TEXTBOX',"Текстове поле");
define('_PROFILE_AM_TIMEZONE',"Часовий пояс");
define('_PROFILE_AM_YESNO',"Радіо Так\Ні");
define('_PROFILE_AM_DATE',"Дата");
define('_PROFILE_AM_AUTOTEXT',"Авто текст");
define('_PROFILE_AM_DATETIME',"Дата та час");
define('_PROFILE_AM_LONGDATE',"Повна дата");
define('_PROFILE_AM_ADDOPTION',"Додати варіант");
define('_PROFILE_AM_REMOVEOPTIONS',"Видалили варіант");
define('_PROFILE_AM_KEY',"Збережене значення");
define('_PROFILE_AM_VALUE',"Текст, що буде відображений");
// User management
define('_PROFILE_AM_EDITUSER',"Редагувати користувача");
define('_PROFILE_AM_SELECTUSER',"Вибрати користувача");
define('_PROFILE_AM_ADDUSER',"Додати користувача");
define('_PROFILE_AM_THEME',"Тема");
define('_PROFILE_AM_RANK',"Ранг");
define('_PROFILE_AM_USERDONEXIT',"Користувач не існує!");
define('_PROFILE_MA_USERLEVEL',"Рівень користувача");
define('_PROFILE_MA_ACTIVE',"Активний");
define('_PROFILE_MA_INACTIVE',"Неактивний");
define('_PROFILE_AM_USERCREATED',"Користувач створений");
define('_PROFILE_AM_CANNOTDELETESELF',"Видалення Вашого акаунту не дозволено - використайте свій профіль, щоб видалити ваш особистий акаунт");
define('_PROFILE_AM_CANNOTDELETEADMIN',"Видалення акаунту адміністратора не дозволено");
define('_PROFILE_AM_NOSELECTION',"Жоден користувач не обраний");
define('_PROFILE_AM_USER_ACTIVATED',"Користувач активован");
define('_PROFILE_AM_USER_DEACTIVATED',"Користувач деактивован");
define('_PROFILE_AM_USER_NOT_ACTIVATED',"Помилка: Користувач НЕ активован");
define('_PROFILE_AM_USER_NOT_DEACTIVATED',"Помилка: Користувач НЕ деактивован");
define('_PROFILE_AM_STEPNAME',"Ім'я кроку");
define('_PROFILE_AM_STEPORDER',"Порядок кроку");
define('_PROFILE_AM_STEPSAVE',"Зберегти після кроку");
define('_PROFILE_AM_STEPINTRO',"Опис кроку");
//1.62
define('_PROFILE_AM_ACTION','Дія');
//1.63
define('_PROFILE_AM_REQUIRED_TOGGLE','Перемикання необхідного поля');
define('_PROFILE_AM_REQUIRED_TOGGLE_SUCCESS','Необхідне поле успішно змінено ');
define('_PROFILE_AM_REQUIRED_TOGGLE_FAILED','Зміна необхідного поля не вдалася');
define('_PROFILE_AM_SAVESTEP_TOGGLE','Перемикання зберегти');
define('_PROFILE_AM_SAVESTEP_TOGGLE_SUCCESS','Зберегти після кроку успішно змінено');
define('_PROFILE_AM_SAVESTEP_TOGGLE_FAILED',"Зміни 'Зберегти після кроку' не вдалося");
