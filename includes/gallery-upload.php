<?php

    if (isset($_SESSION['username'])) {
      echo '<div class="imageuploader">
      <!-- Posts images in the gallery -->

      <form action="includes/uploads.inc.php" method="POST" enctype="multipart/form-data">
      <input type="text" name="filename" placeholder="File Name">
      <input type="text" name="filetitle" placeholder="Title">
      <input type="text" name="filedesc" placeholder="Description">
      <input type="file" name="file">
      <input type="submit" name="submit" value="UPLOAD"></input>

      </form>

    </div>';
    }else {
        echo '
        <div class="button-link">
        <a href="dashboard.php">Login to Post</a>
        </div>
        ';
    }
    

    ?>