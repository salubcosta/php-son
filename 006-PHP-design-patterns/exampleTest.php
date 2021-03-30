<?php 

require __DIR__.'/vendor/autoload.php';

$builder = new CODE\Builder\SqlBuilder;
$director = new CODE\Builder\UsersDirector($builder);

$sql = $director->getSqlAll();

var_dump($sql);