<?php

namespace App\Form;

use App\DBAL\Enum\FibonacciEnumType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Validator\Constraints\Range;

class FibonacciType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('calcType', ChoiceType::class, [
                'label'   => 'Przelicz w oparciu o',
                'choices' => FibonacciEnumType::FIBONACCI_CALC_TYPES,
            ])
            ->add('number', NumberType::class, [
                'label'       => 'Użyj własnej liczby',
            ])
            ->add('submit', SubmitType::class, [
                'label' => 'Zatwierdź',
            ])
        ;
    }
}
