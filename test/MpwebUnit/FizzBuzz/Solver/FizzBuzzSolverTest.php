<?php

namespace MpwebUnit\FizzBuzz\Solver;


use Mpweb\FizzBuzz\Solver\FizzBuzzSolver;
use Mpweb\FizzBuzz\Solver\Solver;

class FizzBuzzSolverTest extends \PHPUnit_Framework_TestCase
{

    private $fizzBuzz;

    private $solver;

    private $result;

    const NUMBER = 15;

    const FIZZ = "fizz";

    const BUZZ = "buzz";

    const COMPOSITE_RESULT = self::FIZZ . self::BUZZ;

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

    /** @test */
    public function shouldGetTheResultForASingleSolver()
    {
        $this->givenThatThereIsASingleSolver();
        $this->whenGettingTheFizzBuzzResult();
        $this->thenTheResultShouldBeTheOneFromTheSingleSolver();
    }

    private function givenThatThereAreNoSolvers()
    {
        $this->solver = null;
    }

    private function whenGettingTheFizzBuzzResult()
    {
        $this->fizzBuzz = new FizzBuzzSolver($this->solver);
        $this->result = $this->fizzBuzz->solve(self::NUMBER);
    }

    private function thenTheResultShouldBeAnEmptyString()
    {
        $this->assertEmpty($this->result);
    }

    private function givenThatThereIsASingleSolver()
    {
        $singleSolver = $this->getMockForAbstractClass(Solver::class);

        $singleSolver
            ->method("solve")
            ->with(self::NUMBER)
            ->willReturn(self::FIZZ);

        $this->solver = [$singleSolver];
    }

    private function thenTheResultShouldBeTheOneFromTheSingleSolver()
    {
        $this->assertEquals(self::FIZZ, $this->result);
    }


}