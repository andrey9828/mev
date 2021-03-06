<?php

namespace App\Task18;

class SocketClientTest extends \PHPUnit_Framework_TestCase
{
    protected $obj;

    protected function setUp()
    {
        $this->obj = new SocketClient();
    }

    protected function tearDown()
    {
        $this->obj = null;
    }

    public function testSendMessage()
    {
        $result = $this->obj->sendMessage();
        $this->assertInternalType("boolean", $result);
        $this->assertEquals(true, $result);
    }
}
