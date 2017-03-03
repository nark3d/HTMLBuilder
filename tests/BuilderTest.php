<?php

namespace BestServedCold\HTMLBuilder;

class BuilderTest extends TestCase
{
    public function testIsSelfMethod()
    {
        $builder = $this->reflect(Builder::class);
        $this->assertEquals(true, $builder->isSelfMethod('comment'));
        $this->assertEquals(false, $builder->isSelfMethod('sadfljasdksdflskdjflksdjfksdjf'));
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
