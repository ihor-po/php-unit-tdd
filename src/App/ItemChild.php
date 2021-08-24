<?php

use App\Item;

namespace App;

class ItemChild extends Item
{
    public function getId(): int
    {
        return parent::getID();
    }

    public function getToken(): string
    {
        return parent::getToken();
    }
}