<?php

namespace Mpweb\FizzBuzz\Solver;


class FizzBuzzSolver extends Solver
{

    public function __construct()
    {
        $this->setNext(new BuzzSolver())->setNext(new FizzSolver());
    }

    public function solve($input)
    {
        if ($this->hasNext()) return $this->nextSolver->solve($input);

    }
}