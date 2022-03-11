<?php
if (isset($_POST['id']) && !empty($_POST['id'])) {
	// code...
	include_once '../config/connect_student.php';

	$sql = "DELETE FROM student WHERE id = ?";

	if ($stmt = mysqli_prepare($mysqli,$sql)) {
		// code...
		mysqli_stmt_bind_param($stmt,'i',$param_id);

		// set parameters
		$param_id = trim($_POST['id']);

		if (mysqli_stmt_execute($stmt)) {
			// code...
			header("location: ../data/data.php");
			exit();
		}else{
			echo "Opps! Something went wrong. Please try again later.";
		}
	}
	mysqli_stmt_close($stmt);

	mysqli_close($mysqli);
}else{
	// check existence of id parameter
	if (empty(trim($_GET['id']))) {
		header("location: ../error.php");
		exit();
	}
}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title></title>
	<link rel="stylesheet" href="">
	</style>
</head>
<body>
	<div class="wapper">
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-12">
					<div class="page-header">
						<h1>Delete Record</h1>
					</div>
					<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST">
						<div class="alert alert-danger fade in">
							<input type="hidden" name="id" value="<?php echo trim($_GET['id']); ?>">
							<p> Are you sure want to delete this record</p><br>
							<input type="submit" value="Yes" class="btn btn-danger">
								<button><a href="../data/data.php" class="btn btn-default">No</a></button>

						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</body>
</html>