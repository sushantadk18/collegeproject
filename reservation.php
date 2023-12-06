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
            <h1 class="display-3">Reservations</h1>
            <hr class="my-2">
            <form action="" method="post">
                <div class="form-group">
                    <label for="fname"><li class="fa fa-user"></li> First Name :</label>
                    <input type="text" name="fname" id="fname" class="form-control" placeholder ="First Name" required>

                </div>
                <div class="form-group">
                <label for="lname"><li class="fa fa-user"></li> Last Name :</label>
                    <input type="text" name="lname" id="lname" class="form-control" placeholder ="Last Name" required>  
                </div>
                
                <div class="form-group">
                <label for="address"><li class="fa fa-map-marker"></li> Address :</label>
                    <input type="text" name="address" id="address" class="form-control" placeholder ="Address" required>  
                </div>

                <div class="form-group">
                <label for="phone"><li class="fa fa-phone"></li> Phone :</label>
                    <input type="text" name="phone" id="phone" class="form-control" placeholder ="Phone" required>  
                </div>
                <div class="form-group">
                <label for="email"><li class="fa fa-envelope"></li> Email:</label>
                    <input type="text" name="email" id="email" class="form-control" placeholder ="sample@email.com" required>  
                </div>

                <div class="form-group">
                <label for="activity"><li class="fa fa-group"></li> Activity</label>
                    <select name="activity" id="activity">
                        <option value="Activity 1">Activity 1</option>
                        <option value="Activity 2">Activity 2</option>
                    </select>  
                </div>
                <div class="form-group">
                    <button type="submit" name="submit" class="btn btn-success btn-lg">Send</button>
                    <button type="reset" name="reset" class="btn btn-danger btn-lg">Cancel</button>

                </div>

            </form>
            <?php
            include 'connection.php';
            if(isset($_POST['submit']))
            {
                $a=$_POST['fname'];
                $b=$_POST['lname'];
                $c=$_POST['address'];
                $d=$_POST['phone'];
                $e=$_POST['email'];
                $f=$_POST['activity'];
                // echo $a. $b. $c. $d. $e. $f;
                $query ="insert into reservation(first_name, last_name, address, phone, email, activity) values('$a','$b','$c','$d','$e','$f')";
                $run=mysqli_query($conn, $query);
                if($run)
                {
                    echo "<script>window.alert('Reservation Sucessfull!')</script>";
                    echo "<script>window.open('reservation.php','_self')</script>";
                }
                else
                { 
                    echo "<script>window.alert('Error found ! Try Again')</script>";
   
                }
            }
            ?>
           
        </div>
    </div>

    <!-- title end -->
    

     <!-- footer start -->
      <?php
      include 'footer.php'
      ?>
       <i class="fa-duotone fa-phone fa-beat"></i>
      <!-- footer start -->
   
  </body>
</html>