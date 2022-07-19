<?php
include_once "Hello.php";
include_once "World.php";

class Greeting
{
    use Hello, World;
}