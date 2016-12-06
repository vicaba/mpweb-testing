<?php
namespace Mpweb\Example;


use Doctrine\Instantiator\Exception\InvalidArgumentException;

class DummyClass
{

    public function getTrue()
    {
        return true;
    }

    public function getException()
    {
        throw new InvalidArgumentException();
    }

}