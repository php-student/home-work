<?php 
error_reporting(E_ALL); # замечеть все ошибки
ini_set("display_errors", 1);
//echo phpinfo();


                               #Задания Strings

//$s = '1,000,000';               # Задание 1
//$s = str_replace(",","", $s);
//echo "$s"; 

//$s = '194355';                    #Задание 2 Спросить про запить substr(substr)
//$out = substr_replace($s, ":", 2, 0);
//$out1 = substr_replace($out, ":", 5, 0);
//echo "$out1";

//$s = 'The quick brown fox jumps over the lazy dog';     #Задание 3
//$out = substr($s,-3,3);
//echo "$out";

//$s = 'The quick brown fox jumps over the lazy dog';     #Задание 4
//$p = strpos($s,'jump');
//if ($p !== false);
//echo "Ok"; 

//$s ='http://www.php.net/string_functions/list.php';        #Задание 5
//$n = strrpos($s,"/");
//$f = strlen($s) - $n;
//$p = substr($s,$n+1,$f);
//echo $p;

//$s = 'http://www.php.net/string_functions/list.php?utm_source=google';   #Задание 6
//$n = strrpos($s,"/");
//$f = strrpos($s,"?") - $n;
//echo substr($s,$n+1,$f-1);

//$s = 'nasedkin@alawar.com';                                  #Задание 7
//$s = substr($s,0,strpos($s,"@"));
//echo $s;

//$s = '1234567890ABCDEFGHIJKLMNOPQRSTUVWXYZabcefghijklmnopqrstuvwxyz';   #Задание 8
//$s = str_shuffle($s);
//echo substr($s,0,8);

//$s = 'football';															#Задание 9
//$s1 = 'footboll';
//$n = strspn($s,$s1);
//echo substr($s,$n,1)." и ".substr($s1,$n,1)." на ".$n." позиции";

//foreach(range('a', 'z') as $letter) {                                   #Задание 10
//    echo $letter;
//}
//echo implode(" ", range("a","z"));

//$s1 =  'The brown fox';                                              #Задание 12
//$s2 = 'quick';
//$n = strpos($s1," ");
//echo substr_replace($s1,$s2,$n,0);

//$s =  '000547023.24';                                              #Задание 13
//echo trim($s,"0");



                            #Задания basic

//$name = 'John';                                                        #Задание 11
//$second_name = 'Doe';
//echo "Hello, I am ".$name." ".$second_name."!";

/*define("OPERATING_SYSTEM","fg");                                    #Задание 21 переделать
if (defined("OPERATING_SYSTEM")) {
	if (OPERATING_SYSTEM == 'WIN') {
	echo "windows operating system";}
elseif (OPERATING_SYSTEM == 'UBUNTU' || 'DEBIAN' || 'GENTOO') echo "linux operating system";
else echo "unknown operating system"; }
else echo "Константа не задана";*/

//define("OPERATING_SYSTEM","fg");
/*function task21(){
	if (defined("OPERATING_SYSTEM")){
	switch(OPERATING_SYSTEM){
		case 'WIN':
		echo "windows operating system";
		break;
		case 'UBUNTU':
		case 'DEBIAN':
		case 'GENTOO':
		echo "linux operating system";
		break;
		default: echo "Unknown operating system";
		break;
	}
}
else echo "Ne!!!!!!!!!!";
}
task21();*/

//$balance = 0;                                                          #Задание 31
//$balance = $balance+3.125;
//if ($balance>1) $balance = $balance-1;
//echo round($balance,2);

//$name = 'John';                                                       #Задание 41
//$nickname = &$name;
//echo "User: '{$nickname}'";

//$name = 'John';                             #Задание 51
//$nickname = 'j.doe';
//unset ($name);
//if (isset($name))
//	echo $name;
//else echo $nickname;

//$a = 3.145;									#Задание 61
//$b = 3.146;
//$e = 0.01;
//if (abs($a-$b) < $e)
//echo "Ok";

//$a = 3.147;
//printf("%.2f",$a);                              #Задание 71 не сделано

//$ar = array(                                      #Задание 81
//	"name" => "John",
//	"sname" => "Doe",
//	);
//	echo "Hello, I am {$ar["name"]} {$ar["sname"]}!";

//$n = 0;                                                   #Задания 91
//$ar = array(
	//1 => array ("name" => "Jhon", "surname"  => "Doe",
		//		   "sex" => "M", "Birth date" => "12.12.2012"),
    //2 => array ("name" => "Fred", "surname"  => "Black",
		//		   "sex" => "M", "Birth date" => "12.12.2001"), 
    //3 => array ("name" => "Kate", "surname"  => "Smith",
		//		   "sex" => "W", "Birth date" => "12.12.2002"));
			//	   foreach($ar as $num => $data){
				//	   print_r ("<br>$num<br>"); 
					//foreach($data as $d => $dan) {
						//print_r ("<br>$d<br>"."$dan");
					//}  
				   //}
//print_r ($ar."<br>");

	                                                                                #Задание НГС
													   
