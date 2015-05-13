<?php include("chanpinzhongxin_nav.php") ?>
                    <form class="form-horizontal J_ajaxForm" name="myform" id="myform" action="/ThinkCMFX/index.php?g=&amp;m=AdminTerm&amp;a=edit_post" method="post">
                    <div class="table-actions"><p>&nbsp;</p><p>&nbsp;</p></div>
		 <input name="term_id" value="3" type="hidden">
		 	<div class="tabbable">
		        <div class="tab-content">
		          <div class="tab-pane active" id="A">
		          	<table >
							<tbody>
								
								<tr>
									<td>中文分类名称：</td>
									<td><input class="input" name="name" value="阿百川" type="text"><span class="must_red">*</span></td>
								</tr>
								<tr>
									<td>英文分类名称：</td>
									<td><input class="input" name="name" value="阿百川" type="text"></td>
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