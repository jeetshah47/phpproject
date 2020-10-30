<?php
session_start();
if(!isset($_SESSION['user'])) {
    header("Location: login.html");
}

?>
<html>
    <head>
        <link rel="stylesheet" href="user_home.css">
    </head>
    <body>
        <button onclick="location.href='/logout.php'">Logout</button>
        <div class="main">
            <h1>Welcome <?php echo $_SESSION["user"] ;?></h1>
            <h3>What would you like to do</h3>
            <div class="btns">
            <button onclick="window.open('user_session.php','_self');">View Project</button>
            <button>Create Project</button>
            </div>
        </div>
    </body>
</html>