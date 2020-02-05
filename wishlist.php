<?php
require('vendor/autoload.php');

use oldspice\Navigation;
use oldspice\WishList;

$navigation = Navigation::getNavigation();

$wish = new WishList();
$wish_total = $wish -> getWishListTotal();
$wish_items = $wish -> getWishListItems();

//Twig
$loader = new Twig_Loader_Filesystem('templates');
$twig = new Twig_Environment( $loader );
//load the template
$template = $twig -> load( 'wishlist.twig' );
//output the template to page
echo $template -> render([
  'wish_total' => $wish_total,
  'wish_items' => $wish_items,
  'categories' => $categories,
  'navigation' => $navigation,
  'products' => $products,
  'title' => 'Home Page'
]);
?>