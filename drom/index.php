<?php
/**
 * Created by PhpStorm.
 * User: nasedkin
 * Date: 25.09.15
 * Time: 15:32
 */

$dbCity = array(
    'nsk' => array(
        'code'  => 'nsk',
        'name'  => 'Novosibitsk',
        'coord' => array(
            'latitude'  => 55.1,
            'longitude' => 82.55,
        ),
    ),
    'krsk' => array(
        'code'  => 'krsk',
        'name'  => 'Krasnoyarsk',
        'coord' => array(
            'latitude'  => 56.01,
            'longitude' => 93.04,
        ),
    ),
    'brnl'  => array(
        'code'  => 'brnl',
        'name'  => 'Barnaul',
        'coord' => array(
            'latitude'  => 53.20,
            'longitude' => 83.46,
        ),
    ),
    'tsk' => array(
        'code'  => 'tsk',
        'name'  => 'Tomsk',
        'coord' => array(
            'latitude'  => 56.29,
            'longitude' => 84.57,
        ),
    ),
    'nzsk' => array(
        'code'  => 'nzsk',
        'name'  => 'Novokuznetsk',
        'coord' => array(
            'latitude'  => 53.44,
            'longitude' => 87.05,
        ),
    ),
);

/*
 * Задание 1.
 *
 * Напишите функцию, которая находит расстояние между 2-мя городами:
 * float|null distance(array $dbCity, string $cityCode1, string $cityCode2);
 * - $dbCity - передаются исходные данные по городам
 * - $cityCode1 - код 1ого города
 * - $cityCode2 - код 2ого города
 * - в результате возвращается число расстояние между 2-мя городами в километрах
 * - если хотя бы одного заданного города нет в исходных данных, возвращать null
 *
 * Для расчета расстояния между двумя точками заданными в виде сферических координат воспользоваться готовым решением:
 * https://www.kobzarev.com/programming/calculation-of-distances-between-cities-on-their-coordinates.html
 * В конце статьи есть готовая функция.
 */
echo 'Задание 1<br />';

function getDistance($dbCity, $cityCode1, $cityCode2) {
    foreach ($dbCity as $cityKey => $cityData) {
        if ($cityKey == $cityCode1) {
            $latA = $cityData['coord']['latitude'];
            $longA = $cityData['coord']['longitude'];  
        }
        elseif ($cityKey == $cityCode2) {
            $latB = $cityData['coord']['latitude'];
            $longB = $cityData['coord']['longitude'];
        }
    }
return calculateTheDistance($latA, $longA, $latB, $longB);
}
$dist = round(getDistance($dbCity, 'tsk', 'nsk'));
echo "Расстояние: {$dist} метров.";

/*
 * Расстояние между двумя точками
 * $φA, $λA - широта, долгота 1-й точки,
 * $φB, $λB - широта, долгота 2-й точки
 * Написано по мотивам http://gis-lab.info/qa/great-circles.html
 * Михаил Кобзарев <kobzarev@inforos.ru>
 *
 */
function calculateTheDistance ($φA, $λA, $φB, $λB) {
    // Радиус земли
    define('EARTH_RADIUS', 6372795);
    // перевести координаты в радианы
    $lat1 = $φA * M_PI / 180;
    $lat2 = $φB * M_PI / 180;
    $long1 = $λA * M_PI / 180;
    $long2 = $λB * M_PI / 180;
 
    // косинусы и синусы широт и разницы долгот
    $cl1 = cos($lat1);
    $cl2 = cos($lat2);
    $sl1 = sin($lat1);
    $sl2 = sin($lat2);
    $delta = $long2 - $long1;
    $cdelta = cos($delta);
    $sdelta = sin($delta);
 
    // вычисления длины большого круга
    $y = sqrt(pow($cl2 * $sdelta, 2) + pow($cl1 * $sl2 - $sl1 * $cl2 * $cdelta, 2));
    $x = $sl1 * $sl2 + $cl1 * $cl2 * $cdelta;
 
    //
    $ad = atan2($y, $x);
    $dist = $ad * EARTH_RADIUS;
 
    return $dist;
}






