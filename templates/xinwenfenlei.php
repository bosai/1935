 <?php include("xinwenzhongxin_nav.php") ?>
                    <form method="post" class="J_ajaxForm" action="/thinkcmfx/index.php?g=&amp;m=AdminTerm&amp;a=listorders">
                    <div class="table-actions"><p>&nbsp;</p><p>&nbsp;</p></div>
			
			<table class="table table-hover table-bordered table-list">
				<thead>
					<tr>
						<th width="50">排序</th>
						<th width="50">ID</th>
						<th>分类名称</th>
						<th>状态</th>
						<th>操作</th>
					</tr>
				</thead>
				<tbody>
					<tr>
					<td><input name="listorders[1]" size="3" value="0" class="input input-order" type="text"></td>
					<td>1</td>
					<td>行业新闻</td>
					<td>显示</td>
					<td><span class="xiugai">修改</span> | <a class="J_ajax_del" href="/thinkcmfx/index.php?g=&amp;m=AdminTerm&amp;a=delete&amp;id=1">删除</a> </td>
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
	
  //产品中心——产品分类--添加子类
  $(".tianjiazilei").click(function(){
    $("#page-content").load("xinwenfenlei_tianjiazilei.php",function(responseTxt,statusTxt,xhr){
      if(statusTxt=="error")
        alert("Error: "+xhr.status+": "+xhr.statusText);
    });
  });
  //产品中心——产品分类--修改
  $(".xiugai").click(function(){
    $("#page-content").load("xinwenfenlei_xiugai.php",function(responseTxt,statusTxt,xhr){
      if(statusTxt=="error")
        alert("Error: "+xhr.status+": "+xhr.statusText);
    });
  });

  
});
</script>
