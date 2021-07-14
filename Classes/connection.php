<?php
class connection
{
    public $conn;
    protected $host='localhost';
    protected $user='root';
    protected $pass='';
    protected $dbName='learnDb';
protected $db_select;


    public function Dbconnection()
        {
    $conn = new mysqli($this->host,$this->user,$this->pass,$this->dbName);
    if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
    }
    //else{ echo "Connected successfully";}
   $this->conn=$conn;
   return $conn;
        }
}
?>