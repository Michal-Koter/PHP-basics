<?php
    fscanf(STDIN, "%f %f %f", $a, $b, $c);
    if (($a < $b) && ($a < $c)){
        if ($b < $c){
            printf("%.6f %.6f %.6f\n", $a, $b, $c);
            printf("%.6f %.6f %.6f", $c, $b, $a);
        } else {
            printf("%.6f %.6f %.6f\n", $a, $c, $b);
            printf("%.6f %.6f %.6f", $b, $c, $a);
        }
    } else if ($b < $c){
        if ($a < $c){
            printf("%.6f %.6f %.6f\n", $b, $a, $c);
            printf("%.6f %.6f %.6f", $c, $a, $b);
        } else {
            printf("%.6f %.6f %.6f\n", $b, $c, $a);
            printf("%.6f %.6f %.6f", $a, $c, $b);
        }
    } else {
        if ($a < $b){
            printf("%.6f %.6f %.6f\n", $c, $a, $b);
            printf("%.6f %.6f %.6f", $b, $a, $c);
        } else {
            printf("%.6f %.6f %.6f\n", $c, $b, $a);
            printf("%.6f %.6f %.6f", $a, $b, $c);
        }
    }
?>