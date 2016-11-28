<?php

namespace davidlukac\workflow_spec;

class RoleSystem
{
    /** @var RoleRepository */
    private $repository;
    /** @var Role[] */
    private $roles = [];

    public function __construct(RoleRepository $repository)
    {
        $this->repository = $repository;
        $systemRoles = $this->repository->getRoles();
        foreach (array_keys($systemRoles) as $roleId) {
            $this->roles[$roleId] = new Role($roleId, $systemRoles[$roleId]);
        }
    }

    /**
     * @return Role[]
     */
    public function getRoles(): array
    {
        return $this->roles;
    }
}
