<?php

namespace davidlukac\workflow_spec;

use PhpSpec\ObjectBehavior;

/**
 * Class UserSpec
 *
 * @package davidlukac\workflow_spec
 *
 * @SuppressWarnings(PHPMD)
 * @codingStandardsIgnoreStart
 */
class UserSpec extends ObjectBehavior
{
    function let()
    {
        $this->beConstructedWith(1, 'david@example.com');
    }

    function it_is_initializable()
    {
        $this->shouldHaveType(User::class);
    }

    function it_is_created_with()
    {
        $this->getUserId()->shouldBe(1);
        $this->getEmail()->shouldBe('david@example.com');
    }

    function it_can_be_assigned_role(Role $role)
    {
        $this->addRole($role);
        $this->getRoles()->shouldContain($role);
    }
}
