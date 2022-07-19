<?php
    fscanf(STDIN, "%f %f %f", $a, $b, $c);
    if ( ($a<=0) || ($b<=0) || ($c<=0) ){
        echo("Something is wronf");
    } else {
        if ( ($a + $b > $c) && ($a + $c > $b) && ($b + $c > $a) ){
            echo("YES");
        } else {
            echo("NO");
        }
    }
?>