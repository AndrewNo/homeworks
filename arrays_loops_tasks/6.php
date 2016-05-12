<?php
$arr = array('green'=>'зеленый', 'red'=>'красный','blue'=>'голубой');

foreach ($arr as $key=>$item){
    $en[] = $key;
    $ru[] = $item;
}
echo "<pre>";
print_r($en);
echo "</pre>";
echo "<pre>";
print_r($ru);
echo "</pre>";