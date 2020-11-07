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

}
