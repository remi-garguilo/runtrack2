<?php
$table= ["200","204","173","98","171","404","459"];

foreach($table as $value){
    if($value % 2 == 0)
        echo $value.' est un nombre pair'.'<br/>';
    else
         echo $value.' est un nombre impair'.'<br/>';
    $value++;
}
?>