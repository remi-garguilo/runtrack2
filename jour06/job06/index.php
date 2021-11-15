<?php
function check_errors($value) {
    if ($value == TRUE)
        return 1;
    else
        return 0;
}
if(check_errors($_POST) == 0)
    echo 'No style chosen, please use a style for your page.';
else {
    if(isset($_POST['stylecss']) && $_POST['stylecss'] == 'style')
        echo '<link rel="stylesheet" href="css/style.css">';
    else if(isset($_POST['stylecss']) && $_POST['stylecss'] == 'style2')
        echo '<link rel="stylesheet" href="css/style2.css">';
    else if(isset($_POST['stylecss']) && $_POST['stylecss'] == 'style3')
        echo '<link rel="stylesheet" href="css/style3.css">';
    }
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Stylecss</title>
</head>
<body>
<header>
</header>
<main>
<h1> CHANGE YOUR STYLE</h1>
<form action="./index.php" method="post">
        <select name="stylecss" id="fonction">
                <option value="choix">---Choisissez le style---</option>
                <option value="style" name="style">style</option>
                <option value="style2" name="style2">style2</option>
                <option value="style3" name="style3">style3</option>
            </select>
        <input type="submit" value="Submit">
</form>
</main>
</footer>
</body>
</html>