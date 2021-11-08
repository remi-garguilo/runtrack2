<?php
    $cmpt=0;
    foreach($_POST as $key => $value) {
        echo $key." => ".$value.'<br/>';
        $cmpt++;
    }
?>
<form action="./index.php" method="post">
    <label for="fname"> First name:</label>
    <input type="text" id="fname" name="fname"><br><br>
    <label for="lname"> Last name:</label>
    <input type="text" id="lname" name="lname"><br><br>
    <label for="age"> age:</label>
    <input type="text" id="age" name="age"><br><br>
    <label for="mail"> mail</label>
    <input type="text" id="mail" name="mail"><br><br>
    <input type="submit" value="Submit">
</form>