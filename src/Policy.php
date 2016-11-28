<?php

namespace davidlukac\workflow_spec;

class Policy
{
    /** @var string */
    private $name;

    /** @var Role[] */
    private $allowedRoles = [];

    /**
     * Policy constructor.
     *
     * @param $name string
     */
    public function __construct(string $name)
    {
        $this->name = $name;
    }

    /**
     * @param Role $role
     *
     * @return Policy
     */
    public function addAllowedRole(Role $role): Policy
    {
        $this->allowedRoles[$role->getRoleId()] = $role;
        return $this;
    }

    public function getAllowedRoles(): array
    {
        return $this->allowedRoles;
    }

    /**
     * @param Role[] $roles
     *
     * @return Policy
     */
    public function addAllowedRoles(array $roles): Policy
    {
        array_map(function (Role $role) {
            $this->addAllowedRole($role);
        }, $roles);
        return $this;
    }

    /**
     * @param Role $role
     *
     * @return bool
     */
    public function hasPermission(Role $role): bool
    {
        $hasPermission = false;
        if (key_exists($role->getRoleId(), $this->getAllowedRoles()) &&
          $this->allowedRoles[$role->getRoleId()]->getName() === $role->getName()) {
            $hasPermission = true;
        }
        return $hasPermission;
    }
}
