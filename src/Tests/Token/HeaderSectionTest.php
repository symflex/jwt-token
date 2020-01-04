<?php
declare(strict_types=1);

namespace Symflex\Component\Jwt\Test\Token;

use PHPUnit\Framework\TestCase;
use Symflex\Component\Jwt\Token\Header;
use Symflex\Component\Jwt\Token\HeaderSection;

class HeaderSectionTest extends TestCase
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
        $section = new HeaderSection(self::FIXTURE['data'], self::FIXTURE['encoded']);
        $this->assertInstanceOf(HeaderSection::class, $section);
        return $section;
    }

    /**
     * @depends testConstructor
     */
    public function testInterface($section)
    {
        $this->assertInstanceOf(Header::class, $section);
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