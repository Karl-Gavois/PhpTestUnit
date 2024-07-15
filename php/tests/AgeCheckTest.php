<?php

use PHPUnit\Framework\TestCase;

require_once __DIR__ . '/../index.php';

class AgeCheckTest extends TestCase
{
    public function testAgeUnder16()
    {
        $this->assertEquals("Dégage minus", checkAge(15));
    }

    public function testAge16()
    {
        $this->assertEquals("Tu dois être accompagné d'un adulte", checkAge(16));
    }

    public function testAge17()
    {
        $this->assertEquals("Tu dois être accompagné d'un adulte", checkAge(17));
    }

    public function testAge18()
    {
        $this->assertEquals("Tu passes", checkAge(18));
    }

    public function testAgeOver18()
    {
        $this->assertEquals("Tu passes", checkAge(19));
    }
}
?>
