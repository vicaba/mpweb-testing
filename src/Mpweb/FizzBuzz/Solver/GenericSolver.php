<?php

namespace Mpweb\FizzBuzz\Solver;


class GenericSolver implements Solver
{

    const FIZZ = "fizz";

    const BUZZ = "buzz";

    const FIZZBUZZ = "fizzbuzz";

    public function solve($input)
    {
        if ($input % 5 == 0 && $input % 3 == 0) return self::FIZZBUZZ;
        if ($input % 3 == 0) return self::FIZZ;
        if ($input % 5 == 0) return self::BUZZ;
        return (string) $input;
    }

    public function setNext(Solver $solver)
    {
        // TODO: Implement setNext() method.
    }

}