<?php

namespace MpwebUnit\Blog\Application;


use Mpweb\Blog\Application\NewPostUseCase;
use Mpweb\Blog\Domain\EventQueue;
use Mpweb\Blog\Domain\Post;
use Mpweb\Blog\Domain\PostEvent;
use Mpweb\Blog\Domain\PostRepository;

class NewPostUseCaseTest extends \PHPUnit_Framework_TestCase
{

    private $newPostUseCase;

    private $postRepository;

    private $eventQueue;

    private $post;

    protected function setUp()
    {
        $this->post = new Post("aTitle", "someContent");
        $this->postRepository = $this->createMock(PostRepository::class);
        $this->eventQueue = $this->createMock(EventQueue::class);
        $this->newPostUseCase = new NewPostUseCase($this->postRepository, $this->eventQueue);
    }

    protected function tearDown()
    {
        $this->postRepository = null;
        $this->eventQueue = null;
        $this->newPostUseCase = null;
    }

    /** @test */
    public function whenExecutedAPostIsPersistedJustOneTimeIfItDoesNotExist()
    {
        $this->postRepository
            ->method('exists')
            ->willReturn(false);
        $this->postRepository
            ->expects($this->once())
            ->method('save');
        $this->newPostUseCase->execute($this->post);
    }

    /** @test */
    public function whenExecutedAPostIsNotPersistedIfItAlreadyExists()
    {
        $this->postRepository
            ->method('exists')
            ->willReturn(true);
        $this->postRepository
            ->expects($this->never())
            ->method('save');
        $this->newPostUseCase->execute($this->post);
    }

    /** @test */
    public function whenExecutedAnEventIsPublishedByDefaultIfItDoesNotExist()
    {
        $this->postRepository
            ->method('exists')
            ->willReturn(false);
        $this->eventQueue
            ->expects($this->once())
            ->method('publish');
        $this->newPostUseCase->execute($this->post);
    }

    /** @test */
    public function whenExecutedAnEventIsNotPublishedIfItAlreadyExists()
    {
        $this->postRepository
            ->method('exists')
            ->willReturn(true);
        $this->eventQueue
            ->expects($this->never())
            ->method('publish');
        $this->newPostUseCase->execute($this->post);
    }

    /** @test */
    public function whenExecutedAPostEventIsEmittedIfIsAllowedToPublish()
    {
        $this->postRepository
            ->method('exists')
            ->willReturn(false);
        $this->eventQueue
            ->method('publish')
            ->with($this->isInstanceOf(PostEvent::class));
        $this->newPostUseCase->execute($this->post);
    }

    /** @test */
    public function whenExecutedAnEventIsNotEmittedIfNotAllowed()
    {
        $this->postRepository
            ->method('exists')
            ->willReturn(false);
        $this->eventQueue
            ->expects($this->never())
            ->method('publish');
        $this->newPostUseCase->execute($this->post, false);
    }

}