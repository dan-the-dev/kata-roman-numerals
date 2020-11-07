<?php

namespace Kata;

use PHPUnit\Framework\TestCase;
use Kata\RomanNumerals;

class RomanNumeralsTest extends TestCase
{
    private $romanNumerals;

    protected function setUp(): void
    {
        $this->romanNumerals = new RomanNumerals();
    }

    public function test1ReturnsStringI(): void
    {
        $actual = $this->romanNumerals->handle(1);

        $this->assertEquals('I', $actual);
    }

    public function test2ReturnsStringII(): void
    {
        $actual = $this->romanNumerals->handle(2);

        $this->assertEquals('II', $actual);
    }

    public function test3ReturnsStringIII(): void
    {
        $actual = $this->romanNumerals->handle(3);

        $this->assertEquals('III', $actual);
    }

    public function test5ReturnsStringV(): void
    {
        $actual = $this->romanNumerals->handle(5);

        $this->assertEquals('V', $actual);
    }

    public function test4ReturnsStringIV(): void
    {
        $actual = $this->romanNumerals->handle(4);

        $this->assertEquals('IV', $actual);
    }

    public function test6ReturnsStringVI(): void
    {
        $actual = $this->romanNumerals->handle(6);

        $this->assertEquals('VI', $actual);
    }

    public function test7ReturnsStringVII(): void
    {
        $actual = $this->romanNumerals->handle(7);

        $this->assertEquals('VII', $actual);
    }

    public function test8ReturnsStringVIII(): void
    {
        $actual = $this->romanNumerals->handle(8);

        $this->assertEquals('VIII', $actual);
    }

    public function test9ReturnsStringIX(): void
    {
        $actual = $this->romanNumerals->handle(9);

        $this->assertEquals('IX', $actual);
    }

    public function test10ReturnsStringX(): void
    {
        $actual = $this->romanNumerals->handle(10);

        $this->assertEquals('X', $actual);
    }

    public function test11ReturnsStringXI(): void
    {
        $actual = $this->romanNumerals->handle(11);

        $this->assertEquals('XI', $actual);
    }

    public function test12ReturnsStringXII(): void
    {
        $actual = $this->romanNumerals->handle(12);

        $this->assertEquals('XII', $actual);
    }

    public function test13ReturnsStringXIII(): void
    {
        $actual = $this->romanNumerals->handle(13);

        $this->assertEquals('XIII', $actual);
    }

    public function test14ReturnsStringXIV(): void
    {
        $actual = $this->romanNumerals->handle(14);

        $this->assertEquals('XIV', $actual);
    }

    public function test15ReturnsStringXV(): void
    {
        $actual = $this->romanNumerals->handle(15);

        $this->assertEquals('XV', $actual);
    }

    public function test16ReturnsStringXVI(): void
    {
        $actual = $this->romanNumerals->handle(16);

        $this->assertEquals('XVI', $actual);
    }

    public function test17ReturnsStringXVII(): void
    {
        $actual = $this->romanNumerals->handle(17);

        $this->assertEquals('XVII', $actual);
    }

    public function test18ReturnsStringXVIII(): void
    {
        $actual = $this->romanNumerals->handle(18);

        $this->assertEquals('XVIII', $actual);
    }

    public function test19ReturnsStringXIX(): void
    {
        $actual = $this->romanNumerals->handle(19);

        $this->assertEquals('XIX', $actual);
    }

    public function test20ReturnsStringXX(): void
    {
        $actual = $this->romanNumerals->handle(20);

        $this->assertEquals('XX', $actual);
    }

    public function test21ReturnsStringXXI(): void
    {
        $actual = $this->romanNumerals->handle(21);

        $this->assertEquals('XXI', $actual);
    }

}
