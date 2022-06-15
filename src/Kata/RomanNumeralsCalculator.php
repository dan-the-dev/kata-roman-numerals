<?php

namespace Kata;

class RomanNumeralsCalculator
{
    public function convertFromArabicNumber(ArabicNumber $arabicNumber): RomanNumber
    {
        if ($arabicNumber->equalsTo(new ArabicNumber(2))){
            return new RomanNumber('II');
        }
        return new RomanNumber('I');
    }
}
