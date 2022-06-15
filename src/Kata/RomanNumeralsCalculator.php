<?php

namespace Kata;

class RomanNumeralsCalculator
{
    public function convertFromArabicNumber(ArabicNumber $arabicNumber): RomanNumber
    {
        if ($arabicNumber->getValue() === 2){
            return new RomanNumber('II');
        }
        return new RomanNumber('I');
    }
}
