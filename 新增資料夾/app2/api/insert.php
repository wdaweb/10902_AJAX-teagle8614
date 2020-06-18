<?php
//處理新增資料的請求
include_once "base.php";


//前端採用POST的方式送出請求，因此API這邊使用$_POST來接收請求
if(!empty($_POST)){
    $row=[];
    $row['name']=$_POST['name'];
    $row['uni_id']=$_POST['uni_id'];
    $row['class_num']=$_POST['class_num'];
    $row['birthday']=$_POST['birthday'];
    $row['nat_id']=$_POST['nat_id'];
    $row['addr']=$_POST['addr'];
    $row['parent']=$_POST['parent'];
    $row['tel']=$_POST['tel'];
    $row['dept']=$_POST['dept'];
    $row['grad_at']=$_POST['grad_at'];

    $db=new DB("students");
    
    //在save()函式中我們使用exec($sql)來送出sql語句，此函式會回應受影響的筆數
    //因此如果新增成功會回應1，新增失敗會回應0，以此回應來提供前端做為判斷
    echo $db->save($row);

}
?>