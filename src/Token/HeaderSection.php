<?php

namespace Symflex\Component\Jwt\Token;

/**
 * Class HeaderSection
 * @package Symflex\Component\Jwt\Token
 */
class HeaderSection implements Header
{
    /**
     * @var array
     */
    private array $header;

    /**
     * @var string
     */
    private string $encoded;

    /**
     * HeaderSection constructor.
     * @param array $header
     * @param string $encoded
     */
    public function __construct(
        array $header,
        string $encoded
    ) {
        $this->header = $header;
        $this->encoded = $encoded;
    }

    /**
     * @return array
     */
    public function header(): array
    {
        return $this->header;
    }

    /**
     * @return string
     */
    public function __toString()
    {
        return $this->encoded;
    }
}
