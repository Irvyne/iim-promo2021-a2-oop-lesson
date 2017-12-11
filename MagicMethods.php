<?php

class MagicMethods
{
    public function __get($name)
    {
        echo "Blabla";
    }

    public function __set($name, $value)
    {
        $this->blabla = $value;
    }
}