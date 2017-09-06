<?php
session_start();
$con = mysqli_connect ('l00092270.cirzp9u9acjn.eu-west-1.rds.amazonaws.com', 'awsstudent', 'password','DevOpsPansies') or die(mysqli_error($con));
if (mysqli_connect_errno())
{
echo "Failed to connect to MySQL: " . mysqli_connect_error();
}


$Email = mysqli_real_escape_string($con, $_SESSION['Email']);
$sql="DELETE from Customer where Email= '$_SESSION[Email]'";

if (!mysqli_query($con,$sql))
{
die('Error: ' . mysqli_error($con));
}
echo "Record Deleted";
header("Refresh:3; url=logout.php");

mysqli_close($con);
?>