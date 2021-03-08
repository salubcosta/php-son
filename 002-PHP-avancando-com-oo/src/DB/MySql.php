<?php

namespace DevNortista\DB;

class MySql implements Db
{
    public function connect():string
    {
        return 'connected to MySQL';
    }
}