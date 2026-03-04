<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
  <!-- Icons library -->
  <script src="https://kit.fontawesome.com/3ee2c2cc76.js" crossorigin="anonymous"></script>
  <title>Profile</title>
  <style>

  </style>
</head>

<body style="background-color: #CFCFCF;">
  <!-- Top navigation bar -->
  <nav class="navbar navbar-expand-md bg-dark" data-bs-theme="dark">
    <div class="container-fluid">
      <a class="navbar-brand" href="dashboard.php"><i class="fa-solid fa-angle-left"></i> Back to dashboard</a>
    </div>
  </nav>

  <!-- Main container -->
  <div class="row mx-5">
    <!-- Left side: profile picture -->
    <div class="col-lg-5">
      <div class="mt-5 border rounded bg-white p-5 mx-5 d-flex flex-column align-items-center justify-content-center">
        <img src="../img/default_profile.png"
          alt="DefaultProfile"
          class="img-fluid rounded-circle"
          style="height: 150px; width:150px; object-fit: cover;">
        <input type="file" class="form-control mt-3" style="max-width: 250px;">
        <button class=" mt-2 btn btn-primary" style="width: 250px;">Change Photo</button>
      </div>
    </div>
    <!-- Right side: form with user info -->
    <div class="col-lg-7">
      <div class=" mt-4 border rounded p-3 container-fluid bg-white">
        <h1 class="border-bottom mb-3">User Profile</h1>
        <form action="">
          <!-- Two column layout for form fields -->
          <div class="row">
            <!-- First column -->
            <div class="col">
              <label for="name" class="form-label">Full Name</label>
          <input type="text" id="name" class="form-control mb-3">
          <label for="email" class="form-label">Email</label>
          
          <input type="email" id="email" class="form-control mb-3">
           <label for="bio" class="form-label">Short Bio</label>
            <textarea class="form-control mb-3" id="bio"></textarea>
            </div>
            <!-- Second column -->
            <div class="col">
              <label for="phoneNum" class="form-label">Phone Number</label>
          <input type="tel" id="phoneNum" class="form-control mb-3">
          <label for="address" class="form-label">Address</label>
          <input type="text" id="address" class="form-control mb-3">
            </div>
          </div>
          
          <!-- Save and cancel buttons -->
            <button type="submit" class="btn btn-success">Save Changes</button>
            <button class="btn btn-secondary">Cancel</button>
        </form>
      </div>
    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
</body>

</html>