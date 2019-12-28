<?php

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
    public function signature(): string;
}
