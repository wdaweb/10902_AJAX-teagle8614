<?php
//處理查詢資料的請求
  include_once "base.php";

  //前端使用GET的方式來傳送請求，因此後端api使用$_GET來接收請求
  $str=$_GET['str'];
  $db=new DB('students');

  //以like指令來進行模糊查詢的功能
  $query=$db->all([]," where `name` like '%$str%'");

  //利用迴圈來列出查詢到的資料並加上需要的html標籤或其它內容
  // foreach($query as $q){
  //   echo "<div>結果:".$q['name']."-".$q['class_num']."-".$q['dept']."</div>";
  // }


  
  // 將資料用JSON傳遞，可以只傳送資料，再由接受者決定如何將資料做顯示方式
  // 不會像上述的方式，接受者被強制使用<div>來做處理

  // 原先$query的每一筆資料都會有兩個，一個是欄位名稱、一個是索引，所以傳遞資料是兩倍
  // 因此在傳遞資料前，將需要的資料做整理在傳遞，便可以減少傳遞資料的大小
  $data=[];

  foreach($query as $q){
    $data[]=[
      '_id'=>$q['id'],
      '學號'=>$q['uni_id'],
      '班級座號'=>mb_substr($q['class_num'],3,2),
      '班級'=>mb_substr($q['class_num'],3,0),
      '姓名'=>$q['name'],
      '畢業國中'=>mb_substr($q['grad_at'],0,mb_strlen($q['grad_at'])-2,'utf8'),
      '科別'=>$q['dept']
    ];
  }
  // echo json_encode($query);
  echo json_encode($data);
?>