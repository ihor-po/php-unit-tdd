<?php

namespace App;

use InvalidArgumentException;

/**
 * Mailer
 * 
 * An example mailer class
 */
class Mailer
{
    /**
     * Send message
     *
     * @param string $email Recipient email address
     * @param string $message Content of the message
     * 
     * @throw IvalidArgumentException If $email is empty
     * 
     * @return bool
     */
    public static function send(string $email, string $message): bool
    {
        if (empty($email)) {
            throw new InvalidArgumentException();
        }

        echo "Send '$message' to '$email'";

        return true;
    }
}