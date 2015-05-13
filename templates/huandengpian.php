 <?php include("neirongguanli_nav.php")  ?>
                    <form class="J_ajaxForm" action="" method="post">
                    <div class="table-actions"><p>&nbsp;</p><p>&nbsp;</p></div>
			 <ul class="nav nav-tabs">
			
			<li><a id="tianjiahuandengpian">添加幻灯片</a></li>
		</ul>
						<table class="table table-hover table-bordered table-list">
				<thead>
					<tr>
						<th width="15"><label><input id="checkAll" class="J_check_all" data-direction="x" data-checklist="J_check_x" onclick="doCheck(this)" type="checkbox"></label></th>
						<th width="50">排序</th>
						<th width="50">ID</th>
						<th width="200">标题</th>
						<th width="200">描述</th>
						<th width="100">链接</th>
						<th width="50">图片</th>
						<th width="50">状态</th>
						<th width="100">操作</th>
					</tr>
				</thead>
				<tbody><tr>
					<td><input class="J_check" data-yid="J_check_y" data-xid="J_check_x" name="ids[]" value="1" type="checkbox"></td>
					<td><input name="listorders[1]" class="input input-order mr5" size="3" value="0" type="text"></td>
					<td>1</td>
					<td>111</td>
					<td>111</td>
					<td>111</td>
					<td>
											</td>
					<td>显示</td>
					<td>
						<a id="huandengpian_xiugai">修改</a>
						<a href="/thinkcmfx/index.php?g=Admin&amp;m=slide&amp;a=delete&amp;id=1" class="J_ajax_del">删除</a>
						 
							<a href="/thinkcmfx/index.php?g=Admin&amp;m=slide&amp;a=ban&amp;id=1" class="J_ajax_dialog_btn" data-msg="确定隐藏此幻灯片吗？">隐藏</a>					</td>
				</tr>				</tbody>
			</table>
			<div class="table-actions">
				<button class="btn btn-primary btn-small J_ajax_submit_btn" type="submit" data-action="/thinkcmfx/index.php?g=Admin&amp;m=slide&amp;a=listorders">排序</button>
				<button class="btn btn-primary btn-small J_ajax_submit_btn" type="submit" data-action="/thinkcmfx/index.php?g=Admin&amp;m=slide&amp;a=toggle&amp;display=1" data-subcheck="true">显示</button>
				<button class="btn btn-primary btn-small J_ajax_submit_btn" type="submit" data-action="/thinkcmfx/index.php?g=Admin&amp;m=slide&amp;a=toggle&amp;hide=1" data-subcheck="true">隐藏</button>
				<button class="btn btn-primary btn-small J_ajax_submit_btn" type="submit" data-action="/thinkcmfx/index.php?g=Admin&amp;m=slide&amp;a=delete" data-subcheck="true">删除</button>
			</div>
		</form>
        <script src="assets/js/jquery-1.11.1.min.js"></script>
<script type="text/javascript">
$(document).ready(function(){
  //所有留言
  $("#huandengpian_xiugai").click(function(){
    $("#page-content").load("huandengpian_xiugai.php",function(responseTxt,statusTxt,xhr){
      if(statusTxt=="error")
        alert("Error: "+xhr.status+": "+xhr.statusText);
    });
  });
   //添加幻灯片
  $("#tianjiahuandengpian").click(function(){
    $("#page-content").load("tianjiahuandengpian.php",function(responseTxt,statusTxt,xhr){
      if(statusTxt=="error")
        alert("Error: "+xhr.status+": "+xhr.statusText);
    });
  });



	
  
});
</script>