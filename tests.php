<?php

require_once "functions.php";
use PHPUnit\Framework\TestCase;

class tests extends TestCase{
    public function testReturnsBrandAndStyle(){
        $expected = "brand | style";
        $actual = getGuitarBrandAndStyle([
            "brand"=>"brand", "style"=>"style"
        ]);
        $this->assertSame($expected, $actual);
    }
    public function testFailureBrandAndStyle(){
        $this->expectException(TypeError::class);
        getGuitarBrandAndStyle(47);
    }
}