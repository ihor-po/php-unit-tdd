<?php

namespace App;

class Product
{
    /**
     * Unique identifier
     *
     * @var integer
     */
    protected $productId;

    /**
     * Constructor
     * 
     * @return void
     */
    public function __construct()
    {
        $this->productId = rand();
    }
}