<?php

namespace Kata;

class RomanNumerals
{
    /** @var string $value */
    private $value;

    private const INT_TO_ROMAN = [
        1 => 'I',
        2 => 'II',
        3 => 'III',
        4 => 'IV',
        5 => 'V',
    ];

    public static function fromInt(int $int)
    {
        return new RomanNumerals(self::INT_TO_ROMAN[$int]);
    }

    protected function __construct(string $value)
    {
        $this->value = $value;
    }

    public function __toString()
    {
        return $this->value;
    }
}
