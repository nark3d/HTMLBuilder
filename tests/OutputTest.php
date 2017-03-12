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

    public function testRender()
    {
        ob_start();
        (new Output($this->node))->render();
        $string = ob_get_contents();
        ob_end_clean();

        $this->assertEquals("<div>\n</div>\n", $string);
    }

    public function testGet()
    {
        Output::setDepth(0);
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
