<?php
require("include/connection.php");
//delete ppp user
$api->comm("/ppp/secret/remove", array(
		".id" => "Enter user id which do you want to delete",
	));
?>
