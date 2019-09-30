<?php
ini_set('display_errors', 1); //Om foutberichten altijd te tonen (handig op Ma cloud)

require 'autoload.php';

use Lucas\BAP\Product;
use Lucas\BAP\ProductCatalogue;
use Lucas\BAP\ShoppingCart;
use Nike\Marketing\Product as NikeProduct;

$product = new Product('Broodje Gezond');
$nike_product = new NikeProduct('Air Max',159.95);

$cart = new ShoppingCart();
$catalogue = new ProductCatalogue();

echo $product->getName();
echo $nike_product->getName();

// Deze bestanden doen verder niet veel bijzonders. Het is alleen om te oefenen met namespaces en autoloading
