 <?php include("chanpinzhongxin_nav.php") ?>
                    <form method="post" class="J_ajaxForm" action="/thinkcmfx/index.php?g=&amp;m=AdminTerm&amp;a=listorders">
                    <div class="table-actions"><p>&nbsp;</p><p>&nbsp;</p></div>
					<table class="table table-hover table-bordered table-list">
				<thead>
					<tr>
					
						<th width="50">ID</th>
						<th>分类名称</th>
						<th>所属分类</th>
						<th>以下产品数</th>
						<th>操作</th>
					</tr>
				</thead>
				<tbody>
					<tr>
					<td><input name="pro_class_sort" size="3" value="0" class="input input-order" type="text"></td>
				
					<td>上衣</td>
	    			<td>服装</td>
	    			<td>10</td>
					<td ><span class="tianjiazilei">添加子分类</span> | <span class="xiugai">修改</span> | <span >删除</span> </td>
				</tr></tbody>
				
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
