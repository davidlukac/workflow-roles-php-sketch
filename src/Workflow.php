<?php

namespace davidlukac\workflow_spec;

class Workflow
{
    /** @var string */
    private $name;

    /** @var State[] */
    private $states = [];

    /**
     * Workflow constructor.
     *
     * @param string $name
     */
    public function __construct(string $name)
    {
        $this->name = $name;
    }

    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @param State[] $states
     *
     * @return Workflow
     */
    public function addStates(array $states): Workflow
    {
        array_map(function (State $state) {
            array_push($this->states, $state);
        }, $states);
        return $this;
    }

    /**
     * @return State[]
     */
    public function getStates(): array
    {
        return $this->states;
    }
}
