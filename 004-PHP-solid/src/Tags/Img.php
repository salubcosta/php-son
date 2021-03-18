<?php

namespace CODE\Tags;

class Img
{
    public function render($src) : string
    {
        return "<img src=\"{$src}\">";
    }
}