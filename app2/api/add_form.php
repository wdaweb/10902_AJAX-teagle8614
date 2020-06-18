<div id="insertBlock">
    <h3>新增學生資料</h3>
    <form id="create">
      <ul>
        <li><span>姓名:</span><input type="text" name="name" id="name"></li>
        <li><span>學號:</span><input type="text" name="uni_id" id="uni_id"></li>
        <li><span>班級座號:</span><input type="text" name="class_num" id="class_num"></li>
        <li><span>出生年月日:</span><input type="text" name="birthday" id="birthday"></li>
        <li><span>身份證字號:</span><input type="text" name="nat_id" id="nat_id"></li>
        <li><span>住址:</span><input type="text" name="addr" id="addr"></li>
        <li><span>父母:</span><input type="text" name="parent" id="parent"></li>
        <li><span>電話:</span><input type="text" name="tel" id="tel"></li>
        <li><span>科別:</span><input type="text" name="dept" id="dept"></li>
        <li><span>畢業國中:</span><input type="text" name="grad_at" id="grad_at"></li>
      </ul>
      <div>
        <input type="button" value="確定新增" onclick="create()">
        <input type="button" value="取消操作" onclick="cancel()">
      </div>
    </form>
  </div>