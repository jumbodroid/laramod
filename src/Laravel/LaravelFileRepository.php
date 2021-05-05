<?php

namespace Jumbodroid\Laramod\Laravel;

use Jumbodroid\Laramod\FileRepository;

class LaravelFileRepository extends FileRepository
{
    /**
     * {@inheritdoc}
     */
    protected function createModule(...$args)
    {
        return new Module(...$args);
    }
}
