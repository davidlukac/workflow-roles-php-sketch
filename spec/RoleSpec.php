<?php

namespace davidlukac\workflow_spec;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

/**
 * Class RoleSpec
 *
 * @package spec
 *
 * @SuppressWarnings(PHPMD)
 * @codingStandardsIgnoreStart
 */
class RoleSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->beConstructedWith(1, 'editor');
        $this->shouldHaveType(Role::class);
        $this->getRoleId()->shouldBe(1);
        $this->getName()->shouldBe('editor');
    }
}
