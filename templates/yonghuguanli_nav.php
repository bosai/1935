<ul class="nav nav-tabs" role="tablist">
        			<li><a id="benzhanyonghu_nav">本站用户</a></li>
                  	<li><a id="disanfangyonghuzhu_nav">第三方用户主</a></li>
                    <li><a id="jiaoseguanli_nav">角色管理</a></li>
                  	<li><a id="guanliyuan_nav">管理员</a></li>
                  </ul>
                  
<script src="assets/js/jquery-1.11.1.min.js"></script>
<script type="text/javascript">
$(document).ready(function(){
  //本站用户
  $("#benzhanyonghu_nav").click(function(){
    $("#page-content").load("benzhanyonghu.php",function(responseTxt,statusTxt,xhr){
      if(statusTxt=="error")
        alert("Error: "+xhr.status+": "+xhr.statusText);
    });
  });
  //第三方用户
  $("#disanfangyonghuzhu_nav").click(function(){
    $("#page-content").load("disanfangyonghuzhu.php",function(responseTxt,statusTxt,xhr){
      if(statusTxt=="error")
        alert("Error: "+xhr.status+": "+xhr.statusText);
    });
  });
  //管理员角色
  $("#jiaoseguanli_nav").click(function(){
    $("#page-content").load("jiaoseguanli.php",function(responseTxt,statusTxt,xhr){
      if(statusTxt=="error")
        alert("Error: "+xhr.status+": "+xhr.statusText);
    });
  });
 //本站用户
  $("#guanliyuan_nav").click(function(){
    $("#page-content").load("guanliyuan.php",function(responseTxt,statusTxt,xhr){
      if(statusTxt=="error")
        alert("Error: "+xhr.status+": "+xhr.statusText);
    });
  });
	
  
});
</script>