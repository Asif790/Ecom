 <?php
$servername = "localhost";
$username = "root";
$password = "bhai";
$dbname = "ecom";

// Create connectiona
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO user (Fname, lname, email, password, mno)
VALUES ('John', 'Doe', 'john@example.com', '12345', '1234')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?> 