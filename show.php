<!DOCTYPE html>
<html>
<head>
<style>
table, th, td {
  border: 1px solid black;
  border-collapse: collapse;
}
</style>
</head>
<body>

<?php
///include "Classes/QueryClass.php";

spl_autoload_register(function ($class_name) {
    include 'Classes/'.$class_name.'.php';
});

$QueryObj =new QueryClass();
$tt="tbl_user";
$data=$QueryObj->SelectAll($tt);

echo "<table style='width: 100%;'>";

  foreach($data as $x => $x_value) 
  {
    echo "<tr><th>First Name</th><th>Last Name</th><th>Email</th></tr>";
    echo "<tr><td>".$x_value['first_name']."</td>";
    echo "<td>".$x_value['last_name']."</td>";
    echo "<td>".$x_value['email']."</td></tr>";
    
  }
echo "</table>";
?>
</body>