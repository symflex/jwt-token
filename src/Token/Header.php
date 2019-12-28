<?php

namespace Symflex\Component\Jwt\Token;

/**
 * Interface Header
 * @package Symflex\Component\Jwt\Token
 */
interface Header
{
    /**
     * @return array
     */
    public function header(): array;
}
