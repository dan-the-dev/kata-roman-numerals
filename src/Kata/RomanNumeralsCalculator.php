<?php

namespace Kata;

class RomanNumeralsCalculator
{
    public function convertFromArabicNumber(int $number): RomanNumber
    {
        if ($number === 2){
            return new RomanNumber('II');
        }
        return new RomanNumber('I');
    }
}
