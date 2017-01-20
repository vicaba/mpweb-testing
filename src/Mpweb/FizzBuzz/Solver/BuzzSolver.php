<?php

namespace Mpweb\FizzBuzz\Solver;


class BuzzSolver extends Solver
{

    const BUZZ = "buzz";

    public function solve($input)
    {
        if ($input % 5 == 0) return self::BUZZ;
    }
}