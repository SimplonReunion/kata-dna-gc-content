<?php

require 'kata.php';

class KataTest extends \PHPUnit_Framework_TestCase
{
    public function testBasicFunctionnality()
    {
      $this->assertEquals(100, gcContent("G"));
      $this->assertEquals(100, gcContent("C"));
      $this->assertEquals(0,gcContent("A"));
      $this->assertEquals(0,gcContent("T"));
      $this->assertEquals(0,gcContent("AAA"));
      $this->assertEquals(50,gcContent("AAACCCGGGTTT"));

    }

    public function testEdgeCase()
    {
        $this->markTestSkipped();
        $this->assertEquals(0, gcContent(""));
        $this->assertEquals(50, gcContent("aaacccgggttt"));
    }
}
