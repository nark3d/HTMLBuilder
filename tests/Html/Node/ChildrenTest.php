<?php

use BestServedCold\HTMLBuilder\TestCase,
    BestServedCold\HTMLBuilder\Html\Node\Children,
    BestServedCold\HTMLBuilder\Html\Node;

class ChildrenTest extends TestCase
{
    public function testCheckType()
    {
        $this->expectException(\Exception::class);
        Children::run(new Node('div'), ['string']);
    }
}
