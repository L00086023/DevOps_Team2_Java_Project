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

						<link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,400italic,300italic' rel='stylesheet' type='text/css'>
						<link href='https://fonts.googleapis.com/css?family=Open+Sans+Condensed:300,700' rel='stylesheet' type='text/css'>

						<script type="text/javascript" src="js/products.js"></script>
						
						<link href="css/styles.css" rel="stylesheet" type="text/css" media="screen">
						<link href="css/products.css" rel="stylesheet" type="text/css" media="screen">
	</head>
		
	<!-- ################################################################################ -->
	<!-- ################################################################################ -->
	<!-- ################################################################################ -->
    <body>
		<div id="wrapper">
				<!-- ################################################################################ -->
					<div id="top">
						<div id="logo">
								<a href="index.html"> <img src="images/logo.jpg"> </a>
						</div><!--Close logo div-->

							<div id="login">
             
							                                    <?Php
							if(!(isset($_SESSION['Email']))){
							echo "<div id=loginlink> <a href=http://localhost/DevOps_Team2_Java_Project-master/Dwp_pkg2/ProjectWebsite/login.php><span>Login</span></a> </div>";
							echo "<div id=reglink> <a href=http://localhost/DevOps_Team2_Java_Project-master/Dwp_pkg2/ProjectWebsite/register.php><span>register</span></a> </div>";
							
							}else{
							echo "
							 <div id=loginlink> <a href=http://localhost/DevOps_Team2_Java_Project-master/Dwp_pkg2/ProjectWebsite/logout.php>logout</a></div>  <br><a href=http://localhost/DevOps_Team2_Java_Project-master/Dwp_pkg2/ProjectWebsite/passwordform.php> \t\t\tchange password  <br></a> <br>Welcome $_SESSION[Email]";

							
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
						
				<!-- ################################################################################ -->  
						
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
								<li class="has-sub"><a href='products.php'><span>Products</span></a></li>
								<li class="active"><a href='contact.php'><span>Contact Us</span></a></li>
								<li class="has-sub"><a href='about.php'><span>About Us</span></a></li>
						</ul>
				</div>
				<!-- ################################################################################ -->
            
				
					<div id="product-content"> 

						<img src="images/lillies.jpg">
						
						<div id="product-container" ">
								<div id="product-desc">
									<h1> Lily </h1>
										Lillies... <br>
										............................................................<br>	
										<br>	
										<br>	
										_________________________<br>	
										
										<form action="#" class="form-products">
												  <div class="field-product">
													    <input type="number" name="qty" id="qty" class="field-product--input" value="1" maxlength="3">
													        <label for="qty" class="field-product--label ttu">quantity</label>
												  </div>
												  <div class="field-product options">
													    <select class="field-product--option">
													        
															<option value="Yellow">Yellow</option>
															<option value="Pink">Pink</option>
															<option value="Orange">Orange</option>
															
															<option value="White">White</option>
													    </select>
												  </div>
												  
										</form>		
								
											<br>
											<h2> PRICE: €30.00  </h2> 
								</div><!--end product-desc div-->
							
								<div id="buy-container">
									<ul>
										<a href=""> <li> BUY NOW </li> </a>
										<a href=""> <li> ADD TO CART </li> </a>
									</ul>
								</div><!--end buy-container div-->
						</div><!--end product-container dic-->
					
					</div> <!-- end product-content div -->
	
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