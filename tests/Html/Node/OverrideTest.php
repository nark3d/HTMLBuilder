<?php

namespace BestServedCold\HTMLBuilder\Html\Node;

use BestServedCold\HTMLBuilder\TestCase;

class OverrideTest extends TestCase
{
    private $mock;

    public function setUp()
    {
        $this->mock = $this->getMockForTrait(Override::class);
        $this->mock->expects($this->any())
            ->method('attribute')
            ->willReturnArgument(0);
    }
    public function testData()
    {
        $this->assertEquals('data-value', $this->mock->data('test', 'value'));
    }

    public function testAcceptcharset()
    {
        $this->assertEquals('accept-charset', $this->mock->acceptcharset('test', 'value'));
    }

    public function testContentAttribute()
    {
        $this->assertEquals('content', $this->mock->contentAttribute('test', 'value'));
    }

}

