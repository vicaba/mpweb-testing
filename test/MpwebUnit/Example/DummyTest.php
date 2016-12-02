<?php

namespace MpwebUnit\Example;

use Doctrine\Instantiator\Exception\InvalidArgumentException;
use Mpweb\Example\DummyClass;
use PHPUnit_Framework_TestCase;

final class DummyTest extends PHPUnit_Framework_TestCase
{

    /**
     * @var DummyClass
     */
    private $dummy;

    /**
     * @See https://phpunit.de/manual/current/en/fixtures.html
     */
    protected function setUp()
    {
        $this->dummy = new DummyClass();
    }

    /**
     * @See https://phpunit.de/manual/current/en/fixtures.html
     */
    protected function tearDown()
    {
        $this->dummy = null;
    }

    /** @test */
    public function shouldReturnTrue()
    {
        self::assertTrue($this->dummy->getTrue(), "Dummy::getTrue method should return true");
    }

    /** @test */
    public function shouldReturnAnException()
    {
        $this->expectException(InvalidArgumentException::class);

        $this->dummy->getException();
    }

}