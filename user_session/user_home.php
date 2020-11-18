<?php
    session_start();
    if(!isset($_SESSION["user"])){
        echo "<script>location.href='../login.html'</script>";
    }
?>

<link href="user_home.css" rel="stylesheet">
            <script src="script.js"></script>
<header>
<ul class="nav-area">
<li><a href="#">Home</a></li>
<li><a href="../logout.php">LOG OUT</a></li>
</ul>
<div class="welcome-text">
    <h1>Welcome <?php echo $_SESSION["user"] ?></h1>
</div>
<div class="btns">
    <a href="user_session.php" target="_self">View Project</a>
    <a href="create_one.php" target="_self">Create Project</a>
</div>

</header>
