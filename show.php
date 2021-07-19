<?php
include "Layout/main_header.php"
?>


<?php
///include "Classes/QueryClass.php";

spl_autoload_register(function ($class_name) {
    include 'Classes/'.$class_name.'.php';
});
$tt="tbl_user";
$QueryObj =new QueryClass();

$data=$QueryObj->SelectAll();
//echo "<input type='text'>";
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
<!--echo "<div class='pagination'>";
echo "  <a href='#'>&laquo;</a>";
for($i=1; $i<=$__pagination; $i++)
{
  echo '<a href="show.php?page='.$i.'">'.$i.'</a>';
}
echo " <a href='#'>&raquo;</a>";
echo "</div>";
*/
-->
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

