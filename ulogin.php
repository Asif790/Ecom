<?php
require_once("connect.php");
if(isset($_POST["submit"]))
{
    $email=$_POST["luser"];
    $pass=$_POST["pass"];
    
$sql = "select * from user where email='$email' and password='$pass'";
    $query=mysqli_query($connect,$sql);
	  if(mysqli_num_rows($query)>0)
		  header('location: homepage.html');
	  else
		  echo'<Script>alert("Invalid username or password ")</script>';
}
?>