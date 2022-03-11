<?php
session_start();
include_once '../config/connect_student.php';
include_once '../student/create.php';
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Form Student</title>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.1.3/js/bootstrap.bundle.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"/>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/fontawesome.min.css"/>
  <script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.3/dist/jquery.validate.min.js"></script>
  <link rel="stylesheet" type="text/css" href="../css/student.css">
  <style type="text/css">
    .error{color: red;}
    .form-labal-tittle{font-size: 25px}
    .form-label{margin-left: 20px;}

  </style>
</head>
<body>
</body>

<div class="container">
  <h1 style="font-size: 40px;padding: 20px 0;" class="row-row-col-8">Thêm mới sinh viên</h1>
  <div class="col-sm-3">
    <h2 id="kiemtra" class="form-labal-tittle">Thông tin cá nhân</h2>
  </div>
  <form class="row g-3 needs-validation" novalidate method="POST" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" enctype="multipart/form-data">
    <div class="col-md-3 <?php echo (!empty($profile_code_error)) ? 'has-error' : ''; ?>">
      <label for="validationCustom01" class="form-label">Mã hồ sơ</label>
      <input type="number" value="<?php echo $profile_code; ?>" name="profile_code" class="form-control" aria-describedby="inputGroupPrepend">
      <span class="float-left"><?php echo $profile_code_error; ?></span>
    </div>
    <div class="col-md-3 <?php echo (!empty($student_code_error)) ? 'has-error' : ''; ?>">
      <label for="validationCustom01" class="form-label">Mã sinh viên</label>
      <input type="number" value="<?php echo $student_code; ?>" name="student_code" class="form-control" aria-describedby="inputGroupPrepend">
      <span class="float-left"><?php echo $student_code_error; ?></span>
    </div>
    <div class="col-md-3 <?php echo (!empty($firstname_error)) ? 'has-error' : ''; ?>">
      <label for="validationCustom01" class="form-label">Họ đệm</label>
      <input type="text" value="<?php echo $firstname; ?>" name="firstname" class="form-control" aria-describedby="inputGroupPrepend">
      <span class="float-left"><?php echo $firstname_error; ?></span>
    </div>
    <div class="col-md-3 <?php echo (!empty($lastname_error)) ? 'has-error' : ''; ?>">
      <label for="validationCustom01" class="form-label">Tên</label>
      <input type="text" value="<?php echo $lastname; ?>" name="lastname" class="form-control" aria-describedby="inputGroupPrepend">
      <span class="float-left"><?php echo $lastname_error; ?></span>
    </div>
    <div class="col-md-3 <?php echo (!empty($gender_error)) ? 'has-error' : ''; ?>">
      <label for="validationCustom01" class="form-label">Giới tính</label>
      <select class="form-select" id="check" value="<?php echo $gender; ?>" name="gender">
        <option selected disabled value="">Chọn giới tính</option>
        <option>Nam</option>
        <option>Nữ</option>
      </select>
      <span class="float-left"><?php echo $gender_error; ?></span>
    </div>
    <div class="col-md-3 <?php echo (!empty($date_of_birth_error)) ? 'has-error' : ''; ?>">
      <label for="validationCustom01" class="form-label">Ngày sinh</label>
      <input type="date" value="<?php echo $date_of_birth; ?>" name="date_of_birth" class="form-control" id="birthday" aria-describedby="inputGroupPrepend">
      <span class="float-left"><?php echo $date_of_birth_error; ?></span>
    </div>
    <div class="col-md-3 <?php echo (!empty($place_of_birth_error)) ? 'has-error' : ''; ?>">
      <label for="validationCustom01" class="form-label">Nơi sinh</label>
      <input type="text" name="place_of_birth" value="<?php echo $place_of_birth; ?>" class="form-control" id="birthPlace" aria-describedby="inputGroupPrepend">
      <span class="float-left"><?php echo $place_of_birth_error; ?></span>
    </div>
    <div class="col-md-3 <?php echo (!empty($race_error)) ? 'has-error' : ''; ?>">
      <label for="validationCustom01" class="form-label">Dân tộc</label>
      <input type="text" name="race" value="<?php echo $race; ?>" class="form-control" id="validationCustom01" aria-describedby="inputGroupPrepend">
      <span class="float-left"><?php echo $race_error; ?></span>
    </div>
    <div class="col-md-3 <?php echo (!empty($religion_error)) ? 'has-error' : ''; ?>">
      <label for="validationCustom01" class="form-label">Tôn giáo</label>
      <input type="text" name="religion" value="<?php echo $religion; ?>" class="form-control" id="validationCustom01" aria-describedby="inputGroupPrepend">
      <span class="float-left"><?php echo $religion_error; ?></span>
    </div>
  </div>
  <div class="col-md-3 <?php echo (!empty($identity_card)) ? 'has-error' : ''; ?>">
    <label for="validationCustom01" class="form-label">Số CMND/CCCD</label>
    <input type="number" name="identity_card" value="<?php echo $identity_card; ?>" class="form-control" id="validationCustom01" aria-describedby="inputGroupPrepend">
    <span class="float-left"><?php echo $identity_card_error; ?></span>
  </div>
  <div class="col-md-3 <?php echo (!empty($date_range_error)) ? 'has-error' : ''; ?>">
    <label for="validationCustom01" class="form-label">Ngày cấp</label>
    <input type="date" value="<?php echo $date_range; ?>" name="date_range" class="form-control" id="validationCustom01" aria-describedby="inputGroupPrepend">
    <span class="float-left"><?php echo $date_range_error; ?></span>
  </div>
  <div class="col-md-3 <?php echo (!empty($issued_by_error)) ? 'has-error' : ''; ?>">
    <label for="validationCustom01" class="form-label">Nơi cấp</label>
    <input type="text" value="<?php echo $issued_by; ?>" name="issued_by" class="form-control" id="validationCustom01" aria-describedby="inputGroupPrepend">
    <span class="float-left"><?php echo $issued_by_error; ?></span>
    <div class="invalid-feedback"></div>
  </div>
