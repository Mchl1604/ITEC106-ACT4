<?php 
include("database.php");
  $message = "";

  //Check if a form is submitted
if(isset($_POST['register'])){
  $fullName = $_POST['fullName'];
  $email = $_POST['email'];
  $password = $_POST['password'];
  $confirmPassword = $_POST['confirmPassword'];


  //check if the email already exist in the db
  $checkEmailQuery = "SELECT id FROM tbl_users WHERE email = '$email' OR fullname = '$fullName' LIMIT 1";
  if($conn ->query($checkEmailQuery) ->num_rows > 0){
    $message = "User Already Exist";

  }
  else{
    if($password === $confirmPassword){
      //hashed the password before storing in db
      $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

      $query = "INSERT INTO tbl_users(fullname, email, password) VALUES ('$fullName', '$email', '$hashedPassword')";

      if($conn ->query($query)){
        $message = "Registration successful. You can now log in.";
      }
      else{
        $message =  "Error: " . $conn->error;
      }

    }
    else{
      $message = "Password does not match";

    }
  }

  
}

?>