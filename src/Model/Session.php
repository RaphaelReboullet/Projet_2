<?php

namespace Model;

class Session {

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

    /**
     * @param mixed $admin
     */
    public function setAdmin($admin)
    {
        $this->admin = $admin;
    }

    /**
     * @param mixed $password
     */
    public function setPassword($password)
    {
        $this->password = $password;
    }
}