<?php
declare(strict_types=1);

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
    public function data(): array;

    /**
     * @return string
     */
    public function encoded(): string;
}
