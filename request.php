<?php

require_once( './api/Api.php' );

$user      = isset($_GET[rogkon]) ? $_GET[rogkon] : NULL;
$client_id = <2f2eifIr3YilXp4oDqFXiUpK22d0DE31>;

$api = new Behance_Api( $client_id );

$a = json_decode($api->getUserProfile( $user ), true);
$b = json_decode($api->getUserProjects( $user ), true);
$merged = array();

$merged = array_merge($a, $b);

$json = json_encode($merged);

echo $json;
