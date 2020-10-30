<?php
session_start();
include '../base.php';
$i=0;
?>
<html>
    <head>
    <title>Session</title>
    <link href = "session_style.css" rel="stylesheet">
    
    </head>
    <body>
     <div class="heading">
         <h1>Project Section</h1>
     </div>
     <div class="main">
         <script >
         const getData = (str) => {
    var xmlHttp = new XMLHttpRequest();
    xmlHttp.onreadystatechange = () => {
        if (this.readyState == 4 && this.status == 200) {
            window.open('user_session/project_blog.php','_self');
        }
        xmlhttp.open("GET", "user_session/project_blog.php?q=" + str, true);
        xmlhttp.send();

    }
}
          </script>
     <?php 
     
     $sql = "SELECT * FROM contentdata";
     $result = mysqli_query($conn, $sql);
     $_SESSION['title'] = array();
     if (mysqli_num_rows($result) > 0) {
            while($row = mysqli_fetch_assoc($result)) {
                
                array_push($_SESSION['title'],$row['content_title']);
           ?>
        
    <div class='cards' id = "<?php echo $i?>">
        <div class='image'>
            <img src="<?php echo $row['content_img']; ?>" alt='img1'>
        </div>
        <div class='title'>
            <p><b><?php echo $row['content_title']; ?></b></p>       
        </div>
        <div class='des'>
            <p><?php echo $row['content_desc1']; ?></p>
            <button onclick = "window.open('project_blog.php?q=<?php echo $_SESSION['title'][$i]?>','_self')">Read More..</button>
    </div>

    </div>
            <?php
            $i++;
        } 
            }
    ?>
    
</div>
    </body>
</html>