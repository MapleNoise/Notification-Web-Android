<?php


require_once 'config.inc.php';
//require_once 'config.inc.php';
include_once("../library/OAuthServer.php");


$server = new OAuthServer();
$server->requestToken();
exit();

?>