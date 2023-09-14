<?php

namespace App\Services;

use Psr\Log\LoggerInterface;

class CalculatorService
{
    public function __construct(private LoggerInterface $logger)
    {
    }

    public function add($a, $b): int|float
    {
        $this->logger->info('Addition operation $a + $b.');
        return $a + $b;
    }
}