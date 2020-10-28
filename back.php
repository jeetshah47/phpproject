<link href="style.css" rel="stylesheet">

<script src="script.js"></script>
<?php 
session_start();
$servername = "localhost";
$username = "root";
$password = "";
$database = "iinvest";

// Create connection
$conn = mysqli_connect("localhost", "root", "", "iinvest");
// Sign up variables
// Check connection
if($conn === FALSE) {
  die("ERRORO");
}

$name = $_POST["name"];
$username = $_POST["username"];
$passwords = $_POST["password"];

echo "<p>Connected successfully</p>";
$stmt = $conn->prepare("INSERT INTO users (user_name, user_uname, passwords) VALUES (?, ?, ?)");
$stmt->bind_param("sss", $name, $username, $passwords);

$stmt->execute();
echo "New records created successfully";
$stmt->close();

mysqli_close($conn);

header("Location: login.html");
?>