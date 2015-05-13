<div class="wrap jj">
		
		<div class="common-form">
        <div class="table-actions"><p>&nbsp;</p><p>&nbsp;</p></div>
			<form method="post" class="form-horizontal J_ajaxForm" action="/ThinkCMFX/index.php?g=Admin&amp;m=User&amp;a=edit_post">
				<fieldset>
					<div class="control-group">
						<label class="control-label">用户名:</label>
						<div class="controls">
							<input class="input" name="user_login" value="123456" type="text">
						</div>
					</div>
					<div class="control-group">
						<label class="control-label">密码:</label>
						<div class="controls">
							<input class="input" name="user_pass" value="" placeholder="******" type="password">
						</div>
					</div>
					<div class="control-group">
						<label class="control-label">邮箱:</label>
						<div class="controls">
							<input class="input" name="user_email" value="123456@qq.com" type="text">
						</div>
					</div>
					<div class="control-group">
						<label class="control-label">角色:</label>
						<div class="controls">
							<label class="checkbox inline">
																<input value="2" name="role_id[]" checked="" type="checkbox">普通管理员							</label><label class="checkbox inline">
																<input value="1" name="role_id[]" type="checkbox">超级管理员							</label>						</div>
					</div>
				</fieldset>
				<div class="form-actions">
					<input name="id" value="2" type="hidden">
					<button type="submit" class="btn btn-primary btn_submit J_ajax_submit_btn">更新</button>
					<a class="btn" id="guanliyuan_fanhui">返回</a>
				</div>
			</form>
		</div>
	</div>
    <script src="assets/js/jquery-1.11.1.min.js"></script>
<script type="text/javascript">
$(document).ready(function(){
  //所有留言
  $("#guanliyuan_fanhui").click(function(){
    $("#page-content").load("guanliyuan.php",function(responseTxt,statusTxt,xhr){
      if(statusTxt=="error")
        alert("Error: "+xhr.status+": "+xhr.statusText);
    });
  });


});
</script>