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
   
    <!-- Main body start -->
    <div class="container-fluid">
        <div class="container">
            <div class="row">
            <div class="col-md-8">
                <p><h5>United Limited</h5></p>
                <p>Bharatpur -10 ,Chitwan ,Nepal</p>
                <p>Email</p>
                <p>info@unitedlimited.com</p>
                <p>+977 9684438329, 056 47373483</p>
                <p>Website</p>
                <p>www.unitedlimited.com</p>
                <br><br>
                <h2>Send Feedback to us</h2>
                <form action="sendmail.php" method="post">
                  <div class="form-group">
                    <label for="fname">Your Name :</label>
                    <input type="text" name="fname" placeholder ="Full Name" class="form-control" required> 
                  </div>
                  <div class="form-group">
                    <label for="femail">Email :</label>
                    <input type="text" name="email" placeholder ="example@ismt.edu.np" class="form-control" required> 
                  </div>
                  <div class="form-group">
                    <label for="address">Address :</label>
                    <input type="text" name="address" placeholder ="Address" class="form-control" required> 
                  </div>
                  <div class="form-group">
                    <label for="message">Send Message to us :</label>
                    <textarea name="message" id="message" cols="30" rows="10" placeholder="Your Message goes here" class="form-control"></textarea>
                  </div>
                  <div>
                    <button type="submit" name="submit" class="btn btn-success btn-ig">
                      Send
                    </button>
                    <button type="cancel" name="cancel" class="btn btn-danger btn-ig">
                      Cancel
                    </button>

                  </div>
                </form>
            </div>
            </div>
        </div>
    </div>
    <!-- main body end -->


      <!-- footer start -->
      <?php
      include 'footer.php'
      ?>
       <i class="fa-duotone fa-phone fa-beat"></i>
      <!-- footer start -->
   
  </body>
</html>