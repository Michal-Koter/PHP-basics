<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Form</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<fieldset>
    <h2>Rysowanie koła</h2>
    <form method="post" action="circle.php">
            <h>Ustaw kolor</h><br>
            <label for="red">Czerwony: </label><br>
            <input type="number" name="red" id="red" placeholder="0" min="0" max="255"><br>
            <label for="green">Zielony: </label><br>
            <input type="number" name="green" id="green" placeholder="0" min="0" max="255"><br>
            <label for="blue">Niebieski: </label><br>
            <input type="number" name="blue" id="blue" placeholder="0" min="0" max="255"><br><br>
            <h>Ustaw promień koła</h><br>
            <label for="radius">Promień</label><br>
            <input type="number" name="radius" id="radius" placeholder="1" min="1"><br><br>
            <input type="submit" name="send" value="WYŚLIJ">
    </form>
</fieldset>
</body>
</html>