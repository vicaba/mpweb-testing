<?php

namespace Mpweb\Blog\Domain;


final class Post
{

    private $title;

    private $body;

    public function __construct($title, $body)
    {
        $this->title = $title;
        $this->body = $body;
    }

}