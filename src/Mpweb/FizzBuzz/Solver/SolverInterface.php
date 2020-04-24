<?php

namespace Mpweb\FizzBuzz\Solver;

interface SolverInterface {

  public function solve($input);

  public function setNext(SolverInterface $solver);

  public function hasNext();

}