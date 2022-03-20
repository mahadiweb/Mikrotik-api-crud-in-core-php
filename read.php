<?php
require("include/connection.php");
//read ppp user
$read = $api->comm('/ppp/secret/print');  //also use 'getall' in print 
print_r($read);
?>
