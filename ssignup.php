<html>
    <title>signUp</title>
    <div class="nme">
        <br><br><center>
        <h1><a href="homepage.html">RentUs.com</a></h1>
        </center>
    </div>
     <head>
        <link rel="stylesheet" type="text/css" href="homedesign.css"></head>
    <body>
        <div class="signup">
            <form method="post" >
                <h1><center>SignUp Page</center></h1><br>
                First Name:<input type="text" placeholder="first Name"  name="fname"required="true" maxlength="20"><br><br>
                Last Name:<input type="text" placeholder="Last Name" name="lname" required="true" maxlength="20"><br><br>
                Email:<input type="Email" placeholder="Email" required="true" name="email" ><br><br>
                Password:<input type="Password" placeholder="(minimum length is six)" required="true" name="pwd" min="6"><br><br>
                Confirm Password:<input type="password" placeholder="Enter same as above" required="true" name="cpwd" min="6"><br><br>
                Phone No:<input type="number" placeholder="Phone Number" required="true" name="pno" maxlength="10"><br><br>
                <input type="submit" value="signup">

            </form>
        </div>
    </body>
     <div class="new"><a href="slogin.html">Already a Seller?Login</a></div>
</html>
<?php

require_once('connect.php');
$fname=$_POST['fname'];
$lname=$_POST['lname'];
$pwd=$_POST['pwd'];
$pno=$_POST['pno'];
$email=$_POST['email'];
$sql="insert into seller(Fname,lname,email,pass,mno) values('$fname','$lname' ,'$email','$pwd','$pno')";
$query=mysqli_query($connect,$sql);

   if($query)
   {
       header('location:slogin.html');
   }

    else
        echo '<script>alert("TRY AGAIN:SIGNUP UNSUCCESSFUL)</script>';


?>
