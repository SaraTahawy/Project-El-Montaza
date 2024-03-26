<?php 
 $name=$_POST['name'];
 $email = $_POST['email'];
 $password = $_POST['password'];
 $confirm_password= $_POST['confirm_password'];
 $dbname = 'database1';
 
 $conn = new mysqli('localhost', 'root', '', 'database1');
 if($conn->connect_error){ 
 die('Connection Failed: '.$conn->connect_error);
 } else {
	 // Check if email already exists
	 $checkStmt = $conn->prepare("SELECT email FROM db WHERE email = ?");
	 $checkStmt->bind_param("s", $email); 
	 $checkStmt->execute();
	 $checkResult = $checkStmt->get_result();
	 if ($checkResult->num_rows > 0){
		  echo "This email is already registered.";
	 exit;
	 }
 
	 // Insert new user
	 $stmt = $conn->prepare("INSERT INTO db (name,email, password,confirm_password) VALUES (?,?,?,?)");
	 $stmt->bind_param("ssss", $name,$email, $password,$confirm_password); 
	 $stmt->execute(); 
	 echo "<h2>Registration Successful, $name!</h2>";
	 $stmt->close();
	 $conn->close();
	 }
	 ?>