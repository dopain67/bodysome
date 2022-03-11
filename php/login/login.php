<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Login Form</title>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="
    bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.min.js"></script>
    <style type="text/css">
     .login-block{
       float:left;
       width:100%;
       padding : 50px 0;
   }
   .container{background:#D3D3D3; border-radius: 10px; width: 40%; height: 40%;}
   .login-sec{padding: 50px 30px; position:relative;}
   .login-sec h2{margin-bottom:30px; font-weight:800; font-size:30px; color: #0069c0;}
   .login-sec h2:after{content:" "; width:100px; height:5px; background:#6ec6ff; display:block; margin-top:20px; border-radius:3px; margin-left:auto;margin-right:auto}
   .btn-login{background: #0069c0; color:#fff; font-weight:600;}
</style>
</head>

<body>

<?php
    include_once '../config/connect_login.php';
    include_once '../login/putlogin.php';
?>
    <section class="login-block">
        <div class="container">
            <div class="row ">
                <div class="col login-sec">
                    <h2 class="text-center">Login Now</h2>
                    <form class="login-form" name="login" method="POST" action="">
                      <div class="form-group">
                        <label for="exampleInputEmail1">Username</label>
                        <input type="text" name="username" id="username" class="form-control" placeholder="Nhập Ussername" autocomplete="off" value="<?php if(isset($_COOKIE['user'])) echo $_COOKIE['user']; ?>" required>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Password</label>
                        <input type="password" name="password" id="password" class="form-control" autocomplete="off" placeholder="Nhập Password" value="<?php if(isset($_COOKIE['pass'])) echo $_COOKIE['pass']; ?>" required>
                    </div>
                    <div class="form-login" style="margin-left: 20px;">
                        <label for="exampleInputPassword1">
                            <input type="checkbox" name="remmenber" value="1" class="form-check-input" autocomplete="off">Keep me single in
                        </label>
                    </div>
                    <div class="form-login">
                      <button type="submit" value="Login" name="login" id="submit" class="btn btn-login float-right col-4">Login</button>
                    </div>
              </form>
          </div>
      </div>
  </div>
</section>
</body>

</html>