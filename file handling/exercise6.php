<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <title>Number of side visits</title>
</head>
<body>
    <form>
        <label>
            <input type="submit" name="refresh" id="refresh" value="ODŚWIŻ" style="height: 100px;width: 200px;font-size: xx-large">
        </label>
    </form>
    <?php
    if(!file_exists("./tmp")){
        mkdir("./tmp");
    }
    $filepath = "./tmp/licznik.txt";

    if(!$file = fopen($filepath,"a+")){
        echo "<h2>Nie można otworzyć pliku</h2>";
    } else {
        $visit_num = (int)fgets($file) + 1;
        fclose($file);
        echo "<h2>Liczba wejść: $visit_num</h2>";
        if(!$file = fopen($filepath,"w+")){
            echo "<h2>Nie można otworzyć pliku</h2>";
        } else {
            fwrite($file, $visit_num);
            fclose($file);
        }
    }
    ?>
</body>
</html>