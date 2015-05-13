<form method="post" class="form-horizontal J_ajaxForm" action="/ThinkCMFX/index.php?g=Admin&amp;m=nav&amp;a=add_post">
<div class="table-actions"><p>&nbsp;</p><p>&nbsp;</p></div>
				<fieldset>
					<div class="control-group">
						<label class="control-label">标签:</label>
						<div class="controls">
							<input class="input" name="label" value="" type="text"><span class="must_red">*</span>
						</div>
					</div>
					<div class="control-group">
						<label class="control-label">地址:</label>
						<div class="controls">
							<input checked="checked" name="href" id="outlink" type="radio">
							<input class="input" id="outlink_input" value="http://" type="text">
							<input checked="checked" name="href" id="selecturl" type="radio">
							<select id="selecthref" class="normal_select">
								<option disabled="" checked="">默认</option>
								<option value="home">首页</option>
								<option disabled="">文章分类</option>
								<option value="a:2:{s:6:&quot;action&quot;;s:17:&quot;Portal/List/index&quot;;s:5:&quot;param&quot;;a:1:{s:2:&quot;id&quot;;s:1:&quot;1&quot;;}}">列表演示</option><option value="a:2:{s:6:&quot;action&quot;;s:17:&quot;Portal/List/index&quot;;s:5:&quot;param&quot;;a:1:{s:2:&quot;id&quot;;s:1:&quot;2&quot;;}}">瀑布流</option><option value="a:2:{s:6:&quot;action&quot;;s:17:&quot;Portal/List/index&quot;;s:5:&quot;param&quot;;a:1:{s:2:&quot;id&quot;;s:1:&quot;3&quot;;}}">阿百川</option><option disabled="">页面</option>
								<option value="a:2:{s:6:&quot;action&quot;;s:17:&quot;Portal/Page/index&quot;;s:5:&quot;param&quot;;a:1:{s:2:&quot;id&quot;;s:1:&quot;2&quot;;}}">关于我们</option>							</select>
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