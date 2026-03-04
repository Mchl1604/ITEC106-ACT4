<?php 
include ("database.php");
$message = "";

//check if form is submitted
if(isset($_POST['login'])){
  $email = $_POST['email'];
  $password = $_POST['password'];

  //query to fetch email and password from db
  $fetchEmailQuery = "SELECT fullname, email, password FROM tbl_users WHERE email = '$email'";
  $result = $conn ->query($fetchEmailQuery);

  if($result->num_rows === 1){
      $row = $result->fetch_assoc();
       $hashedPasswordFromDB = $row['password'];
      
      //Verify if the password matches the password in db
      if (password_verify($password, $hashedPasswordFromDB)){
        //Start a session and store the users fullname
        $_SESSION['user'] = $row['fullname'];
        header("Location: ../pages/dashboard.php");
      }
      else{
        $message = "Incorrect Password";
      }
    }

  else{
    $message = "Account does not Exist";
  }
}
?>