<?php

use PHPUnit\Framework\TestCase;

include "functions/users.php";
include "functions/utenteUpgrade.php";
include "functions/utenteDelete.php";

class UserTest extends TestCase
{

    protected $connection;
    protected $commonUser;


    public function setUp(): void
    {
        $this->commonUser = array(
            'id'          =>  '1',
            'username'    =>  'loretuc',
            'nome'        =>  'Lorenzo',
            'cognome'     =>  'Tucceri',
            'telefono'    =>  '3934589228',
            'email'       =>  'lore@lib.it',
            'password'    =>  '123',
            'indirizzo'   =>  'Roma via antica arischia',
            'id_gruppo'   =>  '1',
            'foto'        =>  ''

        );

        $this->connection = mysqli_connect("127.0.0.1", "root", "password", "eventplannertest");

    }

    public function testWishlist(){

        $this->assertIsObject(select_wishlist($this->connection, $this->commonUser['id'], 1));

    }

    public function testUserLogin(){

        $this->assertIsArray(loginTest($this->connection, $this->commonUser['email'], $this->commonUser['password']));

    }
    public function testUpgradeUser(){

        $this->assertNotFalse(upgrade($this->connection,$this->commonUser['id']));

    }

    public function testUpdateInfo(){

        $this->assertEquals(1, update_info($this->connection,$this->commonUser['id'],
                                                        $this->commonUser['nome'],$this->commonUser['cognome'],
                                                        $this->commonUser['username'], $this->commonUser['telefono'],
                                                        $this->commonUser['indirizzo'], $this->commonUser['foto']));
    }

    public function testUpdatePassword(){

            $newPassword = "123";
            $this->assertEquals(1, update_password($this->connection, $this->commonUser['id'],
                                $this->commonUser['password'], $newPassword));

    }

    public function testGetUtenteDettagli(){

            $this->assertIsObject(select_utente_dettagli($this->connection,$this->commonUser['id']));

    }


    protected function TearDown(): void

    {
        //$this->connection->query("DELETE FROM utente Where nome = 'Roberto' AND cognome = 'Cincus'");
        $this->connection->close();
    }
}