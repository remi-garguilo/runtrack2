<?php
   if (isset($_POST["username"]) == TRUE || isset($_POST["password"]) == TRUE)
        if ($_POST["username"] == "John" && $_POST["password"] == "Rambo")
            echo "C'est pas ma guerre";
        else
            echo "Votre pire cauchemard";
   else
        FALSE;
?>

<form action="./index.php" method="post">
        <label for="username"> username:</label>
        <input type="text" id="username" name="username"><br><br>
        <label for="password"> password:</label>
        <input type="text" id="password" name="password"><br><br>
        <input type="submit" value="Submit">
</form>