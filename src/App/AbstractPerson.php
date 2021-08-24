<?php

namespace App;

abstract class AbstractPerson
{
    /**
     * Last name
     *
     * @var string
     */
    protected $lastName;

    /**
     * Constructor
     *
     * @param string $lastName The person's last name
     * 
     * @return void
     */
    public function __construct(string $lastName)
    {
        $this->lastName = $lastName;
    }

    /**
     * Get person title
     *
     * @return string
     */
    abstract protected function getTitle(): string;

    /**
     * Get the person name
     *
     * @return string
     */
    public function getNameAndTitle(): string
    {
        return $this->getTitle() . ' ' . $this->lastName;
    }
} 