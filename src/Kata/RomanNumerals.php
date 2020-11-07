<?php

namespace Kata;

class RomanNumerals
{
    private $arabicToRomansBreakpoints = [
        1000 	=> 	'M',
        900 	=> 	'CM',
        500		=>	'D',
        400		=>	'CD',
        100		=>	'C',
        90		=>	'XC',
        50		=>	'L',
        40		=>	'XL',
        10		=>	'X',
        9       =>  'IX',
        5		=>	'V',
        4       =>  'IV',
        1		=>	'I',
    ];

    public function handle(int $number): string
    {
        $string = '';
        foreach ($this->arabicToRomansBreakpoints as $arabic => $roman) {
            while ($number >= $arabic) {
                $string .= $roman;
                $number -= $arabic;
            }
        }
        return $string;
    }
}
