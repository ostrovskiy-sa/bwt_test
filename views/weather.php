<?php

use GuzzleHttp\Client;

session_start();
if (empty($_SESSION['login'])){
  header('Location: /login');
}    
$client = new Client(['headers' => ['User-Agent' => 'MyReader']]);
$response = $client->request('GET', 'http://www.gismeteo.ua/city/daily/5093/');
echo $response->getBody();

