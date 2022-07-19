<?php session_start() ?>
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
    ?>
    <h2>Logowanie powiodło się!</h2>
    <form method="post">
        <input type="submit" name="logout" id="logout" value="Wyloguj się" style="height: 50px;width: 150px; font-size: medium">
    </form>
    <?php
    if(!empty($_POST['logout'])){
        session_destroy();
        header('Location: login.php');
    }
    ?>
</body>