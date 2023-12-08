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
            <div class="collapse navbar-collapse" id="collapsibleNavId">
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
            <h1>Users Info</h1>
            <hr>
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>First Name</th>
                        <th>Last Name</th>
                        <th>Username</th>
                        <th>Password</th>
                        <th>Edit</th>
                        <th>Delete</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    //connection to database
                    include '../connection.php';
                    //select query
                    $query="select * from users";
                    //query run
                    $run=mysqli_query($conn,$query);
                    //while loop to store data from database row in new variable 
                    while($row=mysqli_fetch_array($run))
                    {
                        //display data in table
                        $a=$row['id'];
                        $b=$row['first_name'];
                        $c=$row['last_name'];
                        $d=$row['username'];
                        $e=$row['password'];

                    

                    ?>
                    <tr>
                        <td scope="row"><?php echo $a ?>    </td>
                        <td><?php echo $b ?></td>
                        <td><?php echo $c ?></td>
                        <td><?php echo $d ?></td>
                        <td><?php echo $e ?></td>
                        <td><a href="edit.php?id=<?php echo $a; ?>&fname=<?php echo $b ?> &lname=<?php echo $c ?>&username=<?php echo $d ?>&password=<?php echo $e ?>  ">Edit</a></td>
                        <td><a href="delete.php?Del=<?php echo $a ; ?>">Delete</a></td>

                        
                    </tr>
                    <?php
                    }
                    ?>
                </tbody>
            </table>
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