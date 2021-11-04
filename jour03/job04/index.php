<?php
function my_strlen() {
    $string="Dans l'espace, personne ne vous entend crier";
    $i=0;
    while(isset($string[$i]) == TRUE)
        $i++;
    return $i;
}
my_strlen();
?>