<?php
session_start();

?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link
      rel="stylesheet"
      href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css"
    />
    <link rel="stylesheet" href="css/style.css" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <title>MVP</title>
  </head>
  <body>
    
        
  <header style="background-image: url('img/a.jpg');  background-size: cover; background-position: center;">
    <div class="overlay"></div>

    <?php include 'includes/nav-white.php';?>


    <h2 class="text-center">Get in touch with us</h2>
  </header>


  <div class="container">
    <form action="#">
      <label for="fname">First Name</label>
      <input type="text" id="fname" name="firstname" placeholder="Your name..">
  
      <label for="lname">Last Name</label>
      <input type="text" id="lname" name="lastname" placeholder="Your last name..">

      <label for="phone">Phone</label>
      <input type="phone" id="phone" name="phone" placeholder="Phone">

      <label for="email">E-mail</label>
      <input type="email" id="email" name="email" placeholder="Your email address..">
  
      <label for="country">Country</label>
      <select id="country" name="country">
        <option value="australia">England</option>
        <option value="canada">Brazil</option>
        <option value="usa">Ireland</option>
      </select>
  
      <label for="subject">Subject</label>
      <textarea id="subject" name="subject" placeholder="Write something.." style="height:200px"></textarea>
  
      <input type="submit" value="Submit">
    </form>
  </div>


  <?php include 'includes/subscribe.php';?>
  <?php include 'includes/footer.php';?>

    <script src="app.js"></script>

  </body>
</html>
