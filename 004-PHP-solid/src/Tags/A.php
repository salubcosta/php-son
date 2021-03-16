<?php

namespace CODE\Tags;

class A
{
    public function render(string $href, string $img) : string
    {
        return "<a href=\"{$href}\">{$img}</a>";
    }
}