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
			<title>Pansies<?php echo $includeMode; ?></title>

						<!-- Latest compiled and minified CSS -->
						<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

						<!-- jQuery library -->
						<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

						<!-- Latest compiled JavaScript -->
						<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

						<link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,400italic,300italic' rel='stylesheet' type='text/css'>
						<link href='https://fonts.googleapis.com/css?family=Open+Sans+Condensed:300,700' rel='stylesheet' type='text/css'>


    
						
						<link href="css/productsGallery.css" rel="stylesheet" type="text/css" media="screen">
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
							<!-- ################################################################################ -->
							<div id="logo">
									<a href="http://localhost/DevOps_Team2_Java_Project-master/Dwp_pkg2/ProjectWebsite/index.php"> <img src="images/logo.jpg"> </a>
							</div>
							<!-- ################################################################################ -->
							

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
							
							
							<!-- ################################################################################ -->
				</div>
				<!-- ################################################################################ -->
				<div id="topnav">
						<ul>
						<?Php
							if(!(isset($_SESSION['Email']))){

								echo "<li class=active><a href=http://localhost/DevOps_Team2_Java_Project-master/Dwp_pkg2/ProjectWebsite/index.php><span>Home</span></a></li>
								<li class=active><a href='products.php'><span>Products</span></a></li>
								<li class=active><a href='contact.php'><span>Contact Us</span></a></li>
								<li class=has-sub><a href='about.php'><span>About Us</span></a></li>";
							
							
							}else{
							echo "<li class=active><a href=http://localhost/DevOps_Team2_Java_Project-master/Dwp_pkg2/ProjectWebsite/index.php><span>Home</span></a></li>
								<li class=active><a href='products.php'><span>Products</span></a></li>
								<li class=active><a href='contact.php'><span>Contact Us</span></a></li>
								<li class=has-sub><a href='about.php'><span>About Us</span></a></li>
								<li class=has-sub><a href='about.php'><span>Specials</span></a></li>";
							
							}
						?>
				</div>
				<!-- ################################################################################ -->
            
				<div id="content-wrapper">
					<div id="content"> 
				
						
	<div class="wrap">
    
		<!-- Define all of the tiles: -->
		<div class="box">
				<div class="boxInner">
							<a href="rose.php">
							<img src="images/red-rose.jpg" />
							</a>
			<div class="titleBox"> Roses  </div>
			</div>
		</div>
		
		
		<div class="box">
				<div class="boxInner">
							<a href="pansies.php">
							<img src="images/pansy.jpg" />
							</a>
			<div class="titleBox"> Pansies  </div>
			</div>
		</div>
		
		
		<div class="box">
				<div class="boxInner">
							<a href="daffodil.php">
							<img src="images/daffodil.jpg" />
							</a>
			<div class="titleBox"> Daffodils  </div>
			</div>
		</div>
		
		
    <div class="box">
				<div class="boxInner">
							<a href="tulip.php">
							<img src="images/tulips.jpg" />
							</a>
			<div class="titleBox"> Tulips </div>
			</div>
		</div>
	
	
    <div class="box">
				<div class="boxInner">
							<a href="crocus.php">
							<img src="images/crocus.jpg" />
							</a>
			<div class="titleBox"> Crocus </div>
			</div>
		</div>
	
	
    <div class="box">
				<div class="boxInner">
							<a href="lillies.php">
							<img src="images/lillies.jpg" />
							</a>
			<div class="titleBox"> Lillies  </div>
			</div>
		</div>
	
	
    

    
  </div>
  <!-- /#wrap -->
  
  
											
						
						
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
							</div>
					
            </div>
		<!-- ################################################################################ -->
        </div>	
    </body>

</html>