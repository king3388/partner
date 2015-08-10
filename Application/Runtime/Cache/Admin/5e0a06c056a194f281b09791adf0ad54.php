<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title>一家依-我的钱包</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta name="format-detection" content="telephone=no">
    <meta name="renderer" content="webkit">
    <meta http-equiv="Cache-Control" content="no-siteapp"/>
    <!--<script src="http://cdn.bootcss.com/jquery/2.1.3/jquery.min.js"></script>-->
    <script src="/Public/assets/js/jquery.min.js"></script>

    <link rel="alternate icon" type="image/png" href="/Public/assets/img/logo.png">
    <link rel="stylesheet" href="/Public/assets/css/amazeui.min.css"/>
    <link rel="stylesheet" href="/Public/assets/css/style.css"/>

</head>
<body class="job-list-container">
<div class="job-list-container">
    <div class="job-list-header">我的钱包</div>
    <div class="job-list-line ">
        <div class="job-list-info">
            <div class="my-under-line-title" id="base-commission-title" page="1">基础佣金：￥<?php echo ($basic_fee_sum); ?></div>
        </div>
        <div class="my-under-line-container">
            <div class="my-under-line-container-header am-g">
                <div class="am-u-sm-2">姓名</div>
                <div class="am-u-sm-3">入职日期</div>
                <div class="am-u-sm-3">上岗日期</div>
                <div class="am-u-sm-2">佣金1</div>
                <div class="am-u-sm-2">佣金2</div>
            </div>
            <div id="basic-commission-container">
                <?php if(is_array($basic_fee_info)): $i = 0; $__LIST__ = $basic_fee_info;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$B): $mod = ($i % 2 );++$i;?><div class="my-under-line-container-content am-g">
                        <div class="am-u-sm-2"><?php echo ($B["user_name"]); ?></div>
                        <div class="am-u-sm-3"><?php echo ($B["date_beigin_to_work"]); ?></div>
                        <div class="am-u-sm-3"><?php echo ($B["date_begin_on_work"]); ?></div>
                        <div class="am-u-sm-2"><?php echo ($B["fee1"]); ?></div>
                        <div class="am-u-sm-2"><?php echo ($B["fee2"]); ?></div>
                    </div><?php endforeach; endif; else: echo "" ;endif; ?>
            </div>

        </div>

        <div class="job-list-detail-btn">
            <button class="am-btn am-btn-success am-round">基础佣金</button>
        </div>
    </div>

    <div class="job-list-line ">
        <div class="job-list-info">
            <div class="my-under-line-title" id="extral-commission-title" page="1">额外佣金：￥<?php echo ($extral_fee_sum); ?></div>
        </div>
        <div class="my-under-line-container">
            <div class="my-under-line-container-header am-g">
                <div class="am-u-sm-3">姓名</div>
                <div class="am-u-sm-3">入职日期</div>
                <div class="am-u-sm-3">上岗日期</div>
                <div class="am-u-sm-3">佣金</div>
            </div>
            <div id="extral-commission-container">
                <?php if(is_array($extral_fee_info)): $i = 0; $__LIST__ = $extral_fee_info;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$B): $mod = ($i % 2 );++$i;?><div class="my-under-line-container-content am-g">
                        <div class="am-u-sm-3"><?php echo ($B["user_name"]); ?></div>
                        <div class="am-u-sm-3"><?php echo ($B["date_beigin_to_work"]); ?></div>
                        <div class="am-u-sm-3"><?php echo ($B["date_begin_on_work"]); ?></div>
                        <div class="am-u-sm-3"><?php echo ($B["fee"]); ?></div>
                    </div><?php endforeach; endif; else: echo "" ;endif; ?>
            </div>

        </div>

        <div class="job-list-detail-btn">
            <button class="am-btn am-btn-success am-round" >额外佣金</button>
        </div>
    </div>

    <div class="job-list-line ">
        <div class="job-list-info">
            <div class="my-under-line-title" id="payed-commission-title" page="1">已支付佣金：￥<?php echo ($payed_fee_sum); ?></div>
        </div>
        <div class="my-under-line-container">
            <div class="my-under-line-container-header am-g">
                <div class="am-u-sm-3">姓名</div>
                <div class="am-u-sm-3">入职日期</div>
                <div class="am-u-sm-3">上岗日期</div>
                <div class="am-u-sm-3">佣金</div>
            </div>
            <div id="payed-commission-container">
                <?php if(is_array($payed_fee_info)): $i = 0; $__LIST__ = $payed_fee_info;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$B): $mod = ($i % 2 );++$i;?><div class="my-under-line-container-content am-g">
                        <div class="am-u-sm-3"><?php echo ($B["user_name"]); ?></div>
                        <div class="am-u-sm-3"><?php echo ($B["date_beigin_to_work"]); ?></div>
                        <div class="am-u-sm-3"><?php echo ($B["date_begin_on_work"]); ?></div>
                        <div class="am-u-sm-3"><?php echo ($B["fee"]); ?></div>
                    </div><?php endforeach; endif; else: echo "" ;endif; ?>
            </div>

        </div>

        <div class="job-list-detail-btn">
            <button class="am-btn am-btn-success am-round" >已支付佣金</button>
        </div>
    </div>


</div>
<div class="job-list-footer">
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

</body>
</html>