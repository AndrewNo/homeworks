<?php

function me($family) {
    echo "Мой рост состовляет ".$family["я"]["рост"]." сантиметров и мне ".$family["я"]["возраст"]." лет";

}
me($family);

echo "<br>";