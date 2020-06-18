<?php
  //處理刪除資料的請求
  include_once "base.php";

  $db=new DB('students');
  $id=$_POST['id'];
  $res=$db->del($id);

  echo $res;
?>