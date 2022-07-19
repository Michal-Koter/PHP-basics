<!--home_page.php-->
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Form</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<fieldset id="main">
    <h2>Rysowanie koła</h2>
    <form method="post">
        <lable for="shape"><h>Wybierz kształt</h></lable><br>
        <input type="radio" name="shape" id="shape" value="circle">okrąg<br>
        <input type="radio" name="shape" id="shape" value="line">linia<br>
        <input type="radio" name="shape" id="shape" value="rectangle">prostokąt<br>
        <input type="radio" name="shape" id="shape" value="polygon">wielokąt<br><br>
        <h>Ustaw kolor</h><br>
        <label for="red">Czerwony: </label>
        <input type="number" name="red" id="red" placeholder="0" min="0" max="255"><br>
        <label for="green">Zielony: </label>
        <input type="number" name="green" id="green" placeholder="0" min="0" max="255"><br>
        <label for="blue">Niebieski: </label>
        <input type="number" name="blue" id="blue" placeholder="0" min="0" max="255"><br><br>

        <input type="submit" name="send" value="WYŚLIJ">
    </form>
</fieldset>
    <?php
        if(!empty($_POST["red"])){
            $red = $_POST["red"];
        } else {
            $red = 0;
        }
        if(!empty($_POST["green"])){
            $green = $_POST["green"];
        } else {
            $green = 0;
        }
        if(!empty($_POST["blue"])){
            $blue = $_POST["blue"];
        } else {
            $blue = 0;
        }

        if(!empty($_POST["shape"])){
            if($_POST["shape"] == "circle"){
                header("Location: circle.php?red=$red&green=$green&blue=$blue");
            } else if($_POST["shape"] == "line"){
                header("Location: line.php?red=$red&green=$green&blue=$blue");
            }  else if($_POST["shape"] == "rectangle"){
                header("Location: rectangle.php?red=$red&green=$green&blue=$blue");
            }  else if($_POST["shape"] == "polygon"){
                header("Location: polygon.php?red=$red&green=$green&blue=$blue");
            }
        }
    ?>
</body>
</html>