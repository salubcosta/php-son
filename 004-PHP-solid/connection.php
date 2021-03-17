<?php

require __DIR__.'/vendor/autoload.php';

interface Db
{
    public function connect($server, $dbname, $user, $pass);
}

class Mysql implements Db
{
    public function connect($server, $dbname, $user, $pass)
    {
        echo 'connecting to myql';
    }
}

class Connection
{
    public function __construct($server, $dbname, $user, $pass)
    {
        $this->server = $server; 
        $this->dbname = $dbname; 
        $this->user = $user; 
        $this->pass = $pass; 
    }

    public function connect(Db $db)
    {
        $db->connect($this->server, $this->dbname, $this->user, $this->pass);
    }
}

$conn = new Connection('localhost', 'cursosolid', 'root', '');
$conn->connect(new Mysql);