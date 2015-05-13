<div class="wrap jj">

		<div class="common-form">
			<form method="post" class="form-horizontal J_ajaxForm" action="/ThinkCMFX/index.php?g=Admin&amp;m=navcat&amp;a=edit_post">
            <div class="table-actions"><p>&nbsp;</p><p>&nbsp;</p></div>
				<fieldset>
				<div>
				 <label class="control-label">所属分类:</label>
				  <div>
					<select name="cat_id" id="navcid_select" class="normal_select">
						<option value="1">公司新闻</option>
					</select>
				  </div>
				</div>
					<div class="control-group">
						<label class="control-label">分类名称:</label>
						<div class="controls">
							<input class="input" name="name"  type="text">
						</div>
					</div>
					<div class="control-group">
						<label class="control-label">备注:</label>
						<div class="controls">
							<textarea name="remark" rows="5" cols="57">主导航</textarea>
						</div>
					</div>
					<div class="control-group">
						<label class="control-label">主菜单:</label>
						<div class="controls">
														<input name="active" value="1" checked="" type="checkbox">
						</div>
					</div>
				</fieldset>
				<div class="form-actions">
					<button type="submit" class="btn btn-primary btn_submit  J_ajax_submit_btn">更新</button>
						<a class="btn" id="qiantaicaidan_fanhui">返回</a>
				</div>
			</form>
            <script src="assets/js/jquery-1.11.1.min.js"></script>
<script type="text/javascript">
$(document).ready(function(){
	  //菜单分类
  $("#caidanfenlei_tianjiafenlei").click(function(){
    $("#page-content").load("caidanfenlei_tianjiafenlei.php",function(responseTxt,statusTxt,xhr){
      if(statusTxt=="error")
        alert("Error: "+xhr.status+": "+xhr.statusText);
    });
  });
  //所有留言
  $("#qiantaicaidan_fanhui").click(function(){
    $("#page-content").load("caidanfenlei.php",function(responseTxt,statusTxt,xhr){
      if(statusTxt=="error")
        alert("Error: "+xhr.status+": "+xhr.statusText);
    });
  });
	
  
});
</script>