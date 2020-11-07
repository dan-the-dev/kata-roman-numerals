<?php

namespace Kata;

class RomanNumerals
{
    private $arabicToRomansBreakpoints = [
        10		=>	'X',
        5		=>	'V',
        1		=>	'I'
    ];

    public function handle(int $number): string
    {
        if ($number <= 3) {
            return $this->transformNumber3orLower($number);
        } else if ($number <= 8) {
            return $this->transformNumberAround5($number);
        } else if ($number <= 13) {
            return $this->transformNumberAround10($number);
        } else if ($number <= 18) {
            return $this->transformNumberAround15($number);
        }
        return $this->transformNumberAround20($number);
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
        $breakpoint = 5;
        return $this->transformNumber($breakpoint, $number);
    }

    /**
     * @param int $number
     * @return string
     */
    public function transformNumberAround10(int $number): string
    {
        $breakpoint = 10;
        return $this->transformNumber($breakpoint, $number);
    }

    /**
     * @param int $number
     * @return string
     */
    public function transformNumberAround15(int $number): string
    {
        return $this->transformNumberAround10(10) . $this->transformNumberAround5($number-10);
    }

    /**
     * @param int $breakpoint
     * @param int $number
     * @return string
     */
    public function transformNumber(int $breakpoint, int $number): string
    {
        $string = $this->arabicToRomansBreakpoints[$breakpoint];
        $diff = $number - $breakpoint;
        $remains = abs($diff);
        $remainsToRomans = $this->transformNumber3orLower($remains);
        $string = ($diff < 0) ? "{$remainsToRomans}{$string}" : "{$string}{$remainsToRomans}";
        return $string;
    }

    /**
     * @param int $number
     * @return string
     */
    public function transformNumberAround20(int $number): string
    {
        return $this->transformNumberAround10(10) . $this->transformNumberAround10($number-10);
    }
}
