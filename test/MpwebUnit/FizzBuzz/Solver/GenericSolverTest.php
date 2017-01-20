<?php

namespace MpwebUnit\FizzBuzz\Solver;


use Mpweb\FizzBuzz\Solver\GenericSolver;

class GenericSolverTest extends \PHPUnit_Framework_TestCase
{

    private $solver;

    private $number;

    protected function setUp()
    {
        $this->solver = new GenericSolver();
    }

    /**
     * @test
     * @dataProvider numberProvider
     */
    public function shouldReturnTheNumberIfItIsNotDivisibleByThree($number)
    {
        $this->givenANumber($number);
        $this->thenItShouldReturnTheNumber();
    }

    public function numberProvider()
    {
        return [
            [3], [6], [9], [12], [18], [24], [36], [48], [96], [102], [2], [4], [7], [13], [22], [31], [32], [62], [97],
            [152], [5], [10], [20], [35], [40], [50], [55], [80], [110], [160], [15], [30], [45], [60], [75], [90], [105]
        ];
    }

    private function givenANumber($number)
    {
        $this->number = $number;
    }

    private function thenItShouldReturnTheNumber()
    {
        $result = $this->solver->solve($this->number);
        $this->assertEquals((string) $this->number, $result);
    }

}