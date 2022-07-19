<!DOCTYPE HTML>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <title>Day of week</title>
</head>
<body>
    <form>
        <fieldset>
            <h3>
                <label for="date">DATE</label>
                <input type="date" name="date" id="date">
            </h3>
            <br>
            <input type="submit" name="send" id="send" value="WYŚLIJ">
        </fieldset>
    </form>
    <?php
    if(!empty($_GET)) {
        setlocale(LC_ALL, 'pl_PL.UTF-8');
        $date = explode("-", $_GET["date"]);
        if (!empty($date[0])) {
            for ($i = 0; $i < 3; $i++) {
                $date[$i] = preg_replace("/[^0-9]/", "", $date[$i]);
            }
            if (preg_match("/[0-9]{1,4}/", $date[0])
                && preg_match("/[0-9]{1,2}/", $date[1])
                && preg_match("/[0-9]{1,2}/", $date[2])) {
                $time = mktime(0, 0, 0, $date[1], $date[2], $date[0]);
                echo strftime("<h2>%d %B %Y to %A.</h2>", $time);
            } else {
                echo "<h2>Incorrect input</h2>";
            }
        } else {
            echo "<h2>Incorrect input</h2>";
        }
    }

    ?>
</body>