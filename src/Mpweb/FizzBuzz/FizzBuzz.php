<?php

namespace Mpweb\FizzBuzz;


use Mpweb\FizzBuzz\Solver\BuzzSolver;
use Mpweb\FizzBuzz\Solver\FizzBuzzSolver;
use Mpweb\FizzBuzz\Solver\FizzSolver;
use Mpweb\FizzBuzz\Solver\GenericSolver;

class FizzBuzz
{

    private $solver;

    public function __construct()
    {
        $this->solver = new FizzBuzzSolver([new GenericSolver(), new BuzzSolver(), new FizzSolver()]);
    }

    public function solve($number)
    {
        return $this->solver->solve($number);
    }

}