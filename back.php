<link href="style.css" rel="stylesheet">
<script src="script.js"></script>
<div class="box2" id = "pre2">
            <h1>Profile Card</h1>
            <?php
$servername = "sql12.freemysqlhosting.net";
$username = "sql12370284";
$password = "p3ABPUKQxT";
$dbname = "sql12370284";
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Sign up variables
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
echo "<p>Connected successfully</p>";
$stmt =  $conn->prepare("INSERT INTO users (user_name, user_uname, passwords) VALUES (?, ?, ?)");
$stmt->bind_param("sss", $name, $username, $passwords);

$name = $_POST["name"];
$username = $_POST["username"];
$passwords = $_POST["password"];

$stmt->execute();

echo "<p>New records created successfully</p>";
$stmt->close();
mysqli_close($conn);

echo "Name: ".$name;

?>
        </div>


