<?php
session_start();
?>



<!doctype html>

<html><!-- InstanceBegin template="/Templates/FinalTemplate.dwt" codeOutsideHTMLIsLocked="false" -->
	<head>
			<!-- InstanceBeginEditable name="doctitle" -->
			<title>Pansies</title>
			<!-- InstanceEndEditable -->
	
			<script src="js/jquery.js" type="text/javascript"></script>
			
			<link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,400italic,300italic' rel='stylesheet' type='text/css'>
			<link href='https://fonts.googleapis.com/css?family=Open+Sans+Condensed:300,700' rel='stylesheet' type='text/css'>
	
			<script type="text/javascript" src="js/slider.js"></script>
			<script type="text/javascript" src="js/menu.js"></script>
			<script type="text/javascript" src="js/imagegallery.js"></script>
			<script type="text/javascript" src="js/slide_speed.js"></script>
    
			<link href="css/styles.css" rel="stylesheet" type="text/css" media="screen">
			<link href="css/slider.css" rel="stylesheet" type="text/css" media="screen">
			<link href="css/imagegallery.css" rel="stylesheet" type="text/css" media="screen">
	</head>
	
	
	<!-- ################################################################################ -->
	<!-- ################################################################################ -->
	<!-- ################################################################################ -->
	<body>
	
		<div id="wrapper">
		
                   <!-- ################################################################################ -->
				<div id="top">
						<div id="logo">
								<img src="images/logo.jpg">
						</div><!--Close logo div-->

						<div id="login">



								   
             
							                                    <?Php
							if(!(isset($_SESSION['Email']))){
							echo "<div id=loginlink> <a href=http://localhost/DevOps_Team2_Java_Project-master/Dwp_pkg2/ProjectWebsite/login.php><span>Login</span></a> </div>";
							echo "<div id=reglink> <a href=http://localhost/DevOps_Team2_Java_Project-master/Dwp_pkg2/ProjectWebsite/register.php><span>register</span></a> </div>";
							
							}else{
							echo "
							 <div id=loginlink> <a href=http://localhost/DevOps_Team2_Java_Project-master/Dwp_pkg2/ProjectWebsite/logout.php><span>logout</span></a> </div>  <br>   Welcome $_SESSION[Email] ";
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
						<? echo "Welcome, $Email"; ?>
				</div><!--Close top div-->
				<!-- ################################################################################ -->    

				
                     

				<div id="topnav">
						<ul>
								<li class="active"><a href="http://localhost/DevOps_Team2_Java_Project-master/Dwp_pkg2/ProjectWebsite/index.php"><span>Home</span></a></li>
								<li class="active"><a href='products.html'><span>Products</span></a></li>
								<li class="active"><a href='contact.php'><span>Contact Us</span></a></li>
								<li class="has-sub"><a href='about.php'><span>About Us</span></a></li>
						</ul>
				 </div><!--Close topnav div-->
				<!-- ################################################################################ -->

				


				<div id="banner">
                 		
						<div id="content-wrapper">
								<div id="content"> 
										<h1>Welcome to the Pansies Online Flower Shop</h1>
										<p>We are currently running maintenance on our website.</p>
    
										<div id="jssor_1" style="position: relative; 
																			top: 0px;
																			left: 0px; 
																			overflow: hidden; 
																			visibility: hidden;">

												<div data-u="slides" style="cursor: default; 
																				position: relative; 
																				top: 0px;
																				left: 0px; 
																				overflow: hidden;">
																						
																						
															<div data-p="112.50" style="display: none;">
																	<img data-u="image" src="images/banner/banner1.jpg" />
															</div><!--Close data-p div-->
															<div data-p="112.50" style="display: none;">
																	<img data-u="image" src="images/banner/banner2.jpg" />
															</div><!--Close data-p div-->
															<div data-p="112.50" style="display: none;">
																	<img data-u="image" src="images/banner/banner3.jpg" />
															</div><!--Close data-p div-->
															<div data-p="112.50" style="display: none;">
																	<img data-u="image" src="images/banner/banner4.jpg" />
															</div><!--Close data-p div-->
															<div data-p="112.50" style="display: none;">
																	<img data-u="image" src="images/banner/banner5.jpg" />
															</div><!--Close data-p div-->
															<div data-p="112.50" style="display: none;">
																	<img data-u="image" src="images/banner/banner6.jpg" />
															</div><!--Close data-p div-->
															<div data-p="112.50" style="display: none;">
																	<img data-u="image" src="images/banner/banner7.jpg" />
															</div><!--Close data-p div-->
												</div><!--Close data-u slides div-->

												<!-- Bullet Navigator -->
												<div data-u="navigator" class="jssorb05" style="bottom:16px;right:16px;">
															<!-- bullet navigator item prototype -->
															<div data-u="prototype" style="width:16px;height:16px;"></div>  <!-- makes arrows image length --> 
												</div><!--Close data-u prototype div-->


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