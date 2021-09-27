<?php
session_start();
if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] != true) {
  header("location:/login.php");
  exit;
}

?>

<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <link rel="stylesheet" href="/style.css">
  <title>Home</title>
</head>

<body>

  <?php
  include '/Components/_navbar.php';
  ?>
  <!-- <div id="carouselExampleDark" class="carousel carousel-dark slide" data-bs-ride="carousel">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active" data-bs-interval="10000">
      <img src="https://source.unsplash.com/1200x400/?car,carpooling" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>First slide label</h5>
        <p>Some representative placeholder content for the first slide.</p>
      </div>
    </div>
    <div class="carousel-item" data-bs-interval="2000">
      <img src="https://source.unsplash.com/1200x400/?car,caride,happy,journey" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>Second slide label</h5>
        <p>Some representative placeholder content for the second slide.</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="https://source.unsplash.com/1200x400/?ride,taxi" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>Third slide label</h5>
        <p>Some representative placeholder content for the third slide.</p>
      </div>
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div> -->

<div class="conatiner pt-4 d-flex justify-content-evenly">
        <div class="col-md-2 text-center">
          <i class="d-block mx-2  fas fa-car text-success fs-1"></i>
          <button class="d-block btn btn-outline-success mx-auto my-2" type="button">Generate Ride</button>
      </div>
        <div class="col-md-2 text-center">
          <i class="d-block mx-2 text-info fas fa-user fs-1"></i>
          <button class="d-block btn btn-outline-info mx-auto my-2" type="button">Request Ride</button>
        </div>
    </div>

  <div class="container my-4 py-4">
    <header class="pb-3 mb-4 border-bottom">
      <a href="/" class="d-flex align-items-center text-dark text-decoration-none">
        <i class="fas fa-car text-dark fs-1"></i>
        <span class="fs-4">Car Pooling</span>
      </a>
    </header>

    <div class="p-5 mb-4 bg-dark text-light rounded-3">
      <div class="container-fluid py-5">
        <h1 class="display-5 fw-bold">Car Pooling</h1>
        <p class="col-md-10 fs-5">
          Carpooling is when you drive yourself and a few others to the same destination, instead of everybody taking separate cars or modes of transport.
          <br>There is one main environmental benefit of carpooling, and that is that with only one car making the journey, you are greatly reducing your combined carbon emissions.
          <br> With carpooling, you greatly reduce your own carbon footprint, as well as helping your carpool buddies reduce theirs.</p>
      </div>
    </div>

   



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/b4c3dad888.js" crossorigin="anonymous"></script>
    <script>
      const home = document.querySelector('#home');
      home.classList.add("active");
      home.setAttribute('aria-current', 'page');
    </script>
</body>

</html>
