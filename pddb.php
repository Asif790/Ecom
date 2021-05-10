<?php
require_once('connect.php');
if(isset($_POST['submt']))
{
  $file_name=$_FILES['imgupload']['name'];
  $file_type=$_FILES['imgupload']['type'];
  $file_size=$_FILES['imgupload']['size'];
  $file_temp_loc=$_FILES['imgupload']['tmp_name'];
  $file_store="/var/www/html/ecom/upimg".$file_name;
  if (move_uploaded_file($file_temp_loc,$file_store))) {
    echo "File is valid, and was successfully uploaded.\n";
  } else {
     echo "upload failed";
  }

  $price=$_POST['price'];
  $dura=$_POST['duration'];
  $discp=$_POST['pdis'];
  $status=0;
  $pd="mobile";
  $sql="insert into product(categoryname,discp,price,duration,status) values ('$pd','$discp','$price','$dura','$status')";
$result=mysqli_query($connect,$sql);
if($result)
{
  echo 'successfuly applied';
  header('location: sellerdash.html');
}
}

 ?>
,
