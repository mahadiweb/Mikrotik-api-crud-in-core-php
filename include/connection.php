<?php
require('routeros_api.class.php');

$api = new RouterosAPI();
$conn = $api->connect('192.168.1.1','your mikrotik usename','your mikrotik password');


?>
