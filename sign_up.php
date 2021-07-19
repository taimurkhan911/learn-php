<?php
include "stylesheets/addCssFiles.php";
include "Layout/main_header.php";

?>
<body>
<?php
spl_autoload_register(function ($class_name){include 'Classes/'.$class_name.'.php';});

$QueryObj =new QueryClass();
//$table="tbl_user";
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
$QueryObj->signup($fname,$lname,$Email,$Password);
}

?>
<div class="container register">
                <div class="row">
                    <div class="col-md-3 register-left">
                        <img src="https://image.ibb.co/n7oTvU/logo_white.png" alt=""/>
                        <h3>Welcome</h3>
                        <p>Signup today and avail more amazing features!</p>
                        <input type="submit" name="btn_login" value="Login" onclick="window.location.href='loginn.php'"/><br/>
                    </div>
                    <div class="col-md-9 register-right">
                        <ul class="nav nav-tabs nav-justified" id="myTab" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Customer</a>
                            </li>
                            <!-- <li class="nav-item">
                                <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Admin</a>
                            </li>
                        -->
                        </ul>
                        <form action="sign_up.php" method="post">
                        <div class="tab-content" id="myTabContent">
                            <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                                <h3 class="register-heading">Sign Up</h3>
                                <div class="row register-form">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="text" class="form-control" name="first_name" placeholder="First Name" value="" required />
                                        </div>
                                        <div class="form-group">
                                            <input type="email" name="email" class="form-control" placeholder="Your Email *" value="" />
                                        </div>
                                         <!--  <div class="form-group">
                                            <input type="text" class="form-control" name="last_name" placeholder="Last Name" value="" required />
                                        </div> -->
                                       <!-- <div class="form-group">
                                            <input type="password" class="form-control" name="password" placeholder="Password " value="" required/>
                                        </div>
                                         -->
                                        <div class="form-group">
                                            <input type="password" class="form-control"  placeholder="Confirm Password " value="" required />
                                        </div>
                                   
                                       <!-- <div class="form-group">
                                            <div class="maxl">
                                                <label class="radio inline"> 
                                                    <input type="radio" name="gender" value="male" checked>
                                                    <span> Male </span> 
                                                </label>
                                                <label class="radio inline"> 
                                                    <input type="radio" name="gender" value="female">
                                                    <span>Female </span> 
                                                </label>
                                            </div>
                                        </div> -->
                                    </div>
                                    <div class="col-md-6">
                                    <div class="form-group">
                                            <input type="text" class="form-control" name="last_name" placeholder="Last Name" value="" required />
                                        </div>
                                        <div class="form-group">
                                            <input type="password" class="form-control" name="password" placeholder="Password " value="" required/>
                                        </div>
                                        
                                       <!-- <div class="form-group">
                                            <input type="email" name="email" class="form-control" placeholder="Your Email *" value="" />
                                        </div>
                                    -->
                                       <!-- <div class="form-group">
                                            <input type="text" minlength="10" maxlength="10" name="txtEmpPhone" class="form-control" placeholder="Your Phone *" value="" />
                                        </div> 
                                        <div class="form-group">
                                            <select class="form-control">
                                                <option class="hidden"  selected disabled>Please select your Sequrity Question</option>
                                                <option>What is your Birthdate?</option>
                                                <option>What is Your old Phone Number</option>
                                                <option>What is your Pet Name?</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <input type="text" class="form-control" placeholder="Enter Your Answer *" value="" />
                                        </div>
                                        -->
                                        <input type="submit" class="btnRegister" name="btn_signup" value="Register"/>
                                    </div>
                                </div>
                            </div>
                        </form>
                            <!--
                            <div class="tab-pane fade show" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                                <h3  class="register-heading">Apply as a Hirer</h3>
                                <div class="row register-form">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="text" class="form-control" placeholder="First Name *" value="" />
                                        </div>
                                        <div class="form-group">
                                            <input type="text" class="form-control" placeholder="Last Name *" value="" />
                                        </div>
                                        <div class="form-group">
                                            <input type="email" class="form-control" placeholder="Email *" value="" />
                                        </div>
                                        <div class="form-group">
                                            <input type="text" maxlength="10" minlength="10" class="form-control" placeholder="Phone *" value="" />
                                        </div>


                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="password" class="form-control" placeholder="Password *" value="" />
                                        </div>
                                        <div class="form-group">
                                            <input type="password" class="form-control" placeholder="Confirm Password *" value="" />
                                        </div>
                                        <div class="form-group">
                                            <select class="form-control">
                                                <option class="hidden"  selected disabled>Please select your Sequrity Question</option>
                                                <option>What is your Birthdate?</option>
                                                <option>What is Your old Phone Number</option>
                                                <option>What is your Pet Name?</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <input type="text" class="form-control" placeholder="`Answer *" value="" />
                                        </div>
                                        <input type="submit" class="btnRegister"  value="Register"/>
                                    </div>
                                </div>
                            </div> -->
                        </div>
                    </div>
                </div>

            </div>
            <?php
include "Layout/Footer.php";
/* JAVASCRIPTS 
================================================== -->
<!-- Javascript files placed here for faster loading -->*/

include "javascripts/addJavascriptFiles.php";
?>
            </body>
</html>