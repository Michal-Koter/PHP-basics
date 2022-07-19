<!--polygon.php-->
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Form</title>
    <link rel="stylesheet" href="style.css">

</head>
<body>
<fieldset id="polygon">
    <h2>Wielokąt:</h2>
    <?php
    $red = $_GET["red"];
    $green = $_GET["green"];
    $blue = $_GET["blue"];
    echo "<form method='post' action='draw/polygon.php?red=$red&green=$green&blue=$blue'>";
    ?>

    <label for="polygon">Wybierz wielokąt</label><br>
    <input list="polygons" required name="polygon" id="polygon" placeholder="wielokąt">
    <datalist id="polygons">
        <option value="trójkąt"></option>
        <option value="czworokąt"></option>
        <option value="pięciokąt"></option>
        <option value="sześciokąt"></option>
    </datalist>
    <br><br>
    <input type="submit" value="WYŚLIJ">
    </form>
</fieldset>
</body>
</html>
