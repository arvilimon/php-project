<?php 
  
  require '../db.php';

  $uploaded_images = $_FILES['tes_image'];
  $uploaded_images_name = $uploaded_images['name']; 

  $after_explode = explode(".", $uploaded_images_name);
  $uploaded_images_extension = end($after_explode);

  $image_extensions = array('jpg','jpeg','png');

  if (in_array($uploaded_images_extension, $image_extensions)) {
  	if ($uploaded_images['size'] <= 2000000) {
  		$tes_title = $_POST['tes_title'];
  		$tes_description = $_POST['tes_description'];

  	$insert_query = "INSERT INTO tes(tes_title,tes_description) VALUES ('$tes_title','$tes_description')";
  	mysqli_query($db,$insert_query);
  	$inserted_id = mysqli_insert_id($db);
  	$new_tes_image_name = $inserted_id.".".$uploaded_images_extension;
  	$new_uplode_location = "uplode/tes/".$new_tes_image_name;
  	move_uploaded_file($uploaded_images['tmp_name'],$new_uplode_location);

  	$update_query = "UPDATE tes SET tes_image='$new_tes_image_name' WHERE id = $inserted_id";
  	mysqli_query($db,$update_query);
  	header('location: testimonials.php');
  	}
  	else {
  		echo "very big file";
  	}
  }


 ?>