<?php

namespace BestServedCold\HTMLBuilder\Html;

use BestServedCold\HTMLBuilder\TestCase;

class NodeTest extends TestCase
{
    private $node;

    public function setUp()
    {
        $this->node = new Node('label', [new Node('span')]);
    }

    public function testInvalidAttribute()
    {
        $this->expectException(\Exception::class);
        $this->node->thisDoesNotExistYouMonkey();
    }

    public function testInvalidAttributeForElement()
    {
        $this->expectException(\Exception::class);
        $this->node->colspan();
    }

    public function testOverloader()
    {
        $this->assertInstanceOf(Node::class, $this->node->for());
    }

    public function testContent()
    {
        $this->assertInstanceOf(Node::class, $this->node->for()->content('testFor'));
    }

    public function testGetContent()
    {
        $content = $this->node->for()->content('testFor');
        $contentArray = $content->getContent();
        $this->assertEquals('testFor', $contentArray[0]);
    }

    public function testGetChildren()
    {
        $this->isType('array', $this->node->getChildren());
    }

    public function testHasChildren()
    {
        $this->assertTrue($this->node->hasChildren());
    }

    public function testAttributeArray()
    {
        $this->node->attributeArray(['id' => 'someId', 'onblur' => 'someAction'])->getAttributes();
        $this->assertEquals(
            ['id'     => 'someId', 'onblur' => 'someAction'],
            $this->node->getAttributes()
        );
    }

    public function testIsVoid()
    {
        $this->node->void();
        $this->assertTrue($this->node->isVoid());
    }
}
