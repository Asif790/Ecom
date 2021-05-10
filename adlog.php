<?php
require_once("connect.php");
if(isset($_POST["subbtn"]))
{
    $usr=$_POST["auser"];
    $pass=$_POST["apass"];
    
$sql = "select * from admin where uname='$usr' and pass='$pass'";
    $query=mysqli_query($connect,$sql);
	  if(mysqli_num_rows($query)>0)
		  header('location: admindash.html');
	  else
		  echo'<Script>alert("Invalid username or password ")</script>';
}
?>