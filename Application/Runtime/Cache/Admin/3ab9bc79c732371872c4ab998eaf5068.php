<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head lang="en">
  <meta charset="UTF-8">
  <title>一家依</title>
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
  <meta name="format-detection" content="telephone=no">
  <meta name="renderer" content="webkit">
  <meta http-equiv="Cache-Control" content="no-siteapp" />
  <script src="http://ttsstatic.qiniudn.com/jquery/jquery-2.1.1.min.js"></script>
  <script type="text/javascript" src="/Public/assets/js/md5.js"></script>
  <link rel="alternate icon" type="image/png" href="/Public/assets/img/logo.png">
  <link rel="stylesheet" href="/Public/assets/css/amazeui.min.css"/>
  <link rel="stylesheet" href="/Public/assets/css/common.css"/>
</head>
<body class="intorduction_body">
<div class="intorduction_body">
  <div class="header header_title" style="margin-bottom:10px;"> 
  <h2>登录一家依合伙人</h2>
  </div>
  <div class="am-g">
    <div class="am-u-lg-6 am-u-md-8 am-u-sm-centered">
      <hr>
      <br>
      <br>
      <form method="post" action="admin-index.html" class="am-form">
        <label for="email">请输用户名或手机号码</label>
        <input type="text" id="name" class="am-form-field am-round" placeholder="请输用户名或手机号码"/>
        <br>
        <label for="password">密码:</label>
        <input type="password" id="password" class="am-form-field am-round" placeholder="请输入登录密码："/>
        <br>

        <br />
      </form>
      <hr>
      <p style="text-align:center">© 2015 版权所有.一家依</p>
    </div>
  </div>
  <div data-am-widget="navbar" class="am-navbar am-cf am-navbar-default" >
    <div class="am-list-news-ft">
      <a class="am-btn am-btn-success am-round" id="login" style="color:#fff" href="###">登&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;录</a>
       <a class="am-btn am-btn-success am-round" id="reset" style="color:#fff" href="###">注&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;册</a>
    </div>
  </div>
</div>
</body>
<script type="text/javascript">

function reset_user(){
	window.location.href="regist/id/<?php echo ($id); ?>";//上级的id
}

function login_check(){
  var name = document.getElementById("name").value;
  var password = MD5(document.getElementById("password").value);
  if(name==''||password==""){
    alert("请完整填写信息");
  }
  else{
    $.post('/admin/login/login_check', {
      'name': name,
      'password':password,  
    }, function(response){
        if(response.msg=='ok'){
          window.location.href="/admin/<?php echo ($header_url); ?>";
        }
        else{
          alert('信息不对')
        }
    }, "json").always(function() {  });
    return false;
  }
}

$(document).ready(function() {
 
  });
document.addEventListener('WeixinJSBridgeReady', function onBridgeReady() {
  WeixinJSBridge.call('hideOptionMenu');
});
$("#login").on("click", login_check);
$("#reset").on("click", reset_user);
</script>
</html>