
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
  <body  style="background: #f5f5f5;">
    
  <header style="background-image: url('img/a.jpg');  background-size: cover; background-position: center;">
    <div class="overlay"></div>

    <?php include 'includes/nav-white.php';?>


    <h2 class="text-center">forum</h2>
  </header>

    <div class="container">
      <div class="row">
        <!-- <div class="col-sm-5" > </div> -->


        <div class="col-lg-6">
        <div class="dropdown">
          <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
            <i class="glyphicon glyphicon-folder-open"></i>  Category
            <span class="caret"></span>
          </button>
          <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
            <li><a href="#">Action</a></li>
            <li><a href="#">Another action</a></li>
            <li><a href="#">Something else here</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="#">Separated link</a></li>
          </ul>
        </div>
      </div>
      


     
        <div class="col-lg-6">
          <div class="input-group"> 
            <input type="text" class="form-control" placeholder=" Search for...">
            <span class="input-group-btn">
              <button class="btn btn-default" type="button">Go!</button>
            </span>
          </div>
        </div>


      </div>
      

      
    


      <ul>
        <li class="post">
          <img src="img/e.jpg" alt="" class="user-profile">
          
          <a href="article.php" class="post-link">
            <div class="post-title">Cat ipsum dolor sit amet</div>
            <article>
            Cat ipsum dolor sit amet, lick the curtain just to be annoying tweeting a baseball meow. Throwup on your pillow get suspicious of own shadow then go play with toilette paper for going to catch the red dot today 
            going to catch the red dot today shred all toilet paper and spread around the house yet pushes butt to face.
          </article></a>

          <div class="buttons">
            <a href="#" class="facebook"> <i class="fa fa-facebook"></i> Share</a>
            <a href="#" class="twitter"> <i class="fa fa-twitter"></i> Share</a>
            <a href="#" class="wpp"> <i class="fa fa-whatsapp"></i> Share</a>
            <a href="" class="glyphicon glyphicon-thumbs-up"></a>

          </div>
          

        </li>


        <li class="post">
          <img src="img/e.jpg" alt="" class="user-profile">
          
          <a href="article.php" class="post-link">
            <div class="post-title">Cat ipsum dolor sit amet</div>
            <article>
            Cat ipsum dolor sit amet, lick the curtain just to be annoying tweeting a baseball meow. Throwup on your pillow get suspicious of own shadow then go play with toilette paper for going to catch the red dot today 
            going to catch the red dot today shred all toilet paper and spread around the house yet pushes butt to face.
          </article></a>

          <div class="buttons">
            <a href="#" class="facebook"> <i class="fa fa-facebook"></i> Share</a>
            <a href="#" class="twitter"> <i class="fa fa-twitter"></i> Share</a>
            <a href="#" class="wpp"> <i class="fa fa-whatsapp"></i> Share</a>
            <a href="" class="glyphicon glyphicon-thumbs-up"></a>

          </div>
          

        </li>

        <li class="post">
          <img src="img/e.jpg" alt="" class="user-profile">
          
          <a href="article.php" class="post-link">
            <div class="post-title">Cat ipsum dolor sit amet</div>
            <article>
            Cat ipsum dolor sit amet, lick the curtain just to be annoying tweeting a baseball meow. Throwup on your pillow get suspicious of own shadow then go play with toilette paper for going to catch the red dot today 
            going to catch the red dot today shred all toilet paper and spread around the house yet pushes butt to face.
          </article></a>

          <div class="buttons">
            <a href="#" class="facebook"> <i class="fa fa-facebook"></i> Share</a>
            <a href="#" class="twitter"> <i class="fa fa-twitter"></i> Share</a>
            <a href="#" class="wpp"> <i class="fa fa-whatsapp"></i> Share</a>
            <a href="" class="glyphicon glyphicon-thumbs-up"></a>

          </div>
          

        </li>

        




      </ul>

      <a href="#" class="text-center">Load more...</a>


    </div>

    <?php include 'includes/subscribe.php';?>
    <?php include 'includes/footer.php';?>

  

    <script src="app.js"></script>
  </body>
</html>
