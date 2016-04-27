<?php
$a = '78';
$b = 78;
if ($a==$b)
{
    echo 'равны';
}else{
    echo 'не равны';
}
echo '<br/>';
if ($a===$b)
{
    echo 'эквивалентны';
}else{
    echo 'не эквивалентны';
}
echo '<br/>';       
$c= $a===$b;
var_dump($c);