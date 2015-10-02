<?php
error_reporting(E_ALL); # замечеть все ошибки
ini_set("display_errors", 1);


echo 'Задание 1<br />';
/*
Напишите php скрипт, который преобразует строку следующим образом:
1) исходная строка - '1,000,000'
2) преобразованная строка - '1000000'
*/
echo str_replace(",", "", "1,000,000");
echo "<br /><br />";

echo 'Задание 2<br />';
/*
Напишите php скрипт, который преобразует строку следующим образом:
1) исходная строка - '194355'
2) преобразованная строка - '19:43:55'
*/
$str = "194355";
$new_str = chunk_split($str, 2, ":");
echo rtrim($new_str, ":");
echo "<br /><br />";

echo 'Задание 3<br />';
/*
Напишите php скрипт, который возвращает последние 3 символа строки:
1) пример исходной строки - 'The quick brown fox jumps over the lazy dog'
2) ожидаемый результат - 'dog'
*/
$str = 'The quick brown fox jumps over the lazy dog';
echo substr($str, -3);
echo "<br /><br />";

echo 'Задание 4<br />';
/*
Напишите php скрипт, который проверяет содержит ли строка указанную строку:
1) исходная строка - 'The quick brown fox jumps over the lazy dog.'
2) строка поиска - 'jump'
*/
$str = 'The quick brown fox jumps over the lazy dog';
$find_str = 'jump';
$result = strpos($str, $find_str);
if ( $result !== false ) {
	echo "Строка $find_str содержится в исходной строке.";
}
else echo "Строка "." $find_str "." не найдена";
############################################################# !!!!!!! КАК ВЫВЕСТИ В ДВОЙНЫХ КАВЫЧКАХ НАЗВАНИЕ ПОДСТРОКИ??? !!!!!!!
echo "<br /><br />";

echo 'Задание 5<br />';
/*
Напишите php скрипт, который из url-а достает имя исполняемого файла:
1) исходный url - 'http://www.php.net/string_functions/list.php'
2) ожидаемый результат - 'list.php'
*/
$str = 'http://www.php.net/string_functions/listing.php';
function get_filename ($str) {
	$strlen = strlen($str); # Вычисляем длину всей строки
    $slash_pos = strrpos($str, '/'); # Вычисляем позицию последнего слеша
    $filename_len = ($strlen - $slash_pos) - 1;
    echo substr($str, -$filename_len);
}
get_filename($str);
echo "<br /><br />";

echo 'Задание 6<br />';
/*
Напишите php скрипт, который из url-а достает имя исполняемого файла:
1) исходный url - 'http://www.php.net/string_functions/list.php?utm_source=google'
2) ожидаемый результат - 'list.php'
*/
$url = 'http://www.php.net/string_functions/list.php?utm_source=google';
$path = parse_url($url, PHP_URL_PATH); # получаем путь к файлу вида /string_functions/list.php
get_filename($path); # Используем ранее написанную функцию для определения имени файла
echo "<br /><br />";

echo 'Задание 7<br />';
/*
Напишите php скрипт, который из email-а пользователя получает его email ID:
1) исходный email - 'nasedkin@alawar.com'
2) ожидаемый email ID - 'nasedkin'
*/
/*$email = 'nasedkin@alawar.com';
echo strstr($email, '@', true);

*/
$email  = 'name@example.com';
$user = strstr($email, '@', TRUE); // Начиная с PHP 5.3.0
echo $user;
########################################################### !!!!!!! ЕСТЬ ЛИ ПОДОБНОЕ, НО С КОНЦА СТРОКИ??? !!!!!!!
echo "<br /><br />";

echo 'Задание 8<br />';
/*
Напишите php скрипт, который из заданной строки генерирует случайный пароль длиной 8 символов:
1) строка с символами для пароля: '1234567890ABCDEFGHIJKLMNOPQRSTUVWXYZabcefghijklmnopqrstuvwxyz'
*/
$str = '1234567890ABCDEFGHIJKLMNOPQRSTUVWXYZabcefghijklmnopqrstuvwxyz';
$arr = str_split($str, 1); # Разбираем на массив по одному элементу
$rand_keys = array_rand($arr, 8);
$pass_array = array($arr[$rand_keys[0]],
	                $arr[$rand_keys[1]],
	                $arr[$rand_keys[2]],
	                $arr[$rand_keys[3]],
	                $arr[$rand_keys[4]],
	                $arr[$rand_keys[5]],
	                $arr[$rand_keys[6]],
	                $arr[$rand_keys[7]],
	                $arr[$rand_keys[8]]);
$password = implode($pass_array);
echo $password;
echo "<br /><br />";

echo 'Задание 9<br />';
/*
Напишите php скрипт, который находит первые различные символы в 2-х строках:
1) строки - 'football' и 'footboll'
2) ожидаемый результат -  'a' и 'o' на пятой позиции
*/
$str1 = 'football';
$str2 = 'footboll';
$arr_str1 = str_split($str1, 1); # Разбиваем на массив первую строку
$arr_str2 = str_split($str2, 1); # Разбиваем на массив вторую строку
$i = 0;
while (++$i) {
	if ($arr_str1["$i"] !== $arr_str2["$i"]) {
		echo $arr_str1[$i] .' и '. $arr_str2[$i] .' на позиции '.$i;
		echo '"'.$str1.'"';
		break;
	}
}
########################################################### !!!!!!! КАК ВЗЯТЬ А И О В КАВЫЧКИ??? !!!!!!!
echo "<br /><br />";

echo 'Задание 10<br />';
/*
Напишите php скрипт, который печатает все буквы английского алфавита:
1) ожидаемый результат - 'abcdefghijklmnopqrstuvwxyz'
*/
echo "<br /><br />";

echo 'Задание 11<br />';
/*
Напишите php скрипт, который по заданной букве английского алфавита выводит следующую букву:
1) заданная буква 'a', ожидаемый результат - 'b'
2) заданная буква 'я', ожидаемый результат - 'a'
Буквы допустимы только в нижне регистре.
*/
echo "<br /><br />";

echo 'Задание 12<br />';
/*
Напишите php скрипт, который вставляет одну строку в другую в указанное место:
1) строки - 'The brown fox' и 'quick'
2) необходимо поместить слово 'quick' между 'The' и 'brown'
3) ожидаемый результат - 'The quick brown fox'
*/
$str1 = 'The brown fox';
$str2 = 'quick';
$words = explode(" ", $str1, 99);
echo $new_str = $words["0"] .' '. $str2 .' '. $words["1"] .' '. $words["2"];
echo "<br /><br />";

echo 'Задание 12<br />';
/*
Напишите php скрипт, который убирает ведущие нули из заданной строки:
1) пример строки - '000547023.24'
2) ожидаемый результат - '547023.24'
*/
$str = '000547023.24';
echo ltrim($str, "0");












