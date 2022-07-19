<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <title>Registration form</title>
    <link rel="stylesheet" href="form_style.css">
</head>
<body>
    <form action="registration.php" method="post">
        <fieldset style="width: 190px; height: 490px"><h2 style="margin-left: 30px">Rejestracja</h2>
            <label for="firstname">Imię:</label><br>
            <input type="text" required name="firstname" id="firstname" placeholder="imię" maxlength="55"><br>
            <label for="lastname">Nazwisko:</label><br>
            <input type="text" required name="lastname" id="lastname" placeholder="nazwisko" maxlength="55"><br>
            <label for="email">E-mail:</label><br>
            <input type="text" required name="email" id="email" placeholder="email@domena.com"><br>
            <label for="password">Hasło:</label><br>
            <input type="password" required name="password" id="password" placeholder="*****" minlength="6">
            <span class="hint">Hasło musi zawierać:<br>min 6 zanków,<br>min 1 wielką literę,<br>min 1 cyfrę,<br>min 1 znak specjalny</span>
            <label for="repeat_password">Powtórz hasło:</label><br>
            <input type="password" required name="repeat_password" id="repeat_password" minlength="6" placeholder="*****"><br>
            <input type="submit" name="registration" id="registration" value="ZAREJESTRUJ SIĘ" style="margin-top: 10px; margin-bottom: 10px; margin-left: 20px"><br>
            <a href="login.php" style="float: right; margin-top: 10px">Masz już konto?</a>
        </fieldset>
    </form>

    <?php
    if(count($_POST)==6){
        $firstname = preg_replace("/\s/","",$_POST["firstname"]);
        $lastname = preg_replace("/\s/","",$_POST["lastname"]);
        if (!preg_match("/^[[:graph:]]*$/u",$firstname)){
            echo "<h4>Nieprawidłowe imię!</h4>";
            exit();
        }
        if(!preg_match("/^[[:graph:]]*$/u",$lastname)){
            echo "<h4>Nieprawidłowe nazwisko!</h4>";
            exit();
        }
        if(!preg_match("/[.[:alnum:]]+@[[:alnum:]]+(\.[[:alnum:]]+)+/",$_POST['email'])){
            echo "<h4>Nieprawidłowe e-mail!</h4>";
            exit();
        }
        if(strlen($_POST['password'])<6){
            echo "<h4>Hasło jest za krótkie</h4>";
            exit();
        } else if($_POST['password'] != $_POST['repeat_password']) {
            echo "<h4>Wprowadzone hasła różnią się</h4>";
            exit();
        } else {
            if (!preg_match("/[A-Z]/", $_POST['password'])
                && !preg_match("/[0-9]/", $_POST['password'])
                && !preg_match("/\W/", $_POST['password'])
                && preg_match("/\s/", $_POST['password'])) {
                echo "<h4>Nieprawidłowe hasło!</h4>";
                exit();
            }
        }

        if(!file_exists('./tmp')){
            mkdir('./tmp');
        }
        $file_path = "./tmp/.accounts.txt";

        if(($file = fopen($file_path,"r+")) === false){
            echo "<h3>Problem z otwarciem pliku<br>Spróbuj ponownie</h3>";
        } else {
            $email_found = false;
            while (($line = fgets($file)) !== false) {
                $data = explode(" ", $line);
                if ($data[0] == $_POST['email']) {
                    fclose($file);
                    $email_found = true;
                    header("Location: email_taken.php");
                }
            }
            fclose($file);
            if(!$email_found){
                file_put_contents($file_path, $_POST['email']." ".$_POST['password']." ".$firstname." ".$lastname."\n", FILE_APPEND | LOCK_EX);
                header("Location: successful_registration.php");
            }
        }
    }
    ?>
</body>
</html>