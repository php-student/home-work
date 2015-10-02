<?php
// Протоколирование ошибок
// Development
error_reporting(E_ALL); # замечеть все ошибки
ini_set("display_errors", 0);


echo 'Задание 1<br />';
/*
1. Создайте переменную с именем "name" и значением "John".
2. Создайте пременную с именем "second_name" и значением "Doe".
3. Используя созданные переменные, выведите на экран следующую строку:
"Hello, I am John Doe!".
*/
$name = 'John';
$second_name = 'Doe';
echo "Hello, I am $name $second_name!";
echo "<br /><br />";

echo 'Задание 2<br />';
/*
1. Создайте константу с именем "OPERATING_SYSTEM" и значением "WIN".
2. В зависимости от значения константы "OPERATING_SYSTEM" выведите на экран сообщение по слебующей логике:
- если "WIN" то "windows operating system"
- если "UBUNTU", "DEBIAN" или "GENTOO", то "linux operating system"
- иначе "unknown operating system"
3. Перед использованием константы убедиться, что она инициализирована.
*/
define ("OPERATING_SYSTEM", "GENTOO"); 
$checkOS = OPERATING_SYSTEM; 
//var_dump($checkOS);
if (!empty($checkOS)) {
	if ($checkOS == WIN) {
		echo "windows operating system"; }
	elseif ($checkOS == UBUNTU || $checkOS == DEBIAN || $checkOS == GENTOO) {
		echo "linux operating system";
	}
	else { echo "unknown operating system"; }
}
echo "<br /><br />";

echo 'Задание 3<br />';
/*
1. Создайте переменную c именем "balance" и значением 0 (баланс).
2. Увеличте баланс на 3.125.
3. Выполните уменьшение баланса на 1, предварительно проверив такую возможность
(баланс не может быть отрицательным).
4. Выведите баланс с точностью до 2-х знаков.
*/
$balance = 0;
$balance = $balance + 3.125;
if ($balance > 0) {
	--$balance;
	echo round($balance, 2);
}
else { echo "баланс не может быть отрицательным"; }
echo "<br /><br />";

echo 'Задание 4<br />';
/*
1. Создайте переменную с именем "name" и значением "John".
2. Создайте переменную с именем "nickname" таким образм, чтобы ее значение всегда равнялось значению переменной "name".
3. Используя переменные выведите следующее предложение на экран:
"User: 'John'"
*/
$name = 'John';
$nickname = &$name;
echo "User: '$nickname'";
echo "<br /><br />";
unset($name); # Удаление переменных для следующего задания
unset($nickname);

echo 'Задание 5<br />';
/*
1. Создайте переменную с именем "name" и значением "John".
2. Создайте переменную с именем "nickname" и значениеь "j.doe".
3. Удалите переменную "name".
4. Выведите на экран имя пользователя, если оно задано, иначе выведите никнэйм.
*/
$name = 'John';
$nickname = 'j.doe';
unset($name);
if (isset($name)) {
	echo "$name";
}
else echo "$nickname";
echo "<br /><br />";

echo 'Задание 6<br />';
/*
1. Создайте 2 переменных "a" и "b", со значениями 3.145 и 3.146.
2. Если эти переменные равны с точность до 2-х сотых, выведите сообщение "OK".
*/
$a = 3.145;
$b = 3.146;
$epsilon = 0.01;
if ( abs($a - $b) < $epsilon ) echo "Ok";
echo "<br /><br />";

echo 'Задание 7<br />';
/*
1. Создайте переменную "a" со значением 3.147
2. Выполните преобразования над переменной "a" таким образом, чтобы на экран было выведено 3.14
*/
$a = 3.147;
$b = (string)$a; # Преобразуем в строку
$c = substr($b, 0, 4); # Выбираем подстроку начиная с 0 символа и длиной 4 символа
echo $c;
# !!!!!!! МОЖНО ЛИ ВСЕ ЭТО В ОДНУ СТРОЧКУ ЗАПИСАТЬ, БЕЗ ДОП ПЕРЕМЕННЫХ? !!!!!!!
echo "<br /><br />";

echo 'Задание 8<br />';
/*
1. Создайте ассоциативный массив хранящий информацию о пользователе (John Doe):
- имя
- фамилия
2. Используя созданный массив выведите следующую строку:
"Hello, I am John Doe!".
*/
$array = array("name" => "John", "second_name" => "Doe");
echo "Hello, I am $array[name] $array[second_name]!";
echo "<br /><br />";

echo 'Задание 9<br />';
/*
1. В системе есть пользователи (пусть у нас их будет только 3), о каждом из которых известно:
- имя
- фамилия
- пол
- дата рождения
2. Создайте нумерованный масив, каждый элемент которго хранит информацию о пользователе.
3. Выведите имя одного случайного пользователя.
*/
$users = array(
	"1" => array("name" => "Jonh", "second_name" => "Doe", "sex" => "male", "bithday" => "05.07.1981"),
	"2" => array("name" => "Bob", "second_name" => "Tomson", "sex" => "male", "bithday" => "04.03.1980"),
	"3" => array("name" => "Kate", "second_name" => "Moss", "sex" => "female", "bithday" => "01.02.1986"),
);
$rand_keys = array_rand($users, 1);
echo $users[$rand_keys]["name"];








