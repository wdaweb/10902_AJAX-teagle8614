<?php
include_once "base.php";

$db=new DB('students');

//使用SQL的GROUP BY指令來查詢資料表中有那些班級
$classes=$db->q("SELECT substring(`class_num`,1,3) as '班級' FROM `students` group by substring(`class_num`,1,3)");

//使用迴圈來建立選單需要的選項內容
foreach($classes as $c){
    echo "<option value='".$c['班級']."'>".$c['班級']."</option>";
}

?>