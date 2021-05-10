 <?php
$servername = "localhost";
$username = "root";
$password = "bhai";
$db_name= "ecom";

$connect = mysqli_connect($servername, $username, $password,$db_name);

if ($connect->connect_error) {
    die("Connection failed: ". $conn->connect_error);
}
else
    echo "Unsuccessfull";
?>
