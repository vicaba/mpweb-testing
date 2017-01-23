<?php

namespace Mpweb\FizzBuzz\Solver;


class GenericSolver extends Solver
{

    public function solve($input)
    {

        $stack = "";

        if ($this->hasNext()) {
            $stack = $this->nextSolver->solve($input);
        }

        if (empty($stack)) return ($stack . (string) $input);

        return $stack;
    }

}