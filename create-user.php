<?php
@include "vendor/autoload.php";
use GuzzleHttp\Client;
use GuzzleHttp\Psr7\Request;
define('TOKEN', 'LFXx7g_5lmljTFqoFLD7tufqphsxAbMA');
define('MANTISHUB_URL', 'https://ipt10-2022.mantishub.io/');

$client = new Client();
$headers = [
  'Authorization' => TOKEN,
  'Content-Type' => 'application/json'
];
$body = '{
  "username": "20-0730-992 ",
  "password": "super-secret-p@ssw0rd",
  "real_name": "Jello Mangune",
  "email": "mangune.jello@auf.edu.ph",
  "access_level": {
    "name": "updater"
  },
  "enabled": false,
  "protected": false
}';
$request = new Request('POST', MANTISHUB_URL . 'api/rest/users/', $headers, $body);
$res = $client->sendAsync($request)->wait();
echo $res->getBody();
