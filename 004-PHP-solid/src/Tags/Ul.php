<?php

namespace CODE\Tags;

class Ul
{
    public function render($content) : string
    {
        return "<ul><li>{$content}</li></ul>";
    }
}
