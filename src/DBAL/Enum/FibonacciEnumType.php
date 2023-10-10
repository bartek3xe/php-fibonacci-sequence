<?php

namespace App\DBAL\Enum;

enum FibonacciEnumType
{
    const MAX_INPUT_NUMBER = 44;

    const DAY_KEY   = "today's day";
    const MONTH_KEY = "today's month";
    const OWN_KEY   = "Own input value";

    const DAY_VALUE   = 'day';
    const MONTH_VALUE = 'month';
    const OWN_VALUE   = null;

    const FIBONACCI_CALC_TYPES = [
        self::DAY_KEY   => self::DAY_VALUE,
        self::MONTH_KEY => self::MONTH_VALUE,
        self::OWN_KEY   => self::OWN_VALUE,
    ];
}
