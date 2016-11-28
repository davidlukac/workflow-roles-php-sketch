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

    function it_knows_states(State $s1, State $s2, State $s3)
    {
        $this->addStates([$s1, $s2, $s3]);
        $this->getStates()->shouldContain($s1);
    }
}
