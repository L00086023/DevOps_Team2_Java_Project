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

<html><!-- InstanceBegin template="/Templates/FinalTemplate.dwt" codeOutsideHTMLIsLocked="false" -->
	<head>
			<!-- InstanceBeginEditable name="doctitle" -->
			<title>Pansies <?php echo $includeMode; ?></title>
			<!-- InstanceEndEditable -->

			<!-- Latest compiled and minified CSS -->
			<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

			<!-- jQuery library -->
			<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
			<!-- Latest compiled JavaScript -->
			<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	
			
			<link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,400italic,300italic' rel='stylesheet' type='text/css'>
			<link href='https://fonts.googleapis.com/css?family=Open+Sans+Condensed:300,700' rel='stylesheet' type='text/css'>
    
			<link href="css/<?php echo $cssFileName;?>" rel="stylesheet" type="text/css" media="screen">

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
								<a href="index.php"> <img src="images/logo.jpg"> </a>
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
								 (074) - 9123456 <br>
								 Main St. Letterkenny, <br>Co.Donegal, Ireland 
							</ul>
						</div><!--Close phone_addr div-->
						<? echo "Welcome, $Email"; ?>
				</div><!--Close top div-->
				<!-- ################################################################################ -->    
				<div id="topnav">
						<ul>
						<?Php
							if(!(isset($_SESSION['Email']))){

								echo "<li class=active><a href='index.php'><span>Home</span></a></li>
								<li class=active><a href='products.php'><span>Products</span></a></li>
								<li class=active><a href='contact.php'><span>Contact Us</span></a></li>
								<li class=has-sub><a href='about.php'><span>About Us</span></a></li>";
							
							
							}else{
							echo "<li class=active><a href='index.php'><span>Home</span></a></li>
								<li class=active><a href='products.php'><span>Products</span></a></li>
								<li class=active><a href='contact.php'><span>Contact Us</span></a></li>
								<li class=has-sub><a href='about.php'><span>About Us</span></a></li>
								<li class=has-sub><a href='special-offer.php'><span>Specials</span></a></li>";
							
							}
						?>
								
						</ul>
				 </div><!--Close topnav div-->
				<!-- ################################################################################ -->

				


				<div id="banner">
                 		
						<div id="content-wrapper">
								<div id="content"> 
										<h1>Welcome to the Pansies Online Flower Shop</h1>
										
    
										<div class="slider" style="max-width:100%">
															<img class="mySlides" src="images/banner/banner1.jpg" style="width:100%">
															<img class="mySlides" src="images/banner/banner2.jpg" style="width:100%">
															<img class="mySlides" src="images/banner/banner5.jpg" style="width:100%">
															<img class="mySlides" src="images/banner/banner6.jpg" style="width:100%">
															<img class="mySlides" src="images/banner/banner7.jpg" style="width:100%">
															
															
															<script>
																	var myIndex = 0;
																	carousel();
																	function carousel() {
																		var i;
																		var x = document.getElementsByClassName("mySlides");
																		for (i = 0; i < x.length; i++) {
																		   x[i].style.display = "none";  
																		}
																		myIndex++;
																		if (myIndex > x.length) {myIndex = 1}    
																		x[myIndex-1].style.display = "block";  
																		setTimeout(carousel, 5000); // Change image every 2 seconds
																	}
																	</script>
										</div>


										</div><!--Close data-u navigator div-->
												
            
								</div><!--Close content div-->
						     </div><!--Close content-wrapper div-->



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
									
						</div><!--Close footer div-->
						
						
						
				
			</div><!--Close banner div-->	
		</div><!--Close wrapper div-->
    </body>

<!-- InstanceEnd -->
</html>