<?php

namespace App\Tests;
use App\Services\CalculatorService;
use PHPUnit\Framework\TestCase;
use Psr\Log\NullLogger;

class CalculatorServiceTest extends TestCase
{
    private CalculatorService $calculator;
    
    protected function setUp(): void
    {
        $this->calculator = new CalculatorService(new NullLogger());
    }

    public function testAdd()
    {
        $result = $this->calculator->add(5, 3);
        $this->assertEquals(8, $result);
    }

    public function testSubtract()
    {
        $result = $this->calculator->sub(5, 3);
        $this->assertEquals(2, $result);
    }

    public function testMultiply()
    {
        $result = $this->calculator->mul(5, 3);
        $this->assertEquals(15, $result);
    }

    public function testDivide()
    {
        $result = $this->calculator->div(6, 3);
        $this->assertEquals(2, $result);
    }

    public function testDivideByZero()
    {
        $this->expectException(\InvalidArgumentException::class);

        $this->calculator->div(5, 0);
    }
}