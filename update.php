<?php
require("include/connection.php");
//update ppp user
$api->comm("/ppp/secret/set", array(
      ".id"     => "Enter user id which do you want to update",
      "name"     => "test",
      "password" => "test",
      "service"  => "pppoe",
      "profile"  => "default",
      "comment"  => "testing",
   	));
?>
