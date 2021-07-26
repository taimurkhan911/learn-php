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
protected $keyword;


  function __construct() 
    {
      $this->tblName = 'tbl_user';
      $this->connecting= new connection();
      $this->Dbconn=$this->connecting->Dbconnection();
    }


  function query_result($sqlQuery)
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
    function keyword_fun()
    {
    //$this->results_per_page = 10; 
    $this->keyword = '';
         if(isset($_GET["keyword"]))
           {
            $this->keyword=$_GET["keyword"];
             }
         else
            {
            $this->keyword='';
             }

     
     return $this->keyword;
    }
    function pagination()
    { 
        $this->keyword=$this->keyword_fun();
        $msg="No result found";
        //if(isset($_POST["search_word"]))
      //  {
            $this->sqlQuery = 'SELECT * FROM '.$this->tblName.' WHERE email Like "%'. $this->keyword.'%" OR first_name Like "%'.$this->keyword.'%" OR last_name Like "%'.$this->keyword.'%" order by id';
            //WHERE email Like "%'.$search_word.'%" OR first_name Like "%'.$search_word.'%" OR last_name Like "%'.$search_word.'%"
       // }
       // else
      //  {
         //   $this->sqlQuery = 'SELECT * FROM '.$this->tblName.' order by id';
      //  }
        $this->result =$this->query_result($this->sqlQuery);
        $this->Total_records =mysqli_num_rows($this->result);
        $this->total_pages= ceil($this->Total_records/$this->results_per_page);
        if($this->result->num_rows > 0)
{

return $this->total_pages;
}
else
{
    return     $msg;
    }
    }

 function SelectSingle($select_item,$cond_email)
    {
        $this->sqlQuery= "SELECT". $select_item." FROM ".$this->tblName." WHERE email="."'$cond_email'";
        $this->result =$this->query_result($this->sqlQuery);
    
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
        $this->keyword=$this->keyword_fun();
        $this->start_from=$this->pagination_elements();

        $this->sqlQuery = 'SELECT * FROM '.$this->tblName.' WHERE email Like "%'.$this->keyword.'%" OR first_name Like "%'.$this->keyword.'%" OR last_name Like "%'.$this->keyword.'%"  order by id ASC LIMIT '.$this->start_from.','.$this->results_per_page;
        $this->result =$this->query_result($this->sqlQuery);
    
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



function login($user_email,$user_password)
    {
 
        $login_msg="You are Successfulyy logged in";
        $error_login_msg="Your password or email is incorrect";

        $this->sqlQuery= "SELECT email, password FROM ".$this->tblName." WHERE email ="."'$user_email'"." AND password ="."'$user_password'";
        $this->result =$this->query_result($this->sqlQuery);

        if($this->result->num_rows > 0)
            {
              //  echo $login_msg;
                  // Storing username in session variable
            $_SESSION['username'] = $user_email;
             
            // Welcome message
            $_SESSION['success'] = "You have logged in!";
             
            // Page on which the user is sent
            // to after logging in
            header('location: portofolio2.php');
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
        $result1=$this->query_result($sqlQuerycheck);
        if ($result1->num_rows > 0) 
            {
                echo $msg;
            }
        else
            {
                $this->sqlQuery = "INSERT INTO $this->tblName (first_name,last_name,email,password) VALUES ('$user_first_name','$user_last_name','$user_email','$user_password')";
            
                $this->result =$this->query_result($this->sqlQuery);
                
                return  $this->result ;
            }

    }
}
?>