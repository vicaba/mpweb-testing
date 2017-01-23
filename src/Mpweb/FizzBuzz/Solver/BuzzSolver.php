<?php

namespace Mpweb\FizzBuzz\Solver;


class BuzzSolver extends Solver
{

    const BUZZ = "buzz";

    public function solve($input)
    {
        $stack = "";

        if ($this->hasNext()) {
            $stack = $this->nextSolver->solve($input);
        }
        if ($input % 5 == 0) return $stack . self::BUZZ;

        return $stack;
    }
}