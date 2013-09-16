<?php
namespace PHPSocketIO\Event;
use PHPSocketIO\Request\Request;
use PHPSocketIO\ConnectionInterface;

class MockConnection implements ConnectionInterface
{
    public function clearTimeout()
    {

    }

    public function getRemote()
    {

    }

    public function getRequest()
    {

    }

    public function setRequest(Request $request)
    {

    }

    public function write(\PHPSocketIO\Response\ResponseInterface $response, $shutdownAfterSend = false)
    {

    }
}

/**
 * Test class for Request.
 * Generated by PHPUnit on 2013-05-30 at 13:37:50.
 */
class MessageEventTest extends \PHPUnit_Framework_TestCase
{

    public function test_setMessage()
    {
        $messageEvent = new MessageEvent();
        $this->assertTrue($messageEvent->setMessage("some message"));
    }

    public function test_setConnection()
    {
        $messageEvent = new MessageEvent();
        $this->assertTrue($messageEvent->setConnection(new MockConnection()));
    }

    public function test_getMessage()
    {
        $messageEvent = new MessageEvent();
        $messageEvent->setMessage("some message");
        $this->assertEquals("some message", $messageEvent->getMessage());
    }

    public function test_getConnection()
    {
        $connection = new MockConnection();
        $messageEvent = new MessageEvent();
        $messageEvent->setConnection($connection);
        $this->assertEquals($connection, $messageEvent->getConnection());
    }

}