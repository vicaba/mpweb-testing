<?php

namespace MpwebUnit\FizzBuzz\Solver;


use Mpweb\FizzBuzz\Solver\FizzBuzzSolver;
use Mpweb\FizzBuzz\Solver\Solver;

class FizzBuzzSolverTest extends \PHPUnit_Framework_TestCase
{

    private $fizzBuzz;

    private $solver;

    private $result;

    const NUMBER = 24;

    protected function setUp()
    {
        $this->solver = $this->getMockForAbstractClass(Solver::class);
    }

    protected function tearDown()
    {
        $this->fizzBuzz = null;
        $this->solver = null;
        $this->result = null;
    }

    /** @test */
    public function shouldReturnAnEmptyStringWhenThereAreNoSolvers()
    {
        $this->givenThatThereAreNoSolvers();
        $this->whenGettingTheFizzBuzzResult();
        $this->thenTheResultShouldBeAnEmptyString();
    }

    private function givenThatThereAreNoSolvers()
    {
        $this->solver = null;
    }

    private function whenGettingTheFizzBuzzResult()
    {
        $this->fizzBuzz = new FizzBuzzSolver();
        $this->result = $this->fizzBuzz->solve(self::NUMBER);
    }

    private function thenTheResultShouldBeAnEmptyString()
    {
        $this->assertEmpty($this->result);
    }

}