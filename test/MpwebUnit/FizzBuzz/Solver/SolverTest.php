<?php

namespace MpwebUnit\FizzBuzz\Solver;


use Mpweb\FizzBuzz\Solver\Solver;

class SolverTest extends \PHPUnit_Framework_TestCase
{

    private $solver;

    private $anotherSolver;

    protected function setUp()
    {
        $this->solver = $this->createMock(Solver::class);
    }

    /** @test */
    public function shouldAddANextSolver()
    {
        $this->givenAnotherSolver();
        $this->whenSettingItAsNext();
        $this->thenItShouldBeKeptAsNext();
    }

    private function givenAnotherSolver()
    {
        $this->anotherSolver = $this->createMock(Solver::class);
    }

    private function whenSettingItAsNext()
    {
        $this->solver->setNext($this->anotherSolver);
    }

    private function thenItShouldBeKeptAsNext()
    {
        $hasNext = $this->solver->hasNext();

        $this->assertTrue($hasNext);
    }

}