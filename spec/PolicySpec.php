<?php

namespace davidlukac\workflow_spec;

use PhpSpec\ObjectBehavior;

/**
 * Class PolicySpec
 *
 * @package davidlukac\workflow_spec
 *
 * @SuppressWarnings(PHPMD)
 * @codingStandardsIgnoreStart
 */
class PolicySpec extends ObjectBehavior
{
    function let(Role $allowedRole, Role $disallowedRole, Role $anotherRole)
    {
        $this->beConstructedWith('name');

        // Mocks.
        $allowedRole->getRoleId()->willReturn(1);
        $allowedRole->getName()->willReturn('role1');
        $disallowedRole->getRoleId()->willReturn(2);
        $disallowedRole->getName()->willReturn('role2');
        $anotherRole->getRoleId()->willReturn(3);
        $anotherRole->getName()->willReturn('role3');
    }

    function it_is_initializable()
    {
        $this->shouldHaveType(Policy::class);
    }

    function it_knows_allowed_roles(Role $role1, Role $role2, Role $role3)
    {
        $this->addAllowedRole($role1);
        $this->getAllowedRoles()->shouldContain($role1);
        $this->addAllowedRoles([$role2, $role3]);
        $this->getAllowedRoles()->shouldContain($role3);
    }

    function it_knows_if_role_has_permission(Role $allowedRole, Role $disallowedRole, Role $anotherRole)
    {
        // Tests.
        $this->addAllowedRole($allowedRole);
        $this->addAllowedRoles([$anotherRole]);
        $this->hasPermission($allowedRole)->shouldBe(true);
        $this->hasPermission($anotherRole)->shouldBe(true);
    }
}
