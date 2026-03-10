<?php 
include("database.php");
$message = "";


  $fullName = $_POST['fullName'];
  $email = $_POST['email'];
  $role = $_POST['role'];

  $message = "FullName: " . $fullName . " email: " . $email . " role: " . $role;

  $checkIfAccExistQuery = "SELECT fullname, email FROM tbl_users WHERE fullname = '$fullName' OR email = '$email' LIMIT 1";
  $result = $conn -> query($checkIfAccExistQuery);

  if($result->num_rows>0){
    $message = "Account already Exist";
  }
  else{
    $addUserQuery = "INSERT INTO tbl_users (fullname, email, role) VALUES ('$fullName', '$email', '$role')";

    if($conn -> query($addUserQuery)){
      $message = "User successfully added";
    }
    else{
      $message = "Database Error: " . $conn->error;
    }
  }


?>