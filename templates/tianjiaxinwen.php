 <?php include("xinwenzhongxin_nav.php") ?>
 <link rel="stylesheet" type="text/css" href="webupload/css/webuploader.css"/> 
                <link rel="stylesheet" type="text/css" href="webupload/examples/image-upload/style.css" />
                <script type="text/javascript" src="webupload/examples/image-upload/jquery.js"></script>
                <script type="text/javascript" src="webupload/dist/webuploader.js"></script>
                <script type="text/javascript" src="webupload/examples/image-upload/upload.js"></script>
                    <form id="form" method="post" target="_blank">
                    <div class="table-actions"><p>&nbsp;</p><p>&nbsp;</p></div>
  
  <div style="" class="col-auto">
    <div style="" class="table_full">
      <table style="" class="table table-bordered">
            <tbody style="">
            <tr>
              <th width="100">所属分类 </th>
              <td>
              	<select name="cat_id" id="navcid_select" class="normal_select">
					<option value="1">主导航</option>
				</select>
              </td>
            </tr>
            <tr>
              <th width="100">标题 </th>
              <td>
              	<input style="width:400px;" name="new_title" id="title" required="" value="" class="input input_hd J_title_color" placeholder="请输入标题" onkeyup="strlen_verify(this, 'title_len', 160)" type="text">
              </td>
            </tr>
			<tr style="">
              <th width="100">内容</th>
              <td>
          <textarea style="width:50%;height:400px" id="editor" name="new_content"></textarea>
				<script type="text/javascript" charset="utf-8">
			  var editor = new baidu.editor.ui.Editor();
			  editor.render('editor');  //editor为编辑器容器的id
			</script>
              </td>
            </tr>
			<tr>
              <th width="100">是否显示</th>
              <td>是：<input type="radio" name="is_display" checked value="1">否：<input type="radio" name="is_display" value="0"></td>
            </tr>
			<tr>
              <th width="100">是否推荐到首页</th>
              <td>是：<input type="radio" name="recommend"  value="1">否：<input type="radio" name="recommend" checked value="0"></td>
            </tr>
			<tr>
              <th width="100">排序</th>
              <td><input type="text" name="new_sort" ></td>
            </tr>
            <tr>
              <th width="100">发布人</th>
              <td><input name="new_people" id="source" value="" class="input" type="text"></td>
            </tr>

            <tr>
              <th width="100">新闻标图</th>
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
                
            </div>
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
 