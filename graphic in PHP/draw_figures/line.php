<!--line.php-->
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Form</title>
    <link rel="stylesheet" href="style.css">
    <style>
        input[type="number"]{width: 70%; margin-left: 0}
    </style>
</head>
<body>
<fieldset id="line">
<h2>Linia</h2>
    <?php
    $red = $_GET["red"];
    $green = $_GET["green"];
    $blue = $_GET["blue"];
    echo "<form method='post' action='draw/line.php?red=$red&green=$green&blue=$blue'>";
    ?>

    <h>Ustaw punkty</h><br><br>
    <label for="start">Początek</label><br>
    <t>x:</t> <input type="number" name="x_start" id="start" placeholder="1" min="0"><br>
    <t>y:</t> <input type="number" name="y_start" id="start" placeholder="1" min="0"><br><br>

    <label for="end">Koniec</label><br>
    <t>x:</t> <input type="number" name="x_end" id="end" placeholder="1" min="0"><br>
    <t>y:</t> <input type="number" name="y_end" id="end" placeholder="1" min="0"><br><br>
    <input type="submit" name="send" value="WYŚLIJ">
    </form>
</fieldset>
</body>
</html>
