<?php
$alert = false;
$login = false;
if($_SERVER["REQUEST_METHOD"] == "POST") {
  include 'Components/_databaseConnect.php';
  $email = $_POST['email'];
  $password = $_POST['password'];
  $sqlcheck = "SELECT * FROM `car-owner` WHERE email='$email'";
  $user = mysqli_query($conn,$sqlcheck); 
  $count = mysqli_num_rows($user);

  if($count==1) {
    
    while($row=mysqli_fetch_assoc($user)){
      if (password_verify($password, $row['Password'])){ 
        $login = true;
        session_start();
        $_SESSION['loggedin'] = true;
        $_SESSION['email'] = $email;
        header("location: /index.php");
      }
    }

  }
  else{
    $alert = true; 
  }
  
}

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
    
<?php 
if($alert) {
  echo '
  <div class="alert alert-danger d-flex align-items-center" role="alert">
    <i class="me-2 text-danger fas fa-times-circle"></i>
  <div>
    Invalid Credentials!
  </div>
 </div>';
}
?>

<div class="Head">
 <h2 class="my-2 text-uppercase text-center">Login</h2>
    <p class="text-capitalize text-center"><i>Every user is important for us!</i></p>  
 </div>
 <div class="form container d-flex justify-content-center ">
 <div class="p-4 col-10 col-md-4 border border-primary rounded-3">

<!-- // Form Starts  -->
<form action=" <?php echo $_SERVER['REQUEST_URI'] ?>" method="POST">
  <div class="mb-2">
    <label for="exampleInputEmail1" class="form-label">Email address</label>
    <input type="email" class="form-control form-control-sm" id="exampleInputEmail1" name="email">
  </div>
  <div class="mb-2">
    <label for="exampleInputPassword1" class="form-label">Password</label>
    <input type="password" class="form-control form-control-sm" id="exampleInputPassword1" name="password">
  </div>
  <button type="submit" class="mt-2 btn btn-primary text-uppercase">Login</button>
</form>
 </div>
 </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script
      src="https://kit.fontawesome.com/b4c3dad888.js"
      crossorigin="anonymous"
    ></script>
    <script>
     const home = document.querySelector('#login');
     login.classList.add("active");
     login.setAttribute('aria-current','page');
    </script>
  </body>
</html>
