<?php

namespace App\Tests\Controller;

use App\DBAL\Enum\FibonacciEnumType;
use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class FibonacciControllerTest extends WebTestCase
{
    public function testFormSubmissionWithValidData()
    {
        $this->testFormSubmissionData(10, 'Suma ciągu to 88');
    }

    public function testFormSubmissionWithLargeNumber()
    {
        $this->testFormSubmissionData(100, 'Liczba nie może być większa od ' . FibonacciEnumType::MAX_INPUT_NUMBER);
    }

    public function testFormSubmissionWithNegativeNumber()
    {
        $this->testFormSubmissionData(-100, 'Liczba nie może być ujemna');
    }

    private function testFormSubmissionData(int $inputNumber, string $resultText): void
    {
        $client  = static::createClient();
        $crawler = $client->request('GET', '/fibonacci');
        $form    = $crawler->selectButton('Zatwierdź')->form();

        $form['fibonacci[number]'] = $inputNumber;

        $client->submit($form);

        $this->assertResponseIsSuccessful();
        $this->assertSelectorTextContains('p#result', $resultText);
    }
}
