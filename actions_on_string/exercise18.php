<?php
    $T = array_unique(explode(" ",readline()));
    $K = readline();
    foreach($T as $word) {
        $fragment = stristr($word,$K);
        if($fragment == $word){
            echo "$K jest przedrostkiem słowa {$word}\n";
        } elseif ($fragment != null){
            echo "$K jest przyrostkiem słowa {$word}\n";
        }
    }
?>