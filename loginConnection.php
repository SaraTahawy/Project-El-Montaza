<?php
$servername = "localhost";
$name = "root";
$email = "root";
$password = "root";
$dbname = 'database1';

$conn = new mysqli('localhost', 'root', '', 'database1');

if ($conn->connect_error) {
die("Connection Failed: " . $conn->connect_error);
}
$email = $_POST['email'];
$password = $_POST['password'];
$sql = "SELECT * FROM db WHERE email='$email' AND password='$password'";
$result = $conn->query($sql);

 
if ($result->num_rows > 0) {
	while($row = $result->fetch_assoc()){
		$name = $row['name'];
  echo "<h2> Welcom, $name ! </h2>";
} 
}
else{
	echo "<script>alert('email or password incorrect,please try agine');
	</script>";
}

$conn->close();
?>
 