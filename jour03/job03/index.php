<?php

function disp_voyelle_str() {
    $voyelles= "aeiouyAEIOUY";
    $string="I'm sorry Dave I'm afraid I can't do that";
    $i=0;
    while (isset($string[$i])) {
        $j=0;
        while(isset($voyelles[$j])) {
            if($string[$i] == $voyelles[$j])
                echo $voyelles[$j];
            $j++;
        }
    $i++;
    }
}
disp_voyelle_str();
?>