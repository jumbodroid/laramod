<?php

namespace Jumbodroid\Laramod;

use Jumbodroid\Laramod\Support\Stub;

class LumenModulesServiceProvider extends ModulesServiceProvider
{
    /**
     * Booting the package.
     */
    public function boot()
    {
        $this->setupStubPath();
    }

    /**
     * Register all modules.
     */
    public function register()
    {
        $this->registerNamespaces();
        $this->registerServices();
        $this->registerModules();
        $this->registerProviders();
    }

    /**
     * Setup stub path.
     */
    public function setupStubPath()
    {
        Stub::setBasePath(__DIR__ . '/Commands/stubs');

        if (app('modules')->config('stubs.enabled') === true) {
            Stub::setBasePath(app('modules')->config('stubs.path'));
        }
    }

    /**
     * {@inheritdoc}
     */
    protected function registerServices()
    {
        $this->app->singleton(Contracts\RepositoryInterface::class, function ($app) {
            $path = $app['config']->get('laramod.paths.modules');

            return new Lumen\LumenFileRepository($app, $path);
        });
        $this->app->singleton(Contracts\ActivatorInterface::class, function ($app) {
            $activator = $app['config']->get('laramod.activator');
            $class = $app['config']->get('laramod.activators.' . $activator)['class'];

            return new $class($app);
        });
        $this->app->alias(Contracts\RepositoryInterface::class, 'modules');
    }
}
