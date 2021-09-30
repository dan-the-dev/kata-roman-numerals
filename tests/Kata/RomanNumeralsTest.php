<?php

namespace Kata;

use PHPUnit\Framework\TestCase;

class RomanNumeralsTest extends TestCase
{
    public function test1IsTraducedToI(): void
    {
        $this->assertEquals('I', RomanNumerals::fromInt(1));
    }

    public function test2IsTraducedToII(): void
    {
        $this->assertEquals('II', RomanNumerals::fromInt(2));
    }

    public function test3IsTraducedToIII(): void
    {
        $this->assertEquals('III', RomanNumerals::fromInt(3));
    }

    public function test4IsTraducedToIV(): void
    {
        $this->assertEquals('IV', RomanNumerals::fromInt(4));
    }

    public function test5IsTraducedToV(): void
    {
        $this->assertEquals('V', RomanNumerals::fromInt(5));
    }
}
