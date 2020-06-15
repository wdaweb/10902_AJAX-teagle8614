<?php
//處理查詢資料的請求

  include_once "base.php";

  $str=$_GET['str'];
  $db=new DB('students');
  $query=$db->all([]," where `name` like '%$str%'");

  foreach($query as $q){
    echo "<div>結果:".$q['name']."-".$q['class_num']."-".$q['dept']."</div>";
  }


?>