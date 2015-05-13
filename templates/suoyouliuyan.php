<?php include("neirongguanli_nav.php") ?>
		<form class="J_ajaxForm" action="/ThinkCMFX/index.php?g=Admin&amp;m=nav&amp;a=listorders" method="post">
        <div class="table-actions"><p>&nbsp;</p><p>&nbsp;</p></div>
			
			<table class="table table-hover table-bordered" width="100%">
					<thead>
						<tr>
                        	<th width="15"><label><input id="checkAll" class="J_check_all" data-direction="x" data-checklist="J_check_x" onclick="doCheck(this)" type="checkbox"></label></th>
							<th width="50">ID</th>
							<th width="100">姓名</th>
							<th width="100">电话</th>
							<th width="150">邮箱</th>
							<th style="min-width: 60px;">留言标题</th>
							<th>留言内容</th>
							<th width="120">留言时间</th>
							<th width="120">操作</th>
						</tr>
					</thead>
					<tbody>
								<tr>
                    <td><input class="J_check" data-yid="J_check_y" data-xid="J_check_x" name="subBox" value="1" type="checkbox"></td>
					<td>2</td>
					<td>admin</td>
					<td>15014244587</td>
					<td>admin@qq.com</td>
                    <td>222</td>
                    <td>222</td>
                    <td>222</td>
					
					<td>
											
							<a class="J_ajax_del" href="/ThinkCMFX/index.php?g=Admin&amp;m=user&amp;a=delete&amp;id=2">删除</a> 
							
												</td>
				</tr>			</tbody>
				</table>
			
		</form>