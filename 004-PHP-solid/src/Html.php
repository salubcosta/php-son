<?php

namespace CODE;

class Html
{
    public function __call(string $name, array $arguments)
    {
        $class = '\CODE\Tags\\'.ucfirst($name);
        return call_user_func_array([new $class, 'render'], $arguments);
    }
    // public function img(string $src) : string
    // {
    //     return "<img src=\"{$src}\">";
    // }

    // public function a(string $href, string $img) : string
    // {
    //     return "<a href=\"{$href}\">{$img}</a>";
    // }
}