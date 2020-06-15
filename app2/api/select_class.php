<!-- 生成班級的option -->
<?php
  include_once "base.php";

  $db=new DB('students');
  $classes=$db->q("SELECT substring(`class_num`,1,3) as '班級' FROM `students` GROUP BY substring(`class_num`,1,3)");
  // print_r($classes);

  foreach($classes as $c){
    echo "<option value='".$c['班級']."'>".$c['班級']."</option>";
  }
?>

