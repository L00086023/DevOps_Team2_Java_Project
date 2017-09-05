<?php
session_start();

if (!(isset($_SESSION['Email']) || $_SESSION['Email'] == ''))
{
    header("location:login.php");
}

$dbcon = mysqli_connect ('l00092270.cirzp9u9acjn.eu-west-1.rds.amazonaws.com', 'awsstudent', 'password','DevOpsPansies') or die(mysqli_error($dbcon));



$password1 = mysqli_real_escape_string($dbcon, $_POST['newPassword']);
$password2 = mysqli_real_escape_string($dbcon, $_POST['confirmPassword']);
$Email = mysqli_real_escape_string($dbcon, $_SESSION['Email']);

if ($password1 <> $password2)
{
    echo "your passwords do not match";
    

}
else if (mysqli_query($dbcon, "UPDATE Customer SET Password = '$password1' WHERE Email= '$_SESSION[Email]'"))
{
    echo "You have successfully changed your password.";
      header("Location:index.php");
}
else
{
    mysqli_error($dbcon);
    echo"gg";
}

?>