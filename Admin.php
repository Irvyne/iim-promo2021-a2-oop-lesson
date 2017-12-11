<?php

class Admin implements UserInterface
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var string
     */
    private $username;

    /**
     * @var string
     */
    private $password;

    /**
     * @var string
     */
    private $role;

    /**
     * @return int
     */
    public function getId(): ?int
    {
        return $this->id;
    }

    /**
     * @param int $id
     *
     * @return Admin
     */
    public function setId(int $id): Admin
    {
        $this->id = $id;

        return $this;
    }

    /**
     * @return string
     */
    public function getUsername(): ?string
    {
        return $this->username;
    }

    /**
     * @param string $username
     *
     * @return Admin
     */
    public function setUsername(string $username): Admin
    {
        $this->username = $username;

        return $this;
    }

    /**
     * @return string
     */
    public function getPassword(): ?string
    {
        return $this->password;
    }

    /**
     * @param string $password
     *
     * @return Admin
     */
    public function setPassword(string $password): Admin
    {
        $this->password = $password;

        return $this;
    }

    /**
     * @return string
     */
    public function getRole(): ?string
    {
        return $this->role;
    }

    /**
     * @param string $role
     *
     * @return Admin
     */
    public function setRole(string $role): Admin
    {
        $this->role = $role;

        return $this;
    }

    public function __toString()
    {
        return $this->username;
    }

    public function __clone()
    {
        $this->id = null;
    }
}