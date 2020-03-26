<?php

require_once "functions.php";
use PHPUnit\Framework\TestCase;

class tests extends TestCase
{
    public function testReturnsBrandAndStyle()
    {
        $expected = "brand | style";
        $actual = getGuitarBrandAndStyle([
            "brand" => "brand", "style" => "style"
        ]);
        $this->assertSame($expected, $actual);
    }

    public function testFailureBrandAndStyle()
    {
        $this->expectException(TypeError::class);
        getGuitarBrandAndStyle(47);
    }

    public function testReturnsErrorBrand()
    {
        $expected = "You must supply a brand";
        $actual = getErrorMessage(0);
        $this->assertSame($expected, $actual);
    }

    public function testReturnsErrorstyle()
    {
        $expected = "You must supply a style";
        $actual = getErrorMessage(1);
        $this->assertSame($expected, $actual);
    }

    public function testReturnsErrorAndertonsImgAddress()
    {
        $expected = "You must supply a valid andertons image address";
        $actual = getErrorMessage(2);
        $this->assertSame($expected, $actual);
    }

    public function testReturnsErrorYear()
    {
        $expected = "You must supply a valid year";
        $actual = getErrorMessage(3);
        $this->assertSame($expected, $actual);
    }

    public function testReturnsErrorYearMoreThan2020()
    {
        $expected = "You must supply a valid year";
        $actual = getErrorMessage(4);
        $this->assertSame($expected, $actual);
    }

    public function testReturnsErrorYearLessThan0()
    {
        $expected = "You must supply a valid year";
        $actual = getErrorMessage(5);
        $this->assertSame($expected, $actual);
    }
}
