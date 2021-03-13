<?php

// $array = [1,2,3];

// uma forma de desconstruir um array
// list($x, $y, $z) = $array;

// outra forma de fazer isso
// [$x, $y, $z] = $array;

// se houver um array cabeludo, há outra forma de desconstruir
// $array = ['index01'=>'a', 'index02'=>'b' , 'index03'=>'c'];
// ['index01'=>$x, 'index02'=>$y, 'index03'=>$z] = $array;

// var_dump($x, $y, $z);


[
    'basename' => $file,
    'dirname' => $directory,
] = pathinfo('/users/test/file.png');

echo "<pre>";
var_dump($file, $directory,'<hr>');
var_dump(pathinfo('/users/test/file.png'));
echo "</pre>";