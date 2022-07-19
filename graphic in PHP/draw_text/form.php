<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Form</title>
</head>
<body>
    <?php
        if(!empty($_GET["font"])){
            echo "<h2>Text</h2>";
            echo "<form method='post' action='display.php?font={$_GET['font']}' id='input'>";
        } else {
            header("Location: home_page.php");
        }
    ?>
        <lable for="text">Wpisz tekst:</lable><br>
        <textarea required  form="input" name="text" id="text" placeholder="Wpisz tekst..." cols="25"></textarea><br><br>
        <label for="position">Początkowa pozycja:</label><br>
        x:<input type="number" name="x" id="position" placeholder="1" min="0"><br>
        y:<input type="number" name="y" id="position" placeholder="1" min="0"><br><br>
        <input type="submit" name="send" value="WYŚLIJ">
    </form>
</body>
</html>