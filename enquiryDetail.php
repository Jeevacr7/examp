<?php
  session_start();

  $con = mysqli_connect('localhost','root','','enquirydetail');
  
  
  $name     = $_POST['name'];
  $email    = $_POST['email'];
  $number   = $_POST['number'];
  $quantity = $_POST['quantity'];
  $message  = $_POST['message'];


  $query = "INSERT INTO enquiryform(Name, Email, Number, Quantity, Message) VALUES ('$name','$email','$number','$quantity', '$message')";
  mysqli_query($con, $query);
  echo "Data Saved Successfully";
  
?>