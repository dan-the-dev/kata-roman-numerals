<?php
declare(strict_types=1);

namespace Kata;

final class ArabicNumber
{
    private int $value;

    public function __construct(int $value)
    {
        $this->value = $value;
    }

    public function getValue(): int
    {
        return $this->value;
    }

    public function equalsTo(ArabicNumber $anotherArabicNumber): bool
    {
        return $this->value === $anotherArabicNumber->value;
    }
}