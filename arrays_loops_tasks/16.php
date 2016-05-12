<?php
$arr = [1, 2, 3, 4, 5, 6, 7, 8, 9];
foreach ($arr as $item){
    if ($item>= 1 && $item<=3){
        echo $item."\n\r ";
        continue;
    }elseif ($item>=4 && $item<=6){
        echo $item."\n\r ";
        continue;
    }else{
        echo $item."\n\r ";
    }
}