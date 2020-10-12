<?php
$servername = "sql12.freemysqlhosting.net";
$username = "sql12370284";
$password = "p3ABPUKQxT";
$dbname = "sql12370284";
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);


// Sign up variables

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";

$stmt =  $conn->prepare("INSERT INTO users (user_name, user_uname, passwords) VALUES (?, ?, ?)");
$stmt->bind_param("sss", $name, $username, $passwords);

$name = $_POST["name"];
$username = $_POST["username"];
$passwords = $_POST["password"];
"""learning git"""

$stmt->execute();

echo "New records created successfully";
$stmt->close();
mysqli_close($conn);
?>