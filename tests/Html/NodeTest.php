<?php

namespace BestServedCold\HTMLBuilder\Html;

use BestServedCold\HTMLBuilder\TestCase;

class NodeTest extends TestCase
{
    private $node;

    public function setUp()
    {
        $this->node = new Node('label');
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
        $this->assertEquals('testFor', reset($content->getContent()));
    }
}
