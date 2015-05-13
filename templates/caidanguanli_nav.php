<ul class="nav nav-tabs" role="tablist">
        			<li><a id="qiantaicaidanguanli_nav">前台菜单管理</a></li>
                  	<li><a id="caidanfenlei_nav">菜单分类</a></li>      
                  </ul>
<script src="assets/js/jquery-1.11.1.min.js"></script>
<script type="text/javascript">
$(document).ready(function(){
  //前台菜单管理
  $("#qiantaicaidanguanli_nav").click(function(){
    $("#page-content").load("qiantaicaidanguanli.php",function(responseTxt,statusTxt,xhr){
      if(statusTxt=="error")
        alert("Error: "+xhr.status+": "+xhr.statusText);
    });
  });
  //菜单分类
  $("#caidanfenlei_nav").click(function(){
    $("#page-content").load("caidanfenlei.php",function(responseTxt,statusTxt,xhr){
      if(statusTxt=="error")
        alert("Error: "+xhr.status+": "+xhr.statusText);
    });
  });

	
  
});
</script>