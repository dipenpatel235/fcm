<?php

namespace Kerox\Fcm\Test\TestCase\Model\Message\Notification;

use Kerox\Fcm\Model\Message\Notification\ApnsNotification;
use Kerox\Fcm\Test\TestCase\AbstractTestCase;

class ApnsNotificationTest extends AbstractTestCase
{
    public function testApnsNotificationWithInvalidAlert()
    {
        $this->expectException(\InvalidArgumentException::class);
        $this->expectExceptionMessage('alert must be a string or an instance of Kerox\Fcm\Model\Message\Notification\ApnsNotification\Alert.');

        $apnsNotification = new ApnsNotification();
        $apnsNotification->setAlert(true);
    }
}
