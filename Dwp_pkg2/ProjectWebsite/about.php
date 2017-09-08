<?php
session_start();
?>

<?php
						if(!(isset($_SESSION['Email']))){
						$includeMode = "LoggedOut";
						$cssFileName = 'notLoggedIn.css';
						}else{
						$includeMode = "LoggedIn";
						$cssFileName = 'styles2.0.css';
						}
	?>


<!doctype html>

<html><!-- InstanceBegin template="/Templates/MainTemp.dwt" codeOutsideHTMLIsLocked="false" -->

	<head>
		<!-- ################################################################################ -->
			<title>Pansies <?php echo $includeMode; ?></title>

			
						<!-- Latest compiled and minified CSS -->
						<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

						<!-- jQuery library -->
						<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

						<!-- Latest compiled JavaScript -->
						<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

						<link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,400italic,300italic' rel='stylesheet' type='text/css'>
						<link href='https://fonts.googleapis.com/css?family=Open+Sans+Condensed:300,700' rel='stylesheet' type='text/css'>

						
    
						<link href="css/<?php echo $cssFileName;?>" rel="stylesheet" type="text/css" media="screen">
						<link href="css/about.css" rel="stylesheet" type="text/css" media="screen">

						<link href="css/background_images.css" rel="stylesheet" type="text/css" media="screen">
						
				
	</head>
		
	<!-- ################################################################################ -->
	<!-- ################################################################################ -->
	<!-- ################################################################################ -->
    <body>
		<div id="wrapper">
				<!-- ################################################################################ -->
					<div id="top">
						<div id="logo">
								<a href="http://localhost/DevOps_Team2_Java_Project-master/Dwp_pkg2/ProjectWebsite/index.php" > <img src="images/logo.jpg"> </a>
						</div><!--Close logo div-->

						<div id="login">
						 <?Php
							if(!(isset($_SESSION['Email']))){
							echo "<div id=loginlink> <a href=http://localhost/DevOps_Team2_Java_Project-master/Dwp_pkg2/ProjectWebsite/login.php><span>Login</span></a> </div>";
							echo "<div id=reglink> <a href=http://localhost/DevOps_Team2_Java_Project-master/Dwp_pkg2/ProjectWebsite/register.php><span>register</span></a> </div>";
							
							}else{
							echo "
							 <div id=loginlink> <a href=http://localhost/DevOps_Team2_Java_Project-master/Dwp_pkg2/ProjectWebsite/logout.php>logout</a></div><div id=reglink><a href=http://localhost/DevOps_Team2_Java_Project-master/Dwp_pkg2/ProjectWebsite/Account.php> \t\t\tDetails  <br></a></div> <br>Welcome $_SESSION[Email]";

							
							}
							?>
                                  

                                   <?php 
if(isset($_GET['logout']))
{
  session_unset();
  session_destroy();
  echo "you have been logged out";
}
?>

										
						</div><!--Close login div-->
						
						<div id="phone_addr">
							<ul>
								 &bull;(074) - 9123456 <br>
								 &bull;Main St. Letterkenny, <br>Co.Donegal, Ireland 
							</ul>
						</div><!--Close phone_addr div-->
						
				</div><!--Close top div-->
				<!-- ################################################################################ -->
				<div id="topnav">
						<ul>
						<?Php
							if(!(isset($_SESSION['Email']))){

								echo "<li class=active><a href=http://localhost/DevOps_Team2_Java_Project-master/Dwp_pkg2/ProjectWebsite/index.php><span>Home</span></a></li>
								<li class=active><a href='http://localhost/DevOps_Team2_Java_Project-master/Dwp_pkg2/ProjectWebsite/products.php'><span>Products</span></a></li>
								<li class=active><a href='http://localhost/DevOps_Team2_Java_Project-master/Dwp_pkg2/ProjectWebsite/contact.php'><span>Contact Us</span></a></li>
								<li class=has-sub><a href='http://localhost/DevOps_Team2_Java_Project-master/Dwp_pkg2/ProjectWebsite/about.php'><span>About Us</span></a></li>";
							
							
							}else{
							echo "<li class=active><a href=http://localhost/DevOps_Team2_Java_Project-master/Dwp_pkg2/ProjectWebsite/index.php><span>Home</span></a></li>
								<li class=active><a href='http://localhost/DevOps_Team2_Java_Project-master/Dwp_pkg2/ProjectWebsite/products.php'><span>Products</span></a></li>
								<li class=active><a href='http://localhost/DevOps_Team2_Java_Project-master/Dwp_pkg2/ProjectWebsite/contact.php'><span>Contact Us</span></a></li>
								<li class=has-sub><a href='http://localhost/DevOps_Team2_Java_Project-master/Dwp_pkg2/ProjectWebsite/about.php'><span>About Us</span></a></li>
								<li class=has-sub><a href='http://localhost/DevOps_Team2_Java_Project-master/Dwp_pkg2/ProjectWebsite/special-offer.php'><span>Specials</span></a></li>";
							
							}
						?>
				</div>
				<!-- ################################################################################ -->
            
				<div id="content-wrapper">
					<div id="content"> 
							<div id="about">
											<h1>  ABOUT US </h1>
											
											<h3> Pansy flower shop has been established as a family run business for 50 years. Our first shop was opened on the Main Street in the heart of Letterkenny and we have been supplying quality flowers to our loyal customers. We expanded in 1981 with the opening of a second shop at 28 Upper Main Street, Buncrana allowing us to cater for the Inishowen area of Donegal. </br> 
											</br>Since then we have added two more shops with our shop in Donegal Town which opened in 1995 and our last shop in Dungloe opening in 1997. We have build a strong loyal customer base with our top quality customer service, if its flowers you need, we have Donegal covered.</h3>
											</br>
											</br>
							</div>
											
						
						
					</div> <!-- end content div -->
				</div><!-- end content-wrapper div -->
            <!-- ################################################################################ -->
			
          <div id="footer">
									<p>&copy;Copyright 2017 &bull; All Rights Reserved &bull; Dev Ops Team 2 Project(Pansies) @ LYITLabs  &bull; LYIT Letterkenny Co.Donegal</p>
									<div id="social-media">
								<ul>
										<li><a href="http://www.facebook.com"><img src="images/icons/facebook.png"></a></li>
										<li><a href="http://www.twitter.com"><img src="images/icons/twitter.png"></a></li>
										<li><a href="http://www.instagram.com"><img src="images/icons/Instagram-Icon.png"></a></li>
										<li><a href="http://www.youtube.com"><img src="images/icons/youtube.png"></a></li>
								</ul>
						</div><!--Close social-media div-->
									
						</div><!--Close
		<!-- ################################################################################ -->
         </div>
	   </div>	
    </body>

</html>