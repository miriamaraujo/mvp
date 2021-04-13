<?php
session_start();
include('includes/usercheck.php');
include_once 'includes/dbh.inc.php';
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
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

  <title>MVP</title>
</head>

<body style="background-color: #eee;">


  <header style="background-image: url('img/a.jpg');  background-size: cover; background-position: center;">
    <div class="overlay"></div>

    <?php include 'includes/nav-white.php'; ?>


    <h2 class="text-center">Wellcome, <?php echo '' . $_SESSION['fName'] . ' ' . $_SESSION['lName']  . '' ?> </h2>
  </header>



  <!-- User Profile -->


  <div class="container">
    <div class="row">
      <div class="col">
        <div class="userpic" style="background-image: url(img/boba.jpg); background-position: center; background-size: cover;"></div>
        <div class="username">
          <?php
          if (isset($_SESSION['userId'])) {
            echo '<h4> ' . $_SESSION['fName'] . ' ' . $_SESSION['lName']  . ' </h4>';
          }
          ?>

        </div>
        <ul class="dashboard-links">
        <li class="dash-nav" onclick="openTab('profile')"><a href="dashboard.php">My Profile</a> </li>
          <li class="dash-nav" onclick="openTab('items')"><a href="#">My Items</a></li>
          <li class="dash-nav" onclick="openTab('users')"><a href="#">Users</a></li>
          <li class="dash-nav" onclick="openTab('account')"><a href="#">My Account</a></li>
        </ul>
      </div>
      <div class="col tab" id="profile">

        <table class="table ">
          <thead>
            <tr>
              <h1>Profile Details</h1>
            </tr>
          </thead>
          <tbody>
            <tr>
              <th scope="row">Username</th>
              <td>
                <?php echo '' . $_SESSION['username'] . ''; ?>
              </td>

            </tr>
            <tr>
              <th scope="row">Full Name</th>
              <td>
                <?php echo '' . $_SESSION['fName'] . ' ' . $_SESSION['lName']  . ''; ?>
              </td>
            </tr>
            <tr>
              <th scope="row">E-mail</th>
              <td><?php echo '' . $_SESSION['usermail'] . ''; ?></td>
            </tr>
            <tr>
              <th scope="row">Phone</th>
              <td></td>
            </tr>
            <tr>
              <th scope="row">User Level</th>
              <td><?php
              if($_SESSION['userLevel'] == 1){
                echo ' Admin';
              } else {
                echo 'User';
              }
              ?></td>
            </tr>
          </tbody>
        </table>

        <div class="button-link" onclick="openTab('update-profile')">
          Update Profile
        </div>
      </div>

      <div class="col tab" id="update-profile" style="display: none;">
        <form action="includes/update.inc.php">
        
          <input type="text" name="id" value="<?php echo $_SESSION['userId'] ?>" style="display: none;">
          <label for="username">Username</label>
          <input type="text" id="fname" name="username" placeholder="<?php echo $_SESSION['username'] ?>">

          <label for="fname">First Name</label>
          <input type="text" id="fname" name="firstname" placeholder="<?php echo $_SESSION['fName'] ?>">

          <label for="lname">Last Name</label>
          <input type="text" id="lname" name="lastname" placeholder="<?php echo $_SESSION['lName'] ?>">

          <label for="phone">Phone</label>
          <input type="tel" id="phone" name="phone" placeholder="<?php echo $_SESSION['userphone'] ?>">

          <label for="email">E-mail</label>
          <input type="email" id="email" name="email" placeholder="<?php echo $_SESSION['usermail'] ?>">

          <select name="ulevel" placeholder="User Level">
            <option value="0">User Level</option>
            <option value="0">User</option>
            <option value="1">Admin</option>

          </select>

          <input type="submit" name="update-submit" value="Update">
        </form>




      </div>


      
      <div class="col tab" id="items" style="display: none;">
      <h1>My Items</h1>
      </div>
      <div class="col tab" id="users" style="display: none;">
      <h1>Users</h1>
      </div>
      <div class="col tab" id="account" style="display: none;">
      <h1>My Account</h1>
      </div>
    </div>
  </div>






  <?php include 'includes/subscribe.php'; ?>
  <?php include 'includes/footer.php'; ?>

  <script src="app.js"></script>

  <script>
  function openTab(tabName){
    var i;
    var x = document.getElementsByClassName("tab"); 
    for (i = 0; i < x.length; i++) {
      x[i].style.display = "none";
    }
    document.getElementById(tabName).style.display = "block"
  }
  </script>

</body>

</html>


