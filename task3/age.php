<?php
function ageOfChildren ($family) {
    echo $family["дети"]["сын"]["имя"]." ".$family["дети"]["сын"]["возраст"]." лет, ".$family["дети"]["дочь"]["имя"]." ".$family["дети"]["дочь"]["возраст"]." год";
}
ageOfChildren($family);

echo "<br>";