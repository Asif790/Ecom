<?php

require_once('connect.php');
$fname=$_POST['fname'];
$lname=$_POST['lname'];
$pwd=$_POST['pwd'];
$pno=$_POST['pno'];
$email=$_POST['email'];
$sql="insert into user(Fname,lname,email,password,mno) values('$fname','$lname' ,'$email','$pwd','$pno')";
$query=mysqli_query($connect,$sql);

   if($query)
   {
       header('location:Login.html');
   }
        
    else
        echo '<script>alert("TRY AGAIN:SIGNUP UNSUCCESSFUL)</script>';
    
    
?>