/*	$s = file_get_contents ('http://rabota.ngs.ru/api/v1/vacancies/');
	$ar =json_decode($s,true);
foreach($ar['vacancies'] as $vac){
	$vac[] = $ar['vacancies'];
	$vacTop[] = $vac['header'];
	foreach ($vac['rubrics'] as $rub){
		$rub[] = $vac['rubrics'];
		foreach ($rub as $title){
			$title = $rub['title'];
			$rubtitle[] = $title;
		}
	}
	}
	$rubTop = array_count_values($rubtitle);
arsort($rubTop);
//var_dump($new1);
echo "<pre>";
print_r ($rubTop);
echo "</pre>";
	echo "<pre>";
	print_r($vacTop);
echo "</pre>";*/


																		#Практика 2
	
//	function task1($s){
//		$a = explode(':', $s);
//	echo $a[0];
//	}
//	task1('https://vk.com/php_150915');

	
//	function task2($s){
	//	$a = explode('://', $s);
//		echo $a[0]."<br>";
		//$b = $a[1];
		//$c = explode('/', $b,2);
//		$n = count($b);
//	$uri = $a[$n-2];
//	echo $c[0]."<br>";
//	echo $c[1];
//	return array(
//	'protocol' => $a[0],
	//'host' => $c[0],
	//'uri' => $c[1],);
	//}
	//print_r(task2('http://www.w3resource.com/php-exercises/php-basic-exercises.php')."<br>");
	
	
	
/*	$ar = array('key' => 'val', 'key2' => 'val2');                                                  #Задание 3 Массивы
	$i = 3;
	//reset
	function task3($ar,$i){
		if ($i <= count($ar)){
		$n=0;
	foreach($ar as $s){
		$n++;
		if ($n==$i) {
			return $s;
			break;
		}		
	}
		}
		else echo "Несуществующий элемент массива";
	}
	echo task3($ar,$i);*/
																	#Задание 4 Массивы
/*	$ar = array(1,2,3,4,5,6);
	
	function task4($ar){
		unset($ar[4]);
		$new = array();
		//return array_values($ar);
		foreach($ar as $s){
			$new[]  = $s;
		}
		return $new;
	}
	echo "<pre>";
	print_r(task4($ar));
	echo "</pre>";*/


														//  Задание 5 Массивы
/*	$ar = array(1,2,3,4,5);
	function task5($ar,$i,$elem){
		$new = array();
		foreach($ar as $s => $val){
			if ($s == $i)  {
				$new[] = $elem;
			$new[] = $val;}
			else {$new[] = $val;}
		}
		return $new;
	}
	print_r(task5($ar,3,'$'));*/
	
	//asort(); // сортировка по значениям
	//ksort(); // сортировка по ключам
/*	$ar = array("c" = > 4, "d" = > 3,"r" = > 2,"e" = > 9,"g" = > 6);
	ksort($ar);
	echo "<pre>";
	print_r($ar);
	echo "</pre>"; */
	
	
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

/*													//  Задание 7 Массивы
function task7($ar){
	$new = array();
	foreach ($ar as $key => $val) {
		foreach ($val as $city => $val2) {
		$new[] = $city ;
		
	}
	}
	return $new;
}
echo "<pre>";
print_r(task7($ar));
echo "</pre>";
*/

/*                                          //  Задание 8 Массивы
function task8($ar){
	$i = 0;
	$sum = 0;
	foreach ($ar as $country) {
		foreach ($country as $city) {
			$i++;
			$sum += $city['population'];
	}
	}
	return (int)($sum/$i);
}
echo "<pre>";
print_r("Средняя популяция по городам:".task8($ar));
echo "</pre>";
*/

														//*Задание 9 Массивы Иван
/*function task9($ar){
	foreach ($ar as $country ){
		foreach ($country  as $city => $pop) {
			$town = $city;
			$pop = $pop['population'];
			$citypop[$city] = $pop;
	}
	}
	arsort($citypop);
	return print_r(array_slice($citypop, 1, 1, true));
}
*/
/*														Задание 9 Массивы
function task9($ar) {
	$isFound1Max = false;
	$result = array();
	foreach( $ar as $countryData) {
		foreach( $countryData as $city => $cityData ) {
			if( !$isFound1Max ) {
				$result = array(
					'city' => $city,
					'population' => $cityData['population'],
				);
				$isFound1Max = true;
			} else {
				if( $result['population'] < $cityData['population']) {
					$result = array(
						'city' => $city,
						'population' => $cityData['population'],
					);
				}
			}
		}
	}
	return $result;
}
echo "<pre>";
print_r(task9($ar));
echo "</pre>";
*/
/*
function iElem($ar_new, $num) {
    $i = 0;
    foreach ($ar_new as $key => $value) {
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
print_r($rrr);*/
                                                                                                 #Задание 12 массивы


																								 
																								 //$town = 'Novosibirsk';
