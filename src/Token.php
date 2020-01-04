<?php
declare(strict_types=1);

namespace Symflex\Component\Jwt;

use Symflex\Component\Jwt\Token\Header;
use Symflex\Component\Jwt\Token\Payload;
use Symflex\Component\Jwt\Token\Signature;

/**
 * Interface Token
 * @package Symflex\Component\Jwt
 */
interface Token
{
    /**
     * @return Header
     */
    public function header(): Header;

    /**
     * @return Payload
     */
    public function payload(): Payload;

    /**
     * @return Signature
     */
    public function signature(): Signature;

    /**
     * @param Token $token
     * @return bool
     */
    public function equals(Token $token): bool;
}
