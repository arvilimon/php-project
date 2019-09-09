<!doctype html>
<html class="no-js" lang="">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title> Admin Pannel || Social </title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="apple-touch-icon" href="apple-touch-icon.png">
        <!-- Place favicon.ico in the root directory -->

        <link rel="stylesheet" href="css/normalize.css">
        <link rel="stylesheet" href="css/main.css">
        <script src="js/vendor/modernizr-2.8.3.min.js"></script>
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
    					<ul>
                            <li><a href="manu.php"> Manu Option </a></li>
                            <li><a href="banner.php"> Banner Option </a></li>
                            <li><a href="footer.html"> Footer Option </a></li>
                            <li><a href="about.php"> About Option </a></li>
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
                        <h2> Update Testimonials Profile.. </h2>
                        <form action="tes_post.php" method="post" enctype="multipart/form-data">
                            <table class="table">

                                 <tr>
                                    <td class="user_info"> tes_image </td>
                                    <td> <input type="file" name="tes_image"></td>
                                </tr>
                                
                                 <tr>
                                    <td class="user_info">tes_description</td>
                                     <td> 
                                        <textarea name="tes_description" rows="2" cols="20"></textarea>
                                     </td>
                                </tr>


                                    <td class="user_info"> tes_title </td>
                                     <td>
                                        <input type="text" name="tes_title">
                                     </td>
                                

                               
                                <tr>
                                    <td colspan="2"> <input type="submit" value="Update-tes">
                                     </td>
                                </tr>
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
