<?php

namespace Mpweb\Blog\Domain;


interface PostRepository
{

    /**
     * @param Post $post
     * @return true if exists, false if not
     */
    public function exists(Post $post);

    public function save(Post $post);

}