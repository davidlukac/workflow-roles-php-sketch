<?php

namespace davidlukac\workflow_spec;

/**
 * Class State
 *
 * @package davidlukac\workflow_spec
 */
class State
{
    /** @var string */
    private $name;

    /** @var State[] */
    private $allowedNextStates = [];

    /**
     * State constructor.
     *
     * @param string $name
     */
    public function __construct(string $name)
    {
        $this->name = $name;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @return State[]
     */
    public function getNextAllowedStates(): array
    {
        return $this->allowedNextStates;
    }

    /**
     * @param array $states
     *
     * @return State
     */
    public function setNextAllowedStates(array $states): State
    {
        array_map(function (State $state) {
            array_push($this->allowedNextStates, $state);
        }, $states);
        return $this;
    }
}
