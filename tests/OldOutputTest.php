<?php

namespace BestServedCold\HTMLBuilder;

class OutputTest extends TestCase
{
    public function testSelfMethod()
    {

    }
    
    public function testOutput()
    {
        $this->assertEquals(
            "<test susan=\"mary\" disabled>\n    bob\n</test>\n",
            (new Output(Element::add('test')->value('bob')->attribute('susan', 'mary')->attribute('disabled')))->get()
        );
    }

    public function testOutputChild()
    {
        $output = new Output(
            Element::add('test')->value('bob')->attribute('susan', 'mary')->attribute('disabled')->child(
                Element::add('test2')->void()
            )
        );

        $this->assertEquals("<test susan=\"mary\" disabled>\n    bob\n    <test2>\n</test>\n",
            $output->get()
        );


    }
    public function testSetTabSize()
    {
        Output::setTabSize(20);
        $output = $this->reflect(Output::class);
        $this->assertEquals(20, $output->tabSize);
    }
}
