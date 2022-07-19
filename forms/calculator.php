<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Calculator</title>
</head>
<body>
<form>
    <h1>Calculator</h1>
    <fieldset>
        <h2>Basic</h2>
        <label for="numberBasic1"></label>
        <input type="text" name="numberBasic1" id="numberBasic1" placeholder="input number">
        <label for="operationBasic"></label>
        <input list="operationsBasic" name="operationsBasic" id="operationBasic" placeholder="chose operation">
        <datalist id="operationsBasic">
            <option value="addition">
            <option value="subtraction">
            <option value="multiplication">
            <option value="division">
        </datalist>
        <label for="numberBasic2"></label>
        <input type="text" name="numberBasic2" id="numberBasic2" placeholder="input number">
        <input type="submit" name="sandBasic" id="sandBasic" value="calculate">
        <br>
        <?php
        if(isset($_GET["numberBasic1"])&&isset($_GET["numberBasic2"])&&isset($_GET["operationsBasic"])){
            $patterns = array("/[[:blank:]]/", "/,/");
            $replaces = array("", ".");
            $num1 = preg_replace($patterns,$replaces,$_GET["numberBasic1"]);
            $num2 = preg_replace($patterns,$replaces,$_GET["numberBasic2"]);
            if(is_numeric($num1)&&is_numeric($num2)) {
                switch ($_GET["operationsBasic"]) {
                    case "addition":
                        echo "<h3>$num1 + $num2 = " . ($num1 + $num2) . "</h3>";
                        break;
                    case "subtraction":
                        echo "<h3>$num1 - $num2 = " . ($num1 - $num2) . "</h3>";
                        break;
                    case "multiplication":
                        echo "<h3>$num1 * $num2 = " . ($num1 * $num2) . "</h3>";
                        break;
                    case "division":
                        if($num2 == 0){
                            echo "Division by 0!";
                            exit();
                        }
                        echo "<h3>$num1 / $num2 = " . ($num1 / $num2) . "</h3>";
                        break;
                    default:
                        echo "<h3>Incorrect operation!</h3>";
                }
            } else {
                echo "<h3>Incorrect value!</h3>";
            }
        }
        ?>
    </fieldset>
</form>
<form>
    <fieldset>
        <h2>Advance</h2>
        <label for="numberAdvance"></label>
        <input type="text" name="numberAdvance" id="numberAdvance" placeholder="input number">
        <label for="operationAdvance"></label>
        <input list="operationsAdvance" name="operationsAdvance" id="operationAdvance" placeholder="chose operation">
        <datalist id="operationsAdvance">
            <option value="sin">
            <option value="cos">
            <option value="tan">
            <option value="binary->decimal">
            <option value="decimal->binary">
            <option value="decimal->hexadecimal">
            <option value="hexadecimal->decimal">
        </datalist>
        <input type="submit" name="sandAdvance" id="sandAdvance" value="calculate">
        <br>
        <?php
        if(isset($_GET["numberAdvance"])&&isset($_GET["operationsAdvance"])) {
            $_GET["numberAdvance"] = preg_replace("/[[:blank:] ]/","",$_GET["numberAdvance"]);
            switch ($_GET["operationsAdvance"]){
                case "sin":
                    if(!preg_match("/[^[0-9]]/",$_GET["numberAdvance"])) {
                        echo "<h3>sin({$_GET["numberAdvance"]}) = " . sin($_GET["numberAdvance"]) . "</h3>";
                    } else {
                        echo "<h3>Incorrect value!</h3>";
                    }
                    break;
                case "cos":
                    if(!preg_match("/[^[0-9]]/",$_GET["numberAdvance"])) {
                        echo "<h3>cos({$_GET["numberAdvance"]}) = " . cos($_GET["numberAdvance"]) . "</h3>";
                    } else {
                        echo "<h3>Incorrect value!</h3>";
                    }
                    break;
                case "tan":
                    if(!preg_match("/[^[0-9]]/",$_GET["numberAdvance"])) {
                        echo "<h3>tan({$_GET["numberAdvance"]}) = " . tan($_GET["numberAdvance"]) . "</h3>";
                    } else {
                        echo "<h3>Incorrect value!</h3>";
                    }
                    break;
                case "binary->decimal":
                    if(!preg_match("/[^01]/",$_GET["numberAdvance"])) {
                        echo "<h3>" . $_GET["numberAdvance"] . "(2) = " . bindec($_GET["numberAdvance"]) . "(10)</h3>";
                    } else {
                        echo "<h3>Incorrect value!</h3>";
                    }
                    break;
                case "decimal->binary":
                    if(is_numeric(["numberAdvance"])) {
                        echo "<h3>" . $_GET["numberAdvance"] . "(10) = " . decbin($_GET["numberAdvance"]) . "(2)</h3>";
                    } else {
                        echo "<h3>Incorrect value!</h3>";
                    }
                    break;
                case "decimal->hexadecimal":
                    if(is_numeric($_GET["numberAdvance"])) {
                        echo "<h3>" . $_GET["numberAdvance"] . "(10) = " . dechex($_GET["numberAdvance"]) . "(16)</h3>";
                    } else {
                        echo "<h3>Incorrect value!</h3>";
                    }
                    break;
                case "hexadecimal->decimal":
                    if(!preg_match("/[^0-9a-fA-F]/",$_GET["numberAdvance"])) {
                        echo "<h3>" . $_GET["numberAdvance"] . "(16) = " . hexdec($_GET["numberAdvance"]) . "(10)</h3>";
                    } else{
                        echo "<h3>Incorrect value!</h3>";
                    }
                    break;
                default:
                    echo "<h3>Incorrect operation!</h3>";
            }
        }
        ?>
    </fieldset>
</form>
</body>
</html>