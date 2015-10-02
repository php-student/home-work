<?php
$json_string = file_get_contents('http://rabota.ngs.ru/api/v1/vacancies/');

// jsone_decode  делает массив?
$ar = json_decode($json_string, true); # Это массив

$vacancies = $ar['vacancies']; # Массив с вакансиями

// Вычисляем количество вакансий
$num_of_vac = count($vacancies);
$i = 0;
$rubrics = array();

while ( $i < $num_of_vac ) {
    $rubric = $ar["vacancies"]["$i"]["rubrics"]; # Массив с рубриками внутри вакансии
    // Считаем количество рубрик в вакансии
    $num_of_rubric = count($rubric);
    //echo "$num_of_rubric" . "<br />";
    $y = 0;
    while ( $y < $num_of_rubric ) {
    	$element = $ar["vacancies"]["$i"]["rubrics"]["$y"]["title"];
    	//echo "$i" . "=>" . "$element" . "<br />";
	    array_push($rubrics, "$element");
	    ++$y;
    }
    ++$i;
}
$rubrics = array_count_values($rubrics);
print_r($rubrics);

