<?php
require('vendor/autoload.php');

use oldspice\Query;

$str = 'SELECT product_id FROM product WHERE active=1';

$q = new Query($str);
$result = $q -> execute();

print_r($result);

?>