<?php
$arr = ["Понедельник", "Вторник", "Среда", "", "Пятница", "Суббота", "Воскресенье"];
$day = "<i>Четверг</i>";
$arr[3] = $day;
foreach ($arr as $item) {
    echo $item . "<br>";
}