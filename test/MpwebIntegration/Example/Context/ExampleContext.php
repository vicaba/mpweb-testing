<?php

namespace MpwebIntegration\Example\Context;

use Behat\Behat\Context\Context;
use Mpweb\Example\DummyClass;
use PHPUnit_Framework_Assert;

final class ExampleContext implements Context

{
    /**
     * @Given /a value (\b.+\b) that I don't really need/
     */
    public function aValueThatIDonTReallyNeed($value)
    {
        $this->useless_value = $value;
    }

    /**
     * @Given /temporary storing another value (\b.+\b)/
     */
    public function temporaryStoringAnotherValue($value)
    {
        $this->useful = $value;
    }

    /**
     * @When executing the dummy class
     */
    public function executingTheDummyClass()
    {
        $dummy_class = new DummyClass;

        $this->dummy_class_response = $dummy_class->getTrue();
    }

    /**
     * @Then the result should be true
     */
    public function theResultShouldBeTrue()
    {
        PHPUnit_Framework_Assert::assertTrue($this->dummy_class_response);
    }

    /**
     * @Then the temporary value should still be there
     */
    public function theTemporaryValueShouldStillBeThere()
    {
        PHPUnit_Framework_Assert::assertNotEmpty($this->useful);
    }
}