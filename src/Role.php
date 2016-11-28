<?php

namespace davidlukac\workflow_spec;

class Role
{
    /** @var int */
    private $roleId;
    /** @var string */
    private $name;

    public function __construct(int $roleId, string $name)
    {
        $this->roleId = $roleId;
        $this->name = $name;
    }

    /**
     * @return int
     */
    public function getRoleId()
    {
        return $this->roleId;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }
}
