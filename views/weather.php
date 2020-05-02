<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <title>GetWeather</title>
  </head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="/logout">Log out <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/feedbackform">Add comment</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/feedback">All comments</a>
      </li>
      
    </ul>
  </div>
</nav>
    
<?php

require 'vendor/autoload.php';
 
use GuzzleHttp\Client;
 

$client = new Client([
        'headers' => ['User-Agent' => 'MyReader']
     ]);
$response = $client->request('GET', 'http://www.gismeteo.ua/city/daily/5093/');
echo $response->getBody();


?>
    

        

</body>
</html>