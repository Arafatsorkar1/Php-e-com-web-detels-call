<?php

require_once 'vendor/autoload.php';
use App\classes\category;
use App\classes\Product;


$category= new \App\classes\Category();
$categories = $category->getAllcategory();

if ($_GET['page'] == 'home')
{
  $product= new \App\classes\Product();
  $products = $product->getAllproducts();

    include 'pages/Home.php';
}
elseif ($_GET['page'] == 'about')
{
    include 'pages/about.php';
}
elseif ($_GET['page'] == 'product-details')
{
    $product =new Product();
    $productDetails= $product->getAllproductDetails($_GET['product-id']);


    include 'pages/product-details.php';
}


elseif ($_GET['page'] == 'category')
{

     $category = new category();
     $products = $category->getCategoryWiseProducts($_GET['id']);

    include 'pages/categoryPage.php';
}



