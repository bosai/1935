 <?php include("chanpinzhongxin_nav.php") ?>
                    <form class="form-horizontal J_ajaxForm" name="myform" id="myform" action="/ThinkCMFX/index.php?g=&amp;m=AdminTerm&amp;a=add_post" method="post">
                    <div class="table-actions"><p>&nbsp;</p><p>&nbsp;</p></div>
			<div class="tabbable">
		        <div class="tab-content">
		          <div class="tab-pane active" id="A">
		          		<table cellpadding="2" cellspacing="2" width="100%">
							<tbody>
								<tr>
									<td width="140">上级:</td>
									<td><select name="parent" class="normal_select">
											<option value="0">作为一级分类</option>
											<option value="1">列表演示</option><option value="2">瀑布流</option><option value="3">阿百川</option>									</select></td>
								</tr>
								<tr>
									<td>名称:</td>
									<td><input class="input" name="name" value="" type="text"><span class="must_red">*</span></td>
								</tr>
								
							</tbody>
						</table>
		          </div>
		          <div class="tab-pane" id="B">
		          		<table cellpadding="2" cellspacing="2" width="100%">
							<tbody>
								<tr>
									<td width="180">SEO标题:</td>
									<td><input class="input" name="seo_title" value="" type="text"></td>
								</tr>
								<tr>
									<td>SEO关键字:</td>
									<td><input class="input" name="seo_keywords" value="" type="text"></td>
								</tr>
								<tr>
									<td>SEO描述:</td>
									<td><textarea name="seo_description" rows="5" cols="57"></textarea></td>
								</tr>
							</tbody>
						</table>
		          </div>
		          <div class="tab-pane" id="C">
		          		<table cellpadding="2" cellspacing="2" width="100%">
							<tbody>
																<tr>
									<td width="180">列表页模板:</td>
									<td>
															              		<select class="normal_select" name="list_tpl">
					              			<option value="list">list.html</option>
					              			<option value="article">article.html</option><option value="contact">contact.html</option><option value="index">index.html</option><option value="list_masonry">list_masonry.html</option><option value="page">page.html</option><option value="search">search.html</option>					              		</select>
									</td>
								</tr>
								<tr>
									<td>单文章模板:</td>
									<td>
															              		<select class="normal_select" name="one_tpl">
					              			<option value="article">article.html</option>
					              			<option value="contact">contact.html</option><option value="index">index.html</option><option value="list">list.html</option><option value="list_masonry">list_masonry.html</option><option value="page">page.html</option><option value="search">search.html</option>					              		</select>
									</td>
								</tr>
							</tbody>
						</table>
		          </div>
		        </div>
		    </div>
		     <div class="form-actions">
		           <button class="btn btn-primary btn_submit J_ajax_submit_btn" type="submit">提交</button>
		      		<a class="btn" id="chanpinfenlei_fanhui">返回</a>
		      </div>
		</form>
<script src="assets/js/jquery-1.11.1.min.js"></script>
<script type="text/javascript">
$(document).ready(function(){
  //所有留言
  $("#chanpinfenlei_fanhui").click(function(){
    $("#page-content").load("chanpinfenlei.php",function(responseTxt,statusTxt,xhr){
      if(statusTxt=="error")
        alert("Error: "+xhr.status+": "+xhr.statusText);
    });
  });

  
});
</script>