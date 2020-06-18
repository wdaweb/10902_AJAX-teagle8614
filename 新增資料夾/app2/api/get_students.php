<?php
include "base.php";

//前端採用get的方式送出請求及參數，因此使用$_GET來接收資料
$class=$_GET['class'];
$db=new DB("students");
$students=$db->q("select id,name,class_num,dept,nat_id from students where substring(`class_num`,1,3)='$class'");

echo "<table>";
  foreach($students as $stu){
    echo "<tr>";
    echo "  <td>".$stu['name']."</td>";
    echo "  <td>".$stu['class_num']."</td>";
    echo "  <td>".$stu['dept']."</td>";
    echo "  <td>".$stu['nat_id']."</td>";
    echo "  <td>";
    echo "    <button onclick='getUpdateForm(".$stu['id'].")'>編輯</button>";
    echo "    <button onclick='del(".$stu['id'].")'>刪除</button>";
    echo "  </td>";
    echo "</tr>";
  }
  echo "</table>";


?>