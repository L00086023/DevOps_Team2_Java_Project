<?php
if(!empty($_POST["register-user"])) {
    /* Form Required Field Validation */
    foreach($_POST as $key=>$value) {
        if(empty($_POST[$key])) {
        $error_message = "All Fields are required";
        break;
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
            $success_message = "You have registered successfully!"; 
            unset($_POST);
        } else {
            $error_message = "Problem in registration. Try Again!"; 
        }
    }
}
?>
<html>
<head>
<title>PHP User Registration Form</title>
<style>
body{
    width:610px;
    font-family:calibri;
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
.demo-table {
    background: #d9eeff;
    width: 100%;
    border-spacing: initial;
    margin: 2px 0px;
    word-break: break-word;
    table-layout: auto;
    line-height: 1.8em;
    color: #333;
    border-radius: 4px;
    padding: 20px 40px;
}
.demo-table td {
    padding: 15px 0px;
}
.demoInputBox {
    padding: 10px 30px;
    border: #a9a9a9 1px solid;
    border-radius: 4px;
}
.btnRegister {
    padding: 10px 30px;
    background-color: #3367b2;
    border: 0;
    color: #FFF;
    cursor: pointer;
    border-radius: 4px;
    margin-left: 10px;
}
</style>
</head>
<body>
<form name="frmRegistration" method="post" action="">
<table border="0" width="500" align="center" class="demo-table">
<?php if(!empty($success_message)) { ?> 
<div class="success-message"><?php if(isset($success_message)) echo $success_message; ?></div>
<?php } ?>
<?php if(!empty($error_message)) { ?>   
<div class="error-message"><?php if(isset($error_message)) echo $error_message; ?></div>
<?php } ?>
<tr>
<td>CustId</td>
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
<td colspan=2>
<input type="checkbox" name="terms"> I accept Terms and Conditions <input type="submit" name="register-user" value="Register" class="btnRegister"></td>
</tr>
</table>
</form>
</body></html>