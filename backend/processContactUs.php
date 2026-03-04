<?php
// Process contact form submissions
include ("database.php");
$message = "";

// Check if form was submitted
if($_SERVER["REQUEST_METHOD"] == "POST"){
  if(isset($_POST['sendMessage'])){
    // Get form data
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    // Validate all fields are filled
    if(isset($name) && isset($email) && isset($message)){
      // Insert message into database
      $insertMessageQuery = "INSERT INTO tbl_messages (name, email, message) VALUES ('$name', '$email', '$message')";
      if($conn ->query($insertMessageQuery)){
        $message = "Message sent successfully! Thank you for the feedback";
      }
      else{
        $message = "Database Error Try again";
      }
    }
    else{
      $message = "Please fill all the required fields";
    }
  }
}


?>