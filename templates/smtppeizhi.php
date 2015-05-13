 <?php include("shezhi_nav.php"); ?>
                    <form method="post" class="form-horizontal J_ajaxForm" action="/ThinkCMFX/index.php?g=Admin&amp;m=mailer&amp;a=index_post">
                    <div class="table-actions"> <p>&nbsp;</p> <p>&nbsp;</p> </div>
				<fieldset>
					<div class="control-group">
						<label class="control-label">发件人:</label>
						<div class="controls">
							<input class="input mr5" name="sender" value="" type="text">
							<span class="must_red">*</span>
						</div>
					</div>
					<div class="control-group">
						<label class="control-label">邮箱地址:</label>
						<div class="controls">
							<input class="input mr5" name="address" value="" type="text">
							<span class="must_red">*</span>
						</div>
					</div>
					<div class="control-group">
						<label class="control-label">SMTP服务器:</label>
						<div class="controls">
							<input class="input mr5" name="smtp" value="" type="text">
							<span class="must_red">*</span>
						</div>
					</div>
					<div class="control-group">
						<label class="control-label">邮箱登录帐号:</label>
						<div class="controls">
							<input class="input mr5" name="loginname" value="" type="text">
							<span class="must_red">*</span>
						</div>
					</div>
					<div class="control-group">
						<label class="control-label">邮箱登录密码:</label>
						<div class="controls">
							<input class="input mr5" name="password" value="" type="password">
							<span class="must_red">*</span>
						</div>
					</div>
					<div class="form-actions">
						<button type="submit" class="btn btn-primary btn_submit J_ajax_submit_btn">更新</button>
					</div>
				</fieldset>
			</form>