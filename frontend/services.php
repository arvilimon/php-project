<div id="services">
  <div class="container">
    <div class="section-title">
      <h2>Our Services</h2>
    </div>
    <div class="row">
       <?php 

          $select_servic = "SELECT * FROM `servic` order by id desc";

          $select_servic_result = mysqli_query($db,$select_servic);

          
          foreach ($select_servic_result as $value) { ?>
            
           <div class="col-md-4">
        <div class="service-media"> <img src="Admin_Pannel/uplode/servic/<?= $value['servic_image']; ?>" alt=" "> </div>
        <div class="service-desc">
          <h3><?= $value["servic_title"]; ?></h3>
          <p><?= $value["servic_description"]; ?></p>
        </div>
      </div>
        <?php
          }

       ?>
    </div>
   
  </div>
</div>