<?php

namespace MpwebUnit\Blog\Application;


use Mpweb\Blog\Application\NewPostUseCase;
use Mpweb\Blog\Domain\EventQueue;
use Mpweb\Blog\Domain\PostRepository;

class NewPostUseCaseTest extends \PHPUnit_Framework_TestCase
{

    private $newPostUseCase;

    private $postRepository;

    private $eventQueue;

    protected function setUp()
    {
        $this->postRepository = $this->createMock(PostRepository::class);
        $this->eventQueue = $this->createMock(EventQueue::class);
    }

    protected function tearDown()
    {
        $this->eventQueue = null;
        $this->newPostUseCase = null;
    }

    /** @test */
    public function aNewPostUseCaseCanBeConstructed()
    {
        $this->newPostUseCase = new NewPostUseCase($this->postRepository, $this->eventQueue);
        $this->assertInstanceOf(NewPostUseCase::class, $this->newPostUseCase);

    }


}