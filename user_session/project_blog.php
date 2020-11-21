<?php 
          session_start();
          if(!isset($_SESSION['user'])){
              echo "<script>location.href='../login.html'</script>";          
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
                <h2>Title <?php echo $data[1];?></h2>  
                <h5>Dec 7</h5>
                <img src=" <?php echo $data[0]; ?> " alt="blog 1">
                <p>Some text..</p> 
                <p><?php echo $data[2]; ?></p>
                <form><script src="https://checkout.razorpay.com/v1/payment-button.js" data-payment_button_id="pl_FvRl0kQRa1YEcH"> </script> </form>
                </div>
            </div>
            <div class="right-column">
                <div class="card">
                    <h2>About Me</h2>
                    <img src="../uploads/jeet.jpg" alt="profile">
                    <p>Some information about me...:)</p>
                </div>
                <div class="card">
                    <h3>Project Team</h3>
                    <img src="../uploads/hitanshu.jpg" alt="profile">
                    <img src="../uploads/shivam.png" alt="profile">
                    <img src="../uploads/dhyey.png" alt="profile">
                </div>
                <div class="card">
                    <h3>View More</h3>
                    <p>Some Text...</p>
                </div>
            </div>
        </div>
    </body>
</html>