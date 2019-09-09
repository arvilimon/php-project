<nav id="menu" class="navbar navbar-default navbar-fixed-top">
  <div class="container"> 
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
     
     <?php 
       
       require 'db.php';

       $selete = "SELECT * FROM `menu` ORDER BY id DESC";

       $selet_result = mysqli_query($db,$selete);

       $after_assoc = mysqli_fetch_assoc($selet_result);
  

      ?>

      <a class="navbar-brand page-scroll" href="#page-top"><?php echo $after_assoc['name'] ?></a>
      <div class="phone"><span>Call Today</span><?php echo $after_assoc['phone'] ?></div>
    </div>
    
    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#about" class="page-scroll">About</a></li>
        <li><a href="#services" class="page-scroll">Services</a></li>
        <li><a href="#testimonials" class="page-scroll">Testimonials</a></li>
        <li><a href="#contact" class="page-scroll">Contact</a></li>
        <li class="signup_toggle"><a href="register.php"  id="active_2">Reg</a></li>
        <li class="signup_toggle"><a href="login.php"  id="active_2">Sign Up</a></li>
      </ul>
    </div>
    <!-- /.navbar-collapse --> 
  </div>
</nav>