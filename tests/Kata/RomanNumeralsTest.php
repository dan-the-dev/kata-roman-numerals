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

}
