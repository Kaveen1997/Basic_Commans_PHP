<!DOCTYPE html>
<html>
<body>

<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "basic_command";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT volume FROM user WHERE volume < 100 ";
$result = $conn->query($sql);

    while($row = $result->fetch_assoc()) {

        echo "Low Volume Count="." ". $row["volume"]. "<br>";  
    }  
    
?>




</body>
</html>