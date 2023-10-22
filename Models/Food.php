<?php
class Food extends Product
{

    public $weight;

    public function __construct($product_name, $product_price, Category $product_cat, $product_img, $weight)
    {
        parent::__construct($product_name, $product_price, $product_cat, $product_img);
        $this->weight = $weight;
    }


    public function getDetails()
    {
        return 'Quantità: ' . $this->weight . 'g';
    }
}
