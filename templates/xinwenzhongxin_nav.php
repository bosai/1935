<ul class="nav nav-tabs" role="tablist">
                     <li><a id="xinwenliebiao_nav">新闻列表</a></li>
                   	 <li><a id="tianjiaxinwen_nav">添加新闻</a></li>
                     <li><a id="xinwenfenlei_nav">新闻分类</a></li>
                  </ul>
<script src="assets/js/jquery-1.11.1.min.js"></script>
<script type="text/javascript">
$(document).ready(function(){
  //新闻列表
  $("#xinwenliebiao_nav").click(function(){
    $("#page-content").load("xinwenliebiao.php",function(responseTxt,statusTxt,xhr){
      if(statusTxt=="error")
        alert("Error: "+xhr.status+": "+xhr.statusText);
    });
  });
  //添加新闻
  $("#tianjiaxinwen_nav").click(function(){
    $("#page-content").load("tianjiaxinwen.php",function(responseTxt,statusTxt,xhr){
      if(statusTxt=="error")
        alert("Error: "+xhr.status+": "+xhr.statusText);
    });
  });
//新闻分类
  $("#xinwenfenlei_nav").click(function(){
    $("#page-content").load("xinwenfenlei.php",function(responseTxt,statusTxt,xhr){
      if(statusTxt=="error")
        alert("Error: "+xhr.status+": "+xhr.statusText);
    });
  });


	
  
});
</script>