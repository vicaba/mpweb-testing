<?php

namespace MpwebUnit\Example;


use Mpweb\Example\Email;
use Mpweb\Example\EmailList;

class EmailListTest extends \PHPUnit_Framework_TestCase
{

    const ONE_ELEMENT = 1;

    const ZERO_ELEMENTS = 0;


    /**
     * @var EmailList
     */
    private $emailList;

    /**
     * @var Email
     */
    private $email;

    /**
     * @var Email
     */
    private $email2;

    protected function setUp()
    {
        $this->emailList = new EmailList();
        $this->email = new Email("pepito@me.com");
        $this->email2 = new Email("pepito2@me.com");
    }


    protected function tearDown()
    {
        $this->emailList = null;
        $this->email = null;
        $this->email2 = null;
    }

    /** @test */
    public function shouldHaveZeroElementsWhenNoElementIsAdded()
    {
        $this->assertEquals(self::ZERO_ELEMENTS, $this->emailList->length());
    }


    /** @test */
    public function shouldHaveOneElementWhenOneEmailIsAddedAndItShouldBeTheSame()
    {
        $this->emailList->add($this->email);
        $this->assertEquals(self::ONE_ELEMENT, $this->emailList->length());
        $this->assertEquals($this->email, $this->emailList->get(0));
    }

    /** @test */
    public function shouldHaveTwoElementsAndRetainTheOrderWhenTwoElementsAreGivenInSomeSpecificOrder()
    {
        $this->emailList->add($this->email);
        $this->emailList->add($this->email2);

        $this->assertEquals($this->email, $this->emailList->get(0));
        $this->assertEquals($this->email2, $this->emailList->get(1));
    }

}