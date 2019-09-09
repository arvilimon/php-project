<?php 
  
  require '../db.php';

  $uploaded_images = $_FILES['banner_images'];
  $uploaded_images_name = $uploaded_images['name'];

  $after_explode = explode(".", $uploaded_images_name);
  $uploaded_images_extension = end($after_explode);

  $image_extensions = array('jpg','jpeg','png');

  if (in_array($uploaded_images_extension, $image_extensions)) {
  	if ($uploaded_images['size'] <= 2000000) {
  		$banner_title = $_POST['banner_title'];
  	$insert_query = "INSERT INTO banner(banner_title) VALUES ('$banner_title')";
  	mysqli_query($db,$insert_query);
  	$inserted_id = mysqli_insert_id($db);
  	$new_banner_image_name = $inserted_id.".".$uploaded_images_extension;
  	$new_uplode_location = "uplode/banner/".$new_banner_image_name;
  	move_uploaded_file($uploaded_images['tmp_name'],$new_uplode_location);

  	$update_query = "UPDATE banner SET banner_images='$new_banner_image_name' WHERE id = $inserted_id";
  	mysqli_query($db,$update_query);
  	header('location: banner.php');
  	}
  	else {
  		echo "very big file";
  	}
  }


 ?>