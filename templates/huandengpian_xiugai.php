<form name="myform" id="myform" action="/ThinkCMFX/index.php?g=Admin&amp;m=slide&amp;a=edit_post" method="post" class="form-horizontal J_ajaxForms" enctype="multipart/form-data">
  <div class="col-auto">
    <div class="table_full">
      <table class="table table-bordered">
            <tbody><tr>
              <th width="100">栏目</th>
              <td>
              	<select name="slide_cid" class="normal_select">
                  <option value="0">默认分类</option>
                                  </select>
              </td>
            </tr>
            <tr>
              <th width="100">幻灯片名称</th>
              <td>
              	<input style="width:400px;" name="slide_name" id="title" value="111" class="input input_hd J_title_color" placeholder="请输入幻灯片名称" onkeyup="strlen_verify(this, 'title_len', 160)" type="text">
              	<span class="must_red">*</span>
              	<input name="slide_id" value="1" type="hidden">
              </td>
            </tr>
             
             <tr>
              <th width="100">链接地址：</th>
              <td>
              <input name="slide_url" value="111" style="width:400px" class="input  input_hd J_title_color" type="text">
              </td>
            </tr>
            <tr>
              <th width="100">描述</th>
              <td><input name="slide_des" value="111" style="width:400px" class="input  input_hd J_title_color" type="text"></td>
            </tr>
             <tr>
              <th width="100">幻灯片内容</th>
              <td>
              	<textarea name="slide_content" id="description" style="width:98%;height:200px;">11</textarea>
              </td>
            </tr>
            <tr>
              <th width="100">图片：</th>
              <td>
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
                <link rel="stylesheet" type="text/css" href="webupload/css/webuploader.css"/> 
                <link rel="stylesheet" type="text/css" href="webupload/examples/image-upload/style.css" />
                <script type="text/javascript" src="webupload/examples/image-upload/jquery.js"></script>
                <script type="text/javascript" src="webupload/dist/webuploader.js"></script>
                <script type="text/javascript" src="webupload/examples/image-upload/upload.js"></script>
            </div>
              </td>
            </tr>
                        
        </tbody>
      </table>
    </div>
  </div>
  <div class="form-actions">
           <button class="btn btn-primary btn_submit J_ajax_submit_btn" type="submit">提交</button>
      		<a class="btn" id="huandengpian_fanhui">返回</a>
      </div>
 </form>
 <script src="assets/js/jquery-1.11.1.min.js"></script>
<script type="text/javascript">
$(document).ready(function(){
  //所有留言
  $("#huandengpian_fanhui").click(function(){
    $("#page-content").load("huandengpian.php",function(responseTxt,statusTxt,xhr){
      if(statusTxt=="error")
        alert("Error: "+xhr.status+": "+xhr.statusText);
    });
  });
	
  
});
</script>