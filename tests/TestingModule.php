<?php

namespace Jumbodroid\Laramod\Tests;

use Jumbodroid\Laramod\Laravel\Module;

class TestingModule extends Module
{
    public function registerProviders(): void
    {
        parent::registerProviders();
    }
}
