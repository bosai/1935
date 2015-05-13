 <?php include("xinwenzhongxin_nav.php") ?>
                    <form style="" name="myform" id="myform" action="/ThinkCMFX/index.php?g=&amp;m=AdminPost&amp;a=edit_post" method="post" class="form-horizontal J_ajaxForms" enctype="multipart/form-data">
                    <div class="table-actions"><p>&nbsp;</p><p>&nbsp;</p></div>
  
  <div style="" class="col-auto">
    <div style="" class="table_full">
      <table style="" class="table table-bordered">
            <tbody style="">
            <tr>
              <th width="100">标题 </th>
              <td>
              	<input name="post[id]" value="1" type="hidden">
              	<input style="width:400px;" name="post[post_title]" id="title" required="" value="我问问" class="input input_hd J_title_color" placeholder="请输入标题" onkeyup="strlen_verify(this, 'title_len', 160)" type="text">
              	<span class="must_red">*</span>
              </td>
            </tr>
            <tr>
              <th width="100">关键词</th>
              <td><input name="post[post_keywords]" id="keywords" style="width:400px" value="22" class="input" placeholder="请输入关键字" type="text"> 多关键词之间用空格或者英文逗号隔开</td>
            </tr>
            
            <tr>
              <th width="100">文章来源</th>
              <td><input name="post[post_source]" id="source" value="22" style="width:400px" class="input" placeholder="请输入文章来源" type="text"></td>
            </tr>
            <tr>
              <th width="100">摘要 </th>
              <td><textarea name="post[post_excerpt]" id="description" required="" style="width:98%;height:50px;" placeholder="请填写摘要">22</textarea><span class="must_red">*</span></td>
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
				<fieldset class="blue pad-10">
		        <legend>图片列表</legend>
		        <ul id="photos" class="picList unstyled">
			        		        </ul>
				</fieldset>
				<a href="javascript:;" style="margin: 5px 0;" onclick="javascript:flashupload('albums_images', '图片上传','photos',change_images,'10,gif|jpg|jpeg|png|bmp,0','','','')" class="btn">选择图片 </a>
			  </td>
            </tr>
                        
        </tbody>
      </table>
    </div>
  </div>
  <div class="form-actions">
        <button class="btn btn-primary btn_submit J_ajax_submit_btn" type="submit">提交</button>
					<a class="btn" id="xinwenliebiao_fanhui">返回</a>
				</div>
			</form>
		</div>
	</div>
            <script src="assets/js/jquery-1.11.1.min.js"></script>
<script type="text/javascript">
$(document).ready(function(){
  //友情链接——修改
  $("#xinwenliebiao_fanhui").click(function(){
    $("#page-content").load("xinwenliebiao.php",function(responseTxt,statusTxt,xhr){
      if(statusTxt=="error")
        alert("Error: "+xhr.status+": "+xhr.statusText);
    });
  });



});
</script>