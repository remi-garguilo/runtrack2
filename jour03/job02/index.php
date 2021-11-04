<?php

function disp_str() {
    $string="Tous ces instants seront perdus dans le temps comme les larmes sous la pluie.";
    $i=0;
    while(isset($string[$i])) {
        echo $string[$i];
        $i = $i+2;
    }
}
disp_str();
?>