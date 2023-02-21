<?php


namespace App\classes;
use App\classes\Product;

class Category
{
    public  $product , $products ;

    public $data = [];

    public function getAllcategory()
    {
        return[
            0=>['id'=>1,
                'name'=>'man Fashion'],
            1=>['id'=>2,
                'name'=>'Women Fashion'],
            2=>['id'=>3,
                'name'=>'kidFashion'],
            3=>['id'=>4,
                'name'=>'Electronics'],
        ];
    }





    public function getCategoryWiseProducts($categoryId)
    {
       $this->product =new Product();
      $this->products = $this->product->getAllproducts();

      foreach ($this->products as $product)
      {
          if ($product['category_id'] == $categoryId)
          {
              array_push($this->data, $product);
          }
      }

      return $this->data;
    }



}