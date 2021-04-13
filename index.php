<?php
session_start();

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css" />
  <link rel="stylesheet" href="css/style.css" />
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


  <title>MVP</title>
</head>

<body>


  <header class="banner" style="background-image: url('img/a.jpg');  background-size: cover; background-position: center; height:60vh;">
    <div class="overlay" style="height: 60vh;"></div>

    <?php include 'includes/nav-white.php'; ?>

    <h2 class="text-center">Wellcome to MVP</h2>
    <div class="banner-inner">
      <div id="p1"></div>
      <div id="p2"></div>
      <div id="p3"></div>

      <script>
        function calcTime(city, offset) {
          d = new Date();

          utc = d.getTime() + d.getTimezoneOffset() * 60000;

          nd = new Date(utc + 3600000 * offset);

          return city + " is " + nd.toLocaleString();
        }

        document.getElementById("p1").innerHTML = calcTime("Mumbai", "+5.5");
        document.getElementById("p2").innerHTML = calcTime("Singapore", "+8");
        document.getElementById("p3").innerHTML = calcTime("London", "+0");
      </script>
    </div>
  </header>


  <div class="container text-center">
    <div class="row">
      <h3>WEEKLY HIGHLIGHTS</h3>
      <div class="col-sm-2" style="background-image: url('img/b.jpg'); background-size: cover; background-position: center;">
      <a href="empty.php" class="overlay">
      <h5 class="text-center">First Highlight Sample</h5>
      </a>
      </div>
      <div class="col-sm-2" style="background-image: url('img/c.jpg'); background-size: cover; background-position: center;">
      <a href="empty.php" class="overlay">
      <h5 class="text-center">Second Highlight Sample</h5>
      </a>
      </div>
      <div class="col-sm-2" style="background-image: url('img/d.jpg'); background-size: cover; background-position: center;">
      <a href="empty.php" class="overlay">
      <h5 class="text-center">Third Highlight Sample</h5>
      </a>      </div>
      <div class="col-sm-2" style="background-image: url('img/e.jpg'); background-size: cover; background-position: center;">
      <a href="empty.php" class="overlay">
      <h5 class="text-center">Fouth Highlight Sample</h5>
      </a>      </div>
    </div>
  </div>

  <div class="container text-center">
    <h3>WHO WE ARE & WHAT WE DO</h3>

    <span class="d-inline-block text-truncate" style="max-width: 150px">
      Cat ipsum dolor sit amet
    </span>

    <p class="font-weight-light">
      Cat ipsum dolor sit amet, flop over lick yarn hanging out of own butt.
    </p>
    <p class="font-weight-light">
      Chase dog then run away get my claw stuck in the dog's ear for with tail
      in the air poop in litter box, scratch the walls yet kick up litter.
    </p>
    <p class="text-center">
      Eat an easter feather as if it were a bird then burp victoriously, but
      tender one of these days i'm going to get that red dot, just you wait
      and see.
    </p>
    <p class="text-center">
      Litter kitter kitty litty little kitten big roar roar feed me adventure
      always.
    </p>


    <div class="wrapper">
      <div class="carousel owl-carousel">
        <div class="card" style="background-image: url('img/1.png'); background-size: cover; background-position: center;" >
        <div class="overlay">
          <h3>Deanna Troi</h3>
          <h5>Commander</h5>
        </div></div>
        <div class="card" style="background-image: url('img/2.jpg'); background-size: cover; background-position: center;" >
        <div class="overlay">
          <h3>Seven of Nine</h3>
          <h5>Ex-borg</h5>
        </div></div>
        <div class="card" style="background-image: url('img/3.jpg'); background-size: cover; background-position: center;" >
        <div class="overlay">
          <h3>Spock</h3>
          <h5>Ensign Lieutenant</h5>
        </div></div>
        <div class="card" style="background-image: url('img/4.jpg'); background-size: cover; background-position: center;" >
        <div class="overlay">
          <h3>Worf</h3>
          <h5>Strategic Operations Officer</h5>
        </div></div>

      </div>
    </div>

  </div>
  <?php include 'includes/subscribe.php'; ?>
  <?php include 'includes/footer.php'; ?>

  <script src="app.js"></script>

</body>

</html>