<?php

namespace Unit;

use PHPUnit\Framework\TestCase;
use App\String\StringHelper;
class StringHelperTest extends TestCase
{
    /** @test */
    public function toUpper() : void
    {
        // Given
        $str = "Hello world!";
        // When
        $actual = StringHelper::toUpper($str);
        $exp    = "HELLO WORLD!";
        // Then
        $this->assertEquals($exp, $actual);
    }
    /** @test */
    public function getSmallString() : void
    {
        // Given
        $str = "Hello world!";
        // When
        $actual = StringHelper::getSmallString($str);
        $exp    = "Hello worl ...";
        // Then
        $this->assertEquals($exp, $actual);
    }
}