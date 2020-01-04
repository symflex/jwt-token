<?php
declare(strict_types=1);

namespace Symflex\Component\Jwt\Token;

/**
 * Class PayloadSection
 * @package Symflex\Component\Jwt\Token
 */
class PayloadSection implements Payload
{
    /**
     * @var array
     */
    private array $data;

    /**
     * @var string
     */
    private string $encoded;

    /**
     * PayloadSection constructor.
     * @param array $data
     * @param string $encoded
     */
    public function __construct(
        array $data,
        string $encoded
    ) {
        $this->data    = $data;
        $this->encoded = $encoded;
    }

    /**
     * @return array
     */
    public function data(): array
    {
        return $this->data;
    }

    /**
     * @return string
     */
    public function encoded(): string
    {
        return  $this->encoded;
    }

    /**
     * @return string
     */
    public function __toString()
    {
        return $this->encoded;
    }
}
