<?php
require('vendor/autoload.php');

use oldspice\ProductDetail;
use oldspice\Navigation;
use oldspice\WishList;

$navigation = Navigation::getNavigation();

if( $_SERVER['REQUEST_METHOD'] == "GET" && isset($_GET['product_id']) ) {
  $product_id = $_GET['product_id'];
  $pd = new ProductDetail();
  $detail = $pd -> getDetail( $product_id );
}
else{
  $detail = '';
}

if( $_SERVER['REQUEST_METHOD'] == 'GET' && isset($_GET['action']) ) {
  // get product_id from request
  $product_id = $_GET['product_id'];
  // if action is 'wish'
  if ( $_GET['action'] == 'wish' ) {
    $wish = new WishList();
    $add_wish = $wish -> addItem($product_id);
  }
  elseif ( $_GET['action'] == 'cart' ) {
    echo "cart";
  }
}


//Twig
$loader = new Twig_Loader_Filesystem('templates');
$twig = new Twig_Environment( $loader );
//load the template
$template = $twig -> load( 'detail.twig' );
//output the template to page
echo $template -> render([
  'navigation' => $navigation,
  'detail' => $detail,
  'title' => 'Detail for ' . $detail['product']['name']
]);
?>