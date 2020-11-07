<?php

namespace Kata;

class RomanNumerals
{
    public function handle(int $number): string
    {
        if ($number <= 3) {
            return $this->transformNumber3orLower($number);
        } else if ($number <= 8) {
            return $this->transformNumberAround5($number);
        }

        return $this->transformNumberAround10($number);
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

    /**
     * @param int $number
     * @return string
     */
    public function transformNumberAround10(int $number): string
    {
        $string = 'X'; // 10
        $diff = $number - 10;
        $remains = abs($diff);
        $remainsToRomans = $this->transformNumber3orLower($remains);
        $string = ($diff < 0) ? "{$remainsToRomans}{$string}" : "{$string}{$remainsToRomans}";

        return $string;
    }
}
