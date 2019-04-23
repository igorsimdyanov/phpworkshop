# Примеры к книге "Самоучитель PHP 7" Кузнецов Максим, Симдянов Игорь

Книга опытных разработчиков описывает последнюю версию языка разработки серверных сценариев РНР 7. 
Рассмотрены все нововведения языка и связанные с ними изменения в разработке современных Wеb-сайтов. 
Изложение ведется с упором на объектно-ориентированное программирование, шаблоны проектирования, итераторы, 
генераторы, а также взаимодействие с современными базами данных (PostgreSQL и Redis).

В конце глав приведены более 100 заданий для закрепления материала и освоения не вошедших в книгу разделов языка.

## Глава 3. Быстрый старт
[Список примеров:](start)

- [Простейший PHP-скрипт.](start/index.php)
- [Альтернативные теги.](start/shortags.php)
- [Допускается несколько PHP-вставок в HTML-код.](start/few.php)
- [Завершающий тег ?> можно опустить.](start/missing.php)
- [Использование точки с запятой.](start/semicolumn.php)
- [Альтернативная запись скрипта из листинга 3.5.](start/mech.php)
- [Составное выражение.](start/curly.php)
- [Составное выражение в нескольких PHP-вставках.](start/fews.php)
- [Комментарии.](start/comments.php)
- [Комментарии действуют только внутри **\<?php** и **?\>**.](start/into.php)
- [Комментарий в списке аргументов функции.](start/position.php)
- [Использование инструкции include.](start/include.php)
- [included.php](start/included.php)

## Глава 4. Переменные и типы данных
[Список примеров:](variables)

- [Зависимость переменных от регистра.](variables/case_sensitive.php)
- [Объявление чисел.](variables/number_set.php)
- [Инициализация переменных одним значением.](variables/multi_set.php)
- [Объявление целочисленных переменных.](variables/integer.php)
- [Объявление вещественных чисел.](variables/double.php)
- [Объявление переменной логического типа.](variables/boolean.php)
- [Объявление строки.](variables/string.php)
- [Двойные кавычки.](variables/quotes.php)
- [Подстановка переменной.](variables/interpolation.php)
- [Экранирование символа $.](variables/interpolation_escape.php)
- [Экранирование двойных кавычек.](variables/quotes_escape.php)
- [Одиночные кавычки.](variables/quotes_unsecape.php)
- [Границы переменной.](variables/interpolation_quotes.php)
- [Использование обратных кавычек.](variables/back_quotes.php)
- [Использование последовательности <<<.](variables/here.php)
- [Использование переменных в последовательности <<<.](variables/interpolation_here.php)
- [Обращение к несуществующей переменной.](variables/notice.php)
- [Использование константы null.](variables/null.php)
- [Использование конструкции unset().](variables/unset.php)
- [Использование конструкции isset().](variables/isset.php)
- [Использование конструкции empty().](variables/empty.php)
- [Использование функции gettype().](variables/gettype.php)
- [Использование функции is_int().](variables/is_int.php)
- [Использование функций is_float() и is_double().](variables/is_float.php)
- [Использование функций gettype() при анализе типов данных float и double.](variables/gettype_float.php)
- [Автоматическое преобразовние строки в число.](variables/cast.php)
- [Преобразование сложных строк в число.](variables/cast_string.php)
- [Преобразование к логическому типу.](variables/cast_boolean.php)
- [Преобразовние типа float к int.](variables/float_to_int.php)
- [Определение четности числа.](variables/is_even.php)
- [Использование функции settype().](variables/settype.php)
- [Использование функции intval().](variables/intval.php)
- [Создание динамической переменной.](variables/dynamic.php)
- [Использование функции eval().](variables/eval.php)
- [Динамическое имя переменной.](variables/eval_var.php)
- [cast_resource.php](variables/cast_resource.php)

## Глава 5. Классы и объекты
[Список примеров:](classes)
- [Объявление класса.](classes/my_class.php)
- [Класс точки Point.](classes/point.php)
- [Попытка повторного определения класса Point.](classes/redeclare.php)
- [Попытка повторного включения класса Point.](classes/redeclare_require.php)
- [Удачная попытка повторного включения класса Point.](classes/redeclare_require_once.php)
- [Создание объекта точки.](classes/point_object.php)
- [Объект - это обычная переменная.](classes/point_var.php)
- [Явное уничтожение объекта.](classes/point_unset.php)
- [Попытка использование переменной класса.](classes/class_scope.php)
- [Класс PrivatePoint.](classes/private_point.php)
- [Попытка присваивания значений переменным объкта.](classes/private_point_use.php)
- [Переменные объекта независимы.](classes/point_unrelated.php)
- [Объявление статической переменной.](classes/my_static.php)
- [Использование статических переменных.](classes/static_use.php)
- [Оператор = с переменными.](classes/vars.php)
- [Оператор = с объектами.](classes/objects.php)
- [Создание ссылок для обычных переменных.](classes/links.php)
- [Клонирование объекта.](classes/clone.php)


