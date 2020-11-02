<?php
include 'base.php';
$title = 'Traackr';
$sql = "SELECT * FROM  contentdata";
$result = mysqli_query($conn, $sql);
$data = array();
if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
      if($row["content_title"] == $title) {
          $flag = 1;
          array_push($data, $row['content_img'], $row['content_title'], $row['content_desc2']);
          break;
      } 
    }
  
  } else {
    echo "Sorry User Not Found";
  }
  echo $data[2];
?>