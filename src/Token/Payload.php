<?php

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
    public function payload(): array;
}
