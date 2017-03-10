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
        $arrayKeys = array_keys($docType->getAttributes());
        $this->assertEquals('html', $arrayKeys[0]);
        $this->assertEquals('!DOCTYPE', $docType->getType());
    }
}
