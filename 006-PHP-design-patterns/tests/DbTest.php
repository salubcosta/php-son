<?php

namespace CODE;

class DbTest extends \PHPUnit\Framework\TestCase
{
    public function testTestarSeAClasseEstaInstanciando()
    {
        $db = new Db;

        $this->assertInstanceOf('\CODE\Db', $db);
    }
}
