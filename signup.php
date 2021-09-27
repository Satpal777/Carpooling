
<?php
$passalert = false; 
  $useralert = false;
  $alert = false;
if($_SERVER["REQUEST_METHOD"] == "POST") {
    include 'Components/_databaseConnect.php';
    $email = $_POST['email'];
    $password = $_POST['password'];
    $confirmPassword = $_POST['confirmPassword'];
    $mobileno = $_POST['mobileno'];
    $id = $_POST['id'];
    $sqlcheck = "SELECT * FROM `car-owner` WHERE email='$email'";
    $user = mysqli_query($conn,$sqlcheck); 
    $count = mysqli_num_rows($user);

    if($password == $confirmPassword && $count==0) {
       $passHash = password_hash($password,PASSWORD_DEFAULT);
       $sql = "INSERT INTO `car-owner` (`Email`, `Password`, `Mobileno`, `PhotoId`, `CreatedAt`) VALUES ('$email', '$passHash', '$mobileno', '$id', current_timestamp())";
       $result = mysqli_query($conn,$sql);
       if($result) {
        $alert = true;
       } 
    }
    else{
      if($password != $confirmPassword) 
        $passalert = true;
      else
       $useralert = true;  
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
    <title>Signup</title>
  </head>
  <body>

  <?php
include 'Components/_navbar.php';
?>
<?php 

if($alert) {
  echo '
  <div class="alert alert-success d-flex align-items-center" role="alert">
  <i  class="me-2 text-success far fa-check-circle"></i>
  <div>
    Signup Successfully
  </div>
 </div>';
}
if($passalert) {
    echo '
    <div class="alert alert-danger d-flex align-items-center" role="alert">
    <i class="me-2 text-danger fas fa-times-circle"></i>
    <div>
    Password and Confirm password does not Matches
    </div>
   </div>';
}
if($useralert) {
  echo '
  <div class="alert alert-info d-flex align-items-center" role="alert">
  <i class="me-2 text-info fas fa-user"></i>
  <div>
  User already Logged in!
  </div>
 </div>';
}
?>  

 <div class="Head">
 <h2 class="my-2 text-uppercase text-center">SignUp</h2>
    <p class="text-capitalize text-center"><i>Be the member of our family</i></p>  
 </div>
 <div class="form container d-flex justify-content-center">
 <div class="p-4 col-10 col-md-5 border border-primary rounded-3">

<!-- // Form Starts  -->
<form action="<?php echo $_SERVER['REQUEST_URI'] ?>" method="POST">
  <div class="mb-2">
    <label for="exampleInputEmail1" class="form-label">Email address</label>
    <input type="email" class="form-control form-control-sm" id="exampleInputEmail1" name="email" required >
  </div>
  <div class="mb-2">
    <label for="exampleInputPassword1" class="form-label">Password</label>
    <input type="password" class="form-control form-control-sm" id="exampleInputPassword1" name="password" required>
  </div>
  <div class="mb-2">
    <label for="exampleInputPassword1" class="form-label">Confirm Password</label>
    <input type="password" class="form-control form-control-sm" id="exampleInputConfirmPassword1" name="confirmPassword" required>
  </div>
  <div class="mb-2">
    <label for="exampleInputMobileNo" class="form-label">Mobile no.</label>
    <input type="number" class="form-control form-control-sm" id="exampleInputMobileNo" name="mobileno" required>
  </div>
  <div class="mb-2">
    <label for="exampleInputId" class="form-label" data-bs-toggle="tooltip" data-bs-placement="Enter Photo Id Verfied by Governmet Of India" title="Enter Photo Id Verfied by Governmet Of India">Photo Id Proof</label>
    <input type="text" class="form-control form-control-sm" id="exampleInputId" name="id" required>
  </div>
  <div class="mb-4 form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Accept all <a href="#">Terms and Conditions</a></label>
  </div>
  <button type="submit" class="btn btn-primary text-uppercase">Sign Up</button>
</form>
 </div>
 </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script
      src="https://kit.fontawesome.com/b4c3dad888.js"
      crossorigin="anonymous"
    ></script>
    <script>


     const home = document.querySelector('#signup');
     signup.classList.add("active");
     signup.setAttribute('aria-current','page');
    </script>
  </body>
</html>