<?php

use PHPUnit\Framework\TestCase;

class DatabaseTest extends TestCase
{

    protected $connection;

    protected function setUp(): void{

        $this->connection = mysqli_connect("127.0.0.1", "root", "password", "eventplannertest");
    }

    public function testDatabaseConnection(){

        $this->assertIsObject($this->connection);

    }

    protected function TearDown():void {

        $this->connection->close();

    }

}