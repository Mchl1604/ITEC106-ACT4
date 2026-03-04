
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Home</title>
  <?php include("../includes/cssBootstrap.php"); ?>

</head>

<body style="font-family: Helvetica, Arial, sans-serif;">
  <?php include("../includes/header.php"); ?>

  <div id="carouselExample" class="carousel slide mb-3" data-bs-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="../img/maincarousel.jpg" class="d-block w-100" alt="carousel main image starbucks">
    </div>
    <div class="carousel-item">
      <img src="../img/carousel1.jpg" class="d-block w-100" alt="matcha chocolate delight image">
    </div>
    <div class="carousel-item">
      <img src="../img/carousel2.jpg" class="d-block w-100" alt="classic mocha frappe image">
    </div>
    <div class="carousel-item">
      <img src="../img/carousel3.jpg" class="d-block w-100" alt="strawberry cream  dream image">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
  
  <div class="container-fluid p-0">



    <div class="row mb-4 g-0">
      <div class="col-lg-6">
        <img src="../img/1.webp" alt="valentines day promo pic" class="img-fluid w-100">
      </div>
      <div class="col-lg-6 d-flex flex-column justify-content-center align-items-center text-center p-5" style="min-height: 300px; background-color: #f5f0ea;">
        <h4 class="fw-bold mb-4" style="color:#006242; ">New ways to celebrate Valentine’s</h4>
        <p class="fs-5" style="color:#006242;">
          Treat yourself or your loved ones to our new White Chocolate Strawberry Cream Cold Brew
          or Strawberry Shortcake Frappuccino® blended beverage.
        </p>
      </div>
    </div>


    <div class="row mb-4 g-0">
      <div class="col-lg-6 d-flex flex-column justify-content-center align-items-center text-center p-5" style="min-height: 300px; background-color: #006241;">
        <h4 class="fw-bold mb-4" style="color:#ffffff; ">A new era of bakery</h4>
        <p class="fs-5 " style="color:#ffffff;">
          Six new crave-worthy treats have arrived, blending global inspiration and nostalgic flavors. Find them in our refreshed bakery case.
        </p>
      </div>
      <div class="col-lg-6">
        <img src="../img/2.webp" alt="baked pastry products" class="img-fluid ">
      </div>
    </div>


    <div class="row mb-4 g-0">
      <div class="col-lg-6">
        <img src="../img/3.webp" alt="1971 roast coffee" class="img-fluid w-100">
      </div>
      <div class="col-lg-6 d-flex flex-column justify-content-center align-items-center text-center p-5" style="min-height: 300px; background-color: #006241;">
        <h4 class="fw-bold mb-4" style="color:#ffffff; ">Meet Starbucks 1971 Roast™</h4>
        <p class="fs-5" style="color:#ffffff;">
          Five decades of expertise shines through in our new dark roast with notes of toasted sugar and rich walnut—made for those who love a bold cup. Available freshly brewed.
        </p>
      </div>
    </div>


     <div class="row mb-4 g-0">
      <div class="col-lg-6 d-flex flex-column justify-content-center align-items-center text-center p-5" style="min-height: 300px; background-color: #D1D1AA;">
        <h4 class="fw-bold mb-4" style="color:#32462f; ">Bold new matcha menu</h4>
        <p class="fs-5 " style="color:#32462f;">
          Meet the Matcha Edit: delicious matcha made from shade-grown green tea leaves, layered with flavors of banana bread, double berry and Dubai chocolate.
        </p>
      </div>
      <div class="col-lg-6">
        <img src="../img/4.webp" alt="new matcha menu" class="img-fluid ">
      </div>
    </div>


    <div class="row mb-4 g-0">
      <div class="col-lg-6">
        <img src="../img/5.jpg" alt="Starbucks Reward" class="img-fluid w-100">
      </div>
      <div class="col-lg-6 d-flex flex-column justify-content-center align-items-center text-center p-5" style="min-height: 300px; background-color: #F5F1EB;">
        <h4 class="fw-bold mb-4" style="color:#006242; ">Starbucks® Rewards is leveling up in March</h4>
        <p class="fs-5" style="color:#006242;">
          On March 10, the Starbucks Rewards program is getting an exciting update including new perks, new status levels and so much more.
        </p>
      </div>
    </div>
  </div>

  

  <?php 
  include("../includes/footer.php"); 
  include("../includes/jsBootstrap.php"); 
  ?>
</body>

</html>