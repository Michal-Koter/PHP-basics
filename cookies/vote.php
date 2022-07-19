<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <title>Sonda</title>
</head>
<body>
    <fieldset style="height: 150px;width: 250px">
        <form method="post">
            <h2>Sonda</h2>
            <label>
                Czy lubisz PHP:
                <input type="radio" name="like" id="yes" value="yes"> Tak
                <input type="radio" name="like" id="no" value="no"> Nie
            </label>
            <br>
            <br>
            <?php
            if(empty($_COOKIE["voted"])){
                echo "<input type='submit' name='send' id='send' value='WYŚLIJ'>";
            } else {
                echo "<input type='submit' name='send' id='send' value='WYŚLIJ' disabled='disabled'>";
            }
            ?>
        </form>
    </fieldset>
    <?php
    if(!isset($_COOKIE["voted"])&&!isset($_COOKIE["answer"])){
        if(!empty($_POST["like"]) && !empty($_POST["send"])){
            setcookie("voted", true, time()+3600*24);
            setcookie("answer", $_POST["like"], time()+3600*24);
            echo "<h3>Dziękuję za oddanie głosu!</h3>";
            header("Location: vote.php");
        }
    } else {
        echo "<h3>Oddałeś już swój głos!</h3>";
    }
    ?>
</body>
</html>