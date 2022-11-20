<?php
require_once 'vendor/autoload.php';
use App\classes\Category;
use  App\classes\Product;

$category = new Category();
$categories = $category->getallCategories();

if(isset($_GET['page']))
{
    if ($_GET['page'] == 'home')
    {
        $product = new Product();
        $products = $product->getAllProduct();
        include 'pages/home.php';
    }
    elseif ($_GET['page'] == 'category-products')
    {
       $categoryId = $_GET['id'];
       $product =new Product();
       $products = $product->getProductByCategory($categoryId);

        include 'pages/categoryProduct.php';
    }
}