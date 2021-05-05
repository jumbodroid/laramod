<?php

namespace Jumbodroid\Laramod\Traits;

trait CanClearModulesCache
{
    /**
     * Clear the modules cache if it is enabled
     */
    public function clearCache()
    {
        if (config('laramod.cache.enabled') === true) {
            app('cache')->forget(config('laramod.cache.key'));
        }
    }
}
