<?php 
  
  require '../db.php';

  $uploaded_images = $_FILES['servic_image'];
  $uploaded_images_name = $uploaded_images['name']; 

  $after_explode = explode(".", $uploaded_images_name);
  $uploaded_images_extension = end($after_explode);

  $image_extensions = array('jpg','jpeg','png');

  if (in_array($uploaded_images_extension, $image_extensions)) {
  	if ($uploaded_images['size'] <= 2000000) {
  		$servic_title = $_POST['servic_title'];
  		$servic_description = $_POST['servic_description'];

  	$insert_query = "INSERT INTO servic(servic_title,servic_description) VALUES ('$servic_title','$servic_description')";
  	mysqli_query($db,$insert_query);
  	$inserted_id = mysqli_insert_id($db);
  	$new_servic_image_name = $inserted_id.".".$uploaded_images_extension;
  	$new_uplode_location = "uplode/servic/".$new_servic_image_name;
  	move_uploaded_file($uploaded_images['tmp_name'],$new_uplode_location);

  	$update_query = "UPDATE servic SET servic_image='$new_servic_image_name' WHERE id = $inserted_id";
  	mysqli_query($db,$update_query);
  	header('location: services.php');
  	}
  	else {
  		echo "very big file";
  	}
  }


 ?>