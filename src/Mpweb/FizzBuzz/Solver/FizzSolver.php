<?php

namespace Mpweb\FizzBuzz\Solver;


class FizzSolver extends Solver
{

    const FIZZ = "fizz";

    public function solve($input)
    {
        if ($input % 3 == 0) return self::FIZZ;
    }
}