<?php

namespace Jumbodroid\Laramod\Providers;

use Illuminate\Support\ServiceProvider;
use Jumbodroid\Laramod\Contracts\RepositoryInterface;
use Jumbodroid\Laramod\Laravel\LaravelFileRepository;

class ContractsServiceProvider extends ServiceProvider
{
    /**
     * Register some binding.
     */
    public function register()
    {
        $this->app->bind(RepositoryInterface::class, LaravelFileRepository::class);
    }
}
