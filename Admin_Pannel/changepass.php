<?php 
   include '../session.php';
 ?>
<!doctype html>
<html class="no-js" lang="">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title> Admin Pannel || Update Passsword </title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="apple-touch-icon" href="apple-touch-icon.png">
        <!-- Place favicon.ico in the root directory -->

        <link rel="stylesheet" href="css/normalize.css">
        <link rel="stylesheet" href="css/main.css">
        <script src="js/vendor/modernizr-2.8.3.min.js"></script>
         <style type="text/css">
            .main_menu ul li a{
                padding:8px 57px;
            }
        </style>
    </head>
    <body>
      
    	<div class="tamplate clear">
    		<section class="header_section clear">
    			<header class="header clear">
    				<h2> Admin Area </h2>
    				<nav class="main_menu clear">
    					<ul>
    						<li><a href="dashboard.php">Home</a></li>
                            <li><a href="../index.php" target="_blank">Visit-Website</a></li>
                            <li><a href="user.php">User</a></li>
                            <li><a href="changepass.php">Change Password</a></li>
                            <li><a href="logout.php">Logout</a></li>
    					</ul>
    				</nav>
    			</header>
    		</section>

    		<section class="content_section clear">
    			<div class="content_left clear">
    				<aside>
    					<h2> Theme Option </h2>
    					<ul>
    						<li><a href="manu.php"> manu Option </a></li>
    						<li><a href="banner.php"> Banner Option </a></li>
    						<li><a href="footer.html"> Footer Option </a></li>
                            <li><a href="about.php"> About Option </a></li>
                            <li><a href="about_text.php"> About Text </a></li>
    					</ul>

                         <h2> UI Option </h2>
                        <ul>
                            <li><a href="services.php"> services option</a></li>
                            <li><a href="Testimonials.php"> Testimonials </a></li>
                            <li><a href="contact.php"> contact </a></li>
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
                        <h2> UPDATE PASSWORD.. </h2>
                        <form action="changepass.php" method="post">
                            <table class="table">
                                
                                <tr>
                                   
                                    <td> <input type="hidden" name="id" value="<?php echo $_SESSION['your_id']; ?>">
                                     </td>
                                </tr>

                                <tr>
                                    <td class="user_info"> Old password : </td>
                                    <td> <input type="password" name="old_password" placeholder="Enter Your old password">
                                     </td>
                                </tr>

                               
                                    <td class="user_info"> New password : </td>
                                    <td> <input type="password" name="new_password" placeholder="Enter your new password">
                                     </td>
                                

                                <tr>
                                    <td class="user_info"> Confirm pass : </td>
                                    <td> <input type="password" name="confirm_password" placeholder="Enter Your confirm password ">
                                     </td>
                                </tr>

                                <tr>
                                    <td colspan="2"> <input type="submit" value="Changed">
                                     </td>
                                </tr>
                            </table>
                        </form>

                        <?php 
                            
                            require_once '../db.php';

                            if ($_SERVER['REQUEST_METHOD'] == 'POST'){
                                
                                $new_password = $_POST['new_password'];
                                $confirm_password = $_POST['confirm_password'];
                                $id = $_POST['id'];

                                if($new_password == $confirm_password) {
                                    
                                    $old_password = $_POST['old_password'];
                                    
                                   if ($old_password == $_SESSION['your_password']) {
                                       
                                       $update_password ="UPDATE reg_log SET `password`='$new_password' WHERE id='$id';";

                                       if(mysqli_query($db, $update_password)){
                                            echo "<span style='color:green;'>password changed successfully!..</span>";
                                       }
                                   }else{
                                        echo "<span style='color:red;'> old pw worng!.. </span>";
                                   }
                                }else{
                                    echo "<span style='color:red;'> password not match </span>";
                                }

                            }

                        ?>
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
