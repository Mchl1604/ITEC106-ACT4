<?php
session_start();
include ("../backend/processLogin.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login Page</title>
  <?php include("../includes/cssBootstrap.php"); ?>
  <style>
    body{
      font-family: Helvetica, Arial, sans-serif;
       background-image: url(../img/bg.jpg);
       background-size: cover;
       background-repeat: no-repeat;
       background-position: center;
       min-height: 100vh;
       margin: 0;
    }

    h1 {
      font-size: 28px;
      font-weight: bold;
      color: #00754A;
    }
    
    .form-control, .form-check-input{
      border: 1px solid #e0e0e0;
    }

    a{
      color: #00754A;
      font-weight: bold;
      text-decoration: none;
    }
    .btn{
      background-color: #00754A;
      color: #FFFFFF;
      border-radius: 30px;
      font-weight: bold;
      transition: .3s;
    }
    .btn:hover{
      background-color: #00754A;
      color: #FFFFFF;
      opacity: .8;
    }
    .form-control:focus{ 
     background-color: #B8FFB8;
    }
    .form-control:focus + label{ 
      color: #00754A;
    }
  </style>
</head>

<body>
  <div class="d-flex justify-content-end my-5 mx-lg-5">
    <div class="card col-lg-4 mt-3 mx-5 py-5 px-4">
      <div class="d-flex justify-content-center mb-3">
      <img src="../img/logo.png" alt="" class="img-fluid" style="max-height: 60px; max-width: 40px;">
      </div>
      <h1 class="text-center">Log in</h1>
      <form method="POST">
      <div class="form-floating mb-3">
        <input type="email" class="form-control" id="floatingInput" name="email" placeholder="name@example.com" required>
        <label for="floatingInput">Email Address</label>
      </div>
      <div class="form-floating mb-3">
        <input type="password" class="form-control" id="floatingPassword" name="password" placeholder="Password" required>
        <label for="floatingPassword">Password</label>
      </div>
       <div class="mb-2 form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Keep me signed in</label>
  </div>
  <p>Does not have an account? <a href="register.php">Sign up</a></p>
  <p class="text-danger"><?php echo $message;?></p>
  <div class="d-flex justify-content-end">
    <button type="submit" name="login" class="btn">Log in</button>
    
  </div>
    </form>
  
    </div>
    
  </div>

  
  <?php include("../includes/jsBootstrap.php"); ?>
</body>

</html>