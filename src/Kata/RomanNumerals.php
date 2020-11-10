<?php

namespace Kata;

class RomanNumerals
{
    private $converter = [
        5    => 'V',
        10   => 'X',
        50   => 'L',
        100  => 'C',
        500  => 'D',
        1000 => 'M',
    ];

    public function handle(int $arabic): string
    {
        if ($arabic > 3) {
            return $this->converter[$arabic];
        }
        return str_repeat('I', $arabic);
    }
}
