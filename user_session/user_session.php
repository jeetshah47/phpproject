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
     <?php 
            for($i=0;$i<3;$i++) {?>
        
    <div class='cards'>
        
        <div class='image'>
            <img src='https://csg1003200072f46024.blob.core.windows.net/images/azure1.jpg' alt=''>
        </div>
        <div class='title'>
            <h1>Title Names</h1>            
        </div>
        <div class='des'>
            <p>Write your title</p>
            <button>Read More..</button>
        </div>

    </div>
            <?php }
    ?>
    
</div>
    </body>
</html>
