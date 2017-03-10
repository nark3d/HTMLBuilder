<?php

namespace BestServedCold\HTMLBuilder\Html;

use BestServedCold\HTMLBuilder\TestCase;

class SpecialTest extends TestCase
{
    use Special;

    public function testComment()
    {
        $this->assertEquals('!-- test --', $this->comment(' test ')->getType());
    }

    public function testDocType()
    {
        $docType = $this->docType();
        $this->assertEquals('html', reset(array_keys($docType->getAttributes())));
        $this->assertEquals('!DOCTYPE', $docType->getType());
    }
}
