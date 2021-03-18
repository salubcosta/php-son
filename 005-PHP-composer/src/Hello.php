<?php

namespace SON;

class Hello
{
    public function sayToMe(string $msg):string
    {
        return $msg . PHP_EOL;
    }
}