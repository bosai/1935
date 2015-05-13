
		<form class="J_ajaxForm" action="" method="post">

       <div>
       		<ul class="nav nav-tabs">
		
			<li><a id="qiantaicaidan_tianjiacaidan">添加菜单</a></li>
		</ul>
       </div>
			<table class="table table-hover table-bordered table-list" width="100%">
				<thead>
					<tr>
						<th width="50">排序</th>
						<th width="50">ID</th>
						<th>菜单名称</th>
						<th>链接</th>
						<th width="100">状态</th>
						<th width="150">管理操作</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td><input name="listorders[1]" size="10" value="0" class="input input-order" type="text"></td>
						<td>1</td>
						<td>首页</td>
						<td>无链接</td>
						<td>显示</td>
						<td><a id="qiantaicaidan_tianjiazicaidan">添加子菜单</a> | <a id="qiantaicaidan_xiugai">修改</a> | <a class="J_ajax_del" href="/ThinkCMFX/index.php?g=Admin&amp;m=nav&amp;a=delete&amp;id=1">删除</a> </td>
					</tr>
				</tbody>
			</table>
			<div class="table-actions">
				<button type="submit" class="btn btn-primary btn-small btn_submit J_ajax_submit_btn">排序</button>
			</div>
		</form>
        <script src="assets/js/jquery-1.11.1.min.js"></script>
<script type="text/javascript">
$(document).ready(function(){
  //添加子菜单
  $("#qiantaicaidan_tianjiazicaidan").click(function(){
    $("#page-content").load("qiantaicaidan_tianjiazicaidan.php",function(responseTxt,statusTxt,xhr){
      if(statusTxt=="error")
        alert("Error: "+xhr.status+": "+xhr.statusText);
    });
  });
  //前台菜单——修改
  $("#qiantaicaidan_xiugai").click(function(){
    $("#page-content").load("qiantaicaidan_xiugai.php",function(responseTxt,statusTxt,xhr){
      if(statusTxt=="error")
        alert("Error: "+xhr.status+": "+xhr.statusText);
    });
  });
    //前台菜单——添加菜单
  $("#qiantaicaidan_tianjiacaidan").click(function(){
    $("#page-content").load("qiantaicaidan_tianjiacaidan.php",function(responseTxt,statusTxt,xhr){
      if(statusTxt=="error")
        alert("Error: "+xhr.status+": "+xhr.statusText);
    });
  });


	
  
});
</script>