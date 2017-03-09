<?php

namespace BestServedCold\HTMLBuilder;

use BestServedCold\HTMLBuilder\Html\Node;

class HtmlTest extends TestCase
{
    public function testCallStatic()
    {
        $this->assertInstanceOf(Node::class, Html::div());
        $this->expectException(\Exception::class);
        Html::thisDoesNotExistYouMonkey();
    }


}
