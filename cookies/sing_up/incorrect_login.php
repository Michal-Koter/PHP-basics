<?php session_start()?>
<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <title>Incorrect email</title>
</head>
<body>
    <?php
    if(empty($_SESSION['login'])){
        header("Location: login.php");
    }
    session_destroy();
    echo '<h2>Podany błędny e-mail lub hasło!<br>
          <a href="login.php">Spróbuj ponownie</a></h2>';
?>
</body>