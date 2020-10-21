<link href="style.css" rel="stylesheet">

<script src="script.js"></script>
<?php
session_start();
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
echo "<p>Connected successfully</p>";
$stmt =  $conn->prepare("INSERT INTO users (user_name, user_uname, passwords) VALUES (?, ?, ?)");
$stmt->bind_param("sss", $name, $username, $passwords);

$name = $_POST["name"];
$username = $_POST["username"];
$passwords = $_POST["password"];

$sql = "SELECT * FROM users where user_uname = '$username' ;
$result = $conn->query($sql);
if (mysqli_num_rows($result) > 0) {
  -- (PLACEHODER IF USERNAME IS ALREADY TAKEN)
  }
} else {
  $stmt->execute();
}



echo "<p>New records created successfully</p>";
$stmt->close();
mysqli_close($conn);
header("Location: login.php");
?>

<div class="box2" id = "pre2">
            <h1>Profile Card</h1>
            <?php 
            echo "<p>Name".$name."</p>";
            ?>
</div> 