
<?php
include_once '../config/connect_student.php';
?>
<?php
$
// Define variables and initializa with empty values
$profile_code = $student_code = $firstname = $lastname = $gender = $date_of_birth = $place_of_birth = $race = $religion = $identity_card = $date_range = $issued_by= $phone = $email = $address = $note = $student_status = $agree = "";

$profile_code_error = $student_code_error = $firstname_error = $lastname_error = $gender_error = $date_of_birth_error = $place_of_birth_error = $race_error = $religion_error = $identity_card_error = $date_range_error = $issued_by_error= $phone_error = $email_error = $address_error = $note_error = $student_status_error = $agree_error = "";

if(isset($_POST['id']) && !empty($_POST['id'])) {
		// Get hidden input value
		$id = $_POST['id']);

		// Validate  profile code
		$input_profile_code = trim($_POST['profile_code']);
		if (empty($input_profile_code)) {
			$profile_code_error = "Please enter code proflie.";
		}elseif (!filter_var(trim($_POST['profile_code']), FILTER_VALIDATE_REGEXP,array("options"=>array("regexp"=>"^[a-zA-Z'-.\s ]+$/")))){
			$profile_code_error = "Please enter a valid profile_code.";
		}else{
			$profile_code = $input_profile_code;
		}

		$input_student_code = trim($_POST['student_code']);
		if (empty($input_student_code)) {
			$student_code_error = "Please enter code student code.";
		}elseif (!filter_var(trim($_POST['student_code']), FILTER_VALIDATE_REGEXP,array("options"=>array("regexp"=>"^[a-zA-Z'-.\s ]+$/")))){
			$student_code_error = "Please enter a valid student_code.";
		}else{
			$student_code = $input_profile_code;
		}


		$input_firstname = trim($_POST['firstname']);
		if (empty($input_student_code)) {
			$firstname_error = "Please enter code student code.";
		}elseif (!filter_var(trim($_POST['firstname']), FILTER_VALIDATE_REGEXP,array("options"=>array("regexp"=>"^[a-zA-Z'-.\s ]+$/")))){
			$firstname_error = "Please enter a valid student_code.";
		}else{
			$firstname = $input_profile_code;
		}


		$input_lastname = trim($_POST['lastname']);
		if (empty($input_student_code)) {
			$lastname_error = "Please enter code student code.";
		}elseif (!filter_var(trim($_POST['lastname']), FILTER_VALIDATE_REGEXP,array("options"=>array("regexp"=>"^[a-zA-Z'-.\s ]+$/")))){
			$lastname_error = "Please enter a valid student_code.";
		}else{
			$lastname = $input_profile_code;
		}


	if (empty($profile_code_error) && empty($student_code_error) && empty($firstname_error) && empty($lastname_error) && empty($gender_error) && empty($date_of_birth_error) && empty($place_of_birth_error) && empty($student_code_error) && empty($student_code_error) && empty($student_code_error) && empty($race_error) && empty($religion_error) && empty($identity_card_error) && empty($date_range_error) && empty($issued_by_error) && empty($phone_error) && empty($email_error) && empty($address_error) && empty($note_error) && empty($student_status_error) && empty($agree_error) {

		$sql = "UPDATE student SET profile_code=?, student_code=?, firstname=?, lastname=?, gender=?, date_of_birth=?, place_of_birth=?, race=?, religion=?, identity_card=?, date_range=?, issued_by=?, phone=?, email=?, address=?, note=?, student_status=?, agree=? WHERE id=?";

		if ($stmt = mysqli_prepare($mysqli,$sql)) {
			mysqli_stmt_bind_param($stmt,"sssi", $param_profile_code, $param_student_code, $param_firstname, $param_lastname, $param_gender, $param_date_of_birth, $param_place_of_birth, $param_race, $param_religion, $param_identity_card, $param_date_range, $param_issued_by, $param_phone, $param_email, $param_address, $param_note, $param_student_status, $param_agree, $param_id);

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
			$param_agree = $agree;
			$param_id = $id;


			if (mysqli_stmt_execute($stmt)) {
				header("location: ../data/data.php");
				exit();
			}else{

				echo "Something went wrong. Please try again later.";
			}

		}
		mysqli_stmt_close($stmt);
	}

	mysqli_close($mysqli);

}else{
	if (isset($_GET['id']) && !empty(trim($_GET['id']))) {
		$id = trim($_GET['id']);

		$sql = "SELECT * FROM student WHERE id = ?";
		if ($stmt = mysqli_prepare($mysqli,$sql)) {
			// Bind variables to the prepared statement as parameters
			mysqli_stmt_bind_param($stmt,'i',$param_id);

			// Set parameters
			$param_id =  $id;

			// Attempt to execuste the prepared statement
			if (mysqli_stmt_execute($stmt)) {
				$result = mysqli_stmt_get_reult($stmt);

				if (mysqli_num_rows($result) == 1) {
					// code...
					$row = mysqli_fetch_array($result,MYSQLI_ASSOC);

					// Retrieve indivdual field value
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
					// Url doesn't contain valid id.
					header("location: ../backend/error.php");
					exit();
				}
			}else{
				echo "Doops! Something went wrong. Please try again later.";
			}
		}
		// Clode statement
		mysqli_stmt_close($stmt);

		// Close connection
		mysqli_close($mysqli);
	}else{
		header("location: ..backend/error.php");
		exit();
	}

}



?>