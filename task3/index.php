<?php
$me = [
    "имя" => "Андрей",
    "возраст" => 30,
    "пол" => "мужской",
    "рост" => 173,
    "семейное положение" => "женат"
];
$wife = [
    "имя" => "Виктория",
    "возраст" => 29,
    "пол" => "женский",
    "рост" => 170,
    "семейное положение" => "замужем"];
$child1 = [
    "имя" => "Вячеслав",
    "возраст" => 7,
    "пол" => "мужской",
    "рост" => 120,
    "семейное положение" => "не женат"];
$child2 = [
    "имя" => "Екатерина",
    "возраст" => 1,
    "пол" => "женский",
    "рост" => 73,
    "семейное пложение" => "не замужем"];
$children = ["сын"=>$child1, "дочь"=>$child2];
$family = ["я"=>$me, "жена"=>$wife, "дети"=>$children];

$f = fopen("family.txt", "w");
fwrite($f, serialize($family).PHP_EOL);
fclose($f);





