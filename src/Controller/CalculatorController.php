<?php

namespace App\Controller;

use App\Services\CalculatorService;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;

class CalculatorController extends AbstractController
{
    public function __construct(
        private CalculatorService $calculatorService
    ) {
    }

    public function add(int|float $a, int|float $b): JsonResponse
    {
        return $this->json(['result' => $this->calculatorService->add($a, $b)]);
    }

    public function sub(int|float $a, int|float $b): JsonResponse
    {
        return $this->json(['result' => $this->calculatorService->sub($a, $b)]);
    }

    public function mul(int|float $a, int|float $b): JsonResponse
    {
        return $this->json(['result' => $this->calculatorService->mul($a, $b)]);
    }

    public function div(int|float $a, int|float $b): JsonResponse
    {
        if (0 == $b) {
            return $this->json(['error' => 'Division by zero.'], Response::HTTP_BAD_REQUEST);
        }

        return $this->json(['result' => $this->calculatorService->div($a, $b)]);
    }
}
