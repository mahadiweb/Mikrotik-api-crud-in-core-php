<?php
require("connection.php");
//create ppp user
$api->comm("/ppp/secret/add", array(
      "name"     => "test",
      "password" => "test",
      "service"  => "pppoe",
      "profile"  => "default",
      "comment"  => "testing",
   	));

?>
