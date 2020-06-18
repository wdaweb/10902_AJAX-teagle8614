<?php
  include_once "base.php";
  $db=new DB("students");

  $id=$_GET['id'];
  $row=$db->find($id);

?>


<!---編輯資料用的表單-->
<div id='editBlock'>
    <h3>編輯學生資料</h3>
    <form id="edit">
      <ul>
        <li><span>姓名：</span><input type="text" name="name" id="name" value="<?=$row['name'];?>"></li>
        <li><span>學號：</span><input type="text" name="uni_id" id="uni_id" value="<?=$row['uni_id'];?>"></li>
        <li><span>班級座號：</span><input type="text" name="class_num" id="class_num" value="<?=$row['class_num'];?>"></li>
        <li><span>出生年月日：</span><input type="text" name="birthday" id="birthday" value="<?=$row['birthday'];?>"></li>
        <li><span>身份證字號：</span><input type="text" name="nat_id" id="nat_id" value="<?=$row['nat_id'];?>"></li>
        <li><span>住址：</span><input type="text" name="addr" id="addr" value="<?=$row['addr'];?>"></li>
        <li><span>父母：</span><input type="text" name="parent" id="parent" value="<?=$row['parent'];?>"></li>
        <li><span>電話：</span><input type="text" name="tel" id="tel" value="<?=$row['tel'];?>"></li>
        <li><span>科別：</span><input type="text" name="dept" id="dept" value="<?=$row['dept'];?>"></li>
        <li><span>畢業國中：</span><input type="text" name="grad_at" id="grad_at" value="<?=$row['grad_at'];?>"></li>
        <input type="hidden" name="id" id="id" value="<?=$row['id'];?>">
      </ul>
      <div>
        <input type="button" value="確定修改" onclick="update()">
        <input type="button" value="取消操作" onclick="cancel()">
      </div>
    </form>
  </div>