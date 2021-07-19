<?php
include "Classes/connection.php";
//spl_autoload_register(function ($class_name){include 'Classes/'.$class_name.'.php';});

class QueryClass //extends connection 
{
private $sqlQuery;
protected $tblName;
protected $value;
protected  $result;
protected $row;
protected $Dbconn;
protected $connecting;
protected $_Conn;
protected $results_per_page;
protected $page;
protected $start_from;
protected $Total_records;
protected $total_pages;

  function __construct() 
    {
      $this->tblName = 'tbl_user';
      $this->connecting= new connection();
      $this->Dbconn=$this->connecting->Dbconnection();
    }
  function query_data($sqlQuery)
    {
     $this->sqlQuery=$sqlQuery;
     $this->result=mysqli_query($this->Dbconn, $this->sqlQuery) or trigger_error(mysqli_error($this->Dbconn));
     return  $this->result;
    }
 function pagination_elements()
    {
    $this->results_per_page = 10; 
    $this->page = '';
         if(isset($_GET["page"]))
           {
            $this->page=$_GET["page"];
             }
         else
            {
            $this->page=1;
             }

     $start_from_lim=($this->page-1)*$this->results_per_page;
     return $start_from_lim;
    }

 function SelectSingle($select_item,$cond_email)
    {
        $this->sqlQuery= "SELECT". $select_item." FROM ".$this->tblName." WHERE email="."'$cond_email'";
        $this->result =$this->query_data($this->sqlQuery);
    
        while($row=mysqli_fetch_assoc($this->result ))
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
    } 

 
 
function SelectAll()
    {

        $menu = array();
        
        $this->start_from=$this->pagination_elements();

        $this->sqlQuery = 'SELECT * FROM '.$this->tblName.' order by id ASC LIMIT '.$this->start_from.','.$this->results_per_page;
        $this->result =$this->query_data($this->sqlQuery);
    
        while($row=mysqli_fetch_assoc($this->result))
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
    }

function pagination()
    {
        $this->sqlQuery = 'SELECT * FROM '.$this->tblName.' order by id';
        $this->result =$this->query_data($this->sqlQuery);
        $this->Total_records =mysqli_num_rows($this->result);
        $this->total_pages= ceil($this->Total_records/$this->results_per_page);

        return $this->total_pages;

    }

function login($user_email,$user_password)
    {
 
        $login_msg="You are Successfulyy logged in";
        $error_login_msg="Your password or email is incorrect";

        $this->sqlQuery= "SELECT email, password FROM ".$this->tblName." WHERE email ="."'$user_email'"." AND password ="."'$user_password'";
        $this->result =$this->query_data($this->sqlQuery);

        if($this->result->num_rows > 0)
            {
                echo $login_msg;
            }
        else
            {
                echo $error_login_msg;
            }
    }

function signup($user_first_name,$user_last_name,$user_email,$user_password)
    {
        $msg="Email already exist";
        $sqlQuerycheck= "SELECT email FROM ".$this->tblName." WHERE email="."'$user_email'";
        $result1=$this->query_data($sqlQuerycheck);
        if ($result1->num_rows > 0) 
            {
                echo $msg;
            }
        else
            {
                $this->sqlQuery = "INSERT INTO $this->tblName (first_name,last_name,email,password) VALUES ('$user_first_name','$user_last_name','$user_email','$user_password')";
            
                $this->result =$this->query_data($this->sqlQuery);
                
                return  $this->result ;
            }

    }
}
?>