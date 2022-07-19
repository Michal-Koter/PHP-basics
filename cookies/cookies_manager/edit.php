<!--edit.php-->
<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <title>Edit cookie</title>
</head>
<link rel="stylesheet" href="page.css">
<body>
        <?php
        include "page_elements.php";
        page_header();
            echo "<fieldset>";
            $key = $_GET['cookie_key'];
            echo "<h2>Edytuj ciasteczko: $key</h2>";
            echo "<form method='post'>
                        <table>
                            <tr>
                                <th></th>
                                <th>Obecna</th>
                                <th>Nowa</th>
                            </tr>";
            if(($cookie = json_decode($_COOKIE[$key]))) {
                $value = $cookie->value;
                $date = date("d-m-Y H:i", $cookie->expiry);
                echo "      <tr>
                                <th>Nazwa</th>
                                <td>$key</td>
                                <td><label for='name'></label>
                                <input type='text' name='name' id='name' placeholder='nazwa ciasteczka' style='border: floralwhite'></td>
                            </tr>
                            <tr>
                                <th>Wartość</th>
                                <td>$value</td>
                                <td><label for='value'></label>
                                    <input type='text' name='value' id='value' placeholder='wartość ciasteczka' style='border: floralwhite'></td>
                            </tr>
                            <tr>
                                <th>Data wygaśnięcia</th>
                                <td>$date</td>
                                <td><label for='expire'></label>
                                    <input type='datetime-local' name='expire' id='expire' style='border: floralwhite'></td>
                            </tr>
                        </table>";
            } else {
                $value = $_COOKIE[$key];
                echo "<tr>
                        <th>Nazwa</th>
                        <td>$key</td>
                        <td><label for='name'></label>
                            <input type='text' name='name' id='name' placeholder='nazwa ciasteczka'></td>
                      </tr>
                      <tr>
                        <th>Wartość</th>
                        <td>$value</td>
                        <td><label for='value'></label>
                            <input type='text' name='value' id='value' placeholder='wartość ciasteczka'></td>
                      </tr>
                      <tr>
                        <th>Data wygaśnięcia</th>
                        <td>-</td>
                        <td><label for='expire'></label>
                            <input type='datetime-local' name='expire' id='expire'></td>
                        </tr>
                        </table>";
            }
            echo "<br>
                  <input type='submit' name='change' id='change' value='ZAPISZ ZMIANY'>
                  </form>";
            echo "</fieldset>";
            if(!empty($_POST["name"])){
                setcookie($key,null,-1);
                $key = $_POST["name"];
                if(isset($_COOKIE[$key])){
                    header("Location: cookie_exist.php?name=$key");
                    exit();
                }
                if(!empty($date)){
                    $expiry = $cookie->expiry;
                    $cookie_data = (object) array("value"=>$value, "expiry"=>$expiry);
                    setcookie($key,json_encode($cookie_data),$expiry);
                } else {
                    $expiry = time() + 2629743;
                    $cookie_data = (object) array("value"=>$value, "expiry"=>$expiry);
                    setcookie($key,json_encode($cookie_data),$expiry);
                }
            }
            if(!empty($_POST["value"])){
                $value = $_POST["value"];
                if(!empty($date)){
                    $expiry = $cookie->expiry;
                    $cookie_data = (object) array("value"=>$value, "expiry"=>$expiry);
                    setcookie($key,json_encode($cookie_data),$expiry);
                } else {
                    $expiry = time() + 2629743;
                    $cookie_data = (object) array("value"=>$value, "expiry"=>$expiry);
                    setcookie($key,json_encode($cookie_data),$expiry);
                }
            }
            if(!empty($_POST["expire"])){
                $datetime = explode("T",$_POST["expire"]);
                $date = explode("-",$datetime[0]);
                $time = explode(":",$datetime[1]);
                $time[0] += 2;
                $expiry = mktime($time[0],$time[1],0,$date[1],$date[2],$date[0]);
                $cookie_data = (object) array("value"=>$value, "expiry"=>$expiry);
                setcookie($key,json_encode($cookie_data),$expiry);
            }
            if(!empty($_POST)){
                header("Location: home_page.php");
            }
        page_footer();
        ?>
