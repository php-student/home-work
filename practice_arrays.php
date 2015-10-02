<?php
error_reporting(E_ALL); # замечеть все ошибки
ini_set("display_errors", 1);
echo 'Задание 1<br />';
/*Задание 1.
Напишите функцию, которая возвращает протокол заданного url-а. Например:
1) для https://vk.com/php_150915 - https
2) для http://php.net/manual/ru/ref.strings.php - http
3) для file:///home/projects/config.php - file
*/
$url = 'https://vk.com/php_150915';
function get_protocol($url) {
  $protocol = strstr($url, ':', true);
  return "Результат \"{$protocol}\"";
    };
echo get_protocol($url);

echo '<br /><br />Задание 2<br />';
/*Задание 2.
Напишите функцию, которая возвращает в ассоциативном массиве компоненты заданного url-а. 
Например для http://www.w3resource.com/php-exercises/php-basic-exercises.php:
array(
    'protocol' => 'http',
    'host' => 'www.w3resource.com',
    'uri' -> '/php-exercises/php-basic-exercises.php',
);
*/
$url = 'http://www.w3resource.com/php-exercises/php-basic-exercises.php';
function three_parts($url) {
    $ar_url = explode('://', $url);

    var_dump($ar_url);
}
three_parts($url);

echo '<br /><br />Задание 3<br />';
/*Задание 3.
Напишите функцию, которая возвращает значение первого элемента массива,
заданного в качетсве параметра функции.
*/
$ar = array('key1' => 'value1', 'key2' => 'value2');
function first_elem ($ar) {
    foreach ($ar as $value) {
    return $value; # return завершает цикл и не нужен break
    }
}
first_elem($ar);

echo '<br /><br />Задание 4<br />';
/*
Задание 4.
Напишите функцию, которая удаляет заданный элемент из заданного нумерованного массива,
при этом после удаления ключи нормализованы - нет пропусков, например:
исходный массив: 
array(5) { [0]=> int(1) [1]=> int(2) [2]=> int(3) [3]=> int(4) [4]=> int(5) } 
после удаления 4-ого элемента:
array(4) { [0]=> int(1) [1]=> int(2) [2]=> int(3) [3]=> int(5) }
*/
$ar = array(1,2,3,4,5);
$del_elem = 2;

function del_elem($ar, $del_elem) {
    unset($ar["$del_elem"]);
    $ar_new = array();
    foreach ($ar as $value) {
        //array_push($ar_new, "$value");
        $ar_new[] = $value; #  Как вариант, более простой.
    }
    return $ar_new;
    //var_dump($ar_new);
}
$rrr = del_elem($ar, $del_elem);
var_dump($rrr);

echo '<br /><br />Задание 5<br />';
/*
Задание 5.
Напишите функцию, которая вставляет заданный элемент
в задданную позицию нумерованного массива, например:
исходный массив - array(1, 2, 3, 4, 5)
после вставки '@' на 3 позицию - array(1, 2, 3, '@', 4, 5);
*/
$ar = array(1,2,3,4,5);
$elem = '@';
$pos = '3';

function add_elem($ar, $elem, $pos) {
    $ar_new = array();
    foreach ($ar as $key => $value) {
        if ($key == $pos) {
            $ar_new[] = $elem;
        }
        $ar_new[] = $value;
    }
    return $ar_new;
}
$rrr = add_elem($ar, $elem, $pos);
var_dump($rrr);

echo '<br /><br />Задание 6<br />';
/*
Задание 6.
Напишите функцию, которая сортирует массив заданный асоциативный массив
(ключи строки, значения числа):
a) в порядке возрастания значений;
b) в порядке возрастания ключей;
c) в порядке убывания значений;
d) в порядке убывания ключей;
Порядок сортировки - параметр функции.
*/
//$ar = array('3' => '11','4' => '13','5' => '18','1' => '12','2' => '10',)*/
$ar = array(4,5,6,8,1);
asort($ar);
print_r($ar);

