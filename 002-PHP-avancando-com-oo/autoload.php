<?php

require __DIR__.'/src/Autoload.php';

$autoload = new DevNortista\Autoload;

$autoload->register();

$autoload->addNamespace('DevNortista', 'src');