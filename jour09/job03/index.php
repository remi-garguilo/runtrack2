<?php
$Bdd = mysqli_connect('localhost', 'root', 'root', 'jour08');
mysqli_set_charset($Bdd, 'utf8');
$Requete = mysqli_query($Bdd, "SELECT prenom,nom,naissance FROM etudiants WHERE sexe = 'Femme'");
$Etudiants = mysqli_fetch_all($Requete, MYSQLI_ASSOC);
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
                <th>Prenom</th>
                <th>Nom</th>
                <th>Naissance</th>
            </tr>
        </thead>
        <tbody>
            <?php
            foreach ($Etudiants as $Etudiant){
                echo'<tr><td>'.$Etudiant['prenom'].'</td>';
                echo'<td>'.$Etudiant['nom'].'</td>';
                echo'<td>'.$Etudiant['naissance'].'</td></tr>';
            }
            ?>
        </tbody>
    </table>
</body>
</html>