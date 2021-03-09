<?php

namespace DevNortista\DB;

use DevNortista\MyException;

class ORM 
{
    private $db;

    public function setDb(Db $db)
    {
        $this->db = $db;
    }

    public function tryBool(bool $truth)
    {
        if($truth){
            return [];
        }
        throw new \DevNortista\MyException("Value of parameter is false!", 1);
    }
}