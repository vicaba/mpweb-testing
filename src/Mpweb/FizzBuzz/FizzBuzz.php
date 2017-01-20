<?php

namespace Mpweb\FizzBuzz;


class FizzBuzz
{

    const FIZZ = "fizz";

    const BUZZ = "buzz";

    const FIZZBUZZ = "fizzbuzz";
    
    public function solve($number) {
        if ($number % 5 == 0 && $number % 3 == 0) return self::FIZZBUZZ;
        if ($number % 3 == 0) return self::FIZZ;
        if ($number % 5 == 0) return self::BUZZ;
        return (string) $number;
    }

}