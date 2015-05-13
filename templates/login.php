<html>
<head>
<meta charset="utf-8">
<title>后台管理系统</title>
<link rel="stylesheet" href="assets/css/bootstrap.paper.css" media="screen">
<style>
body{background:#438eb9}
*{font-family:SimHei}
.container{padding-top:10%;}
h3{color:#fff}
input,button{outline:none}
.jumbotron{background:#eee}
.big{font-size:14em;float:right;padding-top:70px;color:#ccc}
</style>

<script src="http://cdn.bootcss.com/jquery/1.11.2/jquery.min.js"></script>
<script type="text/javascript">
$(document).ready(function(){ //DOM的onload事件处理函数 
$("#button").click(function(){ //当按钮button被点击时的处理函数 
postdata(); //button被点击时执行postdata函数 
});
});
function postdata(){ //提交数据函数 
$.ajax({ //调用jquery的ajax方法 
type: "POST", //设置ajax方法提交数据的形式 
url: "login_ok.php", //把数据提交到ok.php 
data: "username="+$("#username").val()+"&password="+$("#password").val(), //输入框writer中的值作为提交的数据 
success: function(msg){ //提交成功后的回调，msg变量是ok.php输出的内容。 
$("#alert").html(msg); //如果有必要，可以把msg变量的值显示到某个DIV元素中 
} 
}); 
}

</script>
</head>
<body>
<div class="container">
      <div class="header clearfix">
        <h3>后台管理系统</h3>
      </div>

      <div class="jumbotron row">
       <div class="col-md-5">
	   <form>
	   <p>用户名</p>
		<p><input type="text" name="username" id="username" class="form-control b" data-container="body" data-toggle="popover" data-placement="top" data-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus."></p> 
		<p>密码</p>
		</p><input type="password" name="password" id="password" class="form-control"></p>
	   </form>
        <p><a class="btn btn-lg btn-success" href="#" id="button" role="button">立即登录</a></p>
		</div>
		<div class="col-md-7"><span class="glyphicon glyphicon-lock big"></span></div>
		<div class="clearfix"></div>
      </div>


<div class="modal fade" role="dialog" aria-labelledby="gridSystemModalLabel" id="pwd_wrong" aria-hidden="true" style="margin-top:10%;">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
        
        </div>
        <div class="modal-body">
          <div class="container-fluid">
            <div style="line-height:50px;text-align:center"><span class="glyphicon glyphicon-remove-sign" style="font-size:55px;color:#e51c23"></span> <span style="font-size:60px">登录失败</span></div>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">关闭</button>
        </div>
      </div>
    </div>
</div>

<div class="modal fade" role="dialog" aria-labelledby="gridSystemModalLabel" id="pwd_done" aria-hidden="true" style="margin-top:10%;">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
        
        </div>
        <div class="modal-body">
          <div class="container-fluid">
            <div style="line-height:50px;text-align:center"><span class="glyphicon glyphicon-ok-sign" style="font-size:55px;color:#4caf50"></span> <span style="font-size:60px">登录成功</span></div>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default disabled" data-dismiss="modal"><span id="time">4</span>秒后跳转</button>
        </div>
      </div>
    </div>
</div>

</div>
<div id="alert"></div>
<script src="http://cdn.bootcss.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>


</body>
</html>