<form method="post" class="form-horizontal J_ajaxForm" action="/ThinkCMFX/index.php?g=Admin&amp;m=User&amp;a=add_post">
				<fieldset>
					<div class="control-group">
						<label class="control-label">用户名:</label>
						<div class="controls">
							<input type="text" class="input" name="user_login" value="">
						</div>
					</div>
					<div class="control-group">
						<label class="control-label">密码:</label>
						<div class="controls">
							<input type="password" class="input" name="user_pass" value="">
						</div>
					</div>
					<div class="control-group">
						<label class="control-label">邮箱:</label>
						<div class="controls">
							<input type="text" class="input" name="user_email" value="">
						</div>
					</div>
					<div class="control-group">
						<label class="control-label">角色:</label>
						<div class="controls">
							<label class="checkbox inline"><input value="2" type="checkbox" name="role_id[]">普通管理员</label><label class="checkbox inline"><input value="1" type="checkbox" name="role_id[]">超级管理员</label>						</div>
					</div>
				</fieldset>
				<div class="form-actions">
					<button type="submit" class="btn btn-primary btn_submit J_ajax_submit_btn">添加</button>
					
				</div>
			</form>