<?php


$name = 'Новаковский Андрей';
$age = 30;
echo 'Меня зовут: '.$name.'<br/>'.' Мне '.$age.' лет<br/>';

if (is_int($age) || is_double($age)) {
    if ($age >= 18 && $age <= 59) {
        echo 'Вам еще работать и работать';
    } elseif ($age > 59) {
        echo 'Вам пора на пенсию';
    } elseif ($age >= 0 && $age < 18) {
        echo 'Вам еще рано работать';
    } else {
        echo 'Неизвестный возраст';
    }
}else{
    echo 'Неизвестный возраст';

}