<?php

namespace DevNortista\DB;

class Postgres implements Db
{
    public function connect():string
    {
        return 'Connected to Postgres';
    }
}