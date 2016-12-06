<?php
namespace MpwebUnit\MockExamples;


use Mpweb\MockExamples\ADependency;
use Mpweb\MockExamples\CreateUser;
use Mpweb\MockExamples\CreateUserUseCase;
use Mpweb\MockExamples\UserRepository;
use PHPUnit_Framework_MockObject_MockObject;
use PHPUnit_Framework_TestCase;

class CreateUserUseCaseTest extends PHPUnit_Framework_TestCase
{

    /**
     * @var CreateUserUseCase
     */
    private $createUserUseCase;

    /**
     * @var PHPUnit_Framework_MockObject_MockObject
     */
    private $userRepositoryMock;

    /**
     * @var PHPUnit_Framework_MockObject_MockObject
     */
    private $aDependencyMock;

    /**
     * @var PHPUnit_Framework_MockObject_MockObject
     */
    private $createUserMock;



    protected function setUp()
    {

        $this->userRepositoryMock = $this->createMock(UserRepository::class);
        $this->aDependencyMock = $this->createMock(ADependency::class);
        $this->createUserMock = $this->createMock(CreateUser::class);

        $this->createUserUseCase = new CreateUserUseCase($this->userRepositoryMock, $this->aDependencyMock);

    }

    /** @test */
    public function dummyTest()
    {
        $this->createUserUseCase;
    }

    /** @test */
    public function fakeTest()
    {
        $this->userRepositoryMock->expects($this->once())->method('save');
        $this->createUserUseCase->execute($this->createUserMock);
    }

    

}