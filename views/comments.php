<?php
session_start();
if (empty($_SESSION['login'])){
  header('Location: /login');
}
?>
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
        <a class="nav-link" href="/logout">Log out </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/feedbackform">Add comment</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/weather">Get weather</a>
      </li>
      
    </ul>
  </div>
</nav>

<div class="container">
<div class="row">
    <div class="col-sm">
    </div>
    <div class="col-sm-5">    
    <h2>Comments</h2>
    <?php foreach ($commentsList as $comment):?>
        <p><?php echo $comment['name'] ?></p>
        <p><?php echo $comment['comment'] ?></p>

    <?php endforeach ?>
    </div>
    <div class="col-sm">
    </div>
</div>
</div>

</body>
</html>