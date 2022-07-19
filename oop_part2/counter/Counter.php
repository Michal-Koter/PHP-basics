<?php

trait Counter
{
    private static $c = 0;
    public function inc(){
        self::$c += 1;
        return self::$c;
    }
}