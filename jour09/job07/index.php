<?php
$Bdd = mysqli_connect('localhost', 'root', 'root', 'jour08');
mysqli_set_charset($Bdd, 'utf8');
$Requete = mysqli_query($Bdd, "SELECT * , SUM(`superficie`) AS superficie_totale FROM `etage`");
$Etages = mysqli_fetch_all($Requete, MYSQLI_ASSOC);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tab</title>
</head>
<body>
    <table>
        <thead>
            <tr>
                <th>Nom</th>
                <th>Numero</th>
                <th>Superficie Totale</th>
            </tr>
        </thead>
        <tbody>
            <?php
            foreach ($Etages as $Etage){
                echo'<td>'.$Etage['nom'].'</td>';
                echo'<td>'.$Etage['numero'].'</td>';
                echo'<td>'.$Etage['superficie_totale'].'</td></tr>';
            }

            ?>
        </tbody>
    </table>
</body>
</html>