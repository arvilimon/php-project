<div id="about">
  <div class="container">
    <div class="row">

      <?php 

          $select = "SELECT * FROM `about` order by id desc";

          $select_result = mysqli_query($db,$select);

          $after_assoc = mysqli_fetch_assoc($select_result);

       ?>
      <div class="col-xs-12 col-md-6"> 

        <img src="Admin_Pannel/uplode/about/<?php echo $after_assoc['about_image']; ?>" class="
        img-responsive" alt=""> </div>

      <div class="col-xs-12 col-md-6">
        <div class="about-text">
          <h2><?php echo $after_assoc["title"]; ?></h2>
          <p><?php echo $after_assoc["description"]; ?></p>


         <?php 

          $select_about = "SELECT * FROM `about_text`";

          $select_about_result = mysqli_query($db,$select_about);

          $after_assoc = mysqli_fetch_assoc($select_about_result);

       ?>
          <h3><?php echo $after_assoc["about_title"]; ?></h3>
          <div class="list-style">
            <div class="col-lg-12 col-sm-12 col-xs-12">
              <ul>
                <?php 
                  foreach ($select_about_result as $value) {
                    ?>

                     <li><?= $value["about_footer"];  ?></li>

                    <?php 
                  }
                 ?>
               
               
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>