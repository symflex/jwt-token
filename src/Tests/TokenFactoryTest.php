<?php

namespace Symflex\Componenet\Jwt\Tests;

use PHPUnit\Framework\TestCase;
use Symflex\Component\Jwt\JwtToken;
use Symflex\Component\Jwt\TokenFactory;
use RuntimeException;

class TokenFactoryTest extends TestCase
{
    protected const HEADER_FIXTURE = [
        'data' => [
            'key' => 'value'
        ],
        'encoded' => 'encoded'
    ];

    protected const PAYLOAD_FIXTURE = [
        'data' => [
            'key' => 'value'
        ],
        'encoded' => 'encoded'
    ];

    protected const SIGNATURE_FIXTURE = [
        'data' => 'signature',
        'encoded' => 'encoded'
    ];

    public function testConstructor()
    {
        $tokenFactory = new TokenFactory();
        $this->assertTrue(true);
        return $tokenFactory;
    }

    /**
     * @depends testConstructor
     */
    public function testCreateToken($tokenFactory)
    {

        $token = $tokenFactory->createToken(self::HEADER_FIXTURE, self::PAYLOAD_FIXTURE, self::SIGNATURE_FIXTURE);
        $this->assertInstanceOf(JwtToken::class, $token);
    }

    /**
     * @depends testConstructor
     */
    public function testBadDataHeader($tokenFactory)
    {
        $this->expectException(RuntimeException::class);
        $tokenFactory->createToken(['a' => 'b'], self::PAYLOAD_FIXTURE, self::SIGNATURE_FIXTURE);
    }

    /**
     * @depends testConstructor
     */
    public function testBadDataPayload($tokenFactory)
    {
        $this->expectException(RuntimeException::class);
        $tokenFactory->createToken(['data' => ''], self::PAYLOAD_FIXTURE, self::SIGNATURE_FIXTURE);
    }

    /**
     * @depends testConstructor
     */
    public function testBadDataSignature($tokenFactory)
    {
        $this->expectException(RuntimeException::class);
        $tokenFactory->createToken(self::HEADER_FIXTURE, self::PAYLOAD_FIXTURE, ['data' => []]);
    }

    protected function fixtures()
    {
        return [
            'header' =>
        ];
    }
}