</div>
<div class="col-md-3 <?php echo (!empty($phone_error)) ? 'has-error' : ''; ?>">
  <label for="validationCustom01" class="form-label">Điện thoại</label>
  <input type="number" value="<?php echo $phone; ?>" class="form-control" name="phone" id="phone" aria-describedby="inputGroupPrepend">
  <span class="float-left"><?php echo $phone_error; ?></span>
  <div class="invalid-feedback"></div>
</div>
<div class="col-md-3 <?php echo (!empty($email_error)) ? 'has-error' : ''; ?>">
  <label for="validationCustom01" class="form-label">Email cá nhân</label>
  <input type="email" value="<?php echo $email; ?>" name="email" class="form-control" id="email" aria-describedby="inputGroupPrepend">
  <span class="float-left"><?php echo $email_error; ?></span>
  <div class="invalid-feedback"></div>
</div>
</div>
<div class="col-md-6 <?php echo (!empty($address_error)) ? 'has-error' : ''; ?>">
  <label for="validationCustom01" class="form-label">Địa chỉ liên hệ</label>
  <input type="text" value="<?php echo $address; ?>" name="address" class="form-control" id="validationCustom01">
  <span class="float-left"><?php echo $address_error; ?></span>
  <div class="invalid-feedback"></div>
</div>
<div class="col-md-6 <?php echo (!empty($note_error)) ? 'has-error' : ''; ?>">
  <label for="validationCustom01" class="form-label">Ghi chú</label>
  <input type="text" value="<?php echo $note; ?>" name="note" class="form-control" id="validationCustom01">
  <span class="float-left"><?php echo $note_error; ?></span>
  <div class="invalid-feedback"></div>
</div>
<div class="col-md-2 <?php echo (!empty($student_status_error)) ? 'has-error' : ''; ?>">
  <label for="validationCustom04" class="form-label">Trạng thái sinh viên</label>
  <select class="form-select" value="<?php echo $student_status; ?>" name="student_status" id="validationCustom04">
    <option selected disabled value="">Chọn trạng thái</option>
    <option>Hoàn thành</option>
    <option>Chưa hoàn thành</option>
  </select>
  <span class="float-left"><?php echo $student_status_error; ?></span>
</div>
<div class="col-12 <?php echo (!empty($agree_error)) ? 'has-error' : ''; ?>">
  <div class="form-check">
    <input class="form-check-input"  type="checkbox" name="agree" value="<?php echo $agree; ?>" id="invalidCheck">
    <label class="form-check-label" for="invalidCheck">
      Đồng ý với điều khoản và điều kiện.
    </label>
    <span class="float-left"><?php echo $agree_error; ?></span>
  </div>
</div>
<div class="col-12">
  <button class="btn btn-primary" type="submit" value="Submit">Update</button>
  <button class="btn btn-primary" type="submit" value="Cancel">Cancel</button>
</div>
</form>
</div>
</body>
</html>