<form name="myform" id="myform" action="/ThinkCMFX/index.php?g=&amp;m=AdminPost&amp;a=edit_post" method="post" class="form-horizontal J_ajaxForms" enctype="multipart/form-data" style="">
  
  <div class="col-auto" style="">
    <div class="table_full" style="">
      <table class="table table-bordered" style="">
            <tbody style="">
            <tr>
              <th width="100">标题 </th>
              <td>
              	<input type="hidden" name="post[id]" value="4">
              	<input type="text" style="width:400px;" name="post[post_title]" id="title" required="" value="bbb" class="input input_hd J_title_color" placeholder="请输入标题" onkeyup="strlen_verify(this, 'title_len', 160)">
              	<span class="must_red">*</span>
              </td>
            </tr>
            <tr>
              <th width="100">关键词</th>
              <td><input type="text" name="post[post_keywords]" id="keywords" style="width:400px" value="dada" class="input" placeholder="请输入关键字"> 多关键词之间用空格或者英文逗号隔开</td>
            </tr>
            
            <tr>
              <th width="100">文章来源</th>
              <td><input type="text" name="post[post_source]" id="source" value="da" style="width:400px" class="input" placeholder="请输入文章来源"></td>
            </tr>
            <tr>
              <th width="100">摘要 </th>
              <td><textarea name="post[post_excerpt]" id="description" required="" style="width:98%;height:50px;" placeholder="请填写摘要">asdda</textarea><span class="must_red">*</span></td>
            </tr>
            <tr style="">
              <th width="100">内容</th>
             <td>
          <textarea id="editor"> 
          </textarea>
 <script type="text/javascript" charset="utf-8">
          var editor = new baidu.editor.ui.Editor();
          editor.render('editor');  //editor为编辑器容器的id
      </script>
              </td>
            </tr>
            <tr>
              <th width="100">相册图集 </th>
              <td>
				
                   <div id="uploader">
                    <div class="queueList">
                        <div id="dndArea" class="placeholder">
                            <div id="filePicker"></div>
                            <p>或将照片拖到这里，单次最多可选300张</p>
                        </div>
                    </div>
                    <div class="statusBar" style="display:none;">
                        <div class="progress">
                            <span class="text">0%</span>
                            <span class="percentage"></span>
                        </div><div class="info"></div>
                        <div class="btns">
                            <div id="filePicker2"></div><div class="uploadBtn">开始上传</div>
                        </div>
                    </div>
                </div>
                <link rel="stylesheet" type="text/css" href="webupload/css/webuploader.css"/> 
                <link rel="stylesheet" type="text/css" href="webupload/examples/image-upload/style.css" />
                <script type="text/javascript" src="webupload/examples/image-upload/jquery.js"></script>
                <script type="text/javascript" src="webupload/dist/webuploader.js"></script>
                <script type="text/javascript" src="webupload/examples/image-upload/upload.js"></script>
          
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