<?php
// Радиус земли
    define('EARTH_RADIUS', 6372795);
/*
*
*  Расстояние между двумя городами
*
*/
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

/*
 * Расстояние между двумя точками
 * $φA, $λA - широта, долгота 1-й точки,
 * $φB, $λB - широта, долгота 2-й точки
 * Написано по мотивам http://gis-lab.info/qa/great-circles.html
 * Михаил Кобзарев <kobzarev@inforos.ru>
 *
 */
function calculateTheDistance ($φA, $λA, $φB, $λB) {
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
/*
*
*  Выбор автомобилей поблизости
*
*/
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
return $resultArray;
}




























