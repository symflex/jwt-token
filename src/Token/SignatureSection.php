<?php

namespace Symflex\Component\Jwt\Token;

/**
 * Class SignatureSection
 * @package Symflex\Component\Jwt\Token
 */
class SignatureSection implements Signature
{
    /**
     * @var string
     */
    private string $signature;

    /**
     * @var string
     */
    private string $encoded;

    /**
     * SignatureSection constructor.
     * @param string $signature
     * @param string $encoded
     */
    public function __construct(
        string $signature,
        string $encoded
    ) {
        $this->signature = $signature;
        $this->encoded   = $encoded;
    }

    /**
     * @return string
     */
    public function signature(): string
    {
        return $this->signature;
    }

    /**
     * @return string
     */
    public function __toString()
    {
        return $this->encoded;
    }
}
