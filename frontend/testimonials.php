<div id="testimonials">
  <div class="container">
    <div class="section-title">
      <h2>Testimonials</h2>
    </div>
    <div class="row">
      <?php 

          $select_tes = "SELECT * FROM `tes`order by id desc";
          $select_tes_result = mysqli_query($db,$select_tes);

          foreach($select_tes_result as $value) { ?>
            <div class="col-md-4">
              <div class="testimonial">
                 <div class="testimonial-image"> <img src="Admin_Pannel/uplode/tes/<?= $value['tes_image']; ?>" alt=""> </div>
                <div class="testimonial-content">
                  <p><?= $value["tes_description"]; ?></p>
                  <div class="testimonial-meta"><?= $value["tes_title"]; ?></div>
                </div>
              </div>
          </div>
      <?php
          }
       ?>
    </div>
  </div>
</div>