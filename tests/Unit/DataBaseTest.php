<?php

namespace Unit;

use PHPUnit\Framework\TestCase;
use App\Services\DB\DataBase;

class DataBaseTest extends TestCase
{
    public function test_connect() : void
    {
        //GIVEN
        $expected   = new \PDO('mysql:host=db;dbname=php_8', 'root', 'o251298');
        //WHEN
        $actual     = DataBase::connect();
        //THEN
        $this->assertEquals($expected, $actual);
    }

//    public function test_exception() : void
//    {
//        //GIVEN
//        $actual     = DataBase::connect();
//        //WHEN
//        //$expected   = new \PDO('mysql:host=db;dbname=phpw_8', 'root', 'o251298');
//        //THEN
//        $this->expectException(\PDOException::class);
//
//    }
}