<?php
    do{
        $num = (int)readline();
    }while($num < 0 || !is_int($num));

    for ($i = 0; $i < $num; $i++){
        for ($j = 0; $j < $i+1; $j++){
            echo("*");
        }
        echo("\n");
    }

    for ($i = $num; $i > 0; $i--){
        for ($j = 0; $j < $i; $j++){
            echo("*");
        }
        echo("\n");
    }

    for ($i = 0; $i < $num; $i++){
        for ($j = 0; $j < $i; $j++){
            echo(" ");
        }
        for ($j = 0; $j < $num-$i; $j++){
            echo("*");
        }
        echo("\n");
    }

    for ($i = $num; $i > 0; $i--){
        for ($j = 0; $j < $i-1; $j++){
            echo(" ");
        }
        for ($j = 0; $j < $num-$i+1; $j++){
            echo("*");
        }
        echo("\n");
    }
?>