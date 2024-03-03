<?php
if(isset($_GET['q'])){
$searchQuery = $_GET['q'];
$searchQuery = strtolower($searchQuery);

$error= '';

// Define an array of car brands and their corresponding pages
$carBrands = array(
  'audi' => 'audi.php',
  'chevrolet' => 'chevrolet.php',
  'mercedes' => 'mercedes.php',
  'fiat' => 'fiat.php',
  'jeep' => 'jeep.php',
  'nissan' => 'nissan.php',
);

// Check if the search query matches a car brand
if (array_key_exists($searchQuery, $carBrands)) {
  // If it does, redirect the user to the corresponding page
  header('Location: ' . $carBrands[$searchQuery]);
  exit;
} else {
  // If it doesn't, display an error message
  $error = 'invalid search';
}
}
?>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Compiled and minified CSS -->
    <link href="style/materialize/css/materialize.min.css" rel="stylesheet">
    <link href="style/materialize/css/materialize.css" rel="stylesheet">

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <!-- <link rel="stylesheet" href="style/cars.css">
    <link rel="stylesheet" href="style/style.css">
    <link rel="stylesheet" href="style/signin.css"> -->
    <link rel="stylesheet" href="style/welcome-page.css" type="text/css">
    <link href="style/welcome.css" rel="stylesheet" type="text/css">
    <style>
.responsive-iframe {
  display: block;
  width: 100%;
  height: auto;
}

    </style>
    <title>cars</title>
</head>
<body style="background-color:#665f5f;">
<!-- navbar -->
<div class="headerr">
        <video autoplay loop class="back-video" muted plays-inline>
            <source src="img/car-vid.mp4" type="video/mp4">
        </video>
    <!-- your navigation bar and other content -->
    <nav class="nav-wrapper transparent z-depth-0">
      <div class="container">
        <a href="index.php" class="brand-logo  ">CAR MODELING</a>
        <a href="#" class="sidenav-trigger" data-target="mobile-menu">
          <i class="material-icons">menu</i>
        </a>
        <ul class="right hide-on-med-and-down white-text">
          <li>
            <a class="dropdown-trigger" href="#" data-target="dropdown1">Services</a>
            <ul id="dropdown1" class="dropdown-content">
              <li><a href="dependent_select.php">test-drive</a></li>
            </ul>
          </li>
          <li>
            <a href="#Contacts">Contacts</a>
          </li>
          <li><a href="login.php" style="">Join us</a></li>
          <li><a href="profile.php" style=""><i class="material-icons">person</i></a></li>
        </ul>
        <ul class="sidenav grey lighten-2 collapsible" id="mobile-menu">

          <li>
            <div class="collapsible-header black-text">Services</div>
            <div class="collapsible-body">
              <ul>
                <li><a href="dependent_select.php">test-drive</a></li>
              </ul>
            </div>
          </li>
          <li>
            <div class="collapsible-header black-text">Contacts</div>
            <div class="collapsible-body">
              <ul>
              </ul>
              
            </div>
            <li><a href="login.php" class="collapsible-header">Join us</a></li>
          <li><a href="profile.php" class="collapsible-header"><i class="material-icons">person</i></a></li>
          </li>
        </ul>
      </div>
    </nav>
        <div>
            <form action="index.php" class="conta search-bar" method="GET">
                <input type="text" placeholder="search for your desired car brand" class="white-text " name="q" id="search-input">
                <button type="submit" class="transparent" style="border-radius: 50%;padding: 0.5rem;" name="qq" value="search"><i class="material-icons ">search</i></button>
                <!-- <div class="red-text"></div> -->
              </form>
        </div>
        <div class="content">
            <h1></h1>
            <a href="brand-pages.php">EXPLORE CAR BRANDS</a>
        </div>

</div>
