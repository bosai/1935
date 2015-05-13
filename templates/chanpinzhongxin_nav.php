<ul class="nav nav-tabs" role="tablist">
                     <li><a id="chanpinliebiao_nav">产品列表</a></li>
                   	 <li><a id="tianjiachanpin_nav">添加产品</a></li>
                     <li><a id="chanpinfenlei_nav">产品分类</a></li>
                  </ul>
<script type="text/javascript">
$(document).ready(function(){
  //产品列表
  $("#chanpinliebiao_nav").click(function(){
    $("#page-content").load("chanpinliebiao.php",function(responseTxt,statusTxt,xhr){
      if(statusTxt=="error")
        alert("Error: "+xhr.status+": "+xhr.statusText);
    });
  });
  //添加产品
  $("#tianjiachanpin_nav").click(function(){
    $("#page-content").load("tianjiachanpin.php",function(responseTxt,statusTxt,xhr){
      if(statusTxt=="error")
        alert("Error: "+xhr.status+": "+xhr.statusText);
    });
  });
//产品分类
  $("#chanpinfenlei_nav").click(function(){
    $("#page-content").load("chanpinfenlei.php",function(responseTxt,statusTxt,xhr){
      if(statusTxt=="error")
        alert("Error: "+xhr.status+": "+xhr.statusText);
    });
  });


	
  
});
</script>