<?php

namespace Symflex\Component\Jwt\Token\Header\Type;

use Symflex\Component\Jwt\Token\Header\Type;

class Jwt implements Type
{
    public const TYPE = 'JWT';

    public function value(): string
    {
        return self::TYPE;
    }
}