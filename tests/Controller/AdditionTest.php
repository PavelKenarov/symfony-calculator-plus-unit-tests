<?php


namespace Tests\Controller;

use App\Entity\Calculation\Addition;
use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;


class AdditionTestTest extends WebTestCase
{
    public function testAddition()
    {
        $addition = new Addition();
        $this->assertEquals(30, $addition->doCalculation(15, 15));
    }
}