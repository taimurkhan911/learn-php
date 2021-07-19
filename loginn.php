<?php
include "stylesheets/addCssFiles.php";
include "Layout/main_header.php"
?>
<body>
<?php
spl_autoload_register(function ($class_name){include 'Classes/'.$class_name.'.php';});

$QueryObj =new QueryClass();
//$table="tbl_user";
$Email=isset($_POST['email'])?$_POST['email']:'';
$Password=isset($_POST['password'])?$_POST['password']:'';


if(isset($_POST['btn_login']))
{
$QueryObj->login($Email,$Password);
}

?>
<div class="container register">
                <div class="row">
                    <div class="col-md-3 register-left">
                        <img src="https://image.ibb.co/n7oTvU/logo_white.png" alt=""/>
                        <h3>Welcome</h3>
                        <p>You are 30 seconds away from earning your own money!</p>
                        <input type="submit" name="btn_signup" value="Signup" onclick="window.location.href='sign_up.php'"/><br/>
                    </div>
                    <div class="col-md-8 register-right">
                        <!-- <ul class="nav nav-tabs nav-justified" id="myTab" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Employee</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Hirer</a>
                            </li>
                        -->
                        </ul>
                        <form action="loginn.php" method="post">
                        <div class="tab-content" id="myTabContent">
                            <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                                <h3 class="register-heading">Signin</h3>
                                <div class="row register-form">
                                    <div class="col-md-12" >
                                        <div class="form-group">
                                            <input type="text" class="form-control" placeholder="Username or Email" name="email" value="" />
                                        </div>
                                        <div class="form-group">
                                            <input type="password" class="form-control" placeholder="Password" name="password" value="" />
                                        </div>
                                        <div class="form-group">
                                            <input type="submit" class="btnRegister" name="btn_login"  value="Login"/>
                                        </div>
                                    </div>
                                </div>
                            </div>
                
                        </div>
                        </form>
                    </div>
                </div>

            </div>
            </body>
            <?php
include "Layout/Footer.php";
/* JAVASCRIPTS 
================================================== -->
<!-- Javascript files placed here for faster loading -->*/

include "javascripts/addJavascriptFiles.php";
?>
</html>