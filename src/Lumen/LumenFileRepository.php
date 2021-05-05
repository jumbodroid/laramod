<?php

namespace Jumbodroid\Laramod\Lumen;

use Jumbodroid\Laramod\FileRepository;

class LumenFileRepository extends FileRepository
{
    /**
     * {@inheritdoc}
     */
    protected function createModule(...$args)
    {
        return new Module(...$args);
    }
}
