<?php

namespace MpwebUnit\FizzBuzz\Solver;


use Mpweb\FizzBuzz\Solver\BuzzSolver;

class BuzzSolverTest extends \PHPUnit_Framework_TestCase
{

    const BUZZ_WORD = "buzz";

    private $solver;

    private $number;

    protected function setUp()
    {
        $this->solver = new BuzzSolver();
    }

    /**
     * @test
     * @dataProvider numberDivisibleByFiveProvider
     */
    public function shouldReturnBuzzForNumbersThatCanBeDividedByFive($number)
    {
        $this->givenANumber($number);
        $this->thenItShouldReturnBuzz();
    }

    public function numberDivisibleByFiveProvider()
    {
        return [
            [5], [10], [20], [35], [40], [50], [55], [80], [110], [160]
        ];
    }

    private function givenANumber($number)
    {
        $this->number = $number;
    }

    private function thenItShouldReturnBuzz()
    {
        $result = $this->solver->solve($this->number);
        $this->assertEquals(self::BUZZ_WORD, $result);
    }

}