<?php

namespace davidlukac\workflow_spec;

class MockRoleRepository implements RoleRepository
{

    public function getRoles(): array
    {
        return ['anonymous', 'editor', 'administrator'];
    }
}
