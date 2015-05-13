  <?php include("caidanguanli_nav.php"); ?>     
		<form class="form-horizontal J_ajaxForm" action="" method="post">
        <div class="table-actions"><p>&nbsp;</p><p>&nbsp;</p></div>
			<table class="table table-hover table-bordered">
				<thead>
					<tr>
						<th width="100">ID</th>
						<th>名称</th>
						<th>所属分类</th>
						<th>链接</th>
						<th width="120">状态</th>
						<th width="120">操作</th>
					</tr>
				</thead>
				<tbody><tr>
					<td>1</td>
					<td>公司简介</td>
					<td>1935</td>
					<td>http://</td>
					<td>显示</td>
					<td>
						<a id="caidanfenlei_xiugai">修改</a>|
						<a href="/ThinkCMFX/index.php?g=Admin&amp;m=navcat&amp;a=delete&amp;id=1" class="J_ajax_del">删除</a>
					</td>
				</tr>			</tbody></table>
		</form>
        <script src="assets/js/jquery-1.11.1.min.js"></script>
<script type="text/javascript">
$(document).ready(function(){
  //菜单分类——修改
  $("#caidanfenlei_xiugai").click(function(){
    $("#page-content").load("caidanfenlei_xiugai.php",function(responseTxt,statusTxt,xhr){
      if(statusTxt=="error")
        alert("Error: "+xhr.status+": "+xhr.statusText);
    });
  });


	
  
});
</script>