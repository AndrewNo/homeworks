<?php
$a = 5;
$b = 8;
$operator = '*';
switch ($operator){
    case '+':
        $result = $a + $b;
        echo $result;
        break;
    case '-':
        $result = $a - $b;
        echo $result;
        break;
    case '/':
        if ($b===0){
            echo 'Деление на 0 не допустимо';
        }else{
            $result = $a/$b;
            echo $result;
        }
        break;
    case '*':
        $result = $a * $b;
        echo $result;
        break;
    case '%':
        if ($b===0){
            echo 'Деление на 0 не допустимо';
        }else{
            $result = $a%$b;
            echo $result;
        }
        break;
}