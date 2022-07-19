<!--cookie_exist.php-->
<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <title>Cookie exist</title>
</head>
<body>
    <?php
        include "page_elements.php";
        page_header();
        $name = $_GET['name'];
        echo "<h2>Ta nazwa jest już zajęta!<br>";
        echo "Jeśli chcesz edytować citeczko: $name,<br>";
        echo "to wróć do strony głownej i wybierz opcje EDIT<br></h2>";
        page_footer();
    ?>
