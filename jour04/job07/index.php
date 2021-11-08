<form action="./index.php" method="post">
    <label for="hauteur"> hauteur:</label>
    <input type="text" id="hauteur" name="hauteur"><br><br>
    <label for="largeur"> largeur:</label>
    <input type="text" id="largeur" name="largeur"><br><br>
    <input type="submit" value="Submit">
</form>

<?php
if(isset($_POST["largeur"])) {
    $espaceToit = $_POST['largeur'];
    $nbrLa = $_POST['largeur']/2;
}
$milToit = 0;

if(isset($_POST['largeur']) == true){

    while($espaceToit > 0){
        echo '&nbsp';
        $espaceToit--;
    }
    echo "/\<br/>";
    $espaceToit2 = $_POST['largeur'];

    while($nbrLa > 0){
        $espaceToit = $espaceToit2 - 2;
        $espaceToit2 = $espaceToit;
        while($espaceToit > 0){
            echo '&nbsp';
            $espaceToit--;
        }
        echo "/_";
        $temp = $milToit;

        while($milToit > 0){
            echo "_";
            $milToit--;
        }

        echo "_\<br/>";
        $nbrLa--;
        $milToit = $temp + 2;
    }

}

if(isset($_POST["hauteur"])) {
    $espaceBase = $_POST['largeur'] *2;
    $nbrHa = $_POST['hauteur'];
    $milBase = $_POST['largeur'];
}


if(isset($_POST['hauteur']) == true){
    while($nbrHa > 1){
        echo '|';
        $espaceBase2 = $espaceBase;
        while($espaceBase2 > 0){
            echo '&nbsp';
            $espaceBase2--;
        }
        echo '|<br/>';
        $nbrHa--;
    }
    echo '|';
    while($milBase > 0){
        echo "_";
        $milBase--;
    }
    echo '|';
}
?>
