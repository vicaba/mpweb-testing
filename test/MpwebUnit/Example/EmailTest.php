<?php

namespace MpwebUnit\Example;


use Doctrine\Instantiator\Exception\InvalidArgumentException;
use Mpweb\Example\Email;

class EmailTest extends \PHPUnit_Framework_TestCase
{

    private $rawEmail;

    /**
     * @var Email
     */
    private $email;

    /**
     * @See https://phpunit.de/manual/current/en/fixtures.html
     */
    protected function tearDown()
    {
        $this->email = null;
        $this->rawEmail = null;
    }

    /** @test */
    public function shouldCreateAnEmailObjectWhenAValidEmailIsGiven()
    {
        $this->rawEmail = "pepito@me.com";
        $this->email = new Email($this->rawEmail);
        $this->assertInstanceOf(Email::class, $this->email);
    }

    /** @test */
    public function shouldThrowAnExceptionWhenAnInvalidEmailIsGiven()
    {
        $this->rawEmail = "me@@example.com";
        $this->expectException(InvalidArgumentException::class);
        $this->email = new Email($this->rawEmail);
    }

}