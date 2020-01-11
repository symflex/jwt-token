<?php
declare(strict_types=1);

namespace Symflex\Component\Jwt\Token\Header\Algorithm;

use Symflex\Component\Jwt\Token\Header\Algorithm;

/**
 * Class Rsa256
 * @package Symflex\Component\Jwt\Token\Header\Algorithm
 */
class Rsa256 implements Algorithm
{
    /**
     *
     */
    public const ALGRORITHM = 'RSA256';

    /**
     * @return string
     */
    public function value(): string
    {
        return self::ALGRORITHM;
    }
}
