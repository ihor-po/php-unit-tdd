<?php

use PHPUnit\Framework\TestCase;
use App\User;
use App\Mailer;

class UserTest extends TestCase
{
    public function testNotifyReturnsTrue()
    {
        $user = new User('ihor-po@example.com');

        $mailer = $this->createMock(Mailer::class);
        $mailer->expects($this->once())
            ->method('send')
            ->willReturn(true);

        $user->setMailer($mailer);

        $this->assertTrue($user->notify('Hello!'));
    }
}