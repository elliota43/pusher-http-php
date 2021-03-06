<?php

    class PusherNotificationsUnitTest extends PHPUnit_Framework_TestCase
    {
        protected function setUp()
        {
            $this->pusher = new Pusher\Pusher('thisisaauthkey', 'thisisasecret', 1);
        }

        /**
         * @expectedException \Pusher\PusherException
         */
        public function testInvalidEmptyInterests()
        {
            $this->pusher->notify(array(), array('foo' => 'bar'));
        }
    }
