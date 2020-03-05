<?php


namespace Tests\Controller;

use App\Entity\Calculation\Division;
use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;


class DivisionTest extends WebTestCase
{
    public function testDivision()
    {
        $division = new Division();
        $this->assertEquals(2, $division->doCalculation(8, 4));
    }
}