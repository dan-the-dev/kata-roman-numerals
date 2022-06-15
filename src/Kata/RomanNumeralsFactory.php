<?php

namespace Kata;

class RomanNumeralsFactory
{
    public function createFromArabicNumber(ArabicNumber $arabicNumber): RomanNumber
    {
        return new RomanNumber(str_repeat('I', $arabicNumber->getValue()));
    }
}
