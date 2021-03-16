<?php

namespace CODE\Tags;

class Img
{
    public function render($src)
    {
        return "<img src=\"{$src}\">";
    }
}