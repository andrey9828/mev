<?php

namespace App\Task11;

class LineTest extends \PHPUnit_Framework_TestCase
{
    protected $str;

    protected function setUp()
    {
        $this->str = new Line();
    }

    protected function tearDown()
    {
        $this->str = null;
    }

    public function testCheckPolindrome()
    {
        $result = $this->str->checkPolindrome();
        $this->assertInternalType("string", $result);
        $this->assertEquals(strrev($this->str->getMainStr()), $result);
    }
}
