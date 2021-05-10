<?php
require_once("connect.php");
 $catnme=$_POST["cat"];
   
if(isset($_POST["addbtn"]))
{
   
    $sql="insert into category(categoryname) values ('$catnme')";
    $query=mysqli_query($connect,$sql);
    if($query)
    {
        echo '<script> alert("added successfully")</script>';
        header('location: addcat.html');
    }
    else
    {
         echo '<script> alert("try again")</script>';
    }
    
}
?>