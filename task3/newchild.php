<?php
function newChild(& $family){
    array_push($family["я"], "Новый ребенок");
}

newChild($family);
$f = fopen("new_array.txt", "w");
fwrite($f, serialize($family).PHP_EOL);
fclose($f);

echo "<pre>";
print_r($family);
echo "</pre>";