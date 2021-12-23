<?php
$server = "localhost";
$username = "root";
$password = "";
$dbname = "login_database";

$conn = mysqli_connect($server, $username, $password, $dbname);

if(isset($_POST['submit'])){
	if(!empty($_POST['name']) && !empty($_POST['email']) && !empty($_POST['phone']) && !empty($_POST['inquiry'])){
		$name = $_POST['name'];
		$email = $_POST['email'];
		$phone = $_POST['phone'];
		$inquiry = $_POST['inquiry'];

		$query = "insert into queries(name, email, phone, inquiry) values('$name', '$email', '$phone', '$inquiry')";
		$run = mysqli_query($conn, $query) or die(mysqli_error());
		if($run){
			echo "Form submitted successfully";
		}
		else{
			echo "Form not submitted";
		}
}
else{
	echo "All fields required";
}
}
?>