<?php
session_start();
?>


<!-- ################################################################################ --><!-- ################################################################################ -->
<!-- ################################################################################ --><!-- ################################################################################ -->
<!-- ################################################################################ --><!-- ################################################################################ -->
<!doctype html>

<html><!-- InstanceBegin template="/Templates/MainTemp.dwt" codeOutsideHTMLIsLocked="false" -->

	<head>
		<!-- ################################################################################ -->
			<title>Pansies</title>


			<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

						<link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,400italic,300italic' rel='stylesheet' type='text/css'>
						<link href='https://fonts.googleapis.com/css?family=Open+Sans+Condensed:300,700' rel='stylesheet' type='text/css'>

						<link href="css/styles.css" rel="stylesheet" type="text/css" media="screen">
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
						
				</div><!--Close top div-->
				<!-- ################################################################################ -->
				<div id="topnav">
						<ul>
								<li class="active"><a href='index.php'><span>Home</span></a></li>
								<li class="has-sub"><a href='products.html'><span>Products</span></a></li>
								<li class="active"><a href='contact.php'><span>Contact Us</span></a></li>
								<li class="has-sub"><a href='about.php'><span>About Us</span></a></li>
						</ul>
				</div>
				<!-- ################################################################################ -->
            
				<div id="content-wrapper">
					<div id="content"> 
				
						<h1> Please don't hesitate to contact us if you have any queries. </h1 text-align:left;>
						
								<div id="contact">

								 
									
										<form  name="form1" action="mail.php" method="POST">
													<p> <input type="text" name="name" placeholder="name"></p text-align:center;>
													<p><input type="text" name="email" placeholder="Email"></p text-align:center;>
													<p><textarea name="message" rows="6" cols="25" placeholder="message"></textarea><br /></p text-align:center;>
													<p><input type="submit" value="Send"><input type="reset" value="Clear"><p text-align:center;>


										</form>
										
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