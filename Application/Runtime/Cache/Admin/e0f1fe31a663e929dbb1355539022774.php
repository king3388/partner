<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<!-- 简历简介页面 -->
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

  <link rel="alternate icon" type="image/png" href="/Public/assets/img/logo.png">
  <link rel="stylesheet" href="/Public/assets/css/amazeui.min.css"/>
  <link rel="stylesheet" href="/Public/assets/css/common.css"/>
</head>
<body>

<div class="intorduction_body">
  <div class="header header_title"> 
  <h2>招聘<?php echo ($data["job"]); ?>信息</h2>
  </div>
  <div class="intorduction_content">
    <div data-am-widget="list_news" class="am-list-news am-list-news-default">
      <div class="am-list-news-bd">
        <dl>
          <dt>发布时间:</dt><dd style="text-indent:4em"><?php echo ($data["time"]); ?></dd>
          <dt>招聘人数:</dt><dd style="text-indent:4em"><?php echo ($data["work_place"]); ?></dd>  
          <dt>工作地区:</dt><dd style="text-indent:4em"><?php echo ($data["number"]); ?></dd>
          <dt>工资范围:</dt><dd style="text-indent:4em"><?php echo ($data["salary"]); ?></dd>
          <dt>学历要求:</dt><dd style="text-indent:4em"><?php echo ($data["degree"]); ?></dd>
          <dt>工作经验:</dt><dd style="text-indent:4em"><?php echo ($data["experience"]); ?></dd>
          <pre>
              <dt>工作范围描述:</dt><dd style="text-indent:2em"><?php echo ($data["describe"]); ?></dd>
              <dt>技能要求:</dt><dd style="text-indent:2em"><?php echo ($data["need"]); ?></dd>
          </pre>
        </dl>
      </div>
      <div data-am-widget="navbar" class="am-navbar am-cf am-navbar-default" >
        <div class="am-list-news-ft">
          <a class="am-btn am-btn-success am-round" id="employment" style="color:#fff " href="###">我要应聘</a>
          <a class="am-btn am-btn-success am-round" id="recommend" style="color:#fff" href="###">我要推荐</a>
        </div>
      </div>
      <div><p style="text-align:center">© 2015 版权所有 一家依</p>
      </div>
    </div>
  </div>
</div>
</body>
<script type="text/javascript">
function employment(){  
    $.post('/admin/job/resume', {
        'resume_id'  :<?php echo ($data["id"]); ?>,
    }, function(response){
        if(response.msg=='need_login'){
          window.location.href="/admin/index/login/?pre_url=job/introduction/pid/<?php echo ($data["id"]); ?>";
        }
        else if(response.msg=='need_create'){
          window.location.href="/admin/job/create_resume/pid/<?php echo ($data["id"]); ?>";
        }else{
          window.location.href="/admin/job/look_resume/pid/<?php echo ($data["id"]); ?>";
        }
    }, "json").always(function() {  });
    return false;
 }
function recommend(){
  window.location.href="/admin/job/pushsomeone/pid/<?php echo ($data["id"]); ?>";
}

document.addEventListener('WeixinJSBridgeReady', function onBridgeReady() {
  WeixinJSBridge.call('hideOptionMenu');
});
$(document).ready(function() {
 
  });

$("#employment").on("click", employment);
$("#recommend").on("click", recommend);
</script>
</html>