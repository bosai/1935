 <?php include("shezhi_nav.php"); ?>
    				<form class="form-horizontal J_ajaxForm" method="post" action="/ThinkCMFX/index.php?g=Admin&amp;m=User&amp;a=userinfo_post">
                    <div class="table-actions"> <p>&nbsp;</p> <p>&nbsp;</p> </div>
        <fieldset class="btn_wrap">
          <div class="control-group">
            <label class="control-label" for="input01">昵称:</label>
            <div class="controls">
              <input class="input" name="id" value="1" type="hidden">
              <input name="user_nicename" value="admin" type="text">
            </div>
          </div>
          <div class="control-group">
            <label class="control-label" for="input01">性别:</label>
            <div class="controls">
              <select name="sex">
              	              						<option value="0" selected="">保密</option>					<option value="1">男</option>					<option value="2">女</option>              </select>
            </div>
          </div>
          <div class="control-group">
				<label class="control-label" for="input-birthday">生日</label>
				<div class="controls">
					<input class="J_date date" id="input-birthday" placeholder="2013-01-04" name="birthday" value="" type="text">
				</div>
			</div>
			<div class="control-group">
				<label class="control-label" for="input-user_url">个人网址</label>
				<div class="controls">
					<input id="input-user_url" placeholder="http://thinkcmf.com" name="user_url" value="" type="text">
				</div>
			</div>
			<div class="control-group">
				<label class="control-label" for="input-signature">个性签名</label>
				<div class="controls">
					<textarea id="input-signature" placeholder="个性签名" name="signature"></textarea>
				</div>
			</div>
          <div class="form-actions">
            <button type="submit" class="btn btn-primary btn_submit  J_ajax_submit_btn">更新</button>
          </div>
        </fieldset>
      </form>