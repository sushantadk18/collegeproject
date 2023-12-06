<!doctype html>
<html lang="en">
  <head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="keywords" content="United Limited | Real estate Business | Buy property | Sell Property | Hire Mediator">
    <meta name="description" content="Real Estate Buisness in Nepal to buy and sell properties">
     <meta name="Author" content="Sushant">
 
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
     <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="shortcut icon" href="images/download.jfif" type="image/x-icon">
    <script src="https://kit.fontawesome.com/72c508326c.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="assets/css/style.css">
   
  </head>
  <body>
    <!-- header start -->
      <?php
      include 'header.php'
      ?>
      <!-- header end  -->
    <!-- title start -->
    <div class="jumbotron jumbotron-fluid">
        <div class="container">
            <h1 class="display-3">Videos</h1>
            <p class="lead">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Delectus reiciendis exercitationem nesciunt magni quasi doloribus commodi eos obcaecati, nulla quae? Nobis reprehenderit blanditiis temporibus dolor pariatur aliquam in. Laboriosam, magni?</p>
            <hr class="my-2">
           
        </div>
    </div>

    <!-- title end -->
    <!-- Main body start -->
  
    <!-- main body end -->
    <div class="container-fluid">
        <div class="container">
            <div class="row">
            <div class="col-md-8">
            <?php
            $dir = glob('assets/video/{*.mp4}',GLOB_BRACE);
            foreach($dir as $value)
            {
              ?>
              <a href="<?php echo $value; ?>">
              <video width="320" height="240" controls>
              <source src="<?php echo $value; ?>" type="video/mp4">

              Your browser does not support the video tag.
            </video>
          
              </a>
             <?php
            }
            ?>
          
            </div>
            <div class="col-md-4">
            <?php
            include 'rightbar.php'
            ?>
            </div>
            </div>
        </div>
    </div>
      <!-- footer start -->
      <?php
      include 'footer.php'
      ?>
       <i class="fa-duotone fa-phone fa-beat"></i>
      <!-- footer start -->
   
  </body>
</html>