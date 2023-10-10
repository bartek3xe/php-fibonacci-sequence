<?php

namespace App\Controller;

use App\DBAL\Enum\FibonacciEnumType;
use App\Form\FibonacciType;
use App\Service\FibonacciSequenceCalculator;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class FibonacciController extends AbstractController
{

    public function __construct(private readonly FibonacciSequenceCalculator $fibonacciSequenceCalculator)
    {
    }

    #[Route('/fibonacci', name: 'fibonacci')]
    public function index(Request $request): Response
    {
        $form = $this->createForm(FibonacciType::class);

        $form->handleRequest($request);

        $result = null;

        if ($form->isSubmitted() && $form->isValid())
        {
            $data   = $form->getData();
            $result = $this->fibonacciSequenceCalculator->calculateBasedOnType($data['calcType'], $data['number']);
        }

        return $this->render('fibonacci/index.html.twig', [
            'form'      => $form,
            'calcTypes' => FibonacciEnumType::FIBONACCI_CALC_TYPES,
            'result'    => $result,
        ]);
    }
}
