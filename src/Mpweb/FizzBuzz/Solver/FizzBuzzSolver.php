<?php

namespace Mpweb\FizzBuzz\Solver;


class FizzBuzzSolver extends Solver
{

    public function __construct($solvers = [])
    {

        if ($solvers == null || empty($solvers)) {
            return $this;
        }

        //$this->setNext(new GenericSolver())->setNext(new BuzzSolver())->setNext(new FizzSolver());
    }

    public function solve($input)
    {
        if ($this->hasNext()) return $this->nextSolver->solve($input);
        return "";
    }
}