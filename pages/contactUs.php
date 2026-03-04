<?php 
include('../backend/processContactUs.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Contact Us</title>
  <?php include("../includes/cssBootstrap.php"); ?>

</head>

<body style="font-family: Helvetica, Arial, sans-serif; background-color: #f5f0ea;">
  <?php include("../includes/header.php") ?>
  <hr class="p-0 m-0">

  <div class="container my-5">
    <div class="row justify-content-center mb-4">
      <div class="col-12 text-center">
        <h1 class="mb-2">We'd Love To Hear From You!</h1>
        <p class="text-muted">Get in touch with us or visit our location</p>
      </div>
    </div>

    <div class="row g-4">
      <div class="col-lg-6">
        <div class="card h-100 shadow-sm">
          <div class="card-body p-4">
            <h5 class="card-title mb-4" style="color: #00754A;">Send Us a Message</h5>
            <form method="POST">
              <div class="form-floating mb-3">
                <input type="text" class="form-control" name="name" placeholder="Name A. Example" required>
                <label for="name">Name</label>
              </div>
              <div class="form-floating mb-3">
                <input type="email" class="form-control" name="email" placeholder="name@example.com" required>
                <label for="email">Email address</label>
              </div>
              <div class="form-floating mb-4">
                <textarea class="form-control" placeholder="Leave a comment here" name="message" style="height: 120px" required></textarea>
                <label for="message">Message</label>
              </div>
              <div class="d-grid">
                <p>
                  <?php
                  if(isset($_POST['sendMessage'])){
                    echo $message;
                  }
                ?></p>
                <button class="btn btn-lg" type="submit" name="sendMessage" style="color: #ffffff; background-color: #00754A">Send Message</button>
              </div>
            </form>
          </div>
        </div>
      </div>

      <div class="col-lg-6">
        <div class="card h-100 shadow-sm">
          <div class="card-body p-4">
            <h5 class="card-title mb-4" style="color: #00754A;">Visit Us</h5>
            <div class="ratio ratio-16x9">
              <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3865.969143146262!2d121.04587347483941!3d14.313225184048326!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3397d7a73887d65d%3A0x6ea18203ab425789!2sStarbucks%20Verdant%20Strip%20Drive-Thru!5e0!3m2!1sen!2sph!4v1770950382234!5m2!1sen!2sph" style="border:0; border-radius: 0.375rem;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <?php
  include("../includes/footer.php");
  include("../includes/jsBootstrap.php");
  ?>
</body>

</html>