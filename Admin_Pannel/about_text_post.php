 <?php 
        
    require '../db.php';

    
    $about_title = $_POST["about_title"];
    $about_footer = $_POST["about_footer"];

   $insert = "INSERT INTO about_text(about_title,about_footer) VALUES('$about_title','$about_footer')";

   mysqli_query($db,$insert);
   header('location: about_text.php');

  
 ?>
