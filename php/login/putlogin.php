<?php
include_once '../config/connect_login.php';
?>
<?php

if (isset($_POST['login'])) {
	$username = $_POST['username'];
	$password = $_POST['password'];
	$remmenber = $_POST['remmenber'];

	if($remmenber == 1) {
		setcookie('user', $username, time() + 60*60*24*10, "/");
		setcookie('pass', $username, time() + 60*60*24*10, "");
	}
	// if ($remmenber == 1) {
	// 	setcookie('username', $username, time() + 60*60*24*10, "/");
	// 	setcookie('password', $username, time() + 60*60*24*10, "");
	// }

	$sql = "SELECT * FROM login WHERE username='$username' && password='$password'";

	$query = mysqli_query($mysqli,$sql) or die("Login problem");

	$result = mysqli_num_rows($query);

	if ($result == 1) {

		$_SESSION['user'] = $username;
		header("location:../student/student.php");
	}

}

?>