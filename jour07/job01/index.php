<?php

  session_start();
  if (isset($_POST["reset"]))
      session_unset();
  else if (isset($_SESSION['nbvisites'])) {
    $_SESSION['nbvisites']++;
    echo 'Il y a '.$_SESSION['nbvisites'].' visiteurs';
  }
  else
    $_SESSION['nbvisites']=0;
?>

<form action="./index.php" method="post">
        <input type="submit" name="reset" value="reset">
</form>