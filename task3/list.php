<?php
function listOfChildren($family) {
    echo "Список детей: ".$family["дети"]["сын"]["имя"].", ".$family["дети"]["дочь"]["имя"];
}
listOfChildren($family);
echo "<br>";