$dbAuto =
    array(
        array(
            'model' => array(
                'name'  		=> 'Toyota Noah',
                'year'  		=> 2010,
                'run'   		=> 67000,
                'power' 		=> 143,
                'isAutoTrans'	=> true,
                'is4wd'   		=> false,
            ),
            'price' => array(
                'value' 	=> 750000,
                'currency'	=> 'RUB',
            ),
            'cityCode' => 'nsk',
        ),
        array(
            'model' => array(
                'name'  		=> 'Nissan March',
                'year'  		=> 2009,
                'run'   		=> 45142,
                'power' 		=> 90,
                'isAutoTrans'	=> true,
                'is4wd'   		=> false,
            ),
            'price' => array(
                'value' 	=> 290000,
                'currency'	=> 'RUB',
            ),
            'cityCode' => 'nsk',
        ),
        array(
            'model' => array(
                'name'  		=> 'Nissan Navara',
                'year'  		=> 2008,
                'run'   		=> 88000,
                'power' 		=> 175,
                'isAutoTrans'	=> true,
                'is4wd'   		=> true,
            ),
            'price' => array(
                'value' 	=> 650000,
                'currency'	=> 'RUB',
            ),
            'cityCode' => 'krsk',
        ),
        array(
            'model' => array(
                'name'  		=> 'Toyota RAV4',
                'year'  		=> 2011,
                'run'   		=> 56000,
                'power' 		=> 170,
                'isAutoTrans'	=> true,
                'is4wd'   		=> true,
            ),
            'price' => array(
                'value' 	=> 1080000,
                'currency'	=> 'RUB',
            ),
            'cityCode' => 'brnl',
        ),
        array(
            'model' => array(
                'name'  		=> 'Chevrolet Niva',
                'year'  		=> 2014,
                'run'   		=> 56000,
                'power' 		=> 80,
                'isAutoTrans'	=> false,
                'is4wd'   		=> true,
            ),
            'price' => array(
                'value' 	=> 603000,
                'currency'	=> 'RUB',
            ),
            'cityCode' => 'tsk',
        ),
        array(
            'model' => array(
                'name'  		=> 'Renault Duster',
                'year'  		=> 2015,
                'run'   		=> 0,
                'power' 		=> 114,
                'isAutoTrans'	=> false,
                'is4wd'   		=> true,
            ),
            'price' => array(
                'value' 	=> 812000,
                'currency'	=> 'RUB',
            ),
            'cityCode' => 'nzsk'
        ),
    );

/*
 * Задание 2.
 *
 * Напишите функцию, которая находит нужные объявления из базы:
 * array filter(array $dbAuto, array $dbCity, string $currCityCode, float $needDistance, bool $is4wd, bool $isAutoTrans)
 * - $dbAuto - база с объявлениями
 * - $dbCity - база с городами
 * - $currCityCode - код города, в котором мы находимся
 * - $needDistance - расстояние, на котором нам интересны объявления
 * например, мы находимся в nsk и нам интересны все объявления, машины в которых находятся не далее 500км, тогда
 * $currCityCode='nsk', $needDistance=500
 * - $is4wd - принимает значения true|false, если true - то выбрать авто только с 4wd,
 * если false - то выбрать только переднеприводные авто
 * - $isAutoTrans - принимает значения true|false, если true - то выбрать авто с автоматической коробкой,
 * если false - то выбрать авто только на механике
 * - в результате возвращается массив содержащий названия моделей, удовлетворяющих параметрам поиска,
 * если ничего не нашлось, возвращать пустой массив
 */
echo '<br /><br />Задание 2<br />';

function getFilteredCars($dbAuto, $dbCity, $currCityCode, $needDistance, $is4wd, $isAutoTrans) {
    # Определяем какие города находятся в заданном радиусе. Делаем из них массив.
    $needCities = array();

    # Координаты заданного города:
    $latCurrCity = $dbCity[$currCityCode]['coord']['latitude'];
    $longCurrCity = $dbCity[$currCityCode]['coord']['longitude'];

    foreach ($dbCity as $cityKey => $cityData) {
        $latAnotherCity = $cityData['coord']['latitude'];
        $longAnotherCity = $cityData['coord']['longitude'];

        # Вычисляем расстояние между городами, округляем:
        $dist = round(calculateTheDistance($latCurrCity, $longCurrCity, $latAnotherCity, $longAnotherCity)/1000);
        $cityCode = $cityData['code']; # Запоминаем код города - вдруг это нужный город.

        # Проверяем отдаленность найденого города на соответствие критерию поиска:
        if ($dist <= $needDistance) $needCities[] = $cityCode;
    }

    # Ищем в массиве с объявлениями нужные машины тольк в найденых ранее городах:
    $resultArray = array();

    # Перебираем массив с выбранными городами,
    foreach ($needCities as $cityCode) {
        # каждому городу ищем объявление:
        foreach ($dbAuto as $carData) {

            # Если находим соответствие объявления городу, проводим сравнение глубже:
            if ($carData['cityCode'] == $cityCode) {
                if ($carData['model']['is4wd'] == $is4wd && $carData['model']['isAutoTrans'] == $isAutoTrans) {
                    $resultArray[] = $carData['model']['name'];
                }
            }
        }
    }
if (count($resultArray) == 0) $resultArray[] = 'Машины не найдены. Попробуйти изменить параметры поиска.';
return $resultArray;
}

$array = getFilteredCars($dbAuto, $dbCity, 'tsk', '1', true, true);
var_dump($array);




























