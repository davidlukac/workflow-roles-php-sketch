<?php

namespace davidlukac\workflow_spec;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

/**
 * Class RoleRepositoryFactorySpec
 *
 * @package davidlukac\workflow_spec
 *
 * @SuppressWarnings(PHPMD)
 * @codingStandardsIgnoreStart
 */
class RoleRepositoryFactorySpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType(RoleRepositoryFactory::class);
    }

    function it_constructs_role_repository()
    {
        $this->getInstance('mock')->shouldHaveType(MockRoleRepository::class);
    }

    function it_should_throw_exception_on_unknown()
    {
        $this->shouldThrow(\Exception::class)->during('getInstance', ['unknown']);
    }
}
