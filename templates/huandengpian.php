
                    <form class="J_ajaxForm" action="" method="post">
                    <div class="table-actions"><p>&nbsp;</p><p>&nbsp;</p></div>
			 <ul class="nav nav-tabs">
			
			<li><a id="tianjiahuandengpian">添加幻灯片</a></li>
		</ul>
						<table class="table table-hover table-bordered table-list">
				<thead>
					<tr>
						<th width="50">ID</th>
						<th width="200">描述</th>
						<th width="100">链接</th>
						<th width="50">图片</th>
						<th width="100">操作</th>
					</tr>
				</thead>
				<tbody>
				<tr>
					<td>1</td>
					<td>111</td>
					<td>http://</td>
					<td>pic</td>
					<td>
						<a id="huandengpian_xiugai">修改</a>
					</td>
				</tr>
				</tbody>
			</table>
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