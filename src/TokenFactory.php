<?php

namespace Symflex\Component\Jwt;

use Symflex\Component\Jwt\Token\HeaderSection;
use Symflex\Component\Jwt\Token\PayloadSection;
use Symflex\Component\Jwt\Token\SignatureSection;
use RuntimeException;
/**
 * Class TokenFactory
 * @package Symflex\Component\Jwt
 */
class TokenFactory
{
    /**
     * @param array $header
     * @param array $payload
     * @param array $signature
     * @return JwtToken
     */
    public function createToken(array $header, array $payload, array $signature)
    {
        $this->checkSection($header);
        $this->checkSection($payload);
        $this->checkSection($signature, false);

        $header    = new HeaderSection($header['data'], $header['encoded']);
        $payload   = new PayloadSection($payload['data'], $payload['encoded']);
        $signature = new SignatureSection($signature['data'], $signature['encoded']);

        return new JwtToken($header, $payload, $signature);
    }

    /**
     * @param array $section
     * @param bool $isCheckArray
     */
    protected function checkSection(array $section, bool $isCheckArray = true)
    {
        if (!isset($section['data'])) {
            throw new RuntimeException('Section data not exists.');
        }

        if ($isCheckArray && !is_array($section['data'])) {
            throw new RuntimeException('Section data not array.');
        }

        if (! isset($section['encoded'])) {
            throw new RuntimeException('Section encoded not exists.');
        }
    }
}
