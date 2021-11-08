<?php
    $cmpt=0;
    foreach($_POST as $key => $value) {
        echo $key." => ".$value.'<br/>';
        $cmpt++;
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css" type="text/css">
    <title>GET/POST</title>
</head>
<body>
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
   <div class="container">
    <table>
        <thead>
            <tr>
                <th>argument</th>
                <th>value</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td> <?php foreach($_POST as $key => $value)
                                        echo $key.'<br/>';
                ?>
                </td>
                <td> <?php foreach($_POST as $key => $value)
                                                        echo $value.'<br/>';
                                ?>
                                </td>
            </tr>
        </tbody>
        </table>
    </div>
</body>
</html>