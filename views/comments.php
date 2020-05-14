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
        <a class="nav-link" href="/weather">Get Weather</a>
      </li>
    </ul>
  </div>
</nav>

<div class="container">
  <div class="block">    
    <h2 style="color:grey;">Comments</h2>

  <?php 
  foreach ($data as $comment) {
    echo '<h5>' . $comment['name'] . '</h5>';
    echo '<p>' . $comment['comment'] . '</p>';
  }
  ?>

  </div>
</div>
