<?php

namespace BestServedCold\HTMLBuilder\Output;

use BestServedCold\HTMLBuilder\Output;
use BestServedCold\HTMLBuilder\TestCase,
    BestServedCold\HTMLBuilder\Html\Node;

class ChildrenTest extends TestCase
{
     private $children;

     public function setUp()
     {
         Output::setDepth(0);
         $node = $this->createmock(Node::class);
         $childNode = $this->createMock(Node::class);
         $childNode->method('getContent')->will($this->returnValue(['child content']));
         $childNode->method('getChildren')->will($this->returnValue([]));
         $childNode->method('getType')->will($this->returnValue('p'));

         $node->method('getContent')->will($this->returnValue(['test content', 'more content']));
         $node->method('getChildren')->will($this->returnValue([$childNode]));

         $this->children = $this->reflect(new Children($node, 0));
     }

     public function testChildren()
     {
         $this->assertEquals(
             "    test content\n    <p>\n        child content\n    </p>\n    more content\n",
             $this->children->children());
     }
}
