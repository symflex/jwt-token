<?php
declare(strict_types=1);

namespace Symflex\Component\Jwt\Test\Token;

use PHPUnit\Framework\TestCase;
use Symflex\Component\Jwt\Token\Signature;
use Symflex\Component\Jwt\Token\SignatureSection;

class SignatureSectionTest extends TestCase
{
    protected const FIXTURE = [
        'data' => 'signature',
        'encoded' => 'encoded'
    ];

    public function testConstructor()
    {
        $section = new SignatureSection(self::FIXTURE['data'], self::FIXTURE['encoded']);
        $this->assertInstanceOf(SignatureSection::class, $section);
        return $section;
    }

    /**
     * @depends testConstructor
     */
    public function testInterface($section)
    {
        $this->assertInstanceOf(Signature::class, $section);
        return $section;
    }

    /**
     * @depends testConstructor
     */
    public function testContent($section)
    {
        $this->assertStringContainsString('signature', $section->data());
    }

    /**
     * @depends testConstructor
     */
    public function testEncoded($section)
    {
        $this->assertEquals('encoded', $section->encoded());
    }

    /**
     * @depends testConstructor
     */
    public function testToString($section)
    {
        $this->assertStringContainsString('encoded', (string)$section);
    }
}