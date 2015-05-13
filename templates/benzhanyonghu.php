<?php include("yonghuguanli_nav.php") ?>
                    <form method="post" class="J_ajaxForm" action="#">
                    <div class="table-actions"><p>&nbsp;</p><p>&nbsp;</p></div>
			<div class="table_list">
				<table class="table table-hover table-bordered">
					<thead>
						<tr>
							<th align="center">ID</th>
							<th>用户名</th>
							<th>昵称</th>
							<th>头像</th>
							<th>E-mail</th>
							<th>注册时间</th>
							<th>最后登录时间</th>
							<th>最后登录IP</th>
							<th>状态</th>
							<th align="center">操作</th>
						</tr>
					</thead>
					<tbody>
												<tr>
							<td align="center">3</td>
							<td>潘飞龙</td>
							<td>潘飞龙</td>
							<td><img src="/ThinkCMFX/index.php?g=user&amp;m=public&amp;a=avatar&amp;id=3" height="25" width="25"></td>
							<td>1271544691@qq.com</td>
							<td>2015-05-08 08:51:05</td>
							<td>2015-05-08 08:51:05</td>
							<td>127.0.0.1</td>
							<td>正常</td>
							<td align="center">
								<a href="/ThinkCMFX/index.php?g=User&amp;m=indexadmin&amp;a=ban&amp;id=3" class="J_ajax_dialog_btn" data-msg="您确定要拉黑此用户吗？">拉黑</a>|
								<a href="/ThinkCMFX/index.php?g=User&amp;m=indexadmin&amp;a=cancelban&amp;id=3" class="J_ajax_dialog_btn" data-msg="您确定要启用此用户吗？">启用</a>
							</td>
						</tr>					</tbody>
				</table>
				<div class="pagination"></div>
			</div>
		</form>
