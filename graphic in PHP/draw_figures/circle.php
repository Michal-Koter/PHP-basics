<!--circle.php-->
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Form</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<fieldset id="circle">
<h2>Koła</h2>
<?php
    $red = $_GET["red"];
    $green = $_GET["green"];
    $blue = $_GET["blue"];
    echo "<form method='post' action='draw/circle.php?red=$red&green=$green&blue=$blue'>";
?>
    <h>Ustaw promień</h><br>
    <label for="radius">Promień</label>
    <input type="number" name="radius" id="radius" placeholder="1" min="1"><br><br>
    <input type="submit" name="send" value="WYŚLIJ">
</form>
</fieldset>
</body>
</html>