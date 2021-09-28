<?php
require("include/connection.php");
//read ppp user
$read = $api->comm('/ppp/secret/print');
print_r($read);
?>
