<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Date of easter</title>
</head>
<body>
    <form>
        <fieldset>
            <h1>Calculate easter's data</h1>
            <label for="year">ENTER YEAR</label>
            <input type="number" name="year" id="year" placeholder="year">
            <input type="submit" name="calculate" id="calculate" value="CALCULATE">
            <br>
            <?php
            if(isset($_GET["year"])&&isset($_GET["calculate"])){
                if(is_numeric($_GET["year"])&&$_GET["year"]>0&&$_GET["year"]<2200){
                    if($_GET["year"]>=1&&$_GET['year']<=1582){
                        $x=15;
                        $y=6;
                    } else if($_GET["year"]>=1583&&$_GET['year']<=1699){
                        $x=22;
                        $y=2;
                    }else if($_GET["year"]>=1700&&$_GET['year']<=1799){
                        $x=23;
                        $y=3;
                    }else if($_GET["year"]>=1800&&$_GET['year']<=1899){
                        $x=23;
                        $y=4;
                    }else if($_GET["year"]>=1900&&$_GET['year']<=2099){
                        $x=24;
                        $y=5;
                    }else if($_GET["year"]>=2100&&$_GET['year']<=2199){
                        $x=24;
                        $y=6;
                    }
                    $a = $_GET["year"] % 19;
                    $b = $_GET["year"] % 4;
                    $c = $_GET["year"] % 7;
                    $d = ((19 * $a) + $x) % 30;
                    $f = ((2 * $b) + (4 * $c) + (6 * $d) + $y) % 7;
                    if($f==6&&$d==29){
                        echo "<b>Ester is 26th April</b>";
                    } else if($f==6&&$d==28&&((11*$x+11)%30)<19){
                        echo "<b>Ester is 18th April</b>";
                    } else if(($d+$f)<10){
                        echo "<b>Ester is " . (22+$d+$f) . "th March</b>";
                    } else if(($d+$f)>9){
                        echo "<b>Ester is " . ($d+$f-9) . "th April</b>";
                    }
                } else {
                    echo "<b>INCORRECT YEAR</b>";
                }
            }
            ?>
        </fieldset>
    </form>
</body>
</html>
