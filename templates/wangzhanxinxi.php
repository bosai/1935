  <?php include("shezhi_nav.php"); ?>
   <link rel="stylesheet" type="text/css" href="webupload/css/webuploader.css"/> 
                <link rel="stylesheet" type="text/css" href="webupload/examples/image-upload/style.css" />
                <script type="text/javascript" src="webupload/examples/image-upload/jquery.js"></script>
                <script type="text/javascript" src="webupload/dist/webuploader.js"></script>
                <script type="text/javascript" src="webupload/examples/image-upload/upload.js"></script>
         <form class="form-horizontal J_ajaxForm" method="post" action="/ThinkCMFX/index.php?g=Admin&amp;m=User&amp;a=userinfo_post">
                   <div class="table-actions"> <p>&nbsp;</p> <p>&nbsp;</p> </div>
        <fieldset class="btn_wrap">
          <div class="control-group">
            <label class="control-label" for="input01">公司名称:</label>
            <div class="controls">
              <input name="sic_company" value="" type="text">
            </div>
          </div>
		  <div class="control-group">
            <label class="control-label" for="input01">网站标题:</label>
            <div class="controls">
              <input name="sic_title" value="" type="text">
            </div>
          </div>
		  <div class="control-group">
            <label class="control-label" for="input01">网站关键字:</label>
            <div class="controls">
              <input name="sic_keyword" value="" type="text">&nbsp;&nbsp;&nbsp;&nbsp;<span style="color:red;">关键字用","隔开</span>
            </div>
          </div>
          <div class="control-group">
            <label class="control-label" for="input01">网站描述:</label>
            <div class="controls">
              <input name="sic_description" value="" type="text">&nbsp;&nbsp;&nbsp;&nbsp;<span style="color:red;">网站描述用","隔开</span>
            </div>
          </div>
          <div class="control-group">
            <label class="control-label" for="input01">联系方式:</label>
            <div class="controls">
              <input name="sic_phone" value="" type="text">
            </div>
          </div>
          <div class="control-group">
            <label class="control-label" for="input01">公司地址:</label>
            <div class="controls">
              <input name="sic_addres" value="" type="text">
            </div>
          </div>
          <div class="control-group">
            <label class="control-label" for="input01">邮箱地址:</label>
            <div class="controls">
              <input name="sic_email" value="" type="text">
            </div>
          </div>
          <div class="control-group">
            <label class="control-label" for="input01">网站底部:</label>
            <div class="controls">
             <td>
          <textarea id="editor" name="sic_bottom" style="width:40%;height:200px;"></textarea>
			<script type="text/javascript" charset="utf-8">
				  var editor = new baidu.editor.ui.Editor();
				  editor.render('editor');  //editor为编辑器容器的id
			</script>
              </td>
            </div>
          </div>
          <div class="control-group">
            <label class="control-label" for="input01">友情链接:</label>
            <div class="controls">
              <textarea name="sic_friends" style="width:40%;height:100px;"></textarea>&nbsp;&nbsp;&nbsp;<span style="color:#f00">地址和名称用","隔开，多个用";"隔开如 www.baidu.com,百度;www.sina.com,新浪</span>
            </div>
          </div>
          

          <div class="control-group">
            <label class="control-label" for="input01">公司LOGO:</label>
            <div class="controls">
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
               
            </div>
          </div>
          
         
          <div class="form-actions">
            <button type="submit" class="btn btn-primary btn_submit  J_ajax_submit_btn">提交</button>
          </div>
        </fieldset>
      </form>