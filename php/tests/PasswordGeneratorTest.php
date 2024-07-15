<?php

use PHPUnit\Framework\TestCase;

require_once __DIR__ . '/../index.php';

class PasswordGeneratorTest extends TestCase
{
    public function testPassword()
    {
        $this->assertIsString(generatePassword());
    }

    public function testPasswordLength8()
    {
        $password = generatePassword(8);
        $this->assertEquals(8, strlen($password));
    }

    public function testPasswordLength24()
    {
        $password = generatePassword(24);
        $this->assertEquals(24, strlen($password));
    }

    public function testCapitalLetter()
    {
        $this->assertNotEquals(strtolower(generatePassword()), generatePassword());
    }

    public function testNumber()
    {
        $this->assertNotEquals(strtolower(generatePassword()), generatePassword());
    }

    public function testSpecialCharacter()
    {
        $this->assertNotEquals(strtolower(generatePassword()), generatePassword());
    }
}

?>