
<?php
include "Layout/main_header.php"
?>
<div class="row">
<form action="show.php" method="POST">
  <div class="col-sm-4" style="width:30%; float:left ">
<input type="text" name="search_word">
</div>
<div class="col-sm-4" style="width:30%; float:left ">
<input type="submit" name="btn_search" value="Search" class="button" style="background-color:green"/>
</div>
</form>
</div>
<div class="row">
<?php
///include "Classes/QueryClass.php";
$keyword=isset($_POST['search_word'])?$_POST['search_word']:'';
spl_autoload_register(function ($class_name) {
    include 'Classes/'.$class_name.'.php';
});
$tt="tbl_user";
$QueryObj =new QueryClass();

$data=$QueryObj->SelectAll($keyword);

echo "<table style='width: 100%;'>";
echo "<tr><th>First Name</th><th>Last Name</th><th>Email</th></tr>";
  foreach($data as $x => $x_value) 
  {
   
    echo "<tr><td>".$x_value['first_name']."</td>";
    echo "<td>".$x_value['last_name']."</td>";
    echo "<td>".$x_value['email']."</td></tr>";
    
  }
echo "</table>";
$__pagination=$QueryObj->pagination();
?>

</div>
<div class="row" style="align:center; width: 50%;">


<ul class="pagination">
<?php
			echo	"<li class='arrow unavailable'>";
      echo '<a href="show.php?page=1">&laquo;</a></li>';
for($i=1; $i<=$__pagination; $i++)
{

      echo '<li><a href="show.php?page='.$i.'">'.$i.'</a></li>';
    
}
echo '<li class="arrow"><a href="show.php?page='.$i--.'">&raquo;</a></li>';

?>
</ul>
</div>

<?php
include "Layout/Footer.php";
/* JAVASCRIPTS 
================================================== -->
<!-- Javascript files placed here for faster loading -->*/

include "javascripts/addJavascriptFiles.php";
?>