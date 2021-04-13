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
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>s
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

  <title>MVP | Gallery</title>
</head>

<body>
  <header style="background-image: url('img/a.jpg');  background-size: cover; background-position: center;">
    <div class="overlay"></div>

    <?php include 'includes/nav-white.php'; ?>


    <h2 class="text-center">Gallery</h2>
  </header>




  <div class="container">

   <div class="flex-container">

   <?php
   include_once 'includes/dbh.inc.php';
   $sql = "SELECT * FROM gallery ORDER BY image_order DESC;";
   $stmt = mysqli_stmt_init($conn);
   if (!mysqli_stmt_prepare($stmt, $sql)) {
     echo 'SQL Failed';
   }else {
     mysqli_stmt_execute($stmt);
     $result = mysqli_stmt_get_result($stmt);
     while($row = mysqli_fetch_assoc($result)){

      echo '
      <div>
      <div class="img-gallery" data-toggle="modal" data-target="#myModal" style="background-image: url(uploads/'. $row["image_name"] .');  background-size: cover; background-position: center; "> </div> 
       <h4> '. $row["image_title"] .'</h4>
       <p>'. $row["image_desc"] .'</p>
                  
         </div>

         <!--  Modal -->

         <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Modal Header</h4>
        </div>
        <div class="modal-body">
        <h4> '. $row["image_title"] .'</h4>
        <p>'. $row["image_desc"] .'</p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>
      ';

     }

   }




  

   ?>
               
     </div>
  </div>


  <?php include 'includes/gallery-upload.php'; ?>
  <?php include 'includes/subscribe.php'; ?>
  <?php include 'includes/footer.php'; ?>


  <script src="app.js"></script>

</body>

</html>