/*function gettemp($town){
	$data = file_get_contents('http://api.openweathermap.org/data/2.5/weather?q='.$town);
	$data  = json_decode($data,true);
	$temp = $data['main']['temp'] - 273;
	return (int)$temp;
}
//echo "<pre>";
//print_r("Температура в городе {$town} - ".gettemp($town)." градуса");
//echo "</pre>";
*/


/*														Задание массивы 10
function task10($ar){
	$sum = 0;
	$i = 0;
	foreach ($ar as $country => $val){
		$countryname[]= $country;
		foreach ($val  as $city => $pop) {
			$popa[] = $pop['population'];
		}	
	}
	foreach($popa as $keypop => $valpop){
		$i++;
		if ($i<3){
			$sum += $valpop;}
			elseif ($i==3){
			$sum += $valpop;
			$sumpop[] = $sum;
			}
			else {$i=1; 
			$sum = $valpop;
			}
	}	
$mas = array_combine($countryname,$sumpop);
asort($mas);
	return array_slice($mas, 0, 1, true);
}
echo "<pre>";
print_r(task10($ar));
echo "</pre>";
*/
//															*Задание Массивы 11
/*function task11($ar){
	$sum = 0;
	$i = 0;
	$isFound1Max = False;
	foreach ($ar as $country => $val){
		foreach ($val  as $city => $pop) {
			$a = $pop['area']; 
			$p = $pop['population'];
			if(!$isFound1Max){
				$pa1=$p/$a;
				$res = array(
				'Самый густонаселенный город' => $city);
				$isFound1Max = True;
			}
			else {if ($p/$a>$pa1){
				$res = array(
				'Самый густонаселенный город' => $city);
				$pa1 = $p/$a;
			}			
			}
		}	
	}
	return $res;
}
echo "<pre>";
print_r(task11($ar));
echo "</pre>"
*/
/*																			#Задание 13 Массивы
$cities = require(__DIR__ . '/../morda.mu/data/dbCity.php');

function nothern($cities){
	foreach ($cities as $city => $data){
		$cityname = $data['name'];
		foreach ($data['coord'] as $coord){
			$lat1 = $coord;			
			$lat[$cityname] = $coord;
			break;
		}
	}
	arsort($lat);
	$nothtown = reset($lat);
	$nothtown = key($lat);
	return gettemp($nothtown);
}
echo "<pre>";
print_r("Температура в самом северном городе: ".nothern($cities)." градуса.");
echo "</pre>"
*/

														#Задание Массивы 14


/*
                                               * Задание Треугольник
$x1 = 1;
$y1 = 2;
$x2 = 1;
$y2 = 4;
$x3 = 3;
$y3 = 2;
function rectangle($x1,$x2,$x3,$y1,$y2,$y3){
	$ab = sqrt(pow($x1-$x2,2)+pow($y1-$y2,2));
	$bc = sqrt(pow($x2-$x3,2)+pow($y2-$y3,2));
	$ac = sqrt(pow($x1-$x3,2)+pow($y1-$y3,2));
	$s = 0.5*pow($y1-$y2,2)*$ac;
	return $s;
}
echo (rectangle($x1,$x2,$x3,$y1,$y2,$y3));
*/


require(__DIR__ . '/data/project_functions.php');
															#Задание Дром 1
//Не понял насчет проверки на переменные
//$cities = require(__DIR__ . '/data/dbCity.php');
//$auto = require(__DIR__ . '/data/dbAuto.php');
$currentCity = 'nsk';
$cityAuto = 'tsk';      #Город в котором находиться авто
//echo "<pre>";
//print_r(calculateTheDistance ($cities,$currentCity,$cityauto));
//echo "</pre>"

																#Задание ADS
$ads = array(
' - реклама #1' =>
	array('ссылка - ' => 'http://www.google.com',
	'- текст' => ' - Лучший поисковик в мире!'),
'- реклама #2' =>
	array('- ссылка '=> '- http://www.yandex.ru',
	'- текст'=> ' - Лучший российский поисковик!'),
'- реклама #3' =>
	array('- ссылка' => ' - http://www.opera.ru',
	'- текст' => '- А когда то я была лучшей!'));


function setads()
{
	$curads = '';
	if (!isset($_COOKIE['ads']) || $_COOKIE['ads'] == ' - реклама #3') {
		$curads = " - реклама #1";
	} else {
		if ($_COOKIE['ads'] == ' - реклама #1') {
			$curads = ' - реклама #2';
		} else {
			$curads = ' - реклама #3';
		}
	}

	return $curads;
}
echo setads().'<br>';

function distance_cities($cities,$currentCity,$needDistance)
{
	$ar_city = array();
	foreach ($cities as $name => $val) {
		$code = $name;
		if (calculateTheDistance($cities, $currentCity, $code) <= $needDistance) {
			$ar_city[] = $code;
		}
	}
	return $ar_city;
}
$currentCity = 'nsk';
$needDistance = 200;
$cities = require(__DIR__ . '/data/dbCity.php');
//require(__DIR__ . '/data/project_functions.php');
distance_cities($cities,'nsk',400);
print_r(distance_cities($cities,$currentCity,$needDistance));
?>