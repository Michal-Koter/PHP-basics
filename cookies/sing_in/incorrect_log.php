<?php session_start()?>
<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <title>Incorrect login</title>
</head>
<body>
    <?php
    if(empty($_SESSION['login'])){
        header("Location: form.html");
    }
    session_destroy();
    echo '<h2>Podano nieprawidłowy login!<br>
          <a href="form.html">Spróbuj ponownie</a></h2>';
    ?>
</body>