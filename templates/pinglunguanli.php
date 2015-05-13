<?php include("neirongguanli_nav.php"); ?>
		<form class="J_ajaxForm" action="/ThinkCMFX/index.php?g=Admin&amp;m=nav&amp;a=listorders" method="post">
		<div class="table-actions"><p>&nbsp;</p><p>&nbsp;</p></div>
			<table class="table table-hover table-bordered table-list" width="100%">
				<thead>
					<tr>
						<th width="50">排序</th>
						<th width="50">ID</th>
						<th>菜单名称</th>
						<th width="100">状态</th>
						<th width="150">管理操作</th>
					</tr>
				</thead>
				<tbody>
				<tr>
				<td><input name="listorders[1]" size="3" value="0" class="input input-order" type="text"></td>
				<td>1</td>
				<td>首页</td>
			    <td>显示</td>
				<td><a class="J_ajax_del" href="/ThinkCMFX/index.php?g=Admin&amp;m=nav&amp;a=delete&amp;id=1">删除</a> </td>
			</tr>			</tbody>
				
			</table>
			<div class="table-actions">
				<button type="submit" class="btn btn-primary btn-small btn_submit J_ajax_submit_btn">排序</button>
			</div>
		</form>