<?php
declare(strict_types=1);

namespace Symflex\Component\Jwt\Test\Token;

use PHPUnit\Framework\TestCase;
use Symflex\Component\Jwt\Token\Payload;
use Symflex\Component\Jwt\Token\PayloadSection;

class PayloadSectionTest extends TestCase
{
    protected const FIXTURE = [
        'data' => [
            'key1' => 'value1',
            'key2' => 'value2'
        ],
        'encoded' => 'encoded'
    ];

    public function testConstructor()
    {
        $section = new PayloadSection(self::FIXTURE['data'], self::FIXTURE['encoded']);
        $this->assertInstanceOf(PayloadSection::class, $section);
        return $section;
    }

    /**
     * @depends testConstructor
     */
    public function testInterface($section)
    {
        $this->assertInstanceOf(Payload::class, $section);
        return $section;
    }

    /**
     * @depends testConstructor
     */
    public function testContent($section)
    {
        $this->assertIsArray($section->data());
        $this->assertArrayHasKey('key1', $section->data());
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