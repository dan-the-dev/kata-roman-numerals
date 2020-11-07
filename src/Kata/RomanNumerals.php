<?php

namespace Kata;

class RomanNumerals
{
    public function handle(int $number): string
    {
        if ($number <= 3) {
            return $this->transformNumber3orLower($number);
        }
        return $this->transformNumberAround5($number);
    }

    /**
     * @param int $number
     * @return string
     */
    public function transformNumber3orLower(int $number): string
    {
        return str_repeat('I', $number);
    }

    /**
     * @param int $number
     * @return string
     */
    public function transformNumberAround5(int $number): string
    {
        $string = 'V'; // 5
        $diff = $number - 5;
        $remains = abs($diff);
        $remainsToRomans = $this->transformNumber3orLower($remains);
        $string = ($diff < 0) ? "{$remainsToRomans}{$string}" : "{$string}{$remainsToRomans}";

        return $string;
    }
}
