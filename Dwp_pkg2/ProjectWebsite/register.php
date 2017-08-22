<?php
if(!empty($_POST["register-user"])) {
    /* Form Required Field Validation */
    foreach($_POST as $key=>$value) {
        if(empty($_POST[$key])) {
        $error_message = "All Fields are required";
        break;
        }
    }

  /* Email Validation */
    if(!isset($error_message)) {
        if (!filter_var($_POST["Email"], FILTER_VALIDATE_EMAIL)) {
        $error_message = "Invalid Email Address";
        }
    }

    
    /* Validation to check if Terms and Conditions are accepted */
    if(!isset($error_message)) {
        if(!isset($_POST["terms"])) {
        $error_message = "Accept Terms and Conditions to Register";
        }
    }

    if(!isset($error_message)) {
        require_once("dbcontroller.php");
        $db_handle = new DBController();
        $query = "INSERT INTO Customer (CustID,Name, Address, Email,TelNum, Password) VALUES
        ('" . $_POST["CustID"] . "','" . $_POST["Name"] . "', '" . $_POST["Address"] . "', '" . $_POST["Email"] . "', '" . md5($_POST["Telumber"]) . "', '" . $_POST["Password"] . "')";
        $result = $db_handle->insertQuery($query);
        if(!empty($result)) {
            $error_message = "";
            $success_message = "You have registered successfully! you will be redirdct to the login page"; 
            unset($_POST);
            header('Refresh: 5; URL=login.html');

        } else {
            $error_message = "Problem in registration. Try Again!"; 
        }
    }
}
?>

<html><!-- InstanceBegin template="/Templates/MainTemp.dwt" codeOutsideHTMLIsLocked="false" -->

        <head>
            <!-- InstanceBeginEditable name="doctitle" -->
            <title>Pansies</title>
            <!-- InstanceEndEditable -->
    
            <script src="js/jquery.js" type="text/javascript"></script>
            <link href="css/styles.css" rel="stylesheet" type="text/css" media="screen">
            <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,400italic,300italic' rel='stylesheet' type='text/css'>
            <link href='https://fonts.googleapis.com/css?family=Open+Sans+Condensed:300,700' rel='stylesheet' type='text/css'>
    
            <script type="text/javascript" src="js/slider.js"></script>
            <script type="text/javascript" src="js/menu.js"></script>
            <script type="text/javascript" src="js/imagegallery.js"></script>
            <script type="text/javascript" src="js/slide_speed.js"></script>
    
            <link href="css/slider.css" rel="stylesheet" type="text/css" media="screen">
            <link href="css/menustyle.css" rel="stylesheet" type="text/css" media="screen">
            <link href="css/imagegallery.css" rel="stylesheet" type="text/css" media="screen">
    </head>
<body>
 <body>
        <div id="wrapper">
        
                   <!-- ################################################################################ -->
                <div id="top">
                        <div id="logo">
                                <img src="images/logo.jpg">
                        </div><!--Close logo div-->

                        <div id="login">
                                        <div id="loginlink"> <a href="login.html"><span>Login</span></a> </div>
                                        <div id ="reglink"> <a href="http://localhost/DevOps_Team2_Java_Project-master/Dwp_pkg2/ProjectWebsite/register.php"><span>Register</span></a></div>
                        </div><!--Close login div-->
                        
                        <div id="phone_addr">
                            <ul>
                                 &bull;(074) - 9123456 <br>
                                 &bull;Main St. Letterkenny, <br>Co.Donegal, Ireland 
                            </ul>
                        </div><!--Close phone_addr div-->
                        
                </div><!--Close top div--
                <!-- ################################################################################ -->
                <div id="topnav">
                        <ul>
                                <li class="active"><a href='index.html'><span>Home</span></a></li>
                                <li class="has-sub"><a href='#'><span>Products</span></a></li>
                                <li class="active"><a href='contact.html'><span>Contact</span></a></li>
                                <li class="has-sub"><a href='about.html'><span>About Us</span></a></li>
                        </ul>

  
<body>  



<div id="content-wrapper">
    <div id="content"> 
    <div id="about">
                       
     <br>                     
     <h1> Registration </h1 text-align:center;>
           
</div>

                                            


<style>
     h1{

          margin-left: 385px;
     }
     .btnRegister {
    padding: 10px 30px;
    background-color: #3367b2;
    border: 0;

    color: #FFF;
    cursor: pointer;
    border-radius: 4px;
    margin-left: 105px;
}    
.error-message {
    padding: 7px 10px;
    background: #fff1f2;
    border: #ffd5da 1px solid;
    color: #d6001c;
    border-radius: 4px;
}
.success-message {
    padding: 7px 10px;
    background: #cae0c4;
    border: #c3d0b5 1px solid;
    color: #027506;
    border-radius: 4px;
} 
</style> 


<form name="frmRegistration" method="post" action="">
<table border="0" width="600" align="center" class="demo-table">
<?php if(!empty($success_message)) { ?> 
<div class="success-message"><?php if(isset($success_message)) echo $success_message; ?></div>
<?php } ?>
<?php if(!empty($error_message)) { ?>   
<div class="error-message"><?php if(isset($error_message)) echo $error_message; ?></div>
<?php } ?>

<tr>
<td>Customer Id</td>
<td><input type="text" class="demoInputBox" name="CustID" value="<?php if(isset($_POST['CustID'])) echo $_POST['CustID']; ?>"></td>
</tr>
<tr>
<td>Name</td>
<td><input type="text" class="demoInputBox" name="Name" value="<?php if(isset($_POST['Name'])) echo $_POST['Name']; ?>"></td>
</tr>
<tr>
<td>Address</td>
<td><input type="text" class="demoInputBox" name="Address" value="<?php if(isset($_POST['Address'])) echo $_POST['Address']; ?>"></td>
</tr>
<tr>
<td>Email</td>
<td><input type="text" class="demoInputBox" name="Email" value="<?php if(isset($_POST['Email'])) echo $_POST['Email']; ?>"></td>
</tr>
<tr>
<td>number</td>
<td><input type="text" class="demoInputBox" name="Telumber" value="<?php if(isset($_POST['Telumber'])) echo $_POST['Telumber']; ?>"></td>
</tr>
<tr>
<td>Password</td>
<td><input type="password" class="demoInputBox" name="Password" value=""></td>
</tr>



<tr>
<td colspan=3>
<input type="checkbox" name="terms"> I accept Terms and Conditions <input type="submit" name="register-user" value="Register" class="btnRegister"></td>
</tr>
</table>
    </div> <!-- end content div -->
                </div><!-- end content-wrapper div -->
            <!-- ################################################################################ -->

</form>
</body>

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
                        
                        
                        
                
             
        </div><!--Close wrapper div-->
    </body>

<!-- InstanceEnd -->
</html>