<?php

use PHPUnit\Framework\TestCase;
use App\Mailer;

class MailerTest extends TestCase
{
    private $mailer;

    protected function setUp(): void
    {
        $this->mailer = new Mailer();
    }

    public function testSendMessageReturnsTrue()
    {
        $this->assertTrue($this->mailer->send('ihor-po@example.com', 'Hello!'));
    }

    public function testInvalidArgumentExceptionIfEmailIsEmpty()
    {
        $this->expectException(InvalidArgumentException::class);

        $this->mailer->send('', '');
    }
}