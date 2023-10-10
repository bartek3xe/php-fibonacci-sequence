<?php

namespace App\Tests\Service;

use App\Service\FibonacciSequenceCalculator;
use PHPUnit\Framework\TestCase;

class FibonacciSequenceCalculatorTest extends TestCase
{
    public function testCalculateBasedOnTypeWithOwnValue()
    {
        $calculator = new FibonacciSequenceCalculator();
        $result     = $calculator->calculateBasedOnType(null, 5);
        $this->assertEquals("Suma ciągu to 7", $result);
    }

    public function testCalculateBasedOnTypeWithDayValue()
    {
        $calculator = new FibonacciSequenceCalculator();
        $result     = $calculator->calculateBasedOnType('day', null);

        $this->assertIsString($result);
    }

    public function testCalculateBasedOnTypeWithMonthValue()
    {
        $calculator = new FibonacciSequenceCalculator();
        $result     = $calculator->calculateBasedOnType('month', null);

        $this->assertIsString($result);
    }

    public function testCalculateBasedOnTypeWithInvalidNumber()
    {
        $calculator = new FibonacciSequenceCalculator();
        $result     = $calculator->calculateBasedOnType('day', 1000);
        $this->assertEquals("Liczba nie może być większa od 44", $result);
    }

    public function testCalculateForOwnValue()
    {
        $calculator = new FibonacciSequenceCalculator();
        $result     = $calculator->calculateForOwnValue(5);
        $this->assertEquals(7, $result);
    }

    public function testCalculateForDay()
    {
        $calculator = new FibonacciSequenceCalculator();
        $result     = $calculator->calculateForDay();
        $this->assertIsInt($result);
    }

    public function testCalculateForMonth()
    {
        $calculator = new FibonacciSequenceCalculator();
        $result     = $calculator->calculateForMonth();
        $this->assertIsInt($result);
    }
}
