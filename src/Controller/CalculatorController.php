<?php

namespace App\Controller;

use App\Services\CalculatorService;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;

class CalculatorController extends AbstractController
{
    public function __construct(
        private CalculatorService $calculatorService
    )
    {
    }

    public function add($a, $b): JsonResponse
    {
        return $this->json(['result' => $this->calculatorService->add($a, $b)]);
    }
}