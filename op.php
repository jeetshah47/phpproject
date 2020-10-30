<?php
/*include 'base.php';
$sql = "SELECT * FROM contentdata";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);
$row = mysqli_fetch_assoc($result);
           /* while($row = mysqli_fetch_assoc($result)) {
            }
echo $row['content_title'];*/
session_start();
$_SESSION['title'] = array('one','two','three','four');
foreach ($_SESSION['title'] as $values) {
echo $_SESSION['title'][0];
?>