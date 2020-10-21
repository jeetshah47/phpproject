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
//accepting credential input
$username = $_POST["username"];
$passwords = $_POST["password"];
//Verifing Credentials 
$sql = "SELECT * FROM users where user_uname = '$username'&&passwords = '$passwords' ;
$result = $conn->query($sql);
if (mysqli_num_rows($result) == 0) {
--   header('PLACEHOLDER FOR LOGIN PAGE')
  }
  else{
    --   header('placeholder for home page');
    }
    ?>