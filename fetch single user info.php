<?php
require("include/connection.php");
//fetch single ppp user data
$id = "Enter user id which do you want to show";
	$singleuser = $api->comm("/ppp/secret/print", array(
    "?.id" => "$id",
  	));
  	print_r($singleuser);
?>
