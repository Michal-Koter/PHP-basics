<?php

class User
{
    public string $message = "This is a message from";

    function introduce($name): string
    {
        return "This is a message from $name";
    }
}