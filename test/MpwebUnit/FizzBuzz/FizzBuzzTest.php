<?php

namespace MpwebUnit\FizzBuzz;


use Mpweb\FizzBuzz\FizzBuzz;

class FizzBuzzTest extends \PHPUnit_Framework_TestCase
{

    const FIZZ_WORD = "fizz";

    const BUZZ_WORD = "buzz";

    private $fizzBuzz;

    private $number;

    protected function setUp()
    {
        $this->fizzBuzz = new FizzBuzz();
    }

    /**
     * @test
     * @dataProvider numberDivisibleByThreeProvider
     */
    public function shouldReturnFizzForNumbersThatCanBeDividedByThree($number)
    {
        $this->givenANumber($number);
        $this->thenItShouldReturnFizz();
    }


    /**
     * @test
     * @dataProvider numberNotDivisibleByThreeProvider
     */
    public function shouldReturnTheNumberIfItIsNotDivisibleByThree($number)
    {
        $this->givenANumber($number);
        $this->thenItShouldReturnTheNumber();
    }

    /**
     * @test
     * @dataProvider numberDivisibleByFiveProvider
     */
    public function shouldReturnBuzzForNumbersThatCanBeDividedByFive($number)
    {
        $this->givenANumber($number);
        $this->thenItShouldReturnBuzz();
    }

    public function numberDivisibleByThreeProvider()
    {
        return [
            [3], [6], [9], [12], [18], [24], [36], [48], [96], [102]
        ];
    }

    public function numberNotDivisibleByThreeProvider()
    {
        return [
            [2], [4], [7], [13], [22], [31], [32], [62], [97], [152]
        ];
    }

    public function numberDivisibleByFiveProvider()
    {
        return [
            [5], [10], [20], [35], [40], [50], [55], [80], [110], [160]
        ];
    }

    private function givenANumber($number)
    {
        $this->number = $number;
    }

    private function thenItShouldReturnFizz()
    {
        $result = $this->fizzBuzz->solve($this->number);
        $this->assertEquals(self::FIZZ_WORD, $result);
    }

    private function thenItShouldReturnTheNumber()
    {
        $result = $this->fizzBuzz->solve($this->number);
        $this->assertEquals((string) $this->number, $result);
    }

    private function thenItShouldReturnBuzz()
    {
        $result = $this->fizzBuzz->solve($this->number);
        $this->assertEquals(self::BUZZ_WORD, $result);
    }

}