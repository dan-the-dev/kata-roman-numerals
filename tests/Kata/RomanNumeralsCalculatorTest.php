<?php

namespace Kata;

use PHPUnit\Framework\TestCase;
use Kata\RomanNumeralsFactory;

class RomanNumeralsCalculatorTest extends TestCase
{
    private RomanNumeralsFactory $romanNumerals;

    protected function setUp(): void
    {
        $this->romanNumerals = new RomanNumeralsFactory();
    }

    public function testNumber1(): void
    {
        $actual = $this->romanNumerals->createFromArabicNumber(new ArabicNumber(1));

        $this->assertEquals(new RomanNumber('I'), $actual);
    }

    public function testNumber2(): void
    {
        $actual = $this->romanNumerals->createFromArabicNumber(new ArabicNumber(2));

        $this->assertEquals(new RomanNumber('II'), $actual);
    }

    public function testNumber3(): void
    {
        $actual = $this->romanNumerals->createFromArabicNumber(new ArabicNumber(3));

        $this->assertEquals(new RomanNumber('III'), $actual);
    }
}
