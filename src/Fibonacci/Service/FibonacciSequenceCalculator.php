<?php

namespace App\Fibonacci\Service;

class FibonacciSequenceCalculator
{
    public function calculateBasedOnType(?string $calcType, ?int $inputNumber): ?int
    {
        return match ($calcType) {
            null    => $this->calculateForOwnValue($inputNumber),
            'day'   => $this->calculateForDay(),
            'month' => $this->calculateForMonth(),
            default => null,
        };
    }

    public function calculateForOwnValue(int $inputNumber): ?int
    {
        $fibonacciSequence = $this->generateFibonacciSequence($inputNumber);
        return $this->calculateSum($fibonacciSequence);
    }

    public function calculateForDay(): ?int
    {
        $dayOfMonth        = \date('j');
        $fibonacciSequence = $this->generateFibonacciSequence($dayOfMonth);
        return $this->calculateSum($fibonacciSequence);
    }

    public function calculateForMonth(): ?int
    {
        $monthOfYear       = \date('n');
        $fibonacciSequence = $this->generateFibonacciSequence($monthOfYear);
        return $this->calculateSum($fibonacciSequence);
    }

    private function generateFibonacciSequence(int $number): array
    {
        $fibonacciSequence = [];

        for ($i = 0; $i < $number; $i++) {
            if ($i <= 1) {
                $fibonacciSequence[] = $i;
            } else {
                $fibonacciSequence[] = $fibonacciSequence[$i - 1] + $fibonacciSequence[$i - 2];
            }
        }

        return $fibonacciSequence;
    }

    private function calculateSum(array $sequence): ?int
    {
        return array_sum($sequence);
    }
}
