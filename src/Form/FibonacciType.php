<?php

namespace App\Form;

use App\DBAL\Enum\FibonacciEnumType;
use App\Form\EventSubscriber\FibonacciFormSubscriber;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\FormBuilderInterface;

class FibonacciType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('calcType', ChoiceType::class, [
                'label'   => 'Choose the calculating method:',
                'choices' => array_keys(FibonacciEnumType::FIBONACCI_CALC_TYPES),
            ])
            ->add('number', NumberType::class, [
                'label'   => 'Write the number:',
            ])
            ->add('submit', SubmitType::class)
            ->addEventSubscriber(new FibonacciFormSubscriber())
        ;
    }
}
