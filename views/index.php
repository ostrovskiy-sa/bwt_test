<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body>
<?php
require ROOT.'/models/User.php';
User::addUser();

?>

    <h2 align="center">Form registration</h2>
    <div class="container">
    <div class="row">
        <div class="col-sm">
        </div>
        <div class="col-sm-5">
        <form name="form" method="POST">
        <div class="form-group">
            <input type="text" name="name" class="form-control" placeholder="Name" required>
        </div>
        <div class="form-group">
            <input type="text" name="surname" class="form-control" placeholder="Surname" required>
        </div>
        <div class="form-group">
            <input type="text" name="email" class="form-control" placeholder="Email" required>
        </div>
        <div class="form-group">
            <input type="text" name="gender" class="form-control" placeholder="Gender">
        </div>
        <div class="form-group">
            <input type="text" name="birthday" class="form-control" placeholder="Day of birthday">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
        </form>
        </div>
        <div class="col-sm">
        </div>
    </div>
    </div>

  </body>
</html>