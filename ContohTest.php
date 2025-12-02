<?php
use PHPUnit\Framework\TestCase;

class ContohTest extends TestCase
{
    public function testPenjumlahan()
    {
        $hasil = 1 + 1;
        $this->assertEquals(2, $hasil);
    }
    public function testString()
    {
        $kata = "Halo Jenkins";
        $this->assertStringContainsString("Jenkins", $kata);
    }
}