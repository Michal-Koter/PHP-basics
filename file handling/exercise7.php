<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <title>Opinions</title>
</head>
<body>
    <form>
        <h2>Wyraź swjką opinię:</h2>
        (maksymalnie 255 zanków)<br>
        <label>
            <textarea name="opinion" id="opinion" maxlength="255" placeholder="Twoja opinia" style="width: 350px;height: 100px"></textarea>
        </label>
        <br>
        <input type="submit" name="send" id="send" value="Wyślij">
        <input type="submit" name="reset" id="reset" value="Reset" style="margin-left: 250px">
        <br><br>
    </form>

    <?php
    setlocale(LC_ALL,"polish");
    $date = date("r");
    $days_en = array("/Mon/","/Tue/","/Wed/","/Thu/","/Fri/","/Sat/","/Sun/");
    $days_pl = array("poniedziałek","wtorek","środa","czwartek","piątek","sobota","niedziela");
    $months_en = array("/Jan/","/Feb/","/Mar/","/Apr/","/May/","/Jun/","/Jul/","/Aug/","/Sep/","/Oct/","/Nov/","/Dec/");
    $months_pl = array("styczń","luty","marzec","kwiecień","maj","czerwiec","lipiec","sierpień","wrzesień","październik","listopad","grudzień");
    $date = preg_replace($days_en,$days_pl,$date);
    $date = preg_replace($months_en,$months_pl,$date);
    echo "Dziś jest $date GMT.<br>";
    if((date("Y")%4) != 0) {
        echo "Do końca roku zostało " . (365-date("z")-1) . ".<br>";
    } else {
        echo "Do końca roku zostało " . (366-date("z")-1) . ".<br>";
    }
    if(!file_exists("./tmp")){
        mkdir("./tmp");
    }
    $filepathNum = "./tmp/opinionNum.txt";
    $filepathOp = "./tmp/opinions.txt";
    if(!empty($_GET["reset"])){
        $file = fopen($filepathOp,"w");
        fclose($file);
        $file = fopen($filepathNum,"w");
        fclose($file);
    }
    if(!file_exists($filepathNum) || filesize($filepathNum) == 0) {
        $opinionNum = 0;
    } else {
        $opinionNum = file_get_contents($filepathNum);
    }
    if (!empty($_GET["opinion"])&&!empty($_GET["send"])){
        $opinionNum += 1;
        $file = fopen($filepathNum, "w");
        fwrite($file, $opinionNum);
        fclose($file);
    }
    echo "<h3>Dotychczasowe opinie $opinionNum:</h3>";

    if((!file_exists($filepathOp) || filesize($filepathOp) == 0) && (empty($_GET["opinion"])||empty($_GET["send"]))){
        echo "Brak opini. Możesz dodać pierwaszą.<br>";
    }

    if(!empty($_GET["opinion"])&&!empty($_GET["send"])) {
        $file = fopen($filepathOp,"a");
        fputs($file,$_GET["opinion"]."\n\n");
        fclose($file);
    }
    if(file_exists($filepathOp) && count(file($filepathOp)) != 0) {
        $file = fopen($filepathOp, "r");
        while (!feof($file)) {
            $buffer = fgets($file, 255);
            echo htmlspecialchars($buffer);
            echo "<br>";
        }
    }
    ?>
</body>
</html>