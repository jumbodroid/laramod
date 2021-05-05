<?php

namespace Jumbodroid\Laramod\Support\Config;

class GenerateConfigReader
{
    public static function read(string $value) : GeneratorPath
    {
        return new GeneratorPath(config("laramod.paths.generator.$value"));
    }
}
