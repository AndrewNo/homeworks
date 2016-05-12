<?php
///*Perhaps most difficult thing for me :(*/
function age($family) {
    foreach ($family as $members => $inner_key){
        foreach ($inner_key as $key=>$item) {
            if ($key == "возраст") {
                $inner_key[$key] = $item + 1;
                echo $inner_key[$key]." ";
            }
        }
    }
        foreach ($inner_key as $age=>$year) {
            foreach ($year as $k=>$i) {
                if ($k == "возраст") {
                    $inner_key[$k] = $i + 1;
                    echo $inner_key[$k]." ";
                }
            }
        }

}

age($family);

echo "<br>";