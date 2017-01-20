<?php

namespace MpwebUnit\FizzBuzz\Solver;


use Mpweb\FizzBuzz\Solver\FizzSolver;

class FizzSolverTest extends \PHPUnit_Framework_TestCase
{


    const FIZZ_WORD = "fizz";


    private $solver;

    private $number;

    protected function setUp()
    {
        $this->solver = new FizzSolver();
    }

    /**
     * @test
     * @dataProvider numberDivisibleByThreeProvider
     */
    public function shouldReturnFizzForNumbersThatCanBeDividedByThree($number)
    {
        $this->givenANumber($number);
        $this->thenItShouldReturnFizz();
    }

    public function numberDivisibleByThreeProvider()
    {
        return [
            [3], [6], [9], [12], [18], [24], [36], [48], [96], [102]
        ];
    }

    private function givenANumber($number)
    {
        $this->number = $number;
    }

    private function thenItShouldReturnFizz()
    {
        $result = $this->solver->solve($this->number);
        $this->assertEquals(self::FIZZ_WORD, $result);
    }

}