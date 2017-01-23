<?php

namespace Mpweb\FizzBuzz;


use Mpweb\FizzBuzz\Solver\FizzBuzzSolver;

class FizzBuzz
{

    private $solver;

    public function __construct()
    {
        $this->solver = new FizzBuzzSolver();
    }

    public function solve($number)
    {
        return $this->solver->solve($number);
    }

}