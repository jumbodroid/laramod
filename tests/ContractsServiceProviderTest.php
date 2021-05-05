<?php

namespace Jumbodroid\Laramod\Tests;

use Jumbodroid\Laramod\Contracts\RepositoryInterface;
use Jumbodroid\Laramod\Laravel\LaravelFileRepository;

class ContractsServiceProviderTest extends BaseTestCase
{
    /** @test */
    public function it_binds_repository_interface_with_implementation()
    {
        $this->assertInstanceOf(LaravelFileRepository::class, app(RepositoryInterface::class));
    }
}
