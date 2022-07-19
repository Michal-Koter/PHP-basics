<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <title>Number of side visits by user, use cookies</title>
</head>
<body>
    <form method="get">
        <label>
            <input type="submit" name="refresh" id="refresh" value="ODŚWIEŻ" style="height: 100px;width: 200px;font-size: xx-large">
        </label>
        <label>
            <input type="submit" name="reset" id="reset" value="RESET" style="height: 100px;width: 200px;font-size: xx-large; margin-left: 40px; background-color: tomato">
        </label>
    </form>
    <?php
    if(isset($_COOKIE["numOfViews"]) && !isset($_GET["reset"])) {
        $views = $_COOKIE["numOfViews"] + 1;
        setcookie("numOfViews",$views,time()+3600*24);
    } else {
        setcookie("numOfViews",0,time()+3600*24);
        header('Location: '.$_SERVER['PHP_SELF']);
    }
    echo "<h2>Odwiedziłeś tą stronę " . $_COOKIE["numOfViews"]+1 . " razy.</h2>";
    ?>
</body>
</html>