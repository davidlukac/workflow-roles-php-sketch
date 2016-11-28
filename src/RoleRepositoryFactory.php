<?php

namespace davidlukac\workflow_spec;

class RoleRepositoryFactory
{
    public function getInstance($type): RoleRepository
    {
        switch ($type) {
            case 'mock':
                return new MockRoleRepository();
        }

        throw new \Exception("Unknown role repository type requested.");
    }
}
