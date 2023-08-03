<?php

use PHPUnit\Framework\TestCase;

require_once 'src/StringUtils.php';

class StringUtilsTest extends TestCase
{
    public function testReverse(): void
    {
        $this->assertEquals('olleH', StringUtils::reverse('Hello'));
        $this->assertEquals('54321', StringUtils::reverse('12345'));
        $this->assertEquals('', StringUtils::reverse(''));
        $this->assertEquals('civic', StringUtils::reverse('civic'));
    }

    public function testAreAnagrams(): void
    {
        $this->assertTrue(StringUtils::areAnagrams('listen', 'silent'));
        $this->assertTrue(StringUtils::areAnagrams('debit card', 'bad credit'));
        $this->assertFalse(StringUtils::areAnagrams('hello', 'world'));
        $this->assertFalse(StringUtils::areAnagrams('test', 'tests'));
    }
}