<?php
class Category
{
    public $category;

    public function __construct($category)
    {
        $this->category = $category;
    }

    public function getIconCat()
    {
        if ($this->category === 'Cani' or $this->category === 'cani') {
            return 'Cani';
        } else {
            return 'Gatti';
        }
    }
}
