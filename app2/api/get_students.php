<!-- 抓出某班級的學生資料 -->
<?php
  include_once "base.php";

  $class=$_GET['class'];
  $db=new DB('students');
  $students=$db->q("select name,class_num,dept,nat_id from students where substring(`class_num`,1,3)='$class'");

  echo "<table>";
  foreach($students as $stu){
    echo "<tr>";
    echo "  <td>".$stu['name']."</td>";
    echo "  <td>".$stu['class_num']."</td>";
    echo "  <td>".$stu['dept']."</td>";
    echo "  <td>".$stu['nat_id']."</td>";
    echo "</tr>";
  }
  echo "</table>";

?>