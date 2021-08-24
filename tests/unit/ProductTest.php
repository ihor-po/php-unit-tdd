<?php

use PHPUnit\Framework\TestCase;
use App\Product;

class ProductTest extends TestCase
{
    private $product;

    protected function setUp():void
    {
        $this->product = new Product();
    }

    public function testIDIsAnInteger()
    {
        $reflection = new ReflectionClass(Product::class);
        
        $property = $reflection->getProperty('productId');
        $property->setAccessible(true);

        $productId = $property->getValue($this->product);

        $this->assertIsInt($productId);
    }
}