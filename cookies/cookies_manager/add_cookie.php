<!--add_cookie.php-->
<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <title>Add cookie</title>
    <link href="add_cookie.css" rel="stylesheet">
    <link href="page.css" rel="stylesheet">
</head>

<body>
<?php include_once "page_elements.php";
page_header();?>

    <fieldset>
        <h2>Dodaj ciasteczko</h2>
        <span class="hint">Podane wartości nie mogą zawierać białych znaków</span><br>
        <form method="post">
            <label for="name">Nazwa*:</label><br>
            <input type="text" required name="name" id="name" placeholder="nazwa ciasteczka" class="field"><br>
            <label for="value">Wartość*:</label><br>
            <input type="text" required name="value" id="value" placeholder="wartość ciasteczka" class="field"><br>
            <label for="expire">Data wygaśnięcia:</label><br>
            <input type="datetime-local" name="expire" id="expire" class="field"><br><br>
            <input type="submit" name="add" id="add" value="DODAJ">
        </form>
    </fieldset>
    <?php
        if(!empty($_POST["name"])&&!empty($_POST["value"])){
            $name = $_POST["name"];
            if(isset($_COOKIE[$name])){
                header("Location: cookie_exist.php?name=$name");
                exit();
            }
            if(preg_match("/\s/",$name) || preg_match("/\s/",$name)){
                echo "Wprowadzono niepoprawne dane. Spróbuj ponownie";
                exit();
            }
            if(!empty($_POST["expire"])){
                $datetime = explode("T",$_POST["expire"]);
                $date = explode("-",$datetime[0]);
                $time = explode(":",$datetime[1]);
                $time[0] += 2;
                $expiry = mktime($time[0],$time[1],0,$date[1],$date[2],$date[0]);
            } else {
                $expiry = time() + 2629743;
            }
            $cookie_data = (object) array("value"=>$_POST["value"], "expiry"=>$expiry);
            setcookie($name,json_encode($cookie_data),$expiry);
            header("Location: add_cookie.php?key=$name");
        }
        if(!empty($_GET) ) {
            if (isset($_COOKIE[$_GET["key"]])) {
                header("Location: home_page.php");
            } else {
                echo "<h2>Wystąpił błąd! Spróbuj ponownie.</h2>";
            }
        }
       page_footer();
    ?>

