<?php

use PHPUnit\Framework\TestCase;
use App\Item;

class ItemTest extends TestCase
{
    private $item;

    protected function setUp(): void
    {
        $this->item = new Item();
    }

    public function testDescriptionIsNotEmpty()
    {
        $this->assertNotEmpty($this->item->getDescription());
    }

    public function testIDisAnInteger()
    {
        $itemChild = new App\ItemChild();

        $this->assertIsInt($itemChild->getID());
    }

    public function testTokenIsString()
    {
        $itemChild = new App\ItemChild();

        $this->assertIsString($itemChild->getToken());
    }
}