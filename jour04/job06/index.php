<?php
    if (isset($_GET["nombre"])) {
        if($_GET["nombre"] % 2 == 0)
            echo "Nombre pair";
        else
          echo "Nombre impair";
    }
    else
        FALSE;
?>
<form action="./index.php" method="get">
        <label for="nombre"> nombre:</label>
        <input type="text" id="nombre" name="nombre"><br><br>
        <input type="submit" value="Submit">
</form>
