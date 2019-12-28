<?php

namespace Symflex\Component\Jwt;

use Symflex\Component\Jwt\Token\Header;
use Symflex\Component\Jwt\Token\Payload;
use Symflex\Component\Jwt\Token\Signature;

/**
 * Class JwtToken
 * @package Symflex\Component\Jwt
 */
class JwtToken implements Token
{
    public const DELIMITER = '.';

    /**
     * @var Header
     */
    private Header $header;

    /**
     * @var Payload
     */
    private Payload $payload;

    /**
     * @var Signature
     */
    private Signature $signature;

    /**
     * JwtToken constructor.
     * @param Header $header
     * @param Payload $payload
     * @param Signature $signature
     */
    public function __construct(
        Header $header,
        Payload $payload,
        Signature $signature
    ) {
        $this->header    = $header;
        $this->payload   = $payload;
        $this->signature = $signature;
    }

    /**
     * @return Header
     */
    public function header(): Header
    {
        return $this->header;
    }

    /**
     * @return Payload
     */
    public function payload(): Payload
    {
        return $this->payload;
    }

    /**
     * @return Signature
     */
    public function signature(): Signature
    {
        return $this->signature;
    }

    /**
     * @param Token $token
     * @return bool
     */
    public function equals(Token $token): bool
    {
        return (string)$token === (string)$this;
    }

    /**
     * @return string
     */
    public function __toString()
    {
        return implode(self::DELIMITER, [$this->header, $this->payload, $this->signature]);
    }
}
