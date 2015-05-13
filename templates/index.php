<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8" />
		<title>控制台 - Bootstrap后台管理系统模版Ace下载</title>
		<meta name="keywords" content="Bootstrap模版,Bootstrap模版下载,Bootstrap教程,Bootstrap中文" />
		<meta name="description" content="站长素材提供Bootstrap模版,Bootstrap教程,Bootstrap中文翻译等相关Bootstrap插件下载" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<!-- basic styles -->
		<link href="assets/css/bootstrap.min.css" rel="stylesheet" />
		<link rel="stylesheet" href="assets/css/font-awesome.min.css" />
		<link rel="stylesheet" href="assets/css/ace.min.css" />
        <link rel="stylesheet" href="assets/css/theme.min.css" />
		<script src="assets/js/ace-extra.min.js"></script>
        <script src="assets/js/bootstrap.min.js"></script>
        
        
        
        <!--uedit start-->
		<script type="text/javascript" charset="utf-8" src="ueditor/ueditor.config.js"></script>
		<script type="text/javascript" charset="utf-8" src="ueditor/_examples/editor_api.js"></script>  
        <!--end -->
        <!--上传图片 start-->
       
    <!--上传图片 end-->
	</head>

	<body>
		<?php include("nav.php") ?>

		<div class="main-container" id="main-container">
			<script type="text/javascript">
				try{ace.settings.check('main-container' , 'fixed')}catch(e){}
			</script>

			<div class="main-container-inner">
				<a class="menu-toggler" id="menu-toggler" href="#">
					<span class="menu-text"></span>
				</a>

				<?php include("sidebar.php") ?>

				<div class="main-content">
					<?php include("breadcrumbs.php"); ?>
					<div id="page-content" class="page-content">
                    	<?php include("kongzhitai.php") ?>
                    </div>
					<!-- /.page-content -->
				</div><!-- /.main-content -->
			</div>

			<a href="#" id="btn-scroll-up" class="btn-scroll-up btn btn-sm btn-inverse">
				<i class="icon-double-angle-up icon-only bigger-110"></i>
			</a>
		</div>

