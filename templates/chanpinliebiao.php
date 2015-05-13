 <?php include("chanpinzhongxin_nav.php") ?>
                    <form class="J_ajaxForm" action="" method="post">
                    <div class="table-actions"><p>&nbsp;</p><p>&nbsp;</p></div>
			
			<table class="table table-hover table-bordered table-list">
				<thead>
					<tr>
						<th width="15"><label><input id="checkAll" class="J_check_all" data-direction="x" data-checklist="J_check_x" onclick="doCheck(this)" type="checkbox"></label></th>	
						<th  width="100">标题</th>
						<th  width="50">栏目</th>
						<th width="50">点击量</th>
						<th width="50">评论量</th>
						<th width="50">关键字</th>
						<th width="50">来源</th>
						<th width="50">摘要</th>
						<th width="50">缩略图</th>
						<th width="100">发布人</th>
						<th width="70">发布时间</th>
						<th width="50">状态</th>
						<th width="60">操作</th>
					</tr>
				</thead>
								<tbody><tr>
					<td><input class="J_check" data-yid="J_check_y" data-xid="J_check_x" name="ids[]" value="1" title="ID:1" type="checkbox"></td>					
					<td><a href="/thinkcmfx/index.php?g=portal&amp;m=article&amp;a=index&amp;id=1" target="_blank"> <span>我问问</span></a></td>
					<td>列表演示</td>
					<td>1</td>
					<td><a href="javascript:open_iframe_dialog('/thinkcmfx/index.php?g=comment&amp;m=commentadmin&amp;a=index&amp;post_id=1','评论列表')">1</a></td>
					<td>已填写</td>
					<td>已填写</td>
					<td>已填写</td>
					<td>
																	</td>
					<td>admin</td>
					<td>2015-05-07 11:58:13</td>
					<td>已审核<br>未置顶<br>未推荐					</td>
					<td>
						<a id="chanpinliebiao_xiugai">修改</a> | 
						<a href="/thinkcmfx/index.php?g=&amp;m=AdminPost&amp;a=delete&amp;term=&amp;tid=1" class="J_ajax_del">删除</a></td>
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
  $("#chanpinliebiao_xiugai").click(function(){
    $("#page-content").load("chanpinliebiao_xiugai.php",function(responseTxt,statusTxt,xhr){
      if(statusTxt=="error")
        alert("Error: "+xhr.status+": "+xhr.statusText);
    });
  });


	
  
});
</script>