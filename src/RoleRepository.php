<?php

namespace davidlukac\workflow_spec;

interface RoleRepository
{
    /**
     * @return array List of role system names.
     */
    public function getRoles(): array;
}
