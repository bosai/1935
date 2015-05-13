<div class="wrap J_check_wrap">
  <form class="form-horizontal J_ajaxForm" action="/ThinkCMFX/index.php?g=Admin&amp;m=Rbac&amp;a=roleedit_post" method="post" id="myform">
  <div class="table-actions"><p>&nbsp;</p><p>&nbsp;</p></div>
    <div class="table_full">
      <table cellpadding="2" cellspacing="2" width="100%">
        <tbody><tr>
          <th width="180">角色名称</th>
          <td><input name="name" value="普通管理员" class="input" id="rolename" type="text"><span class="must_red">*</span></td>
        </tr>
        <tr>
          <th>角色描述</th>
          <td><textarea name="remark" rows="2" cols="20" id="remark" class="inputtext" style="height:100px;width:500px;"></textarea></td>
        </tr>
        <tr>
          <th>是否启用</th>
          <td>
          	              <label class="radio inline" for="active_true">
            		<input name="status" value="1" checked="" id="active_true" type="radio">开启
            </label>
                        <label class="radio inline" for="active_false">
            		<input name="status" value="0" id="active_false" type="radio">禁止
            </label>
          </td>
        </tr>
      </tbody></table>
      <input name="id" value="2" type="hidden">
    </div>
    <div class="form-actions">
        <button type="submit" class="btn btn-primary btn_submit  J_ajax_submit_btn">提交</button>
        <a class="btn" id="jiaoseguanli_fanhui">返回</a>
    </div>
  </form>
</div>
<script src="assets/js/jquery-1.11.1.min.js"></script>
<script type="text/javascript">
$(document).ready(function(){
	 //角色添加
  $("#jiaoseguanli_tianjiajiaose").click(function(){
    $("#page-content").load("jiaoseguanli_tianjiajiaose.php",function(responseTxt,statusTxt,xhr){
      if(statusTxt=="error")
        alert("Error: "+xhr.status+": "+xhr.statusText);
    });
  });
  //所有留言
  $("#jiaoseguanli_fanhui").click(function(){
    $("#page-content").load("jiaoseguanli.php",function(responseTxt,statusTxt,xhr){
      if(statusTxt=="error")
        alert("Error: "+xhr.status+": "+xhr.statusText);
    });
  });
  
 

	
  
});
</script>