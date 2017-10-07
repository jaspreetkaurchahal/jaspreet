


 <?php
$servername = "localhost";
$username = "root";
$password = "";
$databaseName='payroll';

// Create connection
$conn=mysql_connect("$servername","$username","$password","$databaseName");
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";
?> 




