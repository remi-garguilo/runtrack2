<?php
$Bdd = mysqli_connect('localhost', 'root', 'root', 'jour08');
mysqli_set_charset($Bdd, 'utf8');
$Requete = mysqli_query($Bdd, "SELECT nom, capacite FROM salles");
$Salles = mysqli_fetch_all($Requete, MYSQLI_ASSOC);

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
                <th>Capacité</th>
            </tr>
        </thead>
        <tbody>
            <?php
            foreach ($Salles as $Salle){
                echo'<tr><td>'.$Salle['nom'].'</td>';
                echo'<td>'.$Salle['capacite'].'</td></tr>';
            }
            ?>
        </tbody>
    </table>
</body>
</html>