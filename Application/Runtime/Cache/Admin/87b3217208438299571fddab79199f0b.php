<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<!-- 一家依首页 -->
<html>
<head lang="en">
  <meta charset="UTF-8">
  <title>一家依合伙人</title>
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
  <meta name="format-detection" content="telephone=no">
  <meta name="renderer" content="webkit">
  <meta http-equiv="Cache-Control" content="no-siteapp"/>
  <script src="http://ttsstatic.qiniudn.com/jquery/jquery-2.1.1.min.js"></script>
  <script src="/Public/assets/js/amazeui.js"></script>
  <link rel="alternate icon" type="image/png" href="/Public/assets/img/logo.png">
  <link rel="stylesheet" href="/Public/assets/css/amazeui.min.css"/>
  <link rel="stylesheet" href="/Public/assets/css/common.css"/>
  <link rel="stylesheet" href="/Public/assets/css/style.css"/>
</head>
<body>

<div class="header"> 
  <img class="yijiayi_img_width" src="/Public/assets/img/yijianyi.jpg">
</div>
<div class="yijiayi_width">
  <div class="am-g">
    <div>   
      <hr>
      <div class="am-panel-group" id="accordion">
        <div class="am-panel am-panel-default">
          <div class="am-panel-hd" style="background-color:filter:alpha(opacity=50); opacity: 0.50;">
            <h4 class="am-panel-title" data-am-collapse="{parent: '#accordion', target: '#do-not-say-1'}">
              <p style="text-align:center;">合伙人详情<span class="am-icon-caret-down"></span></p>
            </h4>
          </div>
          <div id="do-not-say-1" class="am-panel-collapse am-collapse ">
            <div class="am-panel-bd">
              <p style="text-indent:2em">
                “一家依合伙人”是一家依养老服务公司推出的新型招聘平台，采用的是推荐人者共建、推荐人推广的新型招聘模式，以下简称为平台。申请参与建设与推广“一家依合伙人”的推荐人，我们称之为“一家依合伙人”，以下简称合伙人。</p>
              <p style="text-indent:2em">
                移动互联网时代，用户口碑是最具价值的传播媒介。而一家依合伙人平台的传播正是依赖于合伙人的口碑传播。一家依合伙人本质是微营销（全员营销），人人均可向朋友推荐一家依公司招聘职位，获取佣金。</p>
              <dl>
                <dt>推荐特权：</dt>
                <dd><p style="text-indent:2em">只有合伙人才有资格在合伙人平台推荐应聘者。</p></dd>
                <dt>分享特权：</dt>
                <dd><p style="text-indent:2em">成为合伙人后，可以吸收普通应聘者成为自己的粉丝，可以把自己的推荐特权分享给他们使用，让他们也享受合伙人佣金；</p></dd>
                <dt>佣金特权:</dt>
                <dd><p style="text-indent:2em">合作人在平台上推荐应聘者，合伙人将根据推荐成功应聘人数分得佣金。如何合伙人吸收的粉丝也在平台上推荐应聘者，合伙人将根据推荐成功应聘人数分得额外佣金。</p></dd>
              </dl>

            </div>
          </div>
        </div>
      </div>
      <div><a href="/admin/index/regist/id/<?php echo session('authed');?>">成为合伙人</a></div>
      <hr>
    </div>
  </div>
</div>
<div>
  <div style="margin:0 0 20px 0"></div>
  <p style="text-align:center">© 2015 版权所有 一家依</p>
</div>
<div data-am-widget="navbar" class="am-navbar am-cf am-navbar-default "
     id="">
    <ul class="am-navbar-nav am-cf am-avg-sm-4">

        <li>
            <a href="/admin/index/yijiayi/id/<?php echo session('id');?>">
                <span class="am-icon-home"></span>
                <span class="am-navbar-label">首页</span>
            </a>
        </li>

        <li>
            <a href="/admin/job/index/id/<?php echo session('id');?>">
                <span class="am-icon-briefcase"></span>
                <span class="am-navbar-label">职位</span>
            </a>
        </li>

        <li>
            <a href="/admin/usercenter/user_center" class="">
                <span class="am-icon-user"></span>
                <span class="am-navbar-label">我</span>
            </a>
        </li>
    </ul>
</div>
</body>
<script>
    $current_url = window.location.pathname;
</script>
</html >