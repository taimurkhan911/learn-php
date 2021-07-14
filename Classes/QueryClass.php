<?php
//include "Classes/connection.php";

class QueryClass extends connection 
{
private $Sql_Query;
protected $tblName;
protected $value;
protected  $result;
protected $row;





function SelectAll($tblName)
{
    $Dbconn= new connection();
    $Dbconn->Dbconnection();
    
    $menu = array();
    //$Sql_Query='SELECT * from ".$tblName where email_address='$profileusername'";
    //$result=mysql_query($query,$con) or die(mysql_error($con));
    /*echo '<pre>';
    print_r($result);
    echo '</pre>';*/

    $sqlQuery = 'SELECT * FROM '.$tblName;
    $result = mysqli_query($Dbconn->conn,$sqlQuery) or trigger_error(mysqli_error($Dbconn->conn));
   // $result= mysql_fetch_array($result);

	while($row=mysqli_fetch_assoc($result))
    {
        $menu[] = array(
            "id" => $row['id'], 
            "first_name" => $row['first_name'], 
            "last_name" => $row['last_name'], 
            "email"=>$row['email'],
            "password"=>$row['password'],
            "role_Id" =>$row['role_Id']
            

        );
    }
    
    return $menu;
   // return $menu;
}
function login($tblName,$user_email,$user_password)
{
    $Dbconn= new connection();
    $Dbconn->Dbconnection();

    $login_msg="You are uccessfulyy logged in";
    $error_login_msg="Your password or email is incorrect";

    $sqlQuerycheck= "SELECT email, password FROM ".$tblName." WHERE email ="."'$user_email'"." AND password ="."'$user_password'";
    $result1= mysqli_query($Dbconn->conn,$sqlQuerycheck) or trigger_error(mysqli_error($Dbconn->conn));

    if($result1->num_rows > 0)
    {
    echo $login_msg;
    }
    else
    {
        echo $error_login_msg;
    }
}

function signup($tblName,$user_first_name,$user_last_name,$user_email,$user_password)
{
   
    $Dbconn= new connection();
    $Dbconn->Dbconnection();

    $msg="Email already exist";
    $sqlQuerycheck= "SELECT email FROM ".$tblName." WHERE email="."'$user_email'";
    $result1= mysqli_query($Dbconn->conn,$sqlQuerycheck) or trigger_error(mysqli_error($Dbconn->conn));
    if ($result1->num_rows > 0) 
    {
echo $msg;
   
    }
    else
    {
        $sqlQuery = "INSERT INTO $tblName (first_name,last_name,email,password) VALUES ('$user_first_name','$user_last_name','$user_email','$user_password')";
    
        $result= mysqli_query($Dbconn->conn,$sqlQuery) or trigger_error(mysqli_error($Dbconn->conn));
        
       return   $result;
    }

}
}
?>