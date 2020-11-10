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

    public function testArabic1ReturnsRomanI(): void
    {
        $actual = $this->romanNumerals->handle(1);

        $this->assertEquals('I', $actual);
    }

    public function testArabic2ReturnsRomanII(): void
    {
        $actual = $this->romanNumerals->handle(2);

        $this->assertEquals('II', $actual);
    }

    public function testArabic3ReturnsRomanIII(): void
    {
        $actual = $this->romanNumerals->handle(3);

        $this->assertEquals('III', $actual);
    }

    public function testArabic5ReturnsRomanV(): void
    {
        $actual = $this->romanNumerals->handle(5);

        $this->assertEquals('V', $actual);
    }

    public function testArabic10ReturnsRomanX(): void
    {
        $actual = $this->romanNumerals->handle(10);

        $this->assertEquals('X', $actual);
    }

    public function testArabic50ReturnsRomanL(): void
    {
        $actual = $this->romanNumerals->handle(50);

        $this->assertEquals('L', $actual);
    }

    public function testArabic100ReturnsRomanC(): void
    {
        $actual = $this->romanNumerals->handle(100);

        $this->assertEquals('C', $actual);
    }

    public function testArabic500ReturnsRomanD(): void
    {
        $actual = $this->romanNumerals->handle(500);

        $this->assertEquals('D', $actual);
    }

    public function testArabic1000ReturnsRomanM(): void
    {
        $actual = $this->romanNumerals->handle(1000);

        $this->assertEquals('M', $actual);
    }

    public function testArabic600ReturnsRomanDC(): void
    {
        $actual = $this->romanNumerals->handle(600);

        $this->assertEquals('DC', $actual);
    }

    public function testArabic700ReturnsRomanDCC(): void
    {
        $actual = $this->romanNumerals->handle(700);

        $this->assertEquals('DCC', $actual);
    }

    public function testArabic800ReturnsRomanDCCC(): void
    {
        $actual = $this->romanNumerals->handle(800);

        $this->assertEquals('DCCC', $actual);
    }

    public function testArabic846ReturnsRomanDCCCXLVI(): void
    {
        $actual = $this->romanNumerals->handle(836);

        $this->assertEquals('DCCCXXXVI', $actual);
    }

}
