<?php
declare(strict_types=1);

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
    private string $data;

    /**
     * @var string
     */
    private string $encoded;

    /**
     * SignatureSection constructor.
     * @param string $data
     * @param string $encoded
     */
    public function __construct(
        string $data,
        string $encoded
    ) {
        $this->data    = $data;
        $this->encoded = $encoded;
    }

    /**
     * @return string
     */
    public function data(): string
    {
        return $this->data;
    }

    /**
     * @return string
     */
    public function encoded(): string
    {
        return $this->encoded;
    }

    /**
     * @return string
     */
    public function __toString()
    {
        return $this->encoded;
    }
}
