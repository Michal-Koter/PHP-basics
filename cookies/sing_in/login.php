<?php
session_start();

$accounts[] = ['login'=>'admin','password'=>'admin'];
$accounts[] = ['login'=>'user','password'=>'haslo'];

if(!empty($_POST['login'])&&!empty($_POST['password'])) {
    $_SESSION['login'] = $_POST['login'];
    $account_found = false;
    foreach ($accounts as $account){
        if($account['login'] == $_SESSION['login']){
            if($account['password'] == $_POST['password']){
                header('Location: successful.php');
            } else {
                header('Location: incorrect_pass.php');
            }
            $account_found = true;
            break;
        }
    }
    if (!$account_found) {
        header('Location: incorrect_log.php');
    }
} else {
    header("Location: form.html");
}
?>