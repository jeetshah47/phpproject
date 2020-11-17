<?php 
$conn=mysqli_init(); 
mysqli_ssl_set($conn, NULL, NULL, NULL, NULL, NULL);
mysqli_real_connect($conn, "iinvest.mysql.database.azure.com", "Jeet@iinvest", "9898513203js@", "records", 3306);
// Sign up variables
// Check connection
if($conn === FALSE) {
  die("ERRORO");
}

?>