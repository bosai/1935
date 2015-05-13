 <?php include("chanpinzhongxin_nav.php") ?>
                    <form method="post" class="J_ajaxForm" action="/thinkcmfx/index.php?g=&amp;m=AdminTerm&amp;a=listorders">
                    <div class="table-actions"><p>&nbsp;</p><p>&nbsp;</p></div>
					<table class="table table-hover table-bordered table-list">
				<thead>
					<tr>
					
						<th width="50">ID</th>
						<th>分类名称</th>
						<th>分类类型</th>
						<th align="center">访问</th>
						<th>操作</th>
					</tr>
				</thead>
				<tbody>
					<tr>
					<td><input name="listorders[1]" size="3" value="0" class="input input-order" type="text"></td>
				
					<td> <a href="/thinkcmfx/index.php?g=portal&amp;m=list&amp;a=index&amp;id=1" target="_blank">列表演示</a></td>
	    			<td>文章</td>
					<td align="center"><a href="/thinkcmfx/index.php?g=portal&amp;m=list&amp;a=index&amp;id=1" target="_blank">访问</a></td>
					<td ><span class="tianjiazilei">添加子类</span>  <span class="xiugai">修改</span> | <span >删除</span> </td>
				</tr><tr>
					<td><input name="listorders[2]" size="3" value="0" class="input input-order" type="text"></td>
					
					<td> <a href="/thinkcmfx/index.php?g=portal&amp;m=list&amp;a=index&amp;id=2" target="_blank">瀑布流</a></td>
	    			<td>文章</td>
					<td align="center"><a href="/thinkcmfx/index.php?g=portal&amp;m=list&amp;a=index&amp;id=2" target="_blank">访问</a></td>
					<td><a href="/thinkcmfx/index.php?g=&amp;m=AdminTerm&amp;a=add&amp;parent=2">添加子类</a> | <a href="/thinkcmfx/index.php?g=&amp;m=AdminTerm&amp;a=edit&amp;id=2">修改</a> | <a class="J_ajax_del" href="/thinkcmfx/index.php?g=&amp;m=AdminTerm&amp;a=delete&amp;id=2">删除</a> </td>
				</tr><tr>
					<td><input name="listorders[3]" size="3" value="0" class="input input-order" type="text"></td>
					
					<td> <a href="/thinkcmfx/index.php?g=portal&amp;m=list&amp;a=index&amp;id=3" target="_blank">阿百川</a></td>
	    			<td>文章</td>
					<td align="center"><a href="/thinkcmfx/index.php?g=portal&amp;m=list&amp;a=index&amp;id=3" target="_blank">访问</a></td>
					<td><a href="/thinkcmfx/index.php?g=&amp;m=AdminTerm&amp;a=add&amp;parent=3">添加子类</a> | <a href="">修改</a> | <a class="J_ajax_del" href="/thinkcmfx/index.php?g=&amp;m=AdminTerm&amp;a=delete&amp;id=3">删除</a> </td>
				</tr>				</tbody>
				
			</table>
		</form>
<script src="assets/js/jquery-1.11.1.min.js"></script>
<script type="text/javascript">
$(document).ready(function(){
	
  //产品中心——产品分类--添加子类
  $(".tianjiazilei").click(function(){
    $("#page-content").load("chanpinfenlei_tianjiazilei.php",function(responseTxt,statusTxt,xhr){
      if(statusTxt=="error")
        alert("Error: "+xhr.status+": "+xhr.statusText);
    });
  });
  //产品中心——产品分类--修改
  $(".xiugai").click(function(){
    $("#page-content").load("chanpinfenlei_xiugai.php",function(responseTxt,statusTxt,xhr){
      if(statusTxt=="error")
        alert("Error: "+xhr.status+": "+xhr.statusText);
    });
  });

  
});
</script>
