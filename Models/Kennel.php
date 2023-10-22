<?php
class Kennel extends Product
{

    public $width;
    public $height;
    public $depth;


    public function __construct($product_name, $product_price, Category $product_cat, $product_img, $width, $height, $depth)
    {
        parent::__construct($product_name, $product_price, $product_cat, $product_img);
        $this->width = $width;
        $this->height = $height;
        $this->depth = $depth;
    }


    public function getDetails()
    {
        return 'Misure: ' . '<br>' . $this->width . 'cm x ' . $this->height . 'cm x ' . $this->depth . ' cm';
    }
}
