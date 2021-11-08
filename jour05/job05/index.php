<?php

function occurrences($str,$char) {
    $i=0;
    $compt=0;
    while(isset($str[$i]) == TRUE) {
        if ($str[$i] == $char)
            $compt++;
            $i++;
        }
    return $compt;
}

$res= occurrences('Bonjouro','o');
echo $res;
?>