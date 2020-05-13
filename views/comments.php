<?php
session_start();
if (empty($_SESSION['login'])){
  header('Location: /login');
}
?>

<div class="container">
<div class="row">
<div class="col-sm">
</div>
<div class="col-sm-5">    
<h2>Comments</h2>
<?php 
foreach ($data as $comment)
{
  echo '<h5>' . $comment['name'] . '</h5>';
  echo '<p>' . $comment['comment'] . '</p>';
}
?>
</div>
<div class="col-sm">
</div>
</div>
</div>
