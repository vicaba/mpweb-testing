<?php

namespace MpwebUnit\FizzBuzz;


use Mpweb\FizzBuzz\FizzBuzz;

class FizzBuzzTest extends \PHPUnit_Framework_TestCase
{

    const FIZZ_WORD = "fizz";

    private $fizzBuzz;

    private $number;

    protected function setUp()
    {
        $this->fizzBuzz = new FizzBuzz();
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

    /**
     * @test
     * @dataProvider numberDivisibleByThreeProvider
     */
    public function shouldReturnFizzForNumbersThatCanBeDividedByThree($number)
    {
        $this->givenANumber($number);
        $this->thenItShouldReturnFizz();
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

    /**
     * @test
     * @dataProvider numberNotDivisibleByThreeProvider
     */
    public function shouldReturnTheNumberIfItIsNotDivisibleByThree($number)
    {
        $this->givenANumber($number);
        $this->thenItShouldReturnTheNumber();
    }

    private function thenItShouldReturnTheNumber()
    {
        $result = $this->fizzBuzz->solve($this->number);
        $this->assertEquals((string) $this->number, $result);
    }

}