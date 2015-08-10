<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head lang="en">
  <meta charset="UTF-8">
  <title>一家依</title>
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
  <meta name="format-detection" content="telephone=no">
  <meta name="renderer" content="webkit">
  <meta http-equiv="Cache-Control" content="no-siteapp"/>
  <script src="http://ttsstatic.qiniudn.com/jquery/jquery-2.1.1.min.js"></script>
  <script type="text/javascript" src="/Public/assets/js/md5.js"></script>
  <link rel="alternate icon" type="image/png" href="/Public/assets/img/logo.png">
  <link rel="stylesheet" href="/Public/assets/css/amazeui.min.css"/>
  <link rel="stylesheet" href="/Public/assets/css/common.css"/>
</head>
<body>
  <div class="intorduction_body">
    <div class="header header_title" style="margin-bottom:10px;"> 
    <h2>注册成为一家依合伙人</h2>
    </div>
    <div class="am-g">
      <div class="am-u-lg-6 am-u-md-8 am-u-sm-centered">
        <hr>
        <br>
        <form method="post" action="admin-index.html" class="am-form">
          <label for="username">用户名:</label>
          <input type="text" id="name" onblur="check_user(this)" class="am-form-field am-round" placeholder="请输入用户名："/>
          <label style="color:blue;" id="useritp"></label>
          <br>
          <label for="password">密码:</label>
          <input type="password" id="password" class="am-form-field am-round" placeholder="请输入密码："/>
          <br>
          <label for="psd_use">确定密码:</label>
          <input type="password" id="pwd_check" onblur="check_pwd(this)" class="am-form-field am-round"  placeholder="再次输入密码："/>
          <label style="color:blue;" id="tip"></label>
          <br>
          <label for="phone">手机号码</label>
          <input type="tel" id="phone" class="am-form-field am-round" placeholder="请输入你的手机号码"/>
          <div id="codeHide" style="display:block"><button type="button" id="get_code" class="am-btn am-btn-default am-active">获取验证码</button></div>
            <lable style="color:blue;" id="tip_code"></lable>
          <br>
          <div id="checkCodeHide" style="display: none">
            <label for="password">验证码</label>
            <input type="text" id="code" class="am-form-field am-round" placeholder="请输入验证码(不区分大小写)"/>
          </div>
          <br>
          <br />
        </form>
        <hr>
        <p style="text-align:center">© 2015 版权所有 一家依</p>
      </div>
    </div>
    <div data-am-widget="navbar" class="am-navbar am-cf am-navbar-default" >
      <div class="am-list-news-ft">
        <a class="am-btn am-btn-success am-round" id="user_regist" style="color:#fff" href="###">注&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;册</a>
         <button class="am-btn am-btn-success am-round" id="login" style="color:#fff" href="###">返回登录</button>
      </div>
    </div>
  </div>
</body>
<script type="text/javascript">    
  function login(){
    window.location.href="/admin/index/login";
  }
  //检测是否为手机号码
  function isMobile(phonenumber){  
    var mobileReg =/^1[358]\d{9}$/;            
    if (!mobileReg.test(phonenumber)){  
        return false;  
    }else{  
        return true;  
    }  
  }

  function phone_code(){
    var phone =document.getElementById("phone").value;
    if(phone==''){
      tip_code.innerHTML = "手机号码不能为空";
    }
    else if(isMobile(phone)==''){
      tip_code.innerHTML = "请输入正确的手机号码";
    }
    else{
      $.post('/admin/login/phonecodesend', {
        'phone': phone

      }, function(response) {
        if (response.msg == 'ok') {
          tip_code.innerHTML = "验证码已发送到你手机";
            $("#codeHide").hide();
            $("#checkCodeHide").show();
        }else if(response.msg == 'pass'){
          tip_code.innerHTML = "你今天已经获取了5次验证码了，请明天再来";
        }else if(response.msg == 'time'){
          tip_code.innerHTML = "三分钟内不允许重新获取";
        }
        else if (response.msg == 'having') {
          tip_code.innerHTML = "你的手机号码已经注册了";
        };
      }, "json").always(function() {});
      return false;
    }
  }

  function check_pwd(){  
    var password = MD5(document.getElementById("password").value);
    var pwd_check = MD5(document.getElementById("pwd_check").value);    
    if(password == ''){
      tip.innerHTML = "密码不能为空";
    }
    else if(password==pwd_check){
      tip.innerHTML = "密码正确";
    } 
    else {
    tip.innerHTML = "你输入的密码与前面的不同，请重新输入";
    }
  }

  function check_user(){
    var name      = document.getElementById("name").value;
    if(name!=''){
      $.post('/admin/login/check_user', {
        'name': name
      }, function(response) {
        if (response.msg == 'ok') {
          useritp.innerHTML = "你的用户名可用";
        }
        else if(response.msg == 'having'){
          useritp.innerHTML = "改用户名已经注册了";
        }
        else{
        }
      }, "json").always(function() {});
      return false;
    }else{
      useritp.innerHTML = "用户名不能为空";
    }
  }

  function user_regist() {
    var name      = document.getElementById("name").value;    
    var phone     = document.getElementById("phone").value;    
    var code      = document.getElementById("code").value;
    var password  = MD5(document.getElementById("password").value);
    var pwd_check = MD5(document.getElementById("pwd_check").value);
    var parent    = <?php echo ($id); ?>;
    if(password!=pwd_check){
      alert('两次输入的密码不正确，请确认你输入的无误');
    }
    else if(code==''&&name==''&&phone==''&&password==''){
      alert('请完整填写信息');
    }else{
      $.post('/admin/login/user_regist', {
          'name': name,
          'phone': phone,
          'password':password,
          'parent':parent,
          'code':code,
        }, function(response) {
          if (response.msg == 'code_false') {
            alert('你的验证码不正确！');
            //window.location.href = "http://www.baidu.com";
          }
          else if (response.msg == 'ok') {
            window.location.href="/admin/usercenter/user_center";
          }
          else{
            alert('系统繁忙，请稍后再试');
          }
        }, "json").always(function() {});
        return false;
      }    
  }

  $(document).ready(function() {
  });
  document.addEventListener('WeixinJSBridgeReady', function onBridgeReady() {
    WeixinJSBridge.call('hideOptionMenu');
  });
  $("#user_regist").on("click", user_regist);
  $("#get_code").on("click", phone_code); 
  $("#login").on("click", login);
</script>
</html >