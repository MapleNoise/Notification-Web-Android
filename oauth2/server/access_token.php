<?php

require_once 'config.inc.php';

$server = new OAuthServer();
$server->accessToken();
exit();

?>