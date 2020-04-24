<?php

require_once "vendor/autoload.php";

$fizzBuzzSolver =
    new \Mpweb\FizzBuzz\Solver\FizzBuzzSolver(
        [
            new \Mpweb\FizzBuzz\Solver\BuzzSolver(),
            new \Mpweb\FizzBuzz\Solver\FizzSolver(),
        ]
    );

var_dump($fizzBuzzSolver->solve(15));


