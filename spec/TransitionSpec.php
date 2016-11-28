<?php

namespace davidlukac\workflow_spec;

use davidlukac\workflow_spec\Transition;
use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

/**
 * Class TransitionSpec
 *
 * @package davidlukac\workflow_spec
 *
 * @SuppressWarnings(PHPMD)
 * @codingStandardsIgnoreStart
 */
class TransitionSpec extends ObjectBehavior
{
    function it_is_initializable(State $initialState, State $targetState)
    {
        $this->beConstructedWith('name',  $initialState, $targetState);
        $this->shouldHaveType(Transition::class);
        $this->getName()->shouldBe('name');
        $this->getInitialState()->shouldBe($initialState);
        $this->getTargetState()->shouldBe($targetState);
    }
}
