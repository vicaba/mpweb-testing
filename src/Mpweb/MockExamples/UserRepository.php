<?php
namespace Mpweb\MockExamples;


interface UserRepository
{

    /**
     * @return User | null
     */
    public function save(User $user);

}