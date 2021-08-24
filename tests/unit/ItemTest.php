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

    public function testTokenIsString()
    {
        $reflaction = new ReflectionClass(Item::class);
        $method = $reflaction->getMethod('getToken');
        $method->setAccessible(true);

        $result = $method->invoke($this->item);

        $this->assertIsString($result);
    }

    public function testPrefixedTokenStartsWithPrefix()
    {
        $reflaction = new ReflectionClass(Item::class);
        $method = $reflaction->getMethod('getPrefixedToken');
        $method->setAccessible(true);

        $result = $method->invokeArgs($this->item, ['example']);

        $this->assertStringStartsWith('example', $result);
    }
}