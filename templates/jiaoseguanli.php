 <?php include("yonghuguanli_nav.php") ?>
                    <form name="myform" action="/ThinkCMFX/index.php?g=Admin&amp;m=Rbac&amp;a=listorders" method="post">
                    <div class="table-actions"><p>&nbsp;</p><p>&nbsp;</p></div>
			<table class="table table-hover table-bordered">
				<thead>
					<tr>
						<th width="30">ID</th>
						<th align="left">角色名称</th>
						<th align="left">角色描述</th>
						<th align="left" width="40">状态</th>
						<th width="120">管理操作</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td>2</td>
						<td>普通管理员</td>
						<td></td>
						<td>
							<font color="red">√</font>
													</td>
						<td>
								<a id="jiaoseguanli_quaxianshezhi">权限设置</a>|
								<a id="jiaoseguanli_xiugai">修改</a>|
								<a class="J_ajax_del" href="">删除</a>						</td>
					</tr><tr>
						<td>1</td>
						<td>超级管理员</td>
						<td>拥有网站最高管理员权限！</td>
						<td>
							<font color="red">√</font>
													</td>
						<td>
							<font color="#cccccc">权限设置</font> | <!-- <a href="javascript:open_iframe_dialog('/ThinkCMFX/index.php?g=Admin&m=rbac&a=member&id=1','成员管理');">成员管理</a> | -->
								<font color="#cccccc">修改</font> | <font color="#cccccc">删除</font>
													</td>
					</tr>				</tbody>
			</table>
		</form>
        <script src="assets/js/jquery-1.11.1.min.js"></script>
<script type="text/javascript">
$(document).ready(function(){
  //权限设置
  $("#jiaoseguanli_quaxianshezhi").click(function(){
    $("#page-content").load("jiaoseguanli_quaxianshezhi.php",function(responseTxt,statusTxt,xhr){
      if(statusTxt=="error")
        alert("Error: "+xhr.status+": "+xhr.statusText);
    });
  });
  //修改
  $("#jiaoseguanli_xiugai").click(function(){
    $("#page-content").load("jiaoseguanli_xiugai.php",function(responseTxt,statusTxt,xhr){
      if(statusTxt=="error")
        alert("Error: "+xhr.status+": "+xhr.statusText);
    });
  });


	
  
});
</script>