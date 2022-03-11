<?php

include_once '../config/connect_student.php';

$profile_code = $student_code = $firstname = $lastname = $gender = $date_of_birth = $place_of_birth = $race = $religion = $identity_card = $date_range = $issued_by= $phone = $email = $address = $note = $student_status = $agree = "";

$profile_code_error = $student_code_error = $firstname_error = $lastname_error = $gender_error = $date_of_birth_error = $place_of_birth_error = $race_error = $religion_error = $identity_card_error = $date_range_error = $issued_by_error= $phone_error = $email_error = $address_error = $note_error = $student_status_error = $agree_error = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {


	$input_profile_code = trim($_POST["profile_code"]);

	if (empty($input_profile_code)) {

		$profile_code_error = "<p style=color:red;margin-top:10px>Please enter  proflie code.</p>";

	}else{
		$profile_code = $input_profile_code;
	}


	$input_student_code = trim($_POST["student_code"]);

	if (empty($input_profile_code)) {

		$student_code_error = "<p style=color:red;margin-top:10px>Please enter student code.</p>";

	}else{
		$student_code = $input_student_code;
	}

	$input_firstname = trim($_POST["firstname"]);

	if (empty($input_firstname)) {

		$firstname_error = "<p style=color:red;margin-top:10px>Please enter user firstname.</p>";

	}else{
		$firstname = $input_firstname;
	}

	$input_lastname = trim($_POST["lastname"]);

	if (empty($input_lastname)) {

		$lastname_error = "<p style=color:red;margin-top:10px>Please ennter user lastname.</p>";

	}else{
		$lastname = $input_lastname;
	}



	// $gender = trim($_POST["gender"]);

	// if (empty($select_gender)) {

	// 	$gender_error = "<p style=color:red;margin-top:10px>Please enter code proflie.</p>";

	// }else{
	// 		$gender = $select_gender;
	// }

	$input_date_of_birth = trim($_POST["date_of_birth"]);

	if (empty($input_date_of_birth)) {

		$date_of_birth_error = "<p style=color:red;margin-top:10px>Please fill date-birth-day.</p>";

	}else{
		$date_of_birth = $input_date_of_birth;
	}

	$input_place_of_birth = trim($_POST["place_of_birth"]);

	if (empty($input_place_of_birth)) {

		$place_of_birth_error = "<p style=color:red;margin-top:10px>Please enter place-birth.</p>";

	}else{
		$place_of_birth = $input_place_of_birth;
	}

	$input_race = trim($_POST["race"]);

	if (empty($input_race)) {

		$race_error = "<p style=color:red;margin-top:10px>Please enter race national.</p>";

	}else{
		$race = $input_race;
	}


	$input_religion = trim($_POST["religion"]);

	if (empty($input_religion)) {

		$religion_error = "<p style=color:red;margin-top:10px>Please enter religion.</p>";

	}else{
		$religion = $input_religion;
	}


	$input_identity_card = trim($_POST["identity_card"]);

	if (empty($input_identity_card)) {

		$identity_card_error = "<p style=color:red;margin-top:10px>Please enter identity_card.</p>";

	}else{
		$identity_card = $input_identity_card;
	}

	$input_date_range = trim($_POST["date_range"]);

	if (empty($input_date_range)) {

		$date_range_error = "<p style=color:red;margin-top:10px>Please enter date_range.</p>";

	}else{
		$date_range = $input_date_range;
	}

	$input_issued_by = trim($_POST["issued_by"]);

	if (empty($input_issued_by)) {

		$issued_by_error = "<p style=color:red;margin-top:10px>Please enter issued_by.</p>";

	}else{
		$issued_by = $input_issued_by;
	}


	$input_phone = trim($_POST["phone"]);

	if (empty($input_phone)) {

		$phone_error = "<p style=color:red;margin-top:10px>Please enter code phone.</p>";

	}else{
		$phone = $input_phone;
	}


	$input_email = trim($_POST["email"]);

	if (empty($input_email)) {

		$email_error = "<p style=color:red;margin-top:10px>Please enter code email.</p>";

	}else{
		$email = $input_email;
	}


	$input_address = trim($_POST["address"]);

	if (empty($input_address)) {

		$address_error = "<p style=color:red;margin-top:10px>Please enter code address.</p>";

	}else{
		$address = $input_address;
	}


	$input_note = trim($_POST["note"]);

	if (empty($input_note)) {

		$note_error = "<p style=color:red;margin-top:10px>Please enter code note.</p>";

	}else{
		$note = $input_note;
	}

	// $input_student_status = trim($_POST["student_status"]);

	// if (empty($input_student_status)) {

	// 	$student_status_error = "<p style=color:red;margin-top:10px>Please enter code proflie.</p>";

	// }else{
	// 	$student_status = $input_student_status;
	// }


	// $input_agree = trim($_POST["agree"]);

	// if (empty($input_agree)) {

	// 	$agree_error = "<p style=color:red;margin-top:10px>Please enter code proflie.</p>";

	// }else{
	// 	$agree = $input_agree;
	// }





		// $input_firstname = trim($_POST['firstname']);
		// if (empty($input_student_code)) {
		// 	$firstname_error = "<p style=color:red;margin-top:10px>Please enter code proflie.</p>";
		// }elseif (!filter_var(trim($_POST['firstname']), FILTER_VALIDATE_REGEXP,array("options"=>array("regexp"=>"/^[a-zA-Z'-.\s ]+$/")))){
		// 	$firstname_error = '<p style=color:red;margin-top:10px>Please enter a valid firstname.</p>';
		// }else{
		// 	$firstname = $input_profile_code;
		// }



		// $input_lastname = trim($_POST['lastname']);
		// if (empty($input_student_code)) {
		// 	$lastname_error = "<p style=color:red;margin-top:10px>Please enter code proflie.</p>";
		// }elseif (!filter_var(trim($_POST['lastname']), FILTER_VALIDATE_REGEXP,array("options"=>array("regexp"=>"/^[a-zA-Z'-.\s ]+$/")))){
		// 	$lastname_error = '<p style=color:red;margin-top:10px>Please enter a valid lastname.</p>';
		// }else{
		// 	$lastname = $input_profile_code;
		// }



	if (empty($profile_code_error) && empty($student_code_error) && empty($firstname_error) && empty($lastname_error) && empty($gender_error) && empty($date_of_birth_error) && empty($place_of_birth_error) && empty($student_code_error) && empty($student_code_error) && empty($student_code_error) && empty($race_error) && empty($religion_error) && empty($identity_card_error) && empty($date_range_error) && empty($issued_by_error) && empty($phone_error) && empty($email_error) && empty($address_error) && empty($note_error) && empty($student_status_error) && empty($agree_error)) {


		$sql = "INSERT INTO  student (profile_code, student_code, firstname, lastname, gender, date_of_birth, place_of_birth, race, religion, identity_card, date_range, issued_by, phone, email, address, note, student_status, agree) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";

		if ($stmt = mysqli_prepare($mysqli,$sql)) {

			mysqli_stmt_bind_param($stmt, "ssd",$param_profile_code, $param_student_code, $param_firstname, $param_lastname, $param_gender, $param_date_of_birth, $param_place_of_birth, $param_race, $param_religion, $param_identity_card, $param_date_range, $param_issued_by, $param_phone, $param_email, $param_address, $param_note, $param_student_status, $param_agree);

			$param_profile_code = $profile_code;
			$param_student_code = $student_code;
			$param_firstname = $firstname;
			$param_lastname = $lastname;
			$param_gender = $gender;
			$param_date_of_birth = $date_of_birth;
			$param_place_of_birth = $place_of_birth;
			$param_race = $race;
			$param_religion = $religion;
			$param_identity_card = $identity_card;
			$param_date_range = $date_range;
			$param_issued_by = $issued_by;
			$param_phone = $phone;
			$param_email = $email;
			$param_address = $address;
			$param_note = $note;
			$param_student_status = $student_status;
			$param_agree =$agree;

			if (mysqli_stmt_execute($stmt)) {
				// code...
				header("location: ../data/data.php");
				exit();
			}else{
				echo "Something went wrong. Please try again later.";
			}
		}
		mysqli_stmt_close($stmt);
	}

	mysqli_close($mysqli);
}

?>
