<?php
declare(strict_types=1);

namespace Symflex\Component\Jwt\Token\Header\Algorithm;

use Symflex\Component\Jwt\Token\Header\Algorithm;

class Rsa512 implements Algorithm
{
    public const ALGRORITHM = 'RSA512';

    public function value(): string
    {
        return self::ALGRORITHM;
    }
}
