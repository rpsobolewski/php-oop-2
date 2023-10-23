<?php

class Product
{

    public $product_name;

    public $product_quantity;

    public $product_price;

    public $product_cat;

    public $product_img;

    public function __construct($product_name, $product_quantity, $product_price, Category $product_cat, $product_img)
    {
        $this->product_name = $product_name;
        $this->product_quantity = $product_quantity;
        $this->product_price = $product_price;
        $this->product_img = $product_img;
        $this->product_cat = $product_cat;
        try {
            if ($product_quantity < 0) {
                throw new Exception("Invalid product quantity.");
            } elseif ($product_quantity === 0) {
                throw new Exception("Out of stock");
            }
            $this->product_quantity = $product_quantity;
        } catch (Exception $e) {


            $this->product_quantity = $e->getMessage();
        }
    }
}
