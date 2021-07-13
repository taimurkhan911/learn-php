
<?php
spl_autoload_register(function ($class_name){include 'Classes/'.$class_name.'.php';});

$QueryObj =new QueryClass();
$table="tbl_user";
$fname=isset($_POST['first_name'])?$_POST['first_name']:'';
$lname=isset($_POST['last_name'])?$_POST['last_name']:'';
$Email=isset($_POST['email'])?$_POST['email']:'';
$Password=isset($_POST['password'])?$_POST['password']:'';

//$fname="Maheen";
//$lname="Shehla";
//$Email="SM@g.com";
//$Password="1233";
if(isset($_POST['btn_signup']))
{
$QueryObj->signup($table,$fname,$lname,$Email,$Password);
}

?>
<form action="signup.php" style="border:1px solid #ccc" method="post">
  <div class="container">
    <h1>Sign Up</h1>
    <p>Please fill in this form to create an account.</p>
    <hr>


    <label for="first_name"><b>First Name</b></label>
    <input type="text" placeholder="Enter first name" name="first_name" required>

    
    <label for="last_name"><b>Last Name</b></label>
    <input type="text" placeholder="Enter last name" name="last_name" required>
   

    <label for="email"><b>Email</b></label>
    <input type="text" placeholder="Enter Email" name="email" required>

    <label for="password"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="password" required>

    <label for="psw-repeat"><b>Repeat Password</b></label>
    <input type="password" placeholder="Repeat Password" name="psw-repeat" required>

    <label>
      <input type="checkbox" checked="checked" name="remember" style="margin-bottom:15px"> Remember me
    </label>

    <p>By creating an account you agree to our <a href="#" style="color:dodgerblue">Terms & Privacy</a>.</p>

    <div class="clearfix">
      <button type="button" class="cancelbtn">Cancel</button>
      <button type="submit" class="signupbtn"name="btn_signup">Sign Up</button>
    </div>
  </div>
</form> 
