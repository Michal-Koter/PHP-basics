<?php
    $email = readline();
    $userName = explode("@", $email);
    echo $userName[0];
?>