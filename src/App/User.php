<?php

namespace App;

/**
 * User
 * 
 * An example user class
 */
class User
{
    /** @var string $email Email address */
    public $email;

    /**
     * Mailer instance
     *
     * @var Mailer
     */
    protected $mailer;

    /**
     * Constructor
     *
     * @param string $email The user's email
     * 
     * @return void
     */
    public function __construct(string $email)
    {
        $this->email = $email;
    }

    /**
     * Set mailer instance
     *
     * @param Mailer $mailer
     * @return void
     */
    public function setMailer(Mailer $mailer): void
    {
        $this->mailer = $mailer;
    }

    /**
     * Send the user a message
     *
     * @param string $message The message
     *
     * @return bool
     */
    public function notify(string $message): bool
    {
        return $this->mailer->send($this->email, $message);
    }
}