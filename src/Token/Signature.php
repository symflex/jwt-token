<?php
declare(strict_types=1);

namespace Symflex\Component\Jwt\Token;

/**
 * Interface Signature
 * @package Symflex\Component\Jwt\Token
 */
interface Signature
{
    /**
     * @return string
     */
    public function data(): string;

    /**
     * @return string
     */
    public function encoded(): string;
}
