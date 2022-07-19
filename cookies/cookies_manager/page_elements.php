<?php
function table_head(){
    echo "<table>
                <tr>
                    <th>Nazwa</th>
                    <th>Wartość</th>
                    <th>Data wygaśnięcia</th>
                    <th>Edit</th>
                    <th>Usuń</th>
                </tr>";
}

function table_row($key, $data){
    if(($cookie = json_decode($data))) {
        $value = $cookie->value;
        $date = date("d-m-Y H:i", $cookie->expiry);
        echo "<tr>
                        <td>$key</td>
                        <td>$value</td>
                        <td>$date</td>
                        <td><a href='edit.php?cookie_key=$key' class='fa fa-gear'></a></td>
                        <td><a href='delete.php?cookie_key=$key'><i class='gg-trash'></i></a></td>
                      </tr>";
    } else {
        echo "<tr>
                        <td>$key</td>
                        <td>$data</td>
                        <td></td>
                        <td><a href='edit.php?cookie_key=$key' class='fa fa-gear'></a></td>
                        <td><a href='delete.php?cookie_key=$key'><i class='gg-trash'></i></a></td>
                      </tr>";
    }
}

function table_footer(){
    echo "</table>";
}

function add_button(){
    echo "<br>
      <a href='add_cookie.php' class='butt'>Dodaj ciasteczko</a>
      <br>";
}

function page_header(){ ?>
    <h1>Manager ciasteczek</h1>
    <form method="post">
        <label for="value_search"></label>
        <input type="text" name="value_search" id="value_search" placeholder="Szukaj...">
        <input type="submit" name="sub_search" id="sub_search" value="Prześlij" style="margin-left: -7px">
    </form>
    <br>
    <?php
    if(!empty($_POST)){
        $search = $_POST["value_search"];
        header("Location: search.php?search=$search");
    }
}

function page_footer(){
    echo "<br>
        <a href='home_page.php' class='butt'>Przejdź do strony głównej</a>
    </body>
    </html>";
}
