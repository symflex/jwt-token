<?php

namespace Symflex\Component\Jwt\Token\Header;

interface Algorithm
{
    public const KEY = 'alg';

    public function value(): string;
}