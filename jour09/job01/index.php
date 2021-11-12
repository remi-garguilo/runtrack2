
<?php
$Bdd = mysqli_connect('localhost', 'root', 'root', 'jour08'); // Appeller la bdd
mysqli_set_charset($Bdd, 'utf8'); // Intégrer tous les char
$Requete = mysqli_query($Bdd, "SELECT * FROM etudiants"); // Déclarer la requête
$Etudiants = mysqli_fetch_all($Requete, MYSQLI_ASSOC);  // Récuperer ce que les requêtes renvoient

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
                <th>ID</th>
                <th>Nom</th>
                <th>Prenom</th>
                <th>Naissance</th>
                <th>Sexe</th>
                <th>Email</th>
            </tr>
        </thead>
        <tbody>
            <?php
            foreach ($Etudiants as $Etudiant){
                echo'<tr><td>'.$Etudiant['id'].'</td>';
                echo'<td>'.$Etudiant['nom'].'</td>';
                echo'<td>'.$Etudiant['prenom'].'</td>';
                echo'<td>'.$Etudiant['naissance'].'</td>';
                echo'<td>'.$Etudiant['sexe'].'</td>';
                echo'<td>'.$Etudiant['email'].'</td></tr>';
            }
            ?>
        </tbody>
    </table>
</body>
</html>