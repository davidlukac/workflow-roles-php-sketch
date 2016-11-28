<?php

namespace davidlukac\workflow_spec;

/**
 * Class Transition
 *
 * @package davidlukac\workflow_spec
 */
class Transition
{
    private $name;
    private $initialState;
    private $targetState;

    /**
     * Transition constructor.
     *
     * @param string $name
     * @param State $initialState
     * @param State $targetState
     */
    public function __construct(string $name, State $initialState, State $targetState)
    {
        $this->name = $name;
        $this->initialState = $initialState;
        $this->targetState = $targetState;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @return State
     */
    public function getInitialState(): State
    {
        return $this->initialState;
    }

    /**
     * @return State
     */
    public function getTargetState(): State
    {
        return $this->targetState;
    }
}
