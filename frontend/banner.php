<header id="header">
  <?php 
      
      $select = "SELECT * FROM banner order by id desc";
      $select_query = mysqli_query($db,$select);
      $after_assoc = mysqli_fetch_assoc($select_query);
    ?>
  <div class="intro" style="background-image:url(Admin_Pannel/uplode/banner/<?php echo $after_assoc['banner_images'];?>)">
    <div class="overlay">
      <div class="container">
        <div class="row">
          <div class="col-md-8 col-md-offset-2 intro-text">
            <h1><?php echo $after_assoc['banner_title']; ?><br>
              </h1>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis sed dapibus leo nec ornare diam. Sed commodo nibh ante facilisis bibendum dolor feugiat at.</p>
            <a href="#about" class="btn btn-custom btn-lg page-scroll">Learn More</a> </div>
        </div>
      </div>
    </div>
 
    
  </div>
</header>