
					<div class="page-content">
                    <?php include("yonghuguanli_nav.php") ?>
                    
                    <div class="table-actions"><p>&nbsp;</p><p>&nbsp;</p></div>
                    <ul class="nav nav-tabs">
			
			<li><a id="tianjiaguanliyuan">添加管理员</a></li>
		</ul>
                    <table class="table table-hover table-bordered">
			<thead>
				<tr>
					<th width="50">ID</th>
					<th>用户名</th>
					<th>最后登录IP</th>
					<th>最后登录时间</th>
					<th>E-mail</th>
					<th>状态</th>
					<th width="120">管理操作</th>
				</tr>
			</thead>
			<tbody>
								<tr>
					<td>1</td>
					<td>admin</td>
					<td>127.0.0.1</td>
					<td>
													2015-05-07 11:38:54					</td>
					<td>12715444691@qq.com</td>
					<td>启用</td>
					<td>
						<font color="#cccccc">修改</font> | <font color="#cccccc">删除</font> |
							<font color="#cccccc">停用</font>
																		</td>
				</tr><tr>
					<td>2</td>
					<td>123456</td>
					<td></td>
					<td>
						该用户还没登陆过
											</td>
					<td>123456@qq.com</td>
					<td>启用</td>
					<td>
													<a id="guanliyuan_xiugai">修改</a> | 
							<a class="J_ajax_del" href="/ThinkCMFX/index.php?g=Admin&amp;m=user&amp;a=delete&amp;id=2">删除</a> | 
							<a href="/ThinkCMFX/index.php?g=Admin&amp;m=user&amp;a=ban&amp;id=2" class="J_ajax_dialog_btn" data-msg="您确定要停用此用户吗？">停用</a>
												</td>
				</tr>			</tbody>
		</table>
                    </div>
<script src="assets/js/jquery-1.11.1.min.js"></script>
<script type="text/javascript">
$(document).ready(function(){
  //管理员修改
  $("#guanliyuan_xiugai").click(function(){
    $("#page-content").load("guanliyuan_xiugai.php",function(responseTxt,statusTxt,xhr){
      if(statusTxt=="error")
        alert("Error: "+xhr.status+": "+xhr.statusText);
    });
  });
  //添加管理员
  $("#tianjiaguanliyuan").click(function(){
    $("#page-content").load("tianjiaguanliyuan.php",function(responseTxt,statusTxt,xhr){
      if(statusTxt=="error")
        alert("Error: "+xhr.status+": "+xhr.statusText);
    });
  });



	
  
});
</script>