<?php

namespace App\DBAL\Enum;

enum FibonacciEnumType
{
    const MAX_INPUT_NUMBER = 44;

    const TYPE_REQUIRES_INPUT         = 1;
    const TYPE_DOES_NOT_REQUIRE_INPUT = 0;

    const CALC_FIBONACCI_BY_INPUT = 'Own input value';
    const CALC_FIBONACCI_BY_DAY   = 'Day';
    const CALC_FIBONACCI_BY_MONTH = 'Month';

    const FIBONACCI_CALC_TYPES = [
        self::CALC_FIBONACCI_BY_INPUT => self::TYPE_REQUIRES_INPUT,
        self::CALC_FIBONACCI_BY_MONTH => self::TYPE_DOES_NOT_REQUIRE_INPUT,
        self::CALC_FIBONACCI_BY_DAY   => self::TYPE_DOES_NOT_REQUIRE_INPUT,
    ];
}
