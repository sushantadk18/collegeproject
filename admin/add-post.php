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
            <h1>Add new post</h1>
            <div class="col-md-8">
                <!-- title  -->
                <form action="" method="post" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="title">Post Title:</label>
                    <input type="text" name="title" class="form-control" placeholder="Enter the title of your post here..." required>
                </div>
                <!-- content -->
                <div class="form-group">
                  <label for="">Content:</label>
                  <textarea class="form-control" name="content" placeholder="Post Title" rows="3"></textarea>
                </div>

                
            
            
                <div class="form-group">
                    <label for="upload">Upload Image</label>
                    <input type="file" name="image" class="form-control-file" id="upload">
                    </div>
                    <div class="form-group">
                        <button type="submit" name="submit" class="btn btn-primary btn-lg">Add Post</button>
                        <button type="reset" name ="reset" class="btn btn-danger btn-lg">Reset</button>
                        <a href="view_post.php"></a>
                  </div>



            </form>
            <!-- php start -->
            <?php
            //database connection
            include '../connection.php';
            if(isset($_POST['submit'])){
                $title=$_POST['title'];
                $content = $_POST['content'];
                $image_name = $_FILES['image']['name'];
                $image_type = $_FILES['image']['type'];
                // $image_size = $_FILES['image']['size'];
                $image_tmp= $_FILES['image']['tmp_name'];
                $query ="insert into posts(title,content,image)values('$title','$content','$image_name')";
                $run=mysqli_query($conn,$query);
               
               if($run){
                move_uploaded_file("$image_tmp","../assets/images/$image_name");
                echo "<script>window.alert('Image Uploaded Successfully')</script>";
               }
               else{
                echo "<script>window.alert('Image Not Uploaded')</script>";
                }
            }
            ?>
            
            <!-- php end -->
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