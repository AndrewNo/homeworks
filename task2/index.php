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
//echo "<pre>";
//print_r($family);
//echo "</pre>";

function listOfChildren($family) {
    echo "Список детей: ".$family["дети"]["сын"]["имя"].", ".$family["дети"]["дочь"]["имя"];
}
listOfChildren($family);

echo "<br>";

function ageOfChildren ($family) {
    echo $family["дети"]["сын"]["имя"]." ".$family["дети"]["сын"]["возраст"]." лет, ".$family["дети"]["дочь"]["имя"]." ".$family["дети"]["дочь"]["возраст"]." год";
}
ageOfChildren($family);

echo "<br>";

function me($family) {
    echo "Мой рост состовляет ".$family["я"]["рост"]." сантиметров и мне ".$family["я"]["возраст"]." лет";

}
me($family);

echo "<br>";

function wife($family) {
    echo "Супрга ".$family["жена"]["имя"];
}
wife($family);

echo "<br>";

/*Perhaps most difficult thing for me :(*/
function age($family) {
    foreach ($family as $members => $inner_key){
        foreach ($inner_key as $key=>$item) {
            if ($key == "возраст") {
                $inner_key[$key] = $item + 1;
                echo $inner_key[$key]." ";
            }
        }
    }
        foreach ($inner_key as $age=>$year) {
            foreach ($year as $k=>$i) {
                if ($k == "возраст") {
                    $inner_key[$k] = $i + 1;
                    echo $inner_key[$k]." ";
                }
            }
        }

}

age($family);

echo "<br>";

function whoIsHigher ($family) {
    if ($family["я"]["рост"]>$family["жена"]["рост"]) {
        $raz = $family["я"]["рост"]-$family["жена"]["рост"];
        echo $family["я"]["имя"]." выше ".$family["жена"]["имя"]." на ".$raz." сантиметров";
    }elseif ($family["я"]["рост"]<$family["жена"]["рост"]){
        $raz = $family["жена"]["рост"]-$family["я"]["рост"];
        echo $family["я"]["имя"]." ниже ".$family["жена"]["имя"]." на ".$raz." сантиметров";
    }else{
        echo "У нас с женой одинаковый рост - ".$family["я"]["рост"]." сантиметров";
    }
}

whoIsHigher ($family);