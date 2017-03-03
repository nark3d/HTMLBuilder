<?php

namespace BestServedCold\HTMLBuilder;

class ElementTest extends TestCase
{
    public function testAdd()
    {
        $this->assertInstanceOf(Element::class, Element::add('test'));
    }

    public function testValue()
    {
        $this->assertEquals('testValue', Element::add('test')->value('testValue')->getValue());
    }

    public function testVoid()
    {
        $this->assertTrue(Element::add('test')->void()->isVoid());
    }

    public function testAttribute()
    {
        $this->assertEquals(
            ['attribute' => 'value'],
            Element::add('test')->attribute('attribute', 'value')->getAttributes()
        );
    }

    public function testChild()
    {
        $test = Element::add('test')->child(Element::add('test2'));
        $this->assertTrue($test->hasChildren());
        $this->assertEquals('test2', $test->getChildren()[0]->getType());
    }

    public function testGetType()
    {
        $this->assertEquals('test', Element::add('test')->getType());
    }

    public function testSetValue()
    {
        $this->assertEquals('test', ELement::add('bob')->value('test')->getValue());
    }

    public function testSetValueException()
    {
        $this->expectException(\Exception::class);
        Element::add('bob')->void()->value('bob');
    }

    public function testGetValue()
    {
        $this->assertEquals('test', Element::add('bob')->value('test')->getValue());
    }

    public function testSetVoid()
    {
        $this->assertTrue(Element::add('test')->void()->isVoid());
    }

    public function testSetVoidException()
    {
        $this->expectException(\Exception::class);
        Element::add('bob')->value('bob')->void();
    }

    public function testIsVoid()
    {
        $this->assertTrue(Element::add('bob')->void()->isVoid());
    }

    public function testHasChildren()
    {
        $this->assertTrue(Element::add('bob')->child(Element::add('bob2'))->hasChildren());
    }

    public function testGetAttributeKeys()
    {
        $this->assertEquals(
            ['bob', 'harry'],
            Element::add('bob')->attribute('bob', 'mary')->attribute('harry')->getAttributeKeys()
        );
    }

    public function testHasAttributes()
    {
        $this->assertTrue(Element::add('bob')->attribute('susan', 'hannah')->hasAttributes());
    }
}
