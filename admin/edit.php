<?php
session_start();
if(!isset($_SESSION['username']))
{header("location:../index.html");}
else
{ //SESSION being applied here.--
?>
<!doctype html>
<html lang="en">
  <head>
    <title>Main Dashboard</title>
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
            <div class="collapse navbar-collapse"="collapsibleNa">
                <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                
                </ul>
                <form class="form-inline my-2 my-lg-0"> 
                  <?php
                  echo $_SESSION['username'];
                  ?>
                    <a href="logout.php" class="btn btn-outline-danger btn-lg">Log Out</a>
                </form>
            </div>
        </nav>
    <!-- navbar end -->
    <!-- container start -->
    <div class="jumbotron jumbotron-fluid">
      <div class="container">
        <div class="row">
          <div class="col-md-4">
            <a href="users.php" class="btn btn-dark btn-block text-light">Users</a>
            <a href="add-post.php" class="btn btn-dark btn-block text-light">Add Post</a>
            <a href="upload-photo.php" class="btn btn-dark btn-block text-light">Upload Image</a>
            <a href="upload-video.php" class="btn btn-dark btn-block text-light">Upload Video</a>
          </div>
          <div class="col-md-8">
            <h1>Update user information</h1>
            <hr>
            <form action="edit_user.php" method="get">
            <!-- for id -->
            <div class="form-group">
                <label for="id">ID:</label>
                <input type="text" class="form-control" name="id1" value="<?php echo $_GET['id'];?>">
            </div>
            <!-- for firts name -->
            <div class="form-group">
                <label for="fn">First Name:</label>
                <input type="text" class="form-control" name="fname1" value="<?php echo $_GET['fname'];?>">
            
            </div>
            <!-- for last name -->
            <div class="form-group">
                <label for="fn">Last Name:</label>
                <input type="text" class="form-control" name="lname1" value="<?php echo $_GET['lname'];?>">
            
            </div>
            <!-- username -->
            <div class="form-group">
                <label for="username">User Name:</label>
                <input type="text" class="form-control" name="username1" value="<?php echo $_GET['username'];?>">
            
            </div>
            <!-- password -->
            <div class="form-group">
                <label for="password">Password:</label>
                <input type="text" class="form-control" name="password1" value="<?php echo $_GET['password'];?>">

            
            </div>

            <!-- buttons -->
            <div class="form-group">
                        <button type="submit" name="submit" class="btn btn-primary btn-lg">Update</button>
                        <button type="reset" name ="reset" class="btn btn-danger btn-lg">Cancel</button>
                        </div>



            </form>
          </div>
        </div>
      </div>
    </div>
    <!-- container end -->
  </body>
</html>
<?php
}
?>