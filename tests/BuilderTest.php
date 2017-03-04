<?php

namespace BestServedCold\HTMLBuilder;

class BuilderTest extends TestCase
{
    public function testCallStatic()
    {
        $this->assertInstanceOf(Element::class, Builder::div());
        $this->expectException(\Exception::class);
        Builder::thisDoesNotExistYouMonkey();
    }

    public function testComment()
    {
        $this->assertEquals('!--test--', Builder::comment('test')->getType());
    }

    public function testDocType()
    {
        $doctype = Builder::doctype();
        $this->assertEquals(['html' => null], $doctype->getAttributes());
        $this->assertEquals('!DOCTYPE', $doctype->getType());
    }

    public function testVoidTag()
    {
        $this->assertEquals(false, Builder::tbody()->isVoid());
        $this->assertEquals(true, Builder::input()->isVoid());
    }
}
