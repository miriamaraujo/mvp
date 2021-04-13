

    <nav class="navbar">
      <div class="hamburger" onclick="myFunction(this)">
      <div class="bar1"></div>
      <div class="bar2"></div>
      <div class="bar3"></div>
      </div>


      <a href="index.php" class="brand" style="color: #fff">MVP</a>

      <ul class="nav-links">
        <li><a href="gallery.php"><span class="glyphicon glyphicon-picture"></span> Gallery</a></li>
        <li><a href="forum.php"><span class="glyphicon glyphicon-comment"></span> Forum</a></li>
        <li><a href="contact.php"><span class="glyphicon glyphicon-envelope"></span> Contact Us</a></li>

        <?php
        if (isset($_SESSION['userId'])) {
          echo '<li>
          <a href="dashboard.php"><span class="glyphicon glyphicon-user"></span> My Account</a>
        </li>

        <li>
          <a href="includes/logout.inc.php"><span class="glyphicon glyphicon-log-out"></span> Logout</a>
        </li>
          ';
        } else {
          echo ' <li>
          <a href="dashboard.php"><span class="glyphicon glyphicon-user"></span> My Account</a
          >
        </li>';
           
        }
       

        ?>
      </ul>
    </nav>

 