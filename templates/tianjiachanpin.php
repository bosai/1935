 <?php include("chanpinzhongxin_nav.php") ?>
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
				<th width="100">所属分类:</th>
					<td><select name="cat_id" class="normal_select">
						<option value="0">请添加分类</option>
						</select>
					</td>
				</tr>
            <tr>
              <th width="100">标题</th>
              <td>
              	<input style="width:400px;" name="name"  class="input input_hd J_title_color"  onkeyup="strlen_verify(this, 'title_len', 160)" type="text">
              </td>
            </tr>
            <tr style="">
              <th width="100">简介</th>
              <td>
          <textarea id="editor" style="width:40%;height:200px;" name="introduct"></textarea>
 <script type="text/javascript" charset="utf-8">
          var editor = new baidu.editor.ui.Editor();
          editor.render('editor');  //editor为编辑器容器的id
      </script>
              </td>
            </tr>
            <tr>
              <th width="100">优势</th>
              <td>
              	<input style="width:400px;" name="advantage" class="input input_hd J_title_color"   type="text">
              </td>
            </tr>
			<tr>
              <th width="100">型号</th>
              <td>
              	<input style="width:400px;" name="model" class="input input_hd J_title_color" type="text">
              </td>
            </tr>
			<tr>
              <th width="100">是否推荐</th>
              <td>
				是：<input type="radio"  name="recommend" value="1">
				否：<input type="radio" checked name="recommend" value="0">
              </td>
            </tr>
			<tr>
              <th width="100">是否显示</th>
              <td>
				是：<input type="radio" checked name="is_display" value="1">
				否：<input type="radio"  name="is_display" value="0">
              </td>
            </tr>
			<tr>
              <th width="100">排序</th>
              <td>
              	<input style="width:400px;" name="pro_sort" class="input input_hd J_title_color" type="text">
              </td>
            </tr>
            <tr>
              <th width="100">相册图集</th>
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