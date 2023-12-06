<?php
session_start();
?>

<!doctype html>
<html lang="en">
  <head>
    <title>Log in to Dashboard</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
      
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <link rel="shortcut icon" href="../assets/images/favicon.PNG" type="image/x-icon">
  </head>
  <body>
    <!-- navbar start -->
        <nav class="navbar navbar-expand-sm navbar-dark bg-success">
            <a class="navbar-brand" href="index.php">Dashboard</a>
            <button class="navbar-toggler d-lg-none" type="button" data-toggle="collapse" data-target="#collapsibleNavId" aria-controls="collapsibleNavId"
                aria-expanded="false" aria-label="Toggle navigation"></button>
            <div class="collapse navbar-collapse" id="collapsibleNavId">
                <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                
                </ul>
                <form class="form-inline my-2 my-lg-0">
                    <a href="index.php" class="btn btn-outline-warning btn-lg">Log in</a> &nbsp; 
                    <a href="signup.php" class="btn btn-outline-danger btn-lg">Create New Account</a>
                </form>
            </div>
        </nav>
    <!-- navbar end -->
    <!-- container start -->
    <div class="jumbotron jumbotron-fluid">
      <div class="container">
        <h2 class="display-1">Log in to United Limited</h2>
        <div class="row">
          <div class="col-md-6">
            <p>
              Lorem ipsum dolor sit amet consectetur, adipisicing elit. Debitis labore aliquam perferendis. Reiciendis, voluptates quia obcaecati illo cumque et. Consequuntur repudiandae debitis adipisci, quia cupiditate magnam laudantium officia suscipit dolorum?
            </p>
            <img src="../assets/images/download.jfif" alt="United Limited" class="img-thumbnail">
          </div>
          <div class="col-md-6 bg-dark text-light">
            <br><br>
            <form action="" method="post">
              
              <div class="form-group">
                <label for="username">Username:</label>
                <input type="text" class="form-control" name="username" id="" placeholder="Username">
              </div>

              <div class="form-group">
                <label for="password">Password:</label>
                <input type="password" class="form-control" name="password" id="" placeholder="Password">
              </div>

              <div class="form-group">
                <button type="submit" name="submit" class="btn btn-success btn-lg">Log in</button>
                <button type="reset" class="btn btn-danger btn-lg">Cancel</button>
              </div>

              <div class="form-group">
                <a href="signup.php" class="btn btn-primary btn-lg btn-block">Create New Account</a>
              </div>

            </form>
            <?php
            include '../connection.php';
            if(isset($_POST['submit']))
            {
                $a=$_POST['username'];
                $b=$_POST['password'];
               $query="select * from users where username='$a' and password='$b'";
               $run=mysqli_query($conn,$query);
               if(mysqli_num_rows($run)>0)
               {
                $_SESSION['username']=$a;
                echo "<script>window.open('main.php','_self')</script>"; 
               }
               else
               {
                echo "<script>window.alert('Login Failed!!!')</script>";

              }
               
              
            }
            ?>
          </div>
        </div>
      </div>
    </div>
    <!-- container end -->
  </body>
</html>