<?php
  //處理更新資料的請求
  include_once "base.php";
  $db=new DB("students");

  if(!empty($_POST)){
    // 因為$_POST陣列本身是陣列，其實可以直接存入
    // 但理論上需要檢查資料是否正確，才可以將資料存入
    echo $db->save($_POST);
  }

?>