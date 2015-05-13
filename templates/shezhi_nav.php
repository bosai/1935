
		<ul class="nav nav-tabs" role="tablist">
        			<li><a id="wangzhanxinxi_nav">网站信息</a></li>
                    <li role="presentation" class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown"  role="button" aria-expanded="false">
                      个人信息 <span class="caret"></span>
                    </a>
                    <ul class="dropdown-menu" role="menu">
                       <li><a id="xiugaixinxi_nav">修改信息</a></li>
                       <li><a id="xiugaimima_nav">修改密码</a></li>
                    </ul>
                  </li>
                   
                   <li role="presentation" class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown"  role="button" aria-expanded="false">
                      邮件配置 <span class="caret"></span>
                    </a>
                    <ul class="dropdown-menu" role="menu">
                       <li><a id="smtppeizhi_nav">SMTP配置</a></li>
                       <li><a id="youjianmoban_nav">邮件模板</a></li> 
                    </ul>
                  </li>
                  <li><a id="qingchuhuancun_nav">清除缓存</a></li>
                  </ul>
<script src="assets/js/jquery-1.11.1.min.js"></script>
<script type="text/javascript">
$(document).ready(function(){
  //网站信息
  $("#wangzhanxinxi_nav").click(function(){
    $("#page-content").load("wangzhanxinxi.php",function(responseTxt,statusTxt,xhr){
      if(statusTxt=="error")
        alert("Error: "+xhr.status+": "+xhr.statusText);
    });
  });
  //清除缓存
  $("#qingchuhuancun_nav").click(function(){
    $("#page-content").load("qingchuhuancun.php",function(responseTxt,statusTxt,xhr){
      if(statusTxt=="error")
        alert("Error: "+xhr.status+": "+xhr.statusText);
    });
  });
  //个人信息——修改信息
  $("#xiugaixinxi_nav").click(function(){
    $("#page-content").load("xiugaixinxi.php",function(responseTxt,statusTxt,xhr){
      if(statusTxt=="error")
        alert("Error: "+xhr.status+": "+xhr.statusText);
    });
  });
  //个人信息--修改密码
  $("#xiugaimima_nav").click(function(){
    $("#page-content").load("xiugaimima.php",function(responseTxt,statusTxt,xhr){
      if(statusTxt=="error")
        alert("Error: "+xhr.status+": "+xhr.statusText);
    });
  });
   //邮箱配置--smtp配置
  $("#smtppeizhi_nav").click(function(){
    $("#page-content").load("smtppeizhi.php",function(responseTxt,statusTxt,xhr){
      if(statusTxt=="error")
        alert("Error: "+xhr.status+": "+xhr.statusText);
    });
  });
   //邮箱配置---邮件模板
  $("#youjianmoban_nav").click(function(){
    $("#page-content").load("youjianmoban.php",function(responseTxt,statusTxt,xhr){
      if(statusTxt=="error")
        alert("Error: "+xhr.status+": "+xhr.statusText);
    });
  });

	
  
});
</script>

		
		
