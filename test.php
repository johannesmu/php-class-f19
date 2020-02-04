<?php
require('vendor/autoload.php');

use oldspice\Query;

$str = 'SELECT HEX(account_id) FROM account WHERE active=1 AND email=?';

$q = new Query($str);
$result = $q -> execute( array('test@test.com') );

print_r($result);

?>