<?php

namespace davidlukac\workflow_spec;

class User
{
    /** @var int */
    private $userId;
    /** @var string */
    private $email;
    /** @var Role[] */
    private $roles = [];

    /**
     * User constructor.
     *
     * @param int $userId
     * @param string $email
     */
    public function __construct(int $userId, string $email)
    {
        $this->userId = $userId;
        $this->email = $email;
    }

    /**
     * @return int
     */
    public function getUserId(): int
    {
        return $this->userId;
    }

    /**
     * @return string
     */
    public function getEmail(): string
    {
        return $this->email;
    }

    /**
     * @param Role $role
     *
     * @return User
     */
    public function addRole(Role $role): User
    {
        array_push($this->roles, $role);
        return $this;
    }

    /**
     * @return Role[]
     */
    public function getRoles(): array
    {
        return $this->roles;
    }
}
