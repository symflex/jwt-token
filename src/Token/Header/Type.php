<?php

namespace Symflex\Component\Jwt\Token\Header;

interface Type
{
    public const KEY = 'typ';

    public function value(): string;
}