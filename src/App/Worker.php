<?php

namespace App;

class Worker extends AbstractPerson
{
    protected function getTitle(): string
    {
        return 'Mr.';
    }
}