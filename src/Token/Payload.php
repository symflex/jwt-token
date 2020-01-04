<?php
declare(strict_types=1);

namespace Symflex\Component\Jwt\Token;

/**
 * Interface Payload
 * @package Symflex\Component\Jwt\Token
 */
interface Payload
{
    /**
     * @return array
     */
    public function data(): array;

    /**
     * @return string
     */
    public function encoded(): string;
}
