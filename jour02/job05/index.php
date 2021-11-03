<?php

for($i=0;$i<1000;$i++) {
    $cmptDiv = 0;
    for($j=1;$j<=$i;$j++) {
        if($i%$j==0){
            $cmptDiv++;
        }
    }
    if ($cmptDiv == 2)
        echo $i.'<br/>';
}
?>