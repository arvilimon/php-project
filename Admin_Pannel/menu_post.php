<?php 
   require '../db.php';

   $name = $_POST["name"];
   $phone = $_POST["phone"];

   $insert = "INSERT INTO menu(name,phone) VALUES('$name','$phone')";

   mysqli_query($db,$insert);

   header('location: manu.php');
 ?>