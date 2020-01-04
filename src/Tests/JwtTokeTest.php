<?php

namespace Symflex\Componenet\Jwt\Tests;

use PHPUnit\Framework\TestCase;
use Symflex\Component\Jwt\JwtToken;
use Symflex\Component\Jwt\Token\Header;
use Symflex\Component\Jwt\Token\HeaderSection;
use Symflex\Component\Jwt\Token\Payload;
use Symflex\Component\Jwt\Token\PayloadSection;
use Symflex\Component\Jwt\Token\Signature;
use Symflex\Component\Jwt\Token\SignatureSection;

class JwtTokeTest extends TestCase
{
    protected const FIXTURE = [
        'header' => [
            'key' => 'value'
        ],
        'headerEncoded' => 'encoded',
        'payload' => [
            'key' => 'value'
        ],
        'payloadEncoded' => 'encoded',
        'signature' => 'signature',
        'signatureEncoded' => 'encoded'
    ];

    public function testConstructor()
    {
        $header = new HeaderSection(self::FIXTURE['header'], self::FIXTURE['headerEncoded']);
        $payload = new PayloadSection(self::FIXTURE['payload'], self::FIXTURE['payloadEncoded']);
        $signature = new SignatureSection(self::FIXTURE['signature'], self::FIXTURE['signatureEncoded']);
        $token = new JwtToken($header, $payload, $signature);
        $this->assertInstanceOf(JwtToken::class, $token);
        return $token;
    }

    /**
     * @depends testConstructor
     */
    public function testHeader($token)
    {
        $this->assertInstanceOf(HeaderSection::class, $token->header());
        $this->assertInstanceOf(Header::class, $token->header());
        $this->assertArrayHasKey('key', $token->header()->data());
        $this->assertStringContainsString('encoded', $token->header()->encoded());
        $this->assertStringContainsString('encoded', (string)$token->header());
    }


    /**
     * @depends testConstructor
     */
    public function testPayload($token)
    {
        $this->assertInstanceOf(PayloadSection::class, $token->payload());
        $this->assertInstanceOf(Payload::class, $token->payload());
        $this->assertArrayHasKey('key', $token->payload()->data());
        $this->assertStringContainsString('encoded', $token->payload()->encoded());
        $this->assertStringContainsString('encoded', (string)$token->payload());
    }


    /**
     * @depends testConstructor
     */
    public function testSignature($token)
    {
        $this->assertInstanceOf(SignatureSection::class, $token->signature());
        $this->assertInstanceOf(Signature::class, $token->signature());
        $this->assertStringContainsString('signature', $token->signature()->data());
        $this->assertStringContainsString('encoded', $token->signature()->encoded());
        $this->assertStringContainsString('encoded', (string)$token->signature());
    }

    /**
     * @depends testConstructor
     */
    public function testEquals($token)
    {
        $this->assertTrue($token->equals($token));
    }
}