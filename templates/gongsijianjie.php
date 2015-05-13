   <link rel="stylesheet" type="text/css" href="webupload/css/webuploader.css"/> 
                <script type="text/javascript" src="webupload/examples/image-upload/jquery.js"></script>
                <script type="text/javascript" src="webupload/dist/webuploader.js"></script>
                <script type="text/javascript" src="webupload/examples/image-upload/upload.js"></script>
<form name="myform" id="myform" action="/ThinkCMFX/index.php?g=&amp;m=AdminPost&amp;a=edit_post" method="post" class="form-horizontal J_ajaxForms" enctype="multipart/form-data" style="">
  
  <div class="col-auto" style="">
    <div class="table_full" style="">
      <table class="table table-bordered" style="">
            <tbody style="">
			<tr>
              <td>
			   <h3>修改</h3>
          <textarea id="editor" name="out_content" style="width:50%;height:400px;"></textarea>
			<script type="text/javascript" charset="utf-8">
				  var editor = new baidu.editor.ui.Editor();
				  editor.render('editor');  //editor为编辑器容器的id
			</script>
			<input type="hidden" value="1" name="about_id">
              </td>
            </tr>

                        
        </tbody>
      </table>
    </div>
  </div>
  <div class="form-actions">
        <button class="btn btn-primary btn_submit J_ajax_submit_btn" type="submit">提交</button>
     
  </div>
 <textarea name="post[post_content]" id="ueditor_textarea_post[post_content]" style="display: none;"></textarea></form>