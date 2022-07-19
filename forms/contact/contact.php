<?php
if(isset($_GET["name"])&&isset($_GET["e-mail"])&&isset($_GET["topic"])&&isset($_GET["message"])) {
    if (preg_match("/^[[:alnum:] ]*$/u", $_GET["name"])) {
        echo "Full name: {$_GET["name"]}<br>";
    } else {
        echo "Full name: incorrect<br>";
    }

    if (preg_match("/[.[:alnum:]]+@[[:alnum:]]+(\.[[:alnum:]]+)+/", $_GET["e-mail"])) {
        echo "E-mail: {$_GET["e-mail"]}<br>";
    } else {
        echo "E-mail: incorrect<br>";
    }

    if (preg_match("/^[0-9]{9}$|^\+48[0-9]$/", $_GET["your_number"])) {
        echo "Phone number: {$_GET["your_number"]}<br>";
    } else if (!empty($_GET["your_number"])) {
        echo "Phone number: incorrect<br>";
    } else {
        echo "Phone number: null<br>";
    }

    if (!empty($_GET["topic"])) {
        if (preg_match("/[[:alnum:] ,.?!]*/", $_GET["topic"])) {
            echo "Topic: {$_GET["topic"]}<br>";
        } else {
            echo "Topic: incorrect<br>";
        }
    } else {
        echo "Topic: null<br>";
    }

    if (!empty(htmlentities($_GET["message"]))) {
        echo "Message: " . htmlentities($_GET["message"]) . "<br>";
    } else {
        echo "Message: incorrect<br>";
    }

    if (key_exists("contact1", $_GET) && key_exists("contact2", $_GET)) {
        echo "Prefer form of contact: E-mail and Telephone<br>";
    } else if (key_exists("contact1", $_GET)) {
        echo "Prefer form of contact: E-mail<br>";
    } else if (key_exists("contact2", $_GET)) {
        echo "Prefer form of contact: Telephone<br>";
    } else {
        echo "Prefer form of contact: null<br>";
    }

    if (!empty($_GET["website"])) {
        echo "Website: {$_GET["website"]}<br>";
    } else {
        echo "Website: null<br>";
    }

    if (!empty($_GET["file"])) {
        if (preg_match("/^[[0-9A-Za-z_-]]*\.[[:alpha:]]{1,5}&/u", $_GET["file"])) {
            echo "File: incorrect<br>";
        } else {
            echo "File: {$_GET["file"]}<br>";
        }
    } else {
        echo "File: null";
    }
} else {
    echo "Something goes wrong";
}
?>