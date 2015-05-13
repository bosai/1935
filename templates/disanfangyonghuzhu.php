 <?php include("yonghuguanli_nav.php") ?>
                    <form method="post" class="J_ajaxForm" action="#">
                    <div class="table-actions"> <p>&nbsp;</p> <p>&nbsp;</p> </div>
			<div class="table_list">
				<table class="table table-hover table-bordered">
					<thead>
						<tr>
							<th align="center">ID</th>
							<th>来源</th>
							<th>用户名</th>
							<th>头像</th>
							<th>绑定账号</th>
							<th>首次登录时间</th>
							<th>最后登录时间</th>
							<th>最后登录IP</th>
							<th>登录次数</th>
							<th align="center">操作</th>
						</tr>
					</thead>
					<tbody>
								<tr>
					<td>2</td>
					<td>123456</td>
					<td>222</td>
                    <td>222</td>
                    <td>222</td>
                    <td>222</td>
					<td>
						该用户还没登陆过
											</td>
					<td>123456@qq.com</td>
					<td>启用</td>
					<td align="center">
								<a href="/ThinkCMFX/index.php?g=User&amp;m=indexadmin&amp;a=ban&amp;id=3" class="J_ajax_dialog_btn" data-msg="您确定要拉黑此用户吗？">拉黑</a>|
								<a href="/ThinkCMFX/index.php?g=User&amp;m=indexadmin&amp;a=cancelban&amp;id=3" class="J_ajax_dialog_btn" data-msg="您确定要启用此用户吗？">启用</a>
							</td>
				</tr>			</tbody>
				</table>
				<div class="pagination"></div>
			</div>
		</form>