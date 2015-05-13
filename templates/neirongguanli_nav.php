<ul class="nav nav-tabs" role="tablist">
                     <li><a id="suoyouliuyan_nav">所有留言</a></li>
                   	 <li><a id="pinglunguanli_nav">评论管理</a></li>
                     <li><a id="huandengpian_nav">幻灯片</a></li>
                   
                       
                  </ul>
<script src="assets/js/jquery-1.11.1.min.js"></script>
<script type="text/javascript">
$(document).ready(function(){
  //所有留言
  $("#suoyouliuyan_nav").click(function(){
    $("#page-content").load("suoyouliuyan.php",function(responseTxt,statusTxt,xhr){
      if(statusTxt=="error")
        alert("Error: "+xhr.status+": "+xhr.statusText);
    });
  });
  //评论管理
  $("#pinglunguanli_nav").click(function(){
    $("#page-content").load("pinglunguanli.php",function(responseTxt,statusTxt,xhr){
      if(statusTxt=="error")
        alert("Error: "+xhr.status+": "+xhr.statusText);
    });
  });
//幻灯片
  $("#huandengpian_nav").click(function(){
    $("#page-content").load("huandengpian.php",function(responseTxt,statusTxt,xhr){
      if(statusTxt=="error")
        alert("Error: "+xhr.status+": "+xhr.statusText);
    });
  });

	
  
});
</script>