</body>
</html>
<script src="assets/js/ace.min.js"></script>
<script src="assets/js/jquery-1.11.1.min.js"></script>
<script type="text/javascript">
$(document).ready(function(){
	//加载控制台
  $("#kongzhitai").click(function(){
    $("#page-content").load("kongzhitai.php",function(responseTxt,statusTxt,xhr){
      if(statusTxt=="success")      
      if(statusTxt=="error")
        alert("Error: "+xhr.status+": "+xhr.statusText);
    });
  });
  //网站信息
  $("#wangzhanxinxi").click(function(){
    $("#page-content").load("wangzhanxinxi.php",function(responseTxt,statusTxt,xhr){
      if(statusTxt=="error")
        alert("Error: "+xhr.status+": "+xhr.statusText);
    });
  });
  //清除缓存
  $("#qingchuhuancun").click(function(){
    $("#page-content").load("qingchuhuancun.php",function(responseTxt,statusTxt,xhr){
      if(statusTxt=="error")
        alert("Error: "+xhr.status+": "+xhr.statusText);
    });
  });
  //个人中心——修改信息
  $("#xiugaixinxi").click(function(){
    $("#page-content").load("xiugaixinxi.php",function(responseTxt,statusTxt,xhr){
      if(statusTxt=="error")
        alert("Error: "+xhr.status+": "+xhr.statusText);
    });
  });
  //个人中心——修改密码
  $("#xiugaimima").click(function(){
    $("#page-content").load("xiugaimima.php",function(responseTxt,statusTxt,xhr){
      if(statusTxt=="error")
        alert("Error: "+xhr.status+": "+xhr.statusText);
    });
  });
  //邮件配置——smtp配置
  $("#smtppeizhi").click(function(){
    $("#page-content").load("smtppeizhi.php",function(responseTxt,statusTxt,xhr){
      if(statusTxt=="error")
        alert("Error: "+xhr.status+": "+xhr.statusText);
    });
  });
  //邮件配置——邮件模板
  $("#youjianmoban").click(function(){
    $("#page-content").load("youjianmoban.php",function(responseTxt,statusTxt,xhr){
      if(statusTxt=="error")
        alert("Error: "+xhr.status+": "+xhr.statusText);
    });
  });
  
  
  //用户管理———用户组——本站用户
  $("#benzhanyonghu").click(function(){
    $("#page-content").load("benzhanyonghu.php",function(responseTxt,statusTxt,xhr){
      if(statusTxt=="error")
        alert("Error: "+xhr.status+": "+xhr.statusText);
    });
  });
  //用户管理———用户组——第三方用户主
  $("#disanfangyonghuzhu").click(function(){
    $("#page-content").load("disanfangyonghuzhu.php",function(responseTxt,statusTxt,xhr){
      if(statusTxt=="error")
        alert("Error: "+xhr.status+": "+xhr.statusText);
    });
  });
  //用户管理———管理组——角色管理
  $("#jiaoseguanli").click(function(){
    $("#page-content").load("jiaoseguanli.php",function(responseTxt,statusTxt,xhr){
      if(statusTxt=="error")
        alert("Error: "+xhr.status+": "+xhr.statusText);
    });
  });
  //用户管理———管理组——管理员
  $("#guanliyuan").click(function(){
    $("#page-content").load("guanliyuan.php",function(responseTxt,statusTxt,xhr){
      if(statusTxt=="error")
        alert("Error: "+xhr.status+": "+xhr.statusText);
    });
  });
  //菜单管理———前台菜单管理
  $("#qiantaicaidanguanli").click(function(){
    $("#page-content").load("qiantaicaidanguanli.php",function(responseTxt,statusTxt,xhr){
      if(statusTxt=="error")
        alert("Error: "+xhr.status+": "+xhr.statusText);
    });
  });
  //菜单管理———菜单分类
  $("#caidanfenlei").click(function(){
    $("#page-content").load("caidanfenlei.php",function(responseTxt,statusTxt,xhr){
      if(statusTxt=="error")
        alert("Error: "+xhr.status+": "+xhr.statusText);
    });
  });
  //内容管理———所有留言
  $("#suoyouliuyan").click(function(){
    $("#page-content").load("suoyouliuyan.php",function(responseTxt,statusTxt,xhr){
      if(statusTxt=="error")
        alert("Error: "+xhr.status+": "+xhr.statusText);
    });
  });
  //内容管理———评论管理
  $("#pinglunguanli").click(function(){
    $("#page-content").load("pinglunguanli.php",function(responseTxt,statusTxt,xhr){
      if(statusTxt=="error")
        alert("Error: "+xhr.status+": "+xhr.statusText);
    });
  });
  //内容管理———幻灯片
  $("#huandengpian").click(function(){
    $("#page-content").load("huandengpian.php",function(responseTxt,statusTxt,xhr){
      if(statusTxt=="error")
        alert("Error: "+xhr.status+": "+xhr.statusText);
    });
  });
  //内容管理———友情链接
  $("#youqinglianjie").click(function(){
    $("#page-content").load("youqinglianjie.php",function(responseTxt,statusTxt,xhr){
      if(statusTxt=="error")
        alert("Error: "+xhr.status+": "+xhr.statusText);
    });
  });
  //新闻中心———新闻列表
  $("#xinwenliebiao").click(function(){
    $("#page-content").load("xinwenliebiao.php",function(responseTxt,statusTxt,xhr){
      if(statusTxt=="error")
        alert("Error: "+xhr.status+": "+xhr.statusText);
    });
  });
  //新闻中心———添加新闻
  $("#tianjiaxinwen").click(function(){
    $("#page-content").load("tianjiaxinwen.php",function(responseTxt,statusTxt,xhr){
      if(statusTxt=="error")
        alert("Error: "+xhr.status+": "+xhr.statusText);
    });
  });
  //新闻中心———新闻分类
  $("#xinwenfenlei").click(function(){
    $("#page-content").load("xinwenfenlei.php",function(responseTxt,statusTxt,xhr){
      if(statusTxt=="error")
        alert("Error: "+xhr.status+": "+xhr.statusText);
    });
  });
  //产品中心———产品列表
  $("#chanpinliebiao").click(function(){
    $("#page-content").load("chanpinliebiao.php",function(responseTxt,statusTxt,xhr){
      if(statusTxt=="error")
        alert("Error: "+xhr.status+": "+xhr.statusText);
    });
  });
  //产品中心———添加产品
  $("#tianjiachanpin").click(function(){
    $("#page-content").load("tianjiachanpin.php",function(responseTxt,statusTxt,xhr){
      if(statusTxt=="error")
        alert("Error: "+xhr.status+": "+xhr.statusText);
    });
  });
  //产品中心——产品分类
  $("#chanpinfenlei").click(function(){
    $("#page-content").load("chanpinfenlei.php",function(responseTxt,statusTxt,xhr){
      if(statusTxt=="error")
        alert("Error: "+xhr.status+": "+xhr.statusText);
    });
  });
  //友情链接——修改
  $("#gongsijianjie").click(function(){
    $("#page-content").load("gongsijianjie.php",function(responseTxt,statusTxt,xhr){
      if(statusTxt=="error")
        alert("Error: "+xhr.status+": "+xhr.statusText);
    });
  });
  //1935-添加子菜单
  $("#tianjia1935zicaidan").click(function(){
    $("#page-content").load("tianjia1935zicaidan.php",function(responseTxt,statusTxt,xhr){
      if(statusTxt=="error")
        alert("Error: "+xhr.status+": "+xhr.statusText);
    });
  });
  //合作加盟---技术支持
  $("#jishuzhichi").click(function(){
    $("#page-content").load("jishuzhichi.php",function(responseTxt,statusTxt,xhr){
      if(statusTxt=="error")
        alert("Error: "+xhr.status+": "+xhr.statusText);
    });
  });
   //技术支持--资料下载
  $("#ziliaoxiazai").click(function(){
    $("#page-content").load("ziliaoxiazai.php",function(responseTxt,statusTxt,xhr){
      if(statusTxt=="error")
        alert("Error: "+xhr.status+": "+xhr.statusText);
    });
  });
  
	
  
});
</script>
<!--重新加载js-->
<script src="assets/js/bootstrap.min.js"></script>
<!--end-->
<!--   操作全选复选框事件-->
<script src="assets/js/quanxuan.js" type="text/javascript"></script>


