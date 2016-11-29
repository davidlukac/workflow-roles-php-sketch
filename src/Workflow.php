<?php

namespace davidlukac\workflow_spec;

/**
 * Class Workflow
 *
 * @package davidlukac\workflow_spec
 */
class Workflow
{
    /** @var string */
    private $name;

    /** @var State[] */
    private $states = [];

    /** @var Transition[] */
    private $transitions = [];

    /**
     * Workflow constructor.
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

    /**
     * @param Transition[] $transitions
     *
     * @return Workflow
     */
    public function addTransitions(array $transitions): Workflow
    {
        array_map(function (Transition $transition) {
            array_push($this->transitions, $transition);
        }, $transitions);
        return $this;
    }

    /**
     * @return Transition[]
     */
    public function getTransitions(): array
    {
        return $this->transitions;
    }

    /**
     * @param State $state
     *
     * @return Transition[]
     *
     * @throws InvalidStateException
     */
    public function getAllowedTransitionsFor(State $state): array
    {
        // Validate if given State belongs to this Workflow.
        $validState = in_array($state, $this->states);

        if (false === $validState) {
            throw new InvalidStateException("Given state doesn't exist in workflow {$this->name}.");
        }

        // Find Transitions, which have given State as the starting point.
        $availableTransitions = array_filter($this->transitions, function (Transition $transition) use ($state) {
            $isAvailable = false;
            if ($transition->getInitialState() == $state) {
                $isAvailable = true;
            }

            return $isAvailable;
        });

        return $availableTransitions;
    }
}
