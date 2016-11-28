<?php

namespace davidlukac\workflow_spec;

use PhpSpec\ObjectBehavior;

/**
 * Class StateSpec
 *
 * @package davidlukac\workflow_spec
 *
 * @SuppressWarnings(PHPMD)
 * @codingStandardsIgnoreStart
 */
class StateSpec extends ObjectBehavior
{
    function let()
    {
        $this->beConstructedWith('name');
    }

    function it_is_initializable()
    {
        $this->shouldHaveType(State::class);
        $this->getName()->shouldBe('name');
    }

    function it_knows_next_allowed_states(State $s1, State $s2, State $s3, State $s4)
    {
        $this->setNextAllowedStates([$s1, $s2, $s3]);
        $this->getNextAllowedStates()->shouldContain($s1);
        $this->getNextAllowedStates()->shouldContain($s2);
        $this->getNextAllowedStates()->shouldContain($s3);
        $this->getNextAllowedStates()->shouldNotContain($s4);
    }
}
