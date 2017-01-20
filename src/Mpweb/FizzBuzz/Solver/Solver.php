<?php

namespace Mpweb\FizzBuzz\Solver;


abstract class Solver
{

    private $nextSolver;

    public abstract function solve($input);

    public function setNext(Solver $solver)
    {
        $this->nextSolver = $solver;
    }

    public function hasNext()
    {
        return $this->nextSolver != null;
    }

}