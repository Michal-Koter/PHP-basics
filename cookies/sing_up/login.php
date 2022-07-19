<?php session_start(); ?>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <title>Login form</title>
    <link rel="stylesheet" href="form_style.css">
</head>
<body>
    <fieldset style="height: 250px; width: 250px">
        <h2 style="margin-left: 70px">Logowanie</h2>
        <form method="get">
            <label for="email">Email:</label>
            <input type="text" required name="email" id="email" maxlength="55" placeholder="email@domena.com"><br>
            <label for="password">Hasło:</label>
            <input type="password" required name="password" id="password" minlength="6" placeholder="*****">
            <input type="submit" name="submit" id="submit" value="WYŚLIJ"
                   style="margin-left: 90px  ; margin-top: 10px"><br>
            <a href="registration.php" style="float: right; margin-top: 20px; font-size: medium">Zarejestruj się</a>
        </form>
    </fieldset>

    <?php
        if(!empty($_GET['email'])&&!empty($_GET['password'])) {
            $_SESSION['email'] = $_GET['email'];
            if(!file_exists('./tmp')){
                mkdir('./tmp');
            }
            $file_path = "./tmp/.accounts.txt";
            if(file_exists($file_path)){
                if(!$file =fopen($file_path,"r")){
                    echo "<h3>Problem z otwarciem pliku<br>Spróbuj ponownie</h3>";
                } else {
                    $account_found = false;
                    while (($line = fgets($file)) !== false) {
                        $data = explode(" ", $line);
                        if ($data[0] == $_SESSION['email']) {
                            $account_found = true;
                            if ($data[1] == $_SESSION['password']) {
                                header("Location: successful_login.php");
                            } else {
                                header("Location: incorrect_login.php");
                            }
                        }
                    }
                    fclose($file);
                    if (!$account_found) {
                        header('Location: incorrect_login.php');
                    }
                }
            } else {
                header("Location: incorrect_login.php");
            }
        }
    ?>
</body>
</html>
