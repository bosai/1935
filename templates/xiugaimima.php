 <?php include("shezhi_nav.php"); ?>
                    <form class="form-horizontal J_ajaxForm" method="post" action="/ThinkCMFX/index.php?g=Admin&amp;m=setting&amp;a=password_post">
                    <div class="table-actions"> <p>&nbsp;</p> <p>&nbsp;</p> </div>
        <fieldset>
          <div class="control-group">
            <label class="control-label" for="input01">原始密码:</label>
            <div class="controls">
              <input class="input-xlarge" id="input01" name="old_password" type="password">
            </div>
          </div>
          <div class="control-group">
            <label class="control-label" for="input01">新密码:</label>
            <div class="controls">
              <input class="input-xlarge" id="input01" name="password" type="password">
            </div>
          </div>
          <div class="control-group">
            <label class="control-label" for="input01">重复新密码:</label>
            <div class="controls">
              <input class="input-xlarge" id="input01" name="repassword" type="password">
            </div>
          </div>
          <div class="form-actions">
            <button type="submit" class="btn btn-primary btn_submit  J_ajax_submit_btn">更新</button>
          </div>
        </fieldset>
      </form>