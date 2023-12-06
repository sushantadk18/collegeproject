<?php
if(isset($_POST['submit']))
{
    $to="sushantadk18@gmail.com";
    $name=$_POST['fname'] ;
  $email=$_POST['email'] .$name;
    $address=$_POST['address'];
    $message=$_POST['message'];
    $headers ="Form :".$email;

   
    if( mail($to,$address,$message,$headers))
    { 
         echo "Your Mail has been sent successfully.";
    }
    else
    {
        echo "There was an error sending your message. Please try again.";
    }

}
?>
<h2>
    <a href="contact.php">Return</a>
</h2>