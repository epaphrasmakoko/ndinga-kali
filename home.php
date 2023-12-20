<?php
session_start();

// Check if the user is logged in
if (!isset($_SESSION['user_name'])) {
  // If not logged in, redirect to the login page
  header("Location: index.php");
  exit();
}
// If the user is logged in, you can use their username from the session
$user_name = $_SESSION['user_name'];

?>
<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="">
  <meta name="generator" content="Hugo 0.84.0">
  <title>home</title>
  <link href="bootstrap-5.3.2-dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="icon" href="images/favicon.ico" type="image/x-icon">
  <link href="css/sidebars.css" rel="stylesheet">
  <link href="css/general.css" rel="stylesheet">
</head>

<body>
  <header>
    <nav style="margin: auto;">
      <h1>Ndinga Kali</h1>
    </nav>
  </header>
  <main style="background-color:bisque">
    <!-- SIDE BAR -->
    <div class="flex-shrink-0 p-3 bg-secondary " style="width: 280px; float:right">
      <a href="#" class="d-flex align-items-center pb-3 mb-3 link-dark text-decoration-none border-bottom">
        <img src="images/ndinga_logo.png" alt="" width="32" height="32" class="rounded-circle me-2">
        <span class="fs-5 fw-semibold">Ndinga Kali</span>
      </a>
      <ul class="list-unstyled ps-0">
        <li class="mb-1">
          <button class="btn btn-toggle align-items-center rounded ">Home
          </button>
        </li>
        <li class="mb-1">
          <button class="btn btn-toggle align-items-center rounded collapsed" data-bs-toggle="collapse" data-bs-target="#dealers-collapse" aria-expanded="false">
            Dealers
          </button>
          <div class="collapse" id="dealers-collapse">
            <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
              <li><a href="#" class="link-dark rounded">Buy</a></li>
              <li><a href="#" class="link-dark rounded">Sell</a></li>
            </ul>
          </div>
        </li>
        <li class="mb-1">
          <button class="btn btn-toggle align-items-center rounded collapsed" data-bs-toggle="collapse" data-bs-target="#Maintenance-collapse" aria-expanded="false">
            Maintenance
          </button>
          <div class="collapse" id="Maintenance-collapse">
            <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
              <li><a href="#" class="link-dark rounded">Services</a></li>
              <li><a href="#" class="link-dark rounded">Autoparts</a></li>
            </ul>
          </div>
        </li>
      </ul>
      <hr>
      <div class="dropdown">
        <a href="#" class="d-flex align-items-center link-dark text-decoration-none dropdown-toggle" id="dropdownUser2" data-bs-toggle="dropdown" aria-expanded="false">
          <img src="images/avatar.png" alt="" width="32" height="32" class="rounded-circle me-2">
          <strong><?php echo $user_name; ?></strong>
        </a>
        <ul class="dropdown-menu text-small shadow" aria-labelledby="dropdownUser2">
          <li><a class="dropdown-item" href="#">Profile</a></li>
          <li><a class="dropdown-item" href="#">Settings</a></li>
          <li>
            <hr class="dropdown-divider">
          </li>
          <li><a class="dropdown-item" href="logout.php">Logout</a></li>
        </ul>
      </div>
    </div>

    <!-- Hello section -->
    <div style="margin:auto;">
      <section class="hello">
        <h1>Welcome to Ndinga Motors</h1>
        <p>Discover the best selection of cars for sale and connect with trusted sellers.</p>
        <hr>
        <button class="btn btn-primary">BUY CAR</button>
        <button class="btn btn-success">SELL CAR</button>
        <hr>
        <div class="row">
          <div class="col-md-6">
            <div class="card">
              <p style="background-color:#1b325c; color:aliceblue; margin:0"> suzuki </p>
              <img src="images/suzuki.jpeg" alt="">
              <div class="card-body" style="background-color: #1b325c; color:aliceblue">
                <h5 class="card-title">2023 suzuki</h5>
                <p class="card-text">Make: suzuki</p>
                <p class="card-text">Body: SUV</p>
              </div>
            </div>
          </div>
          <div class="col-md-6">
            <div class="card">
              <p style="background-color:#1b325c; color:aliceblue; margin:0"> suzuki </p>
              <img src="images/mitsubishi.jpg" alt="">
              <div class="card-body" style="background-color: #1b325c; color:aliceblue">
                <h5 class="card-title">2023 mitsubishi</h5>
                <p class="card-text">Make: mitsubishi</p>
                <p class="card-text">Body: SUV</p>
              </div>
            </div>
          </div>
        </div>
      </section>

      <!-- 
    Quick buttons
    <section class="cta-buttons">
      <a href="#" class="btn btn-secondary">I Want to Sell A Car</a>
      <a href="#" class="btn btn-secondary">I Want To Buy A Car</a>
    </section> -->

    </div>

  </main>

  <!-- Footer -->
  <footer>
    <p>&copy; 2023 Ndinga-Kali. All rights reserved.</p>
    <ul>
      <li><a href="#">Privacy Policy</a></li>
      <li><a href="#">Terms of Service</a></li>
      <li><a href="help.html">Contact Us</a></li>
    </ul>
    <p>Designed by Group 6 CSDFE 2</p>
  </footer>

  <script src="bootstrap-5.3.2-dist/js/bootstrap.bundle.min.js"></script>

  <!-- <script src="sidebars.js"></script> -->
</body>

</html>