
<div class="wrap J_check_wrap">
	<ul class="nav nav-tabs">
     <li class="active"><a href="javascript:;">角色授权</a></li>
  </ul>
  <form class="J_ajaxForm" action="/ThinkCMFX/index.php?g=Admin&amp;m=Rbac&amp;a=authorize_post" method="post">
  <div class="table-actions"><p>&nbsp;</p><p>&nbsp;</p></div>
    <div class="table_full">
      <table class="treeTable" id="dnd-example" cellspacing="0" width="100%">
         <tbody>
         <tr>
         	<td style="padding-left:30px;"><span style="padding-left: 20px" class="expander"></span><input name="menuid[]" value="1" level="0" onclick="javascript:checknode(this);" type="checkbox"> 内容管理</td>    
         </tr>
         <tr style="display: none;" id="node-2" class="child-of-node-1">
                       <td style="padding-left: 50px;">&nbsp;&nbsp;&nbsp;├─ <input name="menuid[]" value="2" level="1" onclick="javascript:checknode(this);" type="checkbox"> 所有留言</td>
	    			</tr>
          <tr class="initialized parent collapsed" id="node-85">
                       <td style="padding-left:30px;"><span style="padding-left: 20px" class="expander"></span><input name="menuid[]" value="85" level="0" onclick="javascript:checknode(this);" type="checkbox"> 菜单管理</td>
	    			</tr>
          <tr class="initialized parent collapsed" id="node-109">
                       <td style="padding-left:30px;"><span style="padding-left: 20px" class="expander"></span><input name="menuid[]" value="109" level="0" onclick="javascript:checknode(this);" type="checkbox"> 设置</td>
	    			</tr>
          <tr class="initialized parent collapsed" id="node-132">
                       <td style="padding-left:30px;"><span style="padding-left: 20px" class="expander"></span><input name="menuid[]" value="132" level="0" onclick="javascript:checknode(this);" type="checkbox"> 用户管理</td>
	    			</tr>          
         </tbody>
      </table>
    </div>
    <div class="form-actions">
    	<input name="roleid" value="2" type="hidden">
        <button class="btn btn_submit btn-primary mr10 J_ajax_submit_btn" type="submit">授权</button>
      <a class="btn" id="jiaoseguanli_fanhui">返回</a>
    </div>
  </form>
</div>
<script src="assets/js/jquery-1.11.1.min.js"></script>
<script type="text/javascript">
$(document).ready(function(){
  //所有留言
  $("#jiaoseguanli_fanhui").click(function(){
    $("#page-content").load("jiaoseguanli.php",function(responseTxt,statusTxt,xhr){
      if(statusTxt=="error")
        alert("Error: "+xhr.status+": "+xhr.statusText);
    });
  });
 

	
  
});
</script>