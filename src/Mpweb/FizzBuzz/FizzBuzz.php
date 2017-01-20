<?php

namespace Mpweb\FizzBuzz;


class FizzBuzz
{

    const FIZZ = "fizz";

    const BUZZ = "buzz";
    
    public function solve($number) {
        if ($number % 3 == 0) return self::FIZZ;
        if ($number % 5 == 0) return self::BUZZ;
        return (string) $number;
    }

}