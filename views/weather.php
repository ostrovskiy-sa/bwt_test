<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="/logout">Log out </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/addcomment">Add comment</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/comments">All comments</a>
      </li>
    </ul>
  </div>
</nav>

<?php

use GuzzleHttp\Client;

$client = new Client(['headers' => ['User-Agent' => $_SERVER['HTTP_USER_AGENT']]]);
$response = $client->request('GET', 'http://www.gismeteo.ua/city/daily/5093/');
echo $response->getBody();

?>
