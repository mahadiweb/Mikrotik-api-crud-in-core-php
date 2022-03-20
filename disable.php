<?php
require("include/connection.php");
//disable ppp user
$api->comm("/ppp/secret/set", array(
		".id" => "Enter user id which do you want to delete",
"disabled" => "yes",
	));
?>
