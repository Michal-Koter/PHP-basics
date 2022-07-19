<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Form</title>
</head>
<body>
    <h2>Wybierz czciąkę</h2>
    <form method="post">
        <lable for="font"></lable>
        <input type="radio" name="font" id="font" value="1">font 1<br>
        <input type="radio" name="font" id="font" value="2">font 2<br>
        <input type="radio" name="font" id="font" value="3">font 3<br>
        <input type="radio" name="font" id="font" value="4">font 4<br>
        <input type="radio" name="font" id="font" value="5">font 5<br>
        <input type="radio" name="font" id="font" value="6">font ZacharyBinx<br><br>

        <input type="submit" name="send" value="WYŚLIJ">
    </form>

    <?php

        if(!empty($_POST["font"])){
            switch ($_POST["font"]){
                case 1:
                case 2:
                case 3:
                case 4:
                case 5:
                case 6:
                    header("Location: form.php?font={$_POST['font']}");
                    break;
                default:
                    header("Location: home_page.php");
                    break;
            }
        }
    ?>
</body>
</html>