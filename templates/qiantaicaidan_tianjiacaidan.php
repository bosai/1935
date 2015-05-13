
<form method="post" class="form-horizontal J_ajaxForm" action="#">
				<fieldset>
					<div class="control-group">
						<label class="control-label">菜单名称:</label>
						<div class="controls">
							<input type="text" class="input" name="name" id="outlink_input" value="">
						</div>
					</div>
					<div class="control-group">
						<label class="control-label">地址:</label>
						<div class="controls">
							<input type="text" class="input" name="website" id="outlink_input" value="">
						</div>
					</div>
					<div class="control-group">
						<label class="control-label">排序:</label>
						<div class="controls">
							<input type="text" class="input" name="mod_sort" id="outlink_input" value="" width="10">&nbsp;&nbsp;&nbsp;<span style="color:#f00">数字越大越靠前</span>
						</div>
					</div>
					<div class="control-group">
						<label class="control-label">是否显示:</label>
						<div class="controls">
							是：<input type="radio" name="is_display" value="1" checked>
							否：<input type="radio" name="is_display" value="0">
						</div>
					</div>
				</fieldset>
				<div class="form-actions">
					<button type="submit" class="btn btn-primary btn_submit J_ajax_submit_btn">添加</button>
					<a class="btn" id="qiantaicaidan_fanhui">返回</a>
				</div>
			</form>
            <script src="assets/js/jquery-1.11.1.min.js"></script>
<script type="text/javascript">
$(document).ready(function(){
  //所有留言
  $("#qiantaicaidan_fanhui").click(function(){
    $("#page-content").load("qiantaicaidanguanli.php",function(responseTxt,statusTxt,xhr){
      if(statusTxt=="error")
        alert("Error: "+xhr.status+": "+xhr.statusText);
    });
  });
	
  
});
</script>