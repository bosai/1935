  <?php include("xinwenzhongxin_nav.php") ?>
                    <form class="J_ajaxForm" action="" method="post">
                    <div class="table-actions"><p>&nbsp;</p><p>&nbsp;</p></div>
			
			<table class="table table-hover table-bordered table-list">
				<thead>
					<tr>
						<th width="15"><label><input id="checkAll" class="J_check_all" data-direction="x" data-checklist="J_check_x" onclick="doCheck(this)" type="checkbox"></label></th>
						<th width="100">ID</th>
						<th width="100">标题</th>
						<th width="50">所属分类</th>
						<th width="50">点击量</th>
						<th width="50">推荐首页</th>
						<th width="100">发布人</th>
						<th width="70">发布时间</th>
						<th width="50">状态</th>
						<th width="60">操作</th>
					</tr>
				</thead>
								<tbody><tr>
					<td><input class="J_check" data-yid="J_check_y" data-xid="J_check_x" name="ids[]" value="1" title="ID:1" type="checkbox"></td>
					<td>1</td>
					<td><a href="/thinkcmfx/index.php?g=portal&amp;m=article&amp;a=index&amp;id=1" target="_blank"><span>我问问</span></a></td>
					<td>列表演示</td>
					<td>1</td>
					<td>否</td>
					<td>admin</td>
					<td>2015-05-07 11:58:13</td>
					<td>显示</td>
					<td>
						<a id="xinwenliebiao_xiugai">修改</a> | 
						<a href="" class="J_ajax_del">删除</a></td>
				</tr>				</tbody>
			</table>
			<div class="table-actions">
				<button class="btn btn-primary btn-small J_ajax_submit_btn" type="submit" data-action="/thinkcmfx/index.php?g=&amp;m=AdminPost&amp;a=delete" data-subcheck="true" data-msg="你确定删除吗？">删除</button>	
			</div>
			<div class="pagination"></div>
        </form>
        <script src="assets/js/jquery-1.11.1.min.js"></script>
<script type="text/javascript">
$(document).ready(function(){
  //所有留言
  $("#xinwenliebiao_xiugai").click(function(){
    $("#page-content").load("xinwenliebiao_xiugai.php",function(responseTxt,statusTxt,xhr){
      if(statusTxt=="error")
        alert("Error: "+xhr.status+": "+xhr.statusText);
    });
  });


	
  
});
</script>

