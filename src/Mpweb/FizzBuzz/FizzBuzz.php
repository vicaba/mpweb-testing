<?php

namespace Mpweb\FizzBuzz;


class FizzBuzz
{

    const FIZZ = "fizz";
    
    public function solve($number) {
        if ($number % 3 == 0) return self::FIZZ;
        return (string) $number;
    }

}