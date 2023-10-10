<?php

namespace App\DBAL\Enum;

enum FibonacciEnumType
{
    const MAX_INPUT_NUMBER = 44;

    const DAY_KEY   = "dzisiejszy dzień";
    const MONTH_KEY = "ten miesiąc";
    const OWN_KEY   = "Własną wartość";

    const DAY_VALUE   = 'day';
    const MONTH_VALUE = 'month';
    const OWN_VALUE   = null;

    const FIBONACCI_CALC_TYPES = [
        self::DAY_KEY   => self::DAY_VALUE,
        self::MONTH_KEY => self::MONTH_VALUE,
        self::OWN_KEY   => self::OWN_VALUE,
    ];
}
