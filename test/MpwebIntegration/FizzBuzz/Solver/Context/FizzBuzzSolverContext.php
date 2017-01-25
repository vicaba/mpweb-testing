<?php

namespace MpwebIntegration\FizzBuzz\Solver\Context;

use PHPUnit_Framework_Assert;
use Behat\Behat\Context\Context;
use Mpweb\FizzBuzz\Solver\BuzzSolver;
use Mpweb\FizzBuzz\Solver\FizzBuzzSolver;
use Mpweb\FizzBuzz\Solver\FizzSolver;
use Mpweb\FizzBuzz\Solver\GenericSolver;

class FizzBuzzSolverContext implements Context
{

//    /**
//     * @Given a :number
//     */
//    public function aNumber($number)
//    {
//        $this->number = $number;
//    }
//
//    /**
//     * @And a fizzbuzz service with fizz, buzz and generic solvers
//     */
//    public function aFizzBuzzServiceWithFizzBuzzAndGenericSolvers()
//    {
//        $solvers = [new GenericSolver(), new BuzzSolver(), new FizzSolver()];
//
//        $this->fizzbuzz = new FizzBuzzSolver($solvers);
//    }
//
//    /**
//     * @When executing the fizzbuzz service
//     */
//    public function executingTheFizzBuzzService()
//    {
//        $this->result = $this->fizzbuzz->solve($this->number);
//    }
//
//    /**
//     * @Then the result should be a :string
//     */
//    public function theResultShouldBeAString($string)
//    {
//        PHPUnit_Framework_Assert::assertEquals($this->result, $string);
//    }

    /**
     * @Given a :number
     */
    public function aNumber($number)
    {
        $this->number = $number;
    }

    /**
     * @Given a fizzbuzz service with fizz, buzz and generic solvers
     */
    public function aFizzbuzzServiceWithFizzBuzzAndGenericSolvers()
    {
        $solvers = [new GenericSolver(), new BuzzSolver(), new FizzSolver()];
        $this->fizzbuzz = new FizzBuzzSolver($solvers);
    }

    /**
     * @When executing the fizzbuzz service
     */
    public function executingTheFizzbuzzService()
    {
        $this->result = $this->fizzbuzz->solve($this->number);
    }

    /**
     * @Then the result should be a :string
     */
    public function theResultShouldBeAString($string)
    {
        PHPUnit_Framework_Assert::assertEquals($this->result, $string);
    }


}