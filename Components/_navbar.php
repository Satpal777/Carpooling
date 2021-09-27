<?php
$loggedin = false;
if(isset($_SESSION['loggedin']) && $_SESSION['loggedin']==true){
  $loggedin= true;
}

 echo '<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">
      <i class="fas fa-car"></i>
    <a class="navbar-brand" href="#">Carpooling</a>
    <button
      class="navbar-toggler"
      type="button"
      data-bs-toggle="collapse"
      data-bs-target="#navbarSupportedContent"
      aria-controls="navbarSupportedContent"
      aria-expanded="false"
      aria-label="Toggle navigation"
    >
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link" id="home" href="home.php">Home</a>
        </li>';
  if($loggedin != true) { 
      echo '
      <li class="nav-item">
      <a class="nav-link" id="login" href="login.php">Log In</a>
    </li>
    <li class="nav-item">
      <a class="nav-link"  id="signup" href="signup.php">Sign Up</a>
    </li>';
  }
  else {
    echo '
    <li class="nav-item">
              <a class="nav-link" id="logout" href="logout.php">Log Out</a>
            </li>  
    ';
  }

  echo '
  </ul>
  <form class="d-flex align-items-center">
    <input
      class="form-control me-2"
      type="search"
      placeholder="Search"
      aria-label="Search"
    />
    <button class="btn btn-outline-success" type="submit">
      Search
    </button>
  </form>
</div>
</div>
</nav>
  ';

?>


