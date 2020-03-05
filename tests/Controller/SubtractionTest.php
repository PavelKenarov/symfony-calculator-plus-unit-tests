<?php


namespace Tests\Controller;

use App\Entity\Calculation\Subtraction;
use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class SubtractionTest extends WebTestCase
{
    public function testSubtraction()
    {
        $subtraction = new Subtraction();
        $this->assertEquals(3, $subtraction->doCalculation(6, 3));
    }
}