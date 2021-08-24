<?php

namespace App;

/**
 * Item
 * 
 * An example item class
 */
class Item
{
    /**
     * Get the description
     *
     * @return string A random integer
     */
    public function getDescription(): string
    {
        return $this->getID() . $this->getToken();
    }

    /**
     * Get a random ID
     *
     * @return integer The ID
     */
    protected function getID(): int
    {
        return rand();
    }

    /**
     * Get a random token
     *
     * @return string The token
     */
    private function getToken(): string
    {
        return uniqid();
    }

    /**
     * Get a random token with a specified prefix
     *
     * @param string $prefix token prefix
     *
     * @return string The token
     */
    private function getPrefixedToken(string $prefix): string
    {
        return uniqid($prefix);
    }
}