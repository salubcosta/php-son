<?php

/**
 * @param ?int $x = indica que o paramentro pode ser null
 * ?int indica que o retorno pode ser null ou inteiro
 * Se o metódo for acionado sem paramentro, ele pega o default = null
 */
function sum(?int $x = null):?int {
    return $x;
}

var_dump(sum());