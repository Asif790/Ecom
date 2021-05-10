<?php
require_once('connect.php');
$sql="select * from category";
$result=mysqli_query($connect,$sql);
while($row=mysqli_fetch_assoc($result)){

echo $row["categoryname"];
}
?>