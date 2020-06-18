<?php
//處理查詢資料的請求
include_once "base.php";

//前端使用GET的方式來傳送請求，因此後端api使用$_GET來接收請求
$str=$_GET['str'];
$db=new DB("students");

//以like指令來進行模糊查詢的功能
$query=$db->all([]," where name like '%$str%'");

//利用迴圈來列出查詢到的資料並加上需要的html標籤或其它內容
foreach($query as $q){
    echo "<div>結果一:".$q['name']."-".$q['class_num']."-".$q['dept']."</div>";
}

?>