echo '<br /><br />Задание 7<br />';
//Пусть далее у вас есть информация по 3 самым населенным городам стран в следующем виде:
$ar = array(
    'Russia' => array(
        'Moscow' => array( 'population' => 10000000, 'area' => 2723),
        'St.Petersberg' => array( 'population' => 5000000, 'area' => 2423),
        'Novosibirsk' => array( 'population' => 1500000, 'area' => 2124),
    ),
    'USA' => array(
        'New-York' => array( 'population' => 15000000, 'area' => 4123),
        'Los-Angeles' => array( 'population' => 15000000, 'area' => 3120),
        'Chicago' => array( 'population' => 8000000, 'area' => 5123),
    ),
    'China' => array(
        'Beijing' => array( 'population' => 12000000, 'area' => 3126),
        'Shanghai' => array( 'population' => 14000000, 'area' => 5625),
        'Taibei' => array( 'population' => 3000000, 'area' => 1123), 
    ),
);
/*Напишите функцию, которая получает из данных выше список все присутствующих там городов.*/
function city($ar) {
    $ar_city = array();
    foreach ($ar as $country) {
        foreach ($country as $key => $value) {
            $ar_city[] = $key;
        }
    }
    return $ar_city;
}
$rrr = city($ar);
print_r($rrr);

echo '<br /><br />Задание 8<br />';
/*
Задание 8.
Напишите функцию, которая получает из данных выше среднее население среди всех городов.
*/
function avg_population($ar) {
    $ar_population = array('all_population' => '0', 'cities_num' => '0');
    foreach ($ar as $country) {
        foreach ($country as $city_data) {
            $ar_population['all_population'] = $ar_population['all_population'] + $city_data['population'];
            $ar_population['cities_num']++;
        }
    }
    return ($ar_population['all_population'] / $ar_population['cities_num']);
}
$rrr = round(avg_population($ar));
echo "Среднее население примерно = {$rrr} человек";

echo '<br /><br />Задание 9<br />';
/*
Задание 9.
Напишите функцию, которая находит самый многонаселенный город и его население.
*/
function bigestCity($ar) {
    $ar_new = array();
    foreach ($ar as $country) {
        foreach ($country as $key => $cityData) {
            $city = $key;
            $cityPop = $cityData['population'];
            $ar_new[$city] = $cityPop;
        }
    }
    arsort($ar_new);
    $memory = 0;
    foreach ($ar_new as $key => $value) {
        if ($memory == 0) {
            echo "$key, население $value человек" . "<br />";
            $memory = $value;
        }
        else {
            if ( ($memory - $value) == 0 ) {
              echo "$key, население $value человек" . "<br />";  
            }
            else break;
        }
        
    }
}
bigestCity($ar);

echo '<br /><br />Задание 10<br />';
/*
Задание 10.
Напишите функцию, которая находит страну, у которой наименьшее суммарное население 3-х самых населенных городов.
*/
function numBigestCities($ar, $num_city) {
    $ar_result = array();
    foreach ($ar as $country => $countryData) {
        $ar_pop = array();
        foreach ($countryData as $cityData) {
            $ar_pop[] = $cityData['population'];
        }
        /// Тут этот массив отсортировался по убыванию и нашлась сумма трех самых крупных городов
        rsort($ar_pop);
        // Сумма трех самых первых (крупных) города
        $i = 0;
        $sum = 0;
        foreach ($ar_pop as $value) {
            $sum = $sum + $value;
            $i++;
            if ($i == $num_city) break;
        }
        unset($ar_pop);
        // Добавляется элемент в новый масси Страна => Сумма населения
        $ar_result[$country] = $sum;
    }
    // Сортируем по возрастанию
    asort($ar_result);
    return $reee = iElem($ar_result, 0);
}
$rrr = numBigestCities($ar, 3);
print_r($rrr);

