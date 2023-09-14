<?php

namespace App\Services;

use Psr\Log\LoggerInterface;

class CalculatorService
{
    public function __construct(private LoggerInterface $logger)
    {
    }

    public function add(int|float $a, int|float $b): int|float
    {
        $this->logger->info('Addition operation $a + $b.');
        return $a + $b;
    }

    public function sub(int|float $a, int|float $b): int|float
    {
        $this->logger->info('Subtraction operation $a - $b.');
        return $a - $b;
    }

    public function mul(int|float $a, int|float $b): int|float
    {
        $this->logger->info('Multiplication operation $a * $b.');
        return $a * $b;
    }

    public function div(int|float $a, int|float $b): int|float
    {
        if ($b == 0) {
            $this->logger->error('Division by zero.');
            throw new \InvalidArgumentException('Division by zero.');
        }

        $this->logger->info('Division operation $a / $b.');
        return $a / $b;
    }
}