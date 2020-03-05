<?php

namespace Tests\Controller;

use App\Entity\Calculation\Multiplication;
use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class MultiplicationTest extends WebTestCase
{
    public function testMultiplication()
    {
        $multiplication = new Multiplication();
        $this->assertEquals(30, $multiplication->doCalculation(6, 5));
    }
}