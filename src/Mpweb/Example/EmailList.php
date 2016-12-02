<?php

namespace Mpweb\Example;


class EmailList
{

    private $list = [];

    public function add(Email $email)
    {
        $this->list[] = $email;
    }

    public function get($index)
    {
        return $this->list[$index];
    }

    public function length()
    {
        return count($this->list);
    }

}