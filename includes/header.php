<?php
session_start();
if($_SERVER["REQUEST_METHOD"] == "POST"){
  include("../backend/logout.php");
}

?>
<style>
  .header-nav{
     font-family: Helvetica, Arial, sans-serif;
    color: #000000;
  }
  .login-button{
    color: #ffffff;
  }
  .profile{
    color: #ffffff;
    background-color: #00754A;
  }
  .profile:hover, .profile.show{
    color: #ffffff;
    background-color: #00754A;
  }
</style>
<nav class="navbar navbar-expand-lg bg-white sticky-top">
  <div class="container-fluid">
    <a class="navbar-brand ps-4" href="home.php"><img src="../img/logo.png" alt="company-logo" style="width: 45px;"></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">

  <ul class="navbar-nav gap-3">
    <li class="nav-item">
      <a class="nav-link fw-bold header-nav" href="../pages/home.php">Home</a>
    </li>
    <li class="nav-item">
      <a class="nav-link fw-bold header-nav" href="../pages/aboutUs.php">About Us</a>
    </li>
    <li class="nav-item">
      <a class="nav-link fw-bold header-nav" href="../pages/contactUs.php">Contact Us</a>
    </li>
  </ul>

  <?php if(isset($_SESSION['user'])): ?>

  <div class="dropdown navbar-nav ms-auto">
    <button class="btn dropdown-toggle profile" type="button" data-bs-toggle="dropdown" aria-expanded="false">
      <?php echo $_SESSION['user']; ?>
    </button>
    <ul class="dropdown-menu">
      <li>
        <form method="POST">
          <button class="btn btn-small" type="submit" name="logout">Logout</button>
        </form>
      </li>
    </ul>
  </div>
  <?php endif; ?>

  <?php if(!isset($_SESSION['user'])): ?>
  <div class="navbar-nav ms-auto">
    <a href="../pages/login.php" class="text-decoration-none nav-link login-button border fw-bold rounded bg-success text white">Log in</a>
  </div>
  
  <?php endif; ?>

</div>

    
  </div>
</nav>