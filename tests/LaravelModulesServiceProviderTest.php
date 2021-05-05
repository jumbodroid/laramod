<?php

namespace Jumbodroid\Laramod\Tests;

use Jumbodroid\Laramod\Contracts\ActivatorInterface;
use Jumbodroid\Laramod\Contracts\RepositoryInterface;
use Jumbodroid\Laramod\Exceptions\InvalidActivatorClass;

class LaravelModulesServiceProviderTest extends BaseTestCase
{
    /** @test */
    public function it_binds_modules_key_to_repository_class()
    {
        $this->assertInstanceOf(RepositoryInterface::class, app(RepositoryInterface::class));
        $this->assertInstanceOf(RepositoryInterface::class, app('modules'));
    }

    /** @test */
    public function it_binds_activator_to_activator_class()
    {
        $this->assertInstanceOf(ActivatorInterface::class, app(ActivatorInterface::class));
    }

    /** @test */
    public function it_throws_exception_if_config_is_invalid()
    {
        $this->expectException(InvalidActivatorClass::class);

        $this->app['config']->set('modules.activators.file', ['class' => null]);

        $this->assertInstanceOf(ActivatorInterface::class, app(ActivatorInterface::class));
    }
}
