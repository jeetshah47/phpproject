<link href="style.css" rel="stylesheet">

<script src="script.js"></script>
<?php 
session_start();
include 'base.php';
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