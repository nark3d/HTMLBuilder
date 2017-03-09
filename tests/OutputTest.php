<?php

namespace BestServedCold\HTMLBuilder\Html;

use BestServedCold\HTMLBuilder\Output,
    BestServedCold\HTMLBuilder\TestCase,
    BestServedCold\HTMLBuilder\Output\Format;

class OutputTest extends TestCase
{
    private $node;

    public function setUp()
    {
        $this->node = new Node('div');
    }

    public function testGet()
    {
        $this->assertEquals("<div>\n</div>\n", (new Output($this->node))->get());
    }

    public function testSetTabSize()
    {
        Output::setTabSize(8);
        $this->assertEquals(8, $this->reflect(Format::class)->tabSize);
    }

    public function testSetDepth()
    {
        Output::setDepth(8);
        $this->assertEquals(8, $this->reflect(new Output($this->node))->depth);
    }

}
