<form name="myform" id="myform" action="/ThinkCMFX/index.php?g=Admin&amp;m=slide&amp;a=add_post" method="post" class="form-horizontal J_ajaxForms" enctype="multipart/form-data">

  <div class="col-auto">
    <div class="table_full">
      <table class="table table-bordered">
            <tbody>
            <tr>
              <th width="100">所属分类</th>
              <td>
              	<input type="text" style="width:400px;" name="cla_name" id="title" value="" class="input input_hd J_title_color" placeholder="请输入幻灯片名称" onkeyup="strlen_verify(this, 'title_len', 160)">
              	<span class="must_red">*</span>
              </td>
            </tr>
             <tr>
              <th width="100">链接地址：</th>
              <td>
              <input type="text" name="path" value="" style="width:400px" class="input  input_hd J_title_color">
              </td>
            </tr>
             <tr>
              <th width="100">幻灯片内容</th>
              <td>
              	
              	<textarea name="font" id="description" style="width:40%;height:200px;"></textarea>
              </td>
            </tr>
            <tr>
              <th width="100">图片</th>
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
 </form>