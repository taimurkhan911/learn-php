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
    $result = mysqli_query($sqlQuery,$Dbconn->conn);
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

function signup($tblName,$user_first_name,$user_last_name,$user_emal,$user_password)
{
    $Dbconn= new connection();
    $Dbconn->Dbconnection();
    $sqlQuery = "INSERT INTO $tblName (first_name,last_name,email,password) VALUES ('$user_first_name','$user_last_name','$user_emal','$user_password')";
    
    $result= mysqli_query($sqlQuery,$Dbconn->conn);
   return   $result;



}
}
?>