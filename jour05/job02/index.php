<?php

function bonjour($jour) {
    if ($jour == TRUE)
        echo 'Bonjour'.'<br/>';
    else
        echo 'Bonsoir'.'<br/>';
}

bonjour(TRUE);
bonjour(FALSE);
?>