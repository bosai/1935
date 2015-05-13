 <?php include("chanpinzhongxin_nav.php") ?>
                    <form class="form-horizontal J_ajaxForm" name="myform" id="myform" action="/ThinkCMFX/index.php?g=&amp;m=AdminTerm&amp;a=add_post" method="post">
                    <div class="table-actions"><p>&nbsp;</p><p>&nbsp;</p></div>
			<div class="tabbable">
		        <div class="tab-content">
		          <div class="tab-pane active" id="A">
		          		<table cellpadding="2" cellspacing="2" width="100%">
							<tbody>
								<tr>
									<td width="140">所属分类:</td>
									<td><select name="pic" class="normal_select">
											<option value="0">请添加分类</option>
										</select>
									</td>
									<input type="hidden" name="path" value="0">
								</tr>
								<tr>
									<td>分类名称:</td>
									<td><input class="input" name="name" value="" type="text"></td>
								</tr>
								<tr>
									<td>排序:</td>
									<td><input class="input" name="pro_class_sort" value="" type="text"></td>
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