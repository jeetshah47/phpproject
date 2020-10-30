<link href="style.css" rel="stylesheet">

<script src="script.js"></script>

<?php

//Creating Connection
include 'base.php';
//accepting credential input
$username = $_POST["username"];
$passwords = $_POST["passwords"];
//Verifing Credentials 
$sql = "SELECT * FROM users" ;
$flag = 0;
$result = mysqli_query($conn, $sql);
if (mysqli_num_rows($result) > 0) {

  // output data of each row
  while($row = mysqli_fetch_assoc($result)) {
    if($row["user_uname"] == $username && $row["passwords"] == $passwords) {
        $flag = 1;
        session_start();
        $_SESSION["user"] = $row["user_name"];
        echo "<script>location.href = window.open('user_session/user_home.php','_self') </script>";
        break;
    } 
  }

} else {
  echo "Sorry User Not Found";
}
if ($flag === 0){ echo "Sorry User Not Found"; }

mysqli_close($conn);
    ?>
