<?php
require(__DIR__ . '/data/functions.php');
$dbCity = require(__DIR__ . '/data/dbCity.php'); # Массив с городами.
$dbAuto = require(__DIR__ . '/data/dbAuto.php'); # Массив с объявлениями.
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
$dist = round(getDistance($dbCity, 'tsk', 'nsk'));
echo "Расстояние: {$dist} метров.";

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
$array = getFilteredCars($dbAuto, $dbCity, 'tsk', '1', true, true);
var_dump($array);




























