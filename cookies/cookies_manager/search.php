<!--search.php-->
<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <title>Search cookie</title>
    <link href='https://css.gg/trash.css' rel='stylesheet'>
    <link href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css' rel='stylesheet'>
    <link href="page.css" rel="stylesheet">
</head>
<body>
<?php
    include_once "page_elements.php";
    page_header();
    echo "<h2 style='margin-top: 0px; margin-bottom: 10px'>Wynik wyszukiwania:</h2>";
    table_head();
    if(!empty($_GET["search"])){
        $search = $_GET["search"];
        foreach ($_COOKIE as $key=>$data){
            if(preg_match("/$search/i",$key) || preg_match("/$search/i",$data)){
                table_row($key,$data);
            }
        }
    } else {
        header("Location: home_page.php");
    }
    table_footer();
    add_button();
    page_footer();
?>

