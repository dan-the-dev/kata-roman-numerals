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

    public function handle(int $number): string
    {
        $string = '';
        $this->calculateRoman($number, $string);
        return $string;
    }

    /**
     * @param int $number
     * @param string $result
     * @return string
     */
    public function calculateRoman(int $number, string &$result): string
    {
        if ($number <= 3) {
            $result .= str_repeat('I', $number);
        }

        if (isset($this->converter[$number])) {
            $result .= $this->converter[$number];
        }

        $previousRoman = null;
        $previousArabic = null;
        foreach ($this->converter as $arabic => $roman) {
            if ($number < $arabic) {
                var_dump("$number < $arabic");
                $result .= $previousRoman;
                $number -= $previousArabic;
                var_dump("result: $result");
                var_dump("remaining number: $number");
                var_dump("-----");
                if ($number > 0) {
                    $this->calculateRoman($number, $result);
                }
                break;
            }
            $previousRoman = $roman;
            $previousArabic = $arabic;
        }
        return $result;
    }
}
