<?php
require('vendor/autoload.php');

use oldspice\Query;
use oldspice\WishList;
use oldspice\Session;

Session::init();
print_r($_SESSION);

$w = new WishList();
$add = $w -> addItem(3);


?>