<?php
class connection
{
    public $conn;
    protected $host='localhost';
    protected $user='root';
    protected $pass='';
    protected $dbName='learnDb';



    public function Dbconnection()
        {
          $conn=mysqli_connect($this->host, $this->user, $this->pass) or die("Unable to connect to MySQL"); 

          if(!$conn)
            { die("unable to connect to host");}
         else
            { mysqli_select_db($this->dbName,$conn); }
    $this->conn=$conn;
         return  $conn;
            // $conn = mysqli_connect($host,$user,$pass,$db) or die("Couldn't connect");
             //   return $conn;
        }
}
?>