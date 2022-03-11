<?php

// Đây là file đọc dữ liệu

if (isset($_GET['id']) && !empty(trim(($_GET['id'])) {
	// code...
	include_once '../config/connect_student.php';

	$sql = "SELECT FROM student WHERE id = ?";

	if ($stmt = mysqli_prepare($mysqli,$sql)) {
		// code...
		mysqli_stmt_bind_param($stmt,'i',$param_id);

		// set parameters
		$param_id = trim($_GET['id']);

		if (mysqli_stmt_execute($stmt)) {
			// code...
			$result = mysqli_stmt_get_result($stmt);

			if (mysqli_num_rows($result) == 1) {
				// code...
				$row = mysqli_fetch_array($result, MYSQLI_ASSOC);

				// Code
				$profile_code = $row['profile_code'];
				$student_code = $row['student_code'];
				$firstname = $row['firstname'];
				$lastname = $row['lastname'];
				$gender = $row['gender'];
				$date_of_birth = $row['date_of_birth'];
				$place_of_birth = $row['place_of_birth'];
				$race = $row['race'];
				$religion = $row['religion'];
				$identity_card = $row['identity_card'];
				$date_range = $row['date_range'];
				$issued_by = $row['issued_by'];
				$phone = $row['phone'];
				$email = $row['email'];
				$address = $row['address'];
				$note = $row['note'];
				$student_status = $row['student_status'];
				$agree = $row['agree'];
			}else{
				header("location:../backend/error.php");
				exit();

			}
		}else{
			echo "Opps! Something went wrong. Please try again later.";
		}
	}

	// Close
	mysqli_stmt_close($stmt);

	mysqli_close($mysqli);
}else{
	header("location: ../backend/error.php");
	exit();
}

?>