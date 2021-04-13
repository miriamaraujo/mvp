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
    <title>MVP</title>
  </head>
  <body>
   
    

  <header style="background-image: url('img/a.jpg');  background-size: cover; background-position: center;">
    <div class="overlay"></div>

    <?php include 'includes/nav-white.php';?>


    <h2 class="text-center">login</h2>
  </header>




    <div class="container">
    <?php
                // Displaying the error handling when creating new user
                if (isset($_GET["error"])) {
                    if ($_GET["error"] == "emptyfields") {
                        echo '<script>alert("Empty fields, check the form to proceed!")</script>';
                    } else if ($_GET["error"] == "invalidmailname") {
                        echo '<p class="p-alert">Invalid username and e-mail!</p>';
                    } else if ($_GET["error"] == "invalidmail") {
                        echo '<p class="p-alert">Invalid e-mail!</p>';
                    } else if ($_GET["error"] == "passwordcheckname") {
                        echo '<p class="p-alert">Your passwords do not match!</p>';
                    } else if ($_GET["error"] == "usertaken") {
                        echo '<p class="p-alert">Sorry! Username is already taken!</p>';
                    }
                }

                if(isset($_GET["signup"])){
                  if($_GET["signup"] == "success"){
                      echo '<p class="p-alert">Account created with success, login to continue</p>';

                  }

              }


                ?>
      <div class="row">
        <div class="col-sm-6 col-md-5 col-lg-6 text-center">
          <h2>Login Here</h2>

          <form action="includes/login.inc.php" method="POST">
                    <input type="email" name="umail" placeholder="E-mail">
                    <input type="password" name="pwd" placeholder="Password">
                    <input type="submit" name="login-submit" value="Login">
          </form>

          


        </div>
        <div class="col-sm-6 col-md-5 col-lg-6 text-center">
          <h2>Register Here</h2>

          <form action="includes/signup.inc.php" method="POST">
                    <input type="text" name="uname" placeholder="Username" >
                    <input type="text" name="fname" placeholder="First Name" >
                    <input type="text" name="lname" placeholder="Last Name" >
                    <input type="text" name="umail" placeholder="E-mail" >
                    <input type="password" name="pwd" placeholder="Password" >
                    <input type="password" name="pwd-repeat" placeholder="Confirm password" >
                    <input type="text" name="ulevel" value="0"  style="display: none;" >
                    <input type="submit" name="signup-submit" value="Create Account">
          </form>

          
          

        </div>


      
    </div>

    
    </div>
    

    <?php include 'includes/subscribe.php';?>
    <?php include 'includes/footer.php';?>

    

    

    <script src="app.js"></script>

  </body>
</html>
