<?php

namespace davidlukac\workflow_spec;

use PhpSpec\ObjectBehavior;

/**
 * Class RoleSystemSpec
 *
 * @package davidlukac\workflow_spec
 *
 * @SuppressWarnings(PHPMD)
 * @codingStandardsIgnoreStart
 */
class RoleSystemSpec extends ObjectBehavior
{
    function let(RoleRepository $repository)
    {
        $this->beConstructedWith($repository);
        $repository->getRoles()->willReturn([
          1 => 'role1',
          2 => 'role2',
          3 => 'role3',
        ]);
    }

    function it_is_initializable()
    {
        $this->shouldHaveType(RoleSystem::class);
    }

    function it_should_provide_list_of_roles()
    {
        $this->getRoles()[1]->shouldHaveType(Role::class);
        $this->getRoles()[1]->getName()->shouldBe('role1');
    }

    function it_should_have_role_on_role_id_key()
    {
        $this->getRoles()[2]->getRoleId()->shouldBe(2);
    }
}
