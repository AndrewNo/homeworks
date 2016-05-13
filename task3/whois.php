<?php

function whoIsHigher ($family) {
    if ($family["я"]["рост"]>$family["жена"]["рост"]) {
        $raz = $family["я"]["рост"]-$family["жена"]["рост"];
        echo $family["я"]["имя"]." выше ".$family["жена"]["имя"]." на ".$raz." сантиметров";
    }elseif ($family["я"]["рост"]<$family["жена"]["рост"]){
        $raz = $family["жена"]["рост"]-$family["я"]["рост"];
        echo $family["я"]["имя"]." ниже ".$family["жена"]["имя"]." на ".$raz." сантиметров";
    }else{
        echo "У нас с женой одинаковый рост - ".$family["я"]["рост"]." сантиметров";
    }
}

