<?php

namespace App\Controller;

use App\DBAL\Enum\FibonacciEnumType;
use App\Form\FibonacciType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class FibonacciController extends AbstractController
{
    #[Route('/fibonacci', name: 'fibonacci')]
    public function index(Request $request): Response
    {
        $form = $this->createForm(FibonacciType::class);

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid())
        {
        }

        return $this->render('fibonacci/index.html.twig', [
            'form'      => $form,
            'calcTypes' => FibonacciEnumType::FIBONACCI_CALC_TYPES,
        ]);
    }
}
