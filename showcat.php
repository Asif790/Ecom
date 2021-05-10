<?php
include('admindash.php');
 ?>
 <html>
<title> View Approve</title>
<table>
  <tr>
    <th>S.No</th>
    <th>Product</th>
    <th>price</th>
    <th>Approve</th>
    <th>Reject</th>
  </tr>
</table>
</html>
<?php
 $sno=1;
 require_once('connect.php');
 $sql="select * from seller ";
 $result=mysqli_query($connect,$sql);

 while($row=mysqli_fetch_assoc($result) )
 {
   echo "<tr><td>".$sno."</td><td>".$row['discp']."</td><td>".$row['price']."</td><td><input type="button" value="Approve" name="app"></td><td><input type="button" value="Reject" name="rej"></td></tr>";
  $sno=$sno+1;
 }


  ?>
