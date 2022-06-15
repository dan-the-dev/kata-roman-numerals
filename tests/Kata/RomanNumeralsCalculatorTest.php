<?php

namespace Kata;

use PHPUnit\Framework\TestCase;
use Kata\RomanNumeralsCalculator;

class RomanNumeralsCalculatorTest extends TestCase
{
    private RomanNumeralsCalculator $romanNumerals;

    protected function setUp(): void
    {
        $this->romanNumerals = new RomanNumeralsCalculator();
    }

    public function testNumber1(): void
    {
        $actual = $this->romanNumerals->convertFromArabicNumber(1);

        $this->assertEquals(new RomanNumber('I'), $actual);
    }

    public function testNumber2(): void
    {
        $actual = $this->romanNumerals->convertFromArabicNumber(2);

        $this->assertEquals(new RomanNumber('II'), $actual);
    }
}
