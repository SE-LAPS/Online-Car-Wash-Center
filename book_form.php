<?php

   $connection = mysqli_connect('localhost','root','','book_db');

   if(isset($_POST['send'])){
      $name = $_POST['name'];
      $email = $_POST['email'];
      $phone = $_POST['phone'];
      $company = $_POST['company'];
      $type = $_POST['type'];
      $vehicle = $_POST['vehicle'];
      $manufactured = $_POST['manufactured'];
      $booking = $_POST['booking'];

      $request = " insert into book_form(name, email, phone, company, type, vehicle, manufactured, booking) values('$name','$email','$phone','$company','$type','$vehicle','$manufactured','$booking') ";
      mysqli_query($connection, $request);

      header('location:book.php'); 

   }else{
      echo '😥something went wrong please try again😥';
   }

?>