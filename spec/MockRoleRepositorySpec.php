<?php

namespace davidlukac\workflow_spec;

use PhpSpec\ObjectBehavior;

/**
 * Class MockRoleRepositorySpec
 *
 * @package davidlukac\workflow_spec
 *
 * @SuppressWarnings(PHPMD)
 * @codingStandardsIgnoreStart
 */
class MockRoleRepositorySpec extends ObjectBehavior
{

    function it_is_initializable()
    {
        $this->shouldHaveType(MockRoleRepository::class);
    }

    function it_provides_list_of_system_roles()
    {
        $this->getRoles()->shouldContain('editor');
    }
}
