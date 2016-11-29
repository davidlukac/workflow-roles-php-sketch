<?php

namespace davidlukac\workflow_spec;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

/**
 * Class WorkflowSpec
 *
 * @package davidlukac\workflow_spec
 *
 * @SuppressWarnings(PHPMD)
 * @codingStandardsIgnoreStart
 */
class WorkflowSpec extends ObjectBehavior
{
    function let()
    {
        $this->beConstructedWith('name');
    }

    function it_is_initializable()
    {
        $this->shouldHaveType(Workflow::class);
        $this->getName()->shouldBe('name');
    }

    function it_knows_states(State $s1, State $s2, State $s3, State $s4)
    {
        $this->addStates([$s1, $s2, $s3]);
        $this->getStates()->shouldContain($s1);
        $this->getStates()->shouldContain($s2);
        $this->getStates()->shouldContain($s3);
        $this->getStates()->shouldNotContain($s4);
    }

    function it_knows_transitions(Transition $t1, Transition $t2, Transition $t3, Transition $t4)
    {
        $this->addTransitions([$t1, $t2, $t3]);
        $this->getTransitions()->shouldContain($t1);
        $this->getTransitions()->shouldContain($t2);
        $this->getTransitions()->shouldContain($t3);
        $this->getTransitions()->shouldNotContain($t4);
    }
}
