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

<html><!-- InstanceBegin template="/Templates/MainTemp.dwt" codeOutsideHTMLIsLocked="false" -->

	<head>
		<!-- ################################################################################ -->
			<title>Pansies <?php echo $includeMode; ?></title>

			 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">



						<link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,400italic,300italic' rel='stylesheet' type='text/css'>
						<link href='https://fonts.googleapis.com/css?family=Open+Sans+Condensed:300,700' rel='stylesheet' type='text/css'>

						<script src="js/jquery.js" type="text/javascript"></script>
						<script type="text/javascript" src="js/slider.js"></script>
						<script type="text/javascript" src="js/menu.js"></script>
						<script type="text/javascript" src="js/imagegallery.js"></script>
						<script type="text/javascript" src="js/slide_speed.js"></script>
    
						<link href="css/loginPage.css" rel="stylesheet" type="text/css" media="screen">
						<link href="css/<?php echo $cssFileName;?>" rel="stylesheet" type="text/css" media="screen">
						
						
						<link href="css/imagegallery.css" rel="stylesheet" type="text/css" media="screen">
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
									<a href="index.php>"> <img src="images/logo.jpg"> </a>
							</div>
							<!-- ################################################################################ -->
							<div id="login">



    									
						
    								
							                              
							                                    <?Php
							if(!(isset($_SESSION['Email']))){
							echo "Please login</a> to use this page ";
							
							}else{
							echo "Welcome $_SESSION[Email] | <div id=loginlink> <a href=http://localhost/DevOps_Team2_Java_Project-master/Dwp_pkg2/ProjectWebsite/logout.php><span>logout</span></a> </div>";
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
							
							<div id="phone_addr">
							<ul>
								 &bull;(074) - 9123456 <br>
								 &bull;Main St. Letterkenny, <br>Co.Donegal, Ireland 
							</ul>
						</div><!--Close phone_addr div-->
							
							<!-- ################################################################################ -->
							
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
				
						<!-- ################################################################################ -->
								<div id="login-form">
							<form method="POST">
							<br>
							<br>
							<h1>Login</h1>
							Please enter your Email and password below
							<br>
							<br>
	Email:
	<input type="text" name="Email">
	<br />
	Password:
	<input type="password" name="Password">
	<br />
	<input type="submit" name="sub">

		<a href="http://localhost/DevOps_Team2_Java_Project-master/Dwp_pkg2/ProjectWebsite/register.php"><span>Dont have an account click here</span></a>
</form>
 

<?php 

if(isset($_POST['logout']))
{
  session_unset();
  session_destroy();
  echo "you have been logged out";


}


if(isset($_SESSION['use']))   // Checking whether the session is already there or not if 
                              // true then header redirect it to the home page directly 
 {
    header("Location:login.php"); 
 }


	// this will trigger when submit button click
	if(isset($_POST['sub'])){
 
		$db = new mysqli("l00092270.cirzp9u9acjn.eu-west-1.rds.amazonaws.com","awsstudent","password","DevOpsPansies");

		$Email = $_POST['Email'];  
        $Password = $_POST['Password']; 

        
		
			$query = "SELECT * FROM Customer WHERE Email='$Email' and Password='$Password'";
 
		// execute query
		$sql = $db->query($query);
		// num_rows will count the affected rows base on your sql query. so $n will return a number base on your query
		$n = $sql->num_rows;
 
		// if $n is > 0 it mean their is an existing record that match base on your query above 
		 if($n > 0){

			 $_SESSION['Email']=$Email;
			 




			
            

          echo "Successfully logged in ";
			header('Refresh: 2; URL=index.php');
   
         
		} 

	 else if(empty($Email))
       {
   
     echo "Email cannot be empty";
      
   
   
     }

      else if(empty($Password))
       {
   
     echo " password cannot be empty";
      
   
   
     }else  {
 
			echo "Incorrect username or password";
		}
	}
?>
										
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
									
						</div><!--Close footer div-->
		<!-- ################################################################################ -->
		</div>
        </div>	
    </body>

</html>