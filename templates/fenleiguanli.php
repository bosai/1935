 <?php include("neirongguanli_nav.php") ?>
                    <form method="post" class="J_ajaxForm" action="/thinkcmfx/index.php?g=&amp;m=AdminTerm&amp;a=listorders">
                    <div class="table-actions"><p>&nbsp;</p><p>&nbsp;</p></div>
			
			<table class="table table-hover table-bordered table-list">
				<thead>
					<tr>
						<th width="50">排序</th>
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
					<td>1</td>
					<td> <a href="/thinkcmfx/index.php?g=portal&amp;m=list&amp;a=index&amp;id=1" target="_blank">列表演示</a></td>
	    			<td>文章</td>
					<td align="center"><a href="/thinkcmfx/index.php?g=portal&amp;m=list&amp;a=index&amp;id=1" target="_blank">访问</a></td>
					<td><a href="/thinkcmfx/index.php?g=&amp;m=AdminTerm&amp;a=add&amp;parent=1">添加子类</a> | <a href="/thinkcmfx/index.php?g=&amp;m=AdminTerm&amp;a=edit&amp;id=1">修改</a> | <a class="J_ajax_del" href="/thinkcmfx/index.php?g=&amp;m=AdminTerm&amp;a=delete&amp;id=1">删除</a> </td>
				</tr><tr>
					<td><input name="listorders[2]" size="3" value="0" class="input input-order" type="text"></td>
					<td>2</td>
					<td> <a href="/thinkcmfx/index.php?g=portal&amp;m=list&amp;a=index&amp;id=2" target="_blank">瀑布流</a></td>
	    			<td>文章</td>
					<td align="center"><a href="/thinkcmfx/index.php?g=portal&amp;m=list&amp;a=index&amp;id=2" target="_blank">访问</a></td>
					<td><a href="/thinkcmfx/index.php?g=&amp;m=AdminTerm&amp;a=add&amp;parent=2">添加子类</a> | <a href="/thinkcmfx/index.php?g=&amp;m=AdminTerm&amp;a=edit&amp;id=2">修改</a> | <a class="J_ajax_del" href="/thinkcmfx/index.php?g=&amp;m=AdminTerm&amp;a=delete&amp;id=2">删除</a> </td>
				</tr>				</tbody>
				<tfoot>
					<tr>
						<th width="50">排序</th>
						<th width="50">ID</th>
						<th>分类名称</th>
						<th>分类类型</th>
						<th align="center">访问</th>
						<th>操作</th>
					</tr>
				</tfoot>
			</table>
			<div class="table-actions">
				<button type="submit" class="btn btn-primary btn-small btn_submit J_ajax_submit_btn">排序</button>
			</div>
		</form>