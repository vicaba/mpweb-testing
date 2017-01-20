<?php
/**
 * Created by PhpStorm.
 * User: vicaba
 * Date: 20/01/2017
 * Time: 13:30
 */

namespace Mpweb\FizzBuzz\Solver;


interface Solver
{

    public function solve($input);

    public function setNext(Solver $solver);

}