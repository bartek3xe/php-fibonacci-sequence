<?php

namespace App\Form\EventSubscriber;

use App\DBAL\Enum\FibonacciEnumType;
use Symfony\Component\EventDispatcher\EventSubscriberInterface;
use Symfony\Component\Form\FormEvent;
use Symfony\Component\Form\FormEvents;

class FibonacciFormSubscriber implements EventSubscriberInterface
{

    public static function getSubscribedEvents(): array
    {
        return [
            FormEvents::PRE_SET_DATA => 'preSetData',
        ];
    }

    public function preSetData(FormEvent $event): void
    {
        $form = $event->getForm();
        $data = $event->getData();

        if ($data && isset(FibonacciEnumType::FIBONACCI_CALC_TYPES[$data['calcType']])) {
            $requiresInput = FibonacciEnumType::FIBONACCI_CALC_TYPES[$data['calcType']];
            $form->get('number')->getConfig()->setDisabled($requiresInput !== FibonacciEnumType::TYPE_REQUIRES_INPUT);
            $form->get('number')->getConfig()->setRequired($requiresInput === FibonacciEnumType::TYPE_REQUIRES_INPUT);
        }
    }
}
