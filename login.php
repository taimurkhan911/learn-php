<?php
spl_autoload_register(function ($class_name){include 'Classes/'.$class_name.'.php';});

$QueryObj =new QueryClass();
$table="tbl_user";
$Email=isset($_POST['email'])?$_POST['email']:'';
$Password=isset($_POST['password'])?$_POST['password']:'';


if(isset($_POST['btn_login']))
{
$QueryObj->login($table,$Email,$Password);
}

?>
<form action="login.php" method="post">
  <div class="imgcontainer">
    <img src="img_avatar2.png" alt="Avatar" class="avatar">
  </div>

  <div class="container">
    <label for="email"><b>Email</b></label>
    <input type="text" placeholder="Enter email" name="email" required>

    <label for="password"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="password" required>

    <button type="submit" name="btn_login">Login</button>
    <label>
      <input type="checkbox" checked="checked" name="remember"> Remember me
    </label>
  </div>

  <div class="container" style="background-color:#f1f1f1">
    <button type="button" class="cancelbtn">Cancel</button>
    <span class="psw">Forgot <a href="#">password?</a></span>
  </div>
</form>