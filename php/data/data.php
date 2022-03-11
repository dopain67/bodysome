<?php
session_start();
include_once '../config/connect_student.php';
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Data dữ liệu Client Server</title>
	<link rel="stylesheet" href="../data.css">
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.1.3/css/bootstrap.min.css"/>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.1.3/js/bootstrap.bundle.min.js"></script>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"/>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/fontawesome.min.css"/>
	<script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.3/dist/jquery.validate.min.js"></script>
	<style type="text/css">
		*{margin: 0;padding: 0;width: auto;}
		.container{width: auto;margin-top: 30px;}
		.row{overflow-x: auto;margin-top: 10px;}
		.row table{overflow-x: auto;margin-top: 10px;}
		.row-row-col-8{margin:20px;}
		.col-col-md-2{float: left;margin-left: 600px;background: blue;border: none;border-radius: 5px;height: 50px;font-size: 14px;color: white;width: 150px;}
		.col-col-md{width: 300px;float: left;}
		.footer{float: left;width: auto;}
		.float-end input{width: 200px;}
		.table{
			border: 1px dotted; black;
		}
		table tr td{
			border: 1px dotted; black;
		}
		table tr th{
			border: 1px dotted; black;
		}
	</style>
</head>
<body>
	<div class="container">
		<form class="row g-3">
			<div class="row gx-5">
				<div class="col">
					 <div class="p-3">
						 <h2>Database Student</h2>
					 </div>
				</div>
				<div class="col">
					  <div class="p-3" style="float: right;">
					  	<a href="../student/student.php" class="btn btn-primary btn-lg active">Update Student</a>
					  </div>
				</div>
			 </div>
			<div class="row">
				<table class="table table-striped col 12 table-hover">
					<thead>
					  <tr style="background-color: #989898;">
					  	<th scope="col">STT</th>
						<th scope="col">Mã Hồ Sơ</th>
						<th scope="col">Mã Sinh Viên</th>
						<th scope="col">Họ Tên</th>
						<th scope="col">Giới tính</th>
						<th scope="col">Ngày Sinh</th>
						<th scope="col">Nơi Sinh</th>
						<th scope="col">Dân tộc</th>
						<th scope="col">Tôn Giáo</th>
						<th scope="col">Số CMND/CCCD</th>
						<th scope="col">Ngày cấp</th>
						<th scope="col">Nơi cấp</th>
						<th scope="col">Điện thoại</th>
						<th scope="col">Email</th>
						<th scope="col">Email cá nhân</th>
						<th scope="col">Địa chỉ liên hệ</th>
						<th scope="col">Note</th>
						<th scope="col">Hành động</th>
					  </tr>
					</thead>
					<tbody>
						<?php
							$sql = mysqli_query($mysqli,"SELECT * FROM student");
							if (mysqli_num_rows($sql) > 0) {
								while($row = mysqli_fetch_array($sql)){
									echo "<tr>";
										echo "<td>".$row['id']."</td>";
										echo "<td>".$row['profile_code']."</td>";
										echo "<td>".$row['student_code']."</td>";
										echo "<td>".$row['firstname']." ".$row['lastname']."</td>";
										echo "<td>".$row['gender']."</td>";
										echo "<td>".$row['date_of_birth']."</td>";
										echo "<td>".$row['place_of_birth']."</td>";
										echo "<td>".$row['race']."</td>";
										echo "<td>".$row['religion']."</td>";
										echo "<td>".$row['identity_card']."</td>";
										echo "<td>".$row['date_range']."</td>";
										echo "<td>".$row['issued_by']."</td>";
										echo "<td>".$row['phone']."</td>";
										echo "<td>".$row['email']."</td>";
										echo "<td>".$row['address']."</td>";
										echo "<td>".$row['note']."</td>";
										echo "<td>".$row['student_status']."</td>";
										echo "<td>";
											echo "<a href='../backend/edit.php?id=".$row['id']."' title='Edit Code' data-toggle='tooltip'><span class='fas fa-edit'></span></a>";
											echo "<a onclick='return confirm(Bạn có chắc chắn xóa dữ liệu này không?)'' href='../backend/delete.php?id=".$row['id']."' title='Delete Code' data-toggle='tooltip'><span class='fas fa-trash-alt'></span></a>";
										echo "</td>";
									echo "</tr>";

								}
							}else{
								echo "<p class='lead' style='color:red'><b><em>No record were found.</em></b></p>";
							}
							mysqli_close($mysqli);
							?>
						</tr>
					</tbody>
				  </table>
			</div>
		 </form>
	</div>
</body>
</html>