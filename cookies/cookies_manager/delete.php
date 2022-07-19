<!--delete.php-->
<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <title>Confirm delete cookie</title>
    <link href="page.css" rel="stylesheet">
    <link href="delete.css" rel="stylesheet">
</head>
<body>
<?php
include_once "page_elements.php";
page_header();
if(!empty($_GET['cookie_key'])) {
    $name = $_GET['cookie_key'];
    $cookie = json_decode($_COOKIE[$name]);
    $value = $cookie->value;
    $date = date("d-m-Y H:i", $cookie->expiry);
    echo "<h2>Napewno chcesz usunąć to ciasteczko?</h2>";
    echo "<table>";
        echo "<tr>";
            echo "<th style='text-align: right'><h2>Nazwa:&nbsp&nbsp</h2></th>";
            echo "<td><h2>$name</h2></td>";
        echo "</tr>";
        echo "<tr>";
            echo "<th style='text-align: right'><h2>Wartość:&nbsp&nbsp</h2></th>";
            echo "<td><h2>$value</h2></td>";
        echo "</tr>";
        echo "<tr>";
            echo "<th style='text-align: right'><h2>Data wygaśnięcia:&nbsp&nbsp</h2></th>";
            echo "<td><h2>$date</h2></td>";
        echo "</tr>";
    echo "</table>";
}
?>
<br>
<form method="post">
    <input type="submit" id="yes" name="yes" value="TAK" class="sub">
    <input type="submit" id="no" name="no" value="NIE" class="sub">
</form>
<?php
    if(!empty($_POST)){
        if(!empty($_POST["yes"])){
            setcookie($name,null,-1);
        }
        header("Location: home_page.php");
    }
    echo "<br>";
    page_footer();
?>

