<?php
declare(strict_types=1);

namespace Symflex\Component\Jwt\Token;

use Symflex\Component\Jwt\Token\Header\Algorithm;
use Symflex\Component\Jwt\Token\Header\Type;

/**
 * Interface Header
 * @package Symflex\Component\Jwt\Token
 */
interface Header
{
    /**
     * @return string
     */
    public function encoded(): string;

    /**
     * @return Algorithm
     */
    public function alg(): Algorithm;

    /**
     * @return Type
     */
    public function typ(): Type;

    /**
     * @return array
     */
    public function data(): array;
}
