<?php

$name = 'Новаковский Андрей';
$age = 30;
if ($age>=35) {
    echo 'Меня зовут: '.$name.' и мне '.$age;
}else {
    $years = 35 - $age;
    echo 'Меня зовут: '.$name.' и до 35 лет мне еще '.$years.' лет';
}