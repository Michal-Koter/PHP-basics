<?php

trait ShowParent
{
    public function getParent()
    {
        if (get_parent_class(get_called_class())) {
            return get_parent_class(get_called_class());
        } else {
            return "Parent class do not exist";
        }
    }
}