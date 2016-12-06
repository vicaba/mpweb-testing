<?php
namespace MpwebUnit\MockExamples;


use Mpweb\MockExamples\ADependency;
use Mpweb\MockExamples\CreateUserUseCase;
use Mpweb\MockExamples\UserRepository;
use PHPUnit_Framework_TestCase;

class CreateUserUseCaseTest extends PHPUnit_Framework_TestCase
{

    private $createUserUseCase;

    private $userRepositoryMock;

    private $aDependencyMock;

    protected function setUp()
    {

        $this->userRepositoryMock = $this->createMock(UserRepository::class);
        $this->aDependencyMock = $this->createMock(ADependency::class);

        $this->createUserUseCase = new CreateUserUseCase($this->userRepositoryMock, $this->aDependencyMock);

    }

    /** @test */
    public function dummyTest()
    {
        $this->createUserUseCase;
    }


}