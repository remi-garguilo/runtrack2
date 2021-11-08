<?php

function gras($str){
    $Upper = "AZERTYUIOPQSDFGHJKLMWXCVBN ";
    $Lower = "azertyuiopqsdfghjklmwxcvbn ";
    $i = 0;
    $space = " ";
    for($i = 0 ;isset($str[$i]) ; $i++){
        for($j = 0; isset($Upper[$j]) ; $j++){
            if($str[$i] == $Upper[$j]){
                while($str[$i] != $space){
                    echo '<b>'.$str[$i].'</b>' ;
                    $i++;
                }
                echo($space);
            }
            else if($str[$i] == $Lower[$j]){
                while($str[$i] != $space){
                    echo $str[$i];
                    $i++;
                }
            }
        }
    }
    return ($str);
}

function cesar($str, $decalage) {
    $i=0;
    while(isset($str[$i]) == TRUE)
        $i++;
}

if(isset($_POST["str"]) == TRUE) {
    foreach ($_POST as $key => $value) {
        if ($value == "gras") {
            $str= $_POST["str"].' ';
            gras($str);
        }
        else if ($value == "cesar") {
            $str= $_POST["str"];
            cesar($str, 3);
        }
        else
            FALSE;
    }
}
?>

<form action="./index.php" method="post">
        <label for="str"> str : </label>
        <input type="text" id="str" name="str"><br><br>
        <select name="fonction" id="fonction">
                <option value="choix">---Choisissez la fonction---</option>
                <option value="gras">Gras</option>
                <option value="cesar">Cesar</option>
                <option value="plateforme">Plateforme</option>
            </select>
        <input type="submit" value="Submit">
</form>
