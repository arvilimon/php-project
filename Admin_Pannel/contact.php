<!doctype html>
<html class="no-js" lang="">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title> Admin Pannel || Update Footer </title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="apple-touch-icon" href="apple-touch-icon.png">
        <!-- Place favicon.ico in the root directory -->

        <link rel="stylesheet" href="css/normalize.css">
        <link rel="stylesheet" href="css/main.css">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <script src="js/vendor/modernizr-2.8.3.min.js"></script>
    </head>
    <body>
      
    	<div class="tamplate clear">
    		<section class="header_section clear">
    			<header class="header clear">
    				<h2> Admin Area </h2>
    				<nav class="main_menu clear">
    					<ul>
    						<li><a href="index.html">Home</a></li>
    						<li><a href="user.html">User</a></li>
    						<li><a href="changepass.html">Change Password</a></li>
    						<li><a href="logout.html">Logout</a></li>
    					</ul>
    				</nav>
    			</header>
    		</section>

    		<section class="content_section clear">
    			<div class="content_left clear">
    				<aside>
    					<h2> Theme Option </h2>
    					<ul>
    						<li><a href="social.html"> Social Option </a></li>
    						<li><a href="banner.php"> Banner Option </a></li>
    						<li><a href="footer.html"> Footer Option </a></li>
    					</ul>

                        <h2> UI Option </h2>
                        <ul>
                            <li><a href="bgchange.html"> Change site backgroud</a></li>
                            <li><a href="changefont.html"> Change site fonts </a></li>
                            <li><a href="changecolor.html"> Change site color </a></li>
                        </ul>

    					<h2> Catagory Option </h2>
    					<ul>
    						<li><a href="catagory.html"> Add Catagory </a></li>
    						<li><a href="catagory.html"> Add Catagory </a></li>
    						<li><a href="catagory.html"> Add Catagory </a></li>
    					</ul>

    					<h2> Article Option </h2>
    					<ul>
                            <li><a href="article.html"> Article Option </a></li>
                            <li><a href="article.html"> Article Option </a></li>
                            <li><a href="articlelist.html"> Article List </a></li>
                        </ul>

                         <h2> Comment Option </h2>
                        <ul>
                            <li><a href="comment.html"> Show Comment </a></li>
                        </ul>
    				</aside>
    			</div>
    			<div class="content_right clear">
                    <div class="content">
                        <h2> Update Footer.. </h2>
                        <form action="content.php" method="post">
                            <table class="table table-bordered">
  <thead>
    <tr>
      <th scope="col">id</th>
      <th scope="col">name</th>
      <th scope="col">email</th>
      <th  scope="col">massage</th>
    </tr>
  </thead>
  <tbody>
    <?php 

        require '../db.php';

        $select = "SELECT * FROM contact";

        $select_result = mysqli_query($db,$select);

        foreach ($select_result as  $value) { ?>

             <tr>
              <th scope="row">1</th>
              <td><?php echo $value['name']; ?></td>
              <td><?php echo $value['email']; ?></td>
              <td><?php echo $value['massage']; ?></td>
            </tr>

      <?php 
       }
     ?>
   
      </tbody>
</table>
    </form>


    </div>
</div>
</section>

<section class="footer_section clear">
	<footer class="footer clear">
		<p>&copy; All copyright md rajiur rahman raj </p>
	</footer>
</section>
    	</div>










        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.11.3.min.js"><\/script>')</script>
        <script src="js/plugins.js"></script>
        <script src="js/main.js"></script>

        <!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
        <script>
            (function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=
            function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;
            e=o.createElement(i);r=o.getElementsByTagName(i)[0];
            e.src='https://www.google-analytics.com/analytics.js';
            r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));
            ga('create','UA-XXXXX-X','auto');ga('send','pageview');
        </script>
    </body>
</html>
