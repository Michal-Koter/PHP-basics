<?php
include_once "A.php";
include_once "B.php";

class Litter
{
    use A, B {
        A::smallTalk as aSmallTalk;
        A::bigTalk as aBigTalk;
        B::smallTalk insteadof A;
        B::bigTalk insteadof A;
    }
}