echo '<br /><br />Задание 11<br />';
/*
Задание 11.
Напишите функцию, которая находит самый густонаселенный город по кол-ву жителей на еденицу площади.
*/
function mostPopulousCity ($ar) {
    foreach ($ar as $country) {
        foreach ($country as $city => $cityData) {
            $pop = $cityData['population'];
            $area = $cityData['area'];
            $populous = ($pop / $area);
            $ar_new[$city] = $populous;
        }
    }
    arsort($ar_new);
    //return $ar_new;

    return $ree = iElem($ar_new, 0);
}
$rrr = mostPopulousCity($ar);
print_r($rrr);

/*==================================================================
Есть API, которое по заданному городу (параметр q) возвращает
информацию о текущей погоде, например:
http://api.openweathermap.org/data/2.5/weather?q=Novosibirsk
==================================================================*/
echo '<br /><br />Задание 12<br />';
/*
Задание 12.
Напишите функцию, которая по заданному городу возвращает текущую температуру.
*/
$api = 'http://api.openweathermap.org/data/2.5/weather?q=';
$q = "Moscow";

function getCurrentTemp($api, $q) {
    $api_ar = array($api, $q);
    $api_string = implode($api_ar);
    // Всасываем API:
    $json_string = file_get_contents($api_string);
    $ar = json_decode($json_string, true);

    $result = $ar['main']['temp'];
    return $result;
    
}
$temp = getCurrentTemp($api, 'Okinawa');
print_r($temp);

echo '<br /><br />Задание 13<br />';
/*
Задание 13.
Напишите функцию, которая находит температуру в самом северном из заданных
в качестве параметров городов.
*/
$api = 'http://api.openweathermap.org/data/2.5/weather?q=';
$cities = array('Moscow', 'Novosibirsk', 'Norilsk', 'London', 'Okinawa');

/* Самый северный город - это у которого широта ближе к 90 градусов
(самый южный - с широтой 0 град) В нашем случае это параметр 'lat'.
*/
function getNorthCityTemp($api, $cities) {   
    $lat = 0; # Начальная широта - самый юг.
    foreach ($cities as $value) { # Находим название города из перечня-массива.
        $city = $value;
        // Получаем полную строку api с городом 
        $api_ar = array($api, $city);
        $api_string = implode($api_ar);
        // Всасываем API:
        $json_string = file_get_contents($api_string);
        $ar = json_decode($json_string, true); 
        if ($ar['coord']['lat'] > $lat) { # Если находится широта большая по значению, то...
            $lat = $ar['coord']['lat']; # ...берем на ум этот город и...
            $resultCity = $city; # ...запоминаем требуемые данные из задачи: название города и...
            $temp = $ar['main']['temp']; # ...температуру.
        }
    }
    return array("$lat","$resultCity","$temp",);
}
$ar = getNorthCityTemp($api, $cities);
print_r($ar);

/*==================================================================
Есть API, которое по заданному городу (параметр q) возвращает прогноз погоды
на заданное кол-во дней (параметр cnt), например:
http://api.openweathermap.org/data/2.5/forecast/daily?q=Novosibirsk&cnt=7
==================================================================*/
echo '<br /><br />Задание 14<br />';
/*
Задание 14.
Напишите функцию, которая из заданных городов выбирает
самый теплый город на ближайших к текущей дате выходных
(если текущая дата выпадает на выходные (сб или вс), то берутся эти 2 дня).
*/
$api = 'http://api.openweathermap.org/data/2.5/forecast/daily?q=Novosibirsk&cnt=7';
$cities = array('Moscow', 'Novosibirsk', 'Norilsk', 'London', 'Okinawa'); 






echo '<br /><br />Вывод i-го элемента массива<br />';
/*
Задача - бонус.
*/
$ar = array(134,2,3,5,6,78,8,66,68,67);
function iElem($ar, $num) {
    $i = 0;
    foreach ($ar as $key => $value) {
        if ($i == $num && isset($value)) {
            $result = "{$key} : {$value}";
            break;
        }
        else {
            $result = 'Неверный номер элемента!';
        }
        $i++;
    }
    return $result;
}
$element = iElem($ar,5);
echo $element;




















