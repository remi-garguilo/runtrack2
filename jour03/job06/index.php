<?php

function reverse_str() {
    $string="Les choses que l'on possede finissent par nous posseder";
    $i=-1;
    while(isset($string[$i])) {
        echo $string[$i];
        $i--;
    }
}
reverse_str();
?>