<?php
include 'Components/_databaseConnect.php';


?>

<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <link rel="stylesheet" href="style.css">
  <title>Home</title>
</head>

<body>

  <?php
  include 'Components/_navbar.php';
  ?>

  <form class="container" action="">

    <h2 class="m-3">Pet Name</h2>
    <div class="form-floating m-3">
      <input type="text" class="form-control" id="floatingInput" placeholder="name send to passenger" name="Username">
      <label for="floatingInput">Enter your name</label>
    </div>
    <h2 class="mx-3">Pickup Point</h2>
    <div class="m-3">
      <select name="state" class="form-control" id="state" required></select>
    </div>


    <div class="m-3" required>
      <select name="city" class="form-control" style="display:none" id="city"></select>
    </div>

    <div class="form-floating m-3" required>
      <input type="text" class="form-control" id="floatingInput" placeholder="Address - Pickup Point" name="Address">
      <label for="floatingInput">Address</label>
    </div>
    <h2 class="mx-3">Destination Point</h2>
    <div class="m-3">
      <select name="state" class="form-control" id="dststate" required></select>
    </div>


    <div class="m-3" required>
      <select name="city" class="form-control" style="display:none" id="dstcity"></select>
    </div>

    <div class="form-floating m-3" required>
      <input type="text" class="form-control" id="floatingInput" placeholder="Address - Pickup Point" name="Address">
      <label for="floatingInput">Address</label>
    </div>
    <h2 class="m-3">Estimate Time</h2>
    <div class="d-flex align-item-center justify-content-evenly">
      <div>
        <div class="my-3">
          <label>Arrival Date </label>
          <input type="date" name="arrtime" id="arrtime">
        </div>
        <div class="my-3">
          <label>Departure Date </label>
          <input type="date" name="dsttime" id="dsttime">
        </div>
      </div>
      <div>
        <div class="my-3">
          <label>Arrival Time </label>
          <input type="time" name="arrtime" id="arrtime">
        </div>
        <div class="my-3">
          <label>Departure Time </label>
          <input type="time" name="dsttime" id="dsttime">
        </div>
      </div>
    </div>


    <button type="button" class="btn btn-outline-info m-3 ">Submit</button>
  </form>


  <script src="getdata.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  <script src="https://kit.fontawesome.com/b4c3dad888.js" crossorigin="anonymous"></script>
</body>

</html>