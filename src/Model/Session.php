<?php

namespace Model;

class session {

    private $admin;

    private $password;

    public function getAdmin() :string
    {
        return $this->admin;
    }

    public function getPassword() :string
    {
        return $this->password;
    }
}