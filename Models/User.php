<?php

class User
{
    private $email;
    private $password;
    private $nick;
    private $role = ['ROLE_USER'];

    public function __construct
    (
        string $email,
        string $password,
        string $nick,
        int $id = null
    )
    {
        $this->email = $email;
        $this->password = $password;
        $this->nick= $nick;
        $this->id = $id;
    }

    public function getId(): int
    {
        return $this->id;
    }

    public function getPassword(): string
    {
        return $this->password;
    }

    public function getEmail(): string
    {
        return $this->email;
    }

    public function getNick(): string
    {
        return $this->nick;
    }

}