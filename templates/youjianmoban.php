<?php include("shezhi_nav.php") ?>
<form style="" method="post" class="form-horizontal J_ajaxForm" action="/ThinkCMFX/index.php?g=Admin&amp;m=mailer&amp;a=active_post">
<div class="table-actions"><p>&nbsp;</p><p>&nbsp;</p></div>
	    <table style="" cellpadding="2" cellspacing="2" width="100%">
	        <tbody style="">
	        	
	        	<tr>
	        		<td>邮件标题</td>
	        		<td><input class="input mr5" name="options[title]" value="ThinkCMF邮件激活通知." type="text"></td>
	        	</tr>
	        	<tr style="">
	        		<td>邮件模版</td>
	        		<td>
          <textarea id="editor"> 
          </textarea>
 <script type="text/javascript" charset="utf-8">
          var editor = new baidu.editor.ui.Editor();
          editor.render('editor');  //editor为编辑器容器的id
      </script>
              </td>
	        	</tr>
			</tbody>
	    </table>
    	<div class="form-actions">
            <button type="submit" class="btn btn-primary btn_submit  J_ajax_submit_btn">确定</button>
       </div>
    <textarea style="display: none;" id="ueditor_textarea_options[template]" name="options[template]"></textarea></form>