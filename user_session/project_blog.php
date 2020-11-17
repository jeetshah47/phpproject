<?php 
          session_start();
          if(!isset($_SESSION['user'])){
              echo "<script>location.href='../login.html'</script>"
          }
          include '../base.php';
          $q = $_REQUEST['q'];
          $sql = "SELECT * FROM  contentdata";
          $result = mysqli_query($conn, $sql);
          $data = array();
          if (mysqli_num_rows($result) > 0) {
              // output data of each row
              while($row = mysqli_fetch_assoc($result)) {
                if($row["content_title"] == $q) {
                    $flag = 1;
                    array_push($data, $row['content_img'], $row['content_title'], $row['content_desc2']);
                    break;
                } 
              }
            }
                ?>
<html>
    <head>
        <link rel="stylesheet" href="styles.css">
    </head>
    <body>
        <header>
            <h1><?php echo $data[1]; ?></h1>
        </header>
       <!-- <div class="image">
            <img src="../uploads/background.png"> 
        </div>-->
       
        
        <div class="row">
            <div class="left-column">
                <div class="card">
                <h2>Title heading</h2>  
                <h5>Title description , Dec 7</h5>
                <img src=" <?php echo $data[0]; ?> " alt="blog 1">
                <p>Some text..</p> 
                <p> <?php echo $data[2]; ?> </p>
                </div>
                 
            </div>
            <div class="right-column">
                <div class="card">
                    <h2>About Me</h2>
                    <img src="../uploads/jeet.jpg" alt="profile">
                    <p>Some information about me...:)</p>
                </div>
                <div class="card">
                    <h3>Popular project</h3>
                    <img src="../uploads/jeet.jpg" alt="profile">
                    <img src="../uploads/jeet.jpg" alt="profile">
                    <img src="../uploads/jeet.jpg" alt="profile">
                </div>
                <div class="card">
                    <h3>Follow Me</h3>
                    <p>Some Text...</p>
                </div>
            </div>
        </div>
    </body>
</html>