<?php
    fscanf(STDIN, "%d %d",$a, $b);
    $add = $a + $b;
    echo("add: $a + $b = $add\n");
    $sub = $a - $b;
    echo("sub: $a - $b = $sub\n");
    $mul = $a * $b;
    echo("mul: $a * $b = $mul\n");
    $modulo = $a % $b;
    echo("modulo: $a mod $b = $modulo");
?>