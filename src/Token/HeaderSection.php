<?php
declare(strict_types=1);

namespace Symflex\Component\Jwt\Token;

use Symflex\Component\Jwt\Token\Header\Algorithm;
use Symflex\Component\Jwt\Token\Header\Type;

/**
 * Class HeaderSection
 * @package Symflex\Component\Jwt\Token
 */
class HeaderSection implements Header
{
    /**
     * @var Algorithm
     */
    private Algorithm $alg;

    /**
     * @var Type
     */
    private Type $typ;

    /**
     * @var string
     */
    private string $encoded;

    /**
     * HeaderSection constructor.
     * @param Type $typ
     * @param Algorithm $alg
     * @param string $encoded
     */
    public function __construct(
        Type $typ,
        Algorithm $alg,
        string $encoded
    ) {
        $this->typ     = $typ;
        $this->alg     = $alg;
        $this->encoded = $encoded;
    }

    /**
     * @return Algorithm
     */
    public function alg(): Algorithm
    {
        return $this->alg;
    }

    /**
     * @return Type
     */
    public function typ(): Type
    {
        return $this->typ;
    }

    /**
     * @return array
     */
    public function data(): array
    {
        return [
            Type::KEY      => $this->typ->value(),
            Algorithm::KEY => $this->alg->value()
        